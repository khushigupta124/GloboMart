# 🌐 GloboMart Web Application
---

## 📝 Overview
**GloboMart** is a full-stack e-commerce web application built with **PHP**, **MySQL**, **JavaScript**, **HTML**, and **CSS**. It showcases modern web development skills such as authentication, dynamic product management, and payment integration—ideal for roles involving PHP, MySQL, WordPress, and related technologies.

---

## 🚀 Features
- 🔐 **User Authentication:** Registration, login, and logout using PHP sessions.
- 🛒 **Product Catalog:** Dynamic product listing with detail pages using `products.json` and MySQL.
- 🧑‍💼 **Admin Dashboard:** Secure CRUD interface to manage product inventory.
- 💳 **Shopping Cart & Checkout:** Real-time cart management with Razorpay payment gateway integration.
- 📱 **Responsive Design:** Clean, mobile-friendly UI built with HTML/CSS/JS.
- 🧩 **Modular Code:** Maintainable codebase following standard web dev practices.

---

## 🛠 Tech Stack
- **Backend:** PHP (auth, admin, product handling)
- **Frontend:** HTML5, CSS3, JavaScript (dynamic cart/UI logic)
- **Database:** JSON and MySQL (for user and product data)
- **Payment Gateway:** Razorpay (in test/demo mode)

---

## 📁 File Structure
```bash
📦 GloboMart/
├── final_homepage.html         # Main landing page
├── final_login_page.html       # Login page
├── register.php                # User registration logic
├── login.php                   # User login handling
├── logout.php                  # Logout logic
├── products.php                # Product catalog display
├── product_detail.php          # Single product detail view
├── admin.php                   # Admin panel with CRUD
├── products.json               # Product data (if not using MySQL)
├── final_homepage.css          # Styling file
├── app.js                      # Frontend interactivity (cart, etc.)
├── images/                     # Folder for product images
