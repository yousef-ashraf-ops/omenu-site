# O-menu — Restaurant Operations Website

> Bilingual (Arabic / English) restaurant management site with cart checkout and a Python REST API backend.

O-menu is a multi-page website built for a UAE-based restaurant operations company. It handles customer-facing pages, a service package browser, a shopping cart with checkout, and a contact form — all backed by a Python Flask API that stores orders and enquiries in a SQLite database.

---

## ✨ Features

- **Bilingual** — full Arabic/English toggle, language persists as you navigate
- **Multi-page layout** — Home, Why Us, Services, Packages, FAQ, Contact
- **Cart & checkout** — add packages to cart, submit order; server recalculates total securely
- **Contact form** — validated on both client and server, stored in SQLite
- **REST API** — Flask backend exposes `/api/contact`, `/api/order`, `/api/contacts`, `/api/orders`
- **Admin data access** — view all submitted contacts and orders via API endpoints
- **Input validation** — server-side validation on all form submissions (never trusts browser data)

---

## 🛠️ Tech Stack

| Layer | Technology |
|---|---|
| Frontend | PHP, HTML, CSS, JavaScript |
| Backend | Python, Flask, Flask-CORS |
| Database | SQLite (via Python `sqlite3`) |
| API | REST (JSON) |
| Server | XAMPP (Apache) + Python |

---

## 📁 Project Structure

```
omenu-site/
├── index.php          # Home page
├── why-us.php
├── services.php
├── packages.php
├── faq.php
├── contact.php
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── lang.php       # All bilingual text strings
├── assets/
│   ├── css/style.css
│   └── img/
└── backend/
    ├── app.py         # Flask API
    ├── requirements.txt
    └── contacts.db    # SQLite database (auto-created)
```

---

## 🚀 Getting Started

### Requirements
- XAMPP (Apache)
- PHP 8+
- Python 3.10+

### Setup

```bash
# 1. Clone the repo
git clone https://github.com/yousef-ashraf-ops/omenu-site.git

# 2. Move frontend to XAMPP htdocs
cp -r omenu-site /path/to/xampp/htdocs/

# 3. Start the Python backend
cd omenu-site/backend
pip install -r requirements.txt
python app.py
# API runs at http://localhost:5000

# 4. Start Apache in XAMPP

# 5. Open in browser
http://localhost/omenu-site/
```

---

## 🔌 API Endpoints

| Method | Endpoint | Description |
|---|---|---|
| POST | `/api/contact` | Submit a contact enquiry |
| GET | `/api/contacts` | List all contact submissions |
| POST | `/api/order` | Submit a cart order |
| GET | `/api/orders` | List all orders |
| GET | `/api/health` | Health check |

---

## 👨‍💻 Author

**Yousef Ashraf** — [github.com/yousef-ashraf-ops](https://github.com/yousef-ashraf-ops)
