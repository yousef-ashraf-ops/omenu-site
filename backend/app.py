"""
O-menu Flask Backend
====================
Run:  python app.py
API base: http://localhost:5000

Endpoints
---------
POST /api/contact   — save contact form submission
GET  /api/contact   — list all submissions (admin)
POST /api/order     — save cart order
GET  /api/orders    — list all orders (admin)
GET  /api/health    — health check
"""

from flask import Flask, request, jsonify
from flask_cors import CORS
import sqlite3, os, datetime

app  = Flask(__name__)
CORS(app)                       # allow requests from the PHP frontend

DB_PATH = os.path.join(os.path.dirname(__file__), 'omenu.db')

# ── Database bootstrap ────────────────────────────────────────────────────────

def get_db():
    conn = sqlite3.connect(DB_PATH)
    conn.row_factory = sqlite3.Row
    return conn

def init_db():
    with get_db() as conn:
        conn.executescript("""
            CREATE TABLE IF NOT EXISTS contacts (
                id            INTEGER PRIMARY KEY AUTOINCREMENT,
                name          TEXT    NOT NULL,
                phone         TEXT,
                email         TEXT,
                business_type TEXT,
                message       TEXT,
                created_at    TEXT    NOT NULL
            );

            CREATE TABLE IF NOT EXISTS orders (
                id              INTEGER PRIMARY KEY AUTOINCREMENT,
                customer_name   TEXT,
                customer_phone  TEXT,
                items_json      TEXT    NOT NULL,
                total           REAL    NOT NULL DEFAULT 0,
                created_at      TEXT    NOT NULL
            );
        """)

init_db()

# ── Helpers ───────────────────────────────────────────────────────────────────

def now_iso():
    return datetime.datetime.utcnow().isoformat(timespec='seconds') + 'Z'

def row_to_dict(row):
    return dict(row)

# ── Routes ────────────────────────────────────────────────────────────────────

@app.route('/api/health')
def health():
    return jsonify(ok=True, message='O-menu backend is running')


@app.route('/api/contact', methods=['POST'])
def contact_submit():
    data = request.get_json(silent=True) or {}

    name = (data.get('name') or '').strip()
    if not name:
        return jsonify(ok=False, error='Name is required'), 400

    with get_db() as conn:
        conn.execute(
            "INSERT INTO contacts (name, phone, email, business_type, message, created_at) "
            "VALUES (?, ?, ?, ?, ?, ?)",
            (name,
             data.get('phone', ''),
             data.get('email', ''),
             data.get('business_type', ''),
             data.get('message', ''),
             now_iso())
        )
    return jsonify(ok=True, message='Contact saved')


@app.route('/api/contact', methods=['GET'])
def contact_list():
    with get_db() as conn:
        rows = conn.execute("SELECT * FROM contacts ORDER BY id DESC").fetchall()
    return jsonify(ok=True, data=[row_to_dict(r) for r in rows])


@app.route('/api/order', methods=['POST'])
def order_submit():
    import json as _json
    data  = request.get_json(silent=True) or {}
    items = data.get('items') or []

    if not items:
        return jsonify(ok=False, error='Cart is empty'), 400

    # Recalculate total server-side (never trust the client total)
    total = sum(float(i.get('price', 0)) * int(i.get('qty', 1)) for i in items)

    with get_db() as conn:
        conn.execute(
            "INSERT INTO orders (customer_name, customer_phone, items_json, total, created_at) "
            "VALUES (?, ?, ?, ?, ?)",
            (data.get('customer_name', ''),
             data.get('customer_phone', ''),
             _json.dumps(items, ensure_ascii=False),
             total,
             now_iso())
        )
    return jsonify(ok=True, message='Order received', total=total)


@app.route('/api/orders', methods=['GET'])
def orders_list():
    with get_db() as conn:
        rows = conn.execute("SELECT * FROM orders ORDER BY id DESC").fetchall()
    return jsonify(ok=True, data=[row_to_dict(r) for r in rows])


# ── Entry point ───────────────────────────────────────────────────────────────

if __name__ == '__main__':
    app.run(debug=True, port=5000)
