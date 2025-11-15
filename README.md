# Infinite LearnSpace 🎓✨  
A PHP & MySQL powered e-learning platform where users can explore categorized courses, purchase them securely, and access learning content.

---

## 🚀 Features

### 👥 User Roles
- **Guest Users**
  - Browse courses
  - View details
- **Registered Users**
  - Login & purchase courses
  - Watch purchased course lectures
  - Add reviews
  - Download purchase receipts
- **Admin Panel**
  - Manage courses, categories, users, lectures
  - View orders & system data

---

## 📌 Functional Highlights

✔ User Registration & Authentication  
✔ Categorized Courses & Filtering  
✔ Cart-free Direct Purchase System  
✔ Course Content Delivery (Videos / PDFs)  
✔ Review System  
✔ Contact Form  
✔ Secure Admin Dashboard  
✔ Receipt Generation for Purchases  

---

## 🗄 Database Information

**Database Name:** `course_purchase`

Includes tables:
- `admin`
- `users`
- `categories`
- `courses`
- `lectures`
- `contact`
- `orders`
- `reviews`

📌 Database export included:  
➡ `course_purchase.sql`

---

## 🧩 Tech Stack

| Area | Technology |
|------|------------|
| Frontend | HTML5, CSS3, Bootstrap |
| Backend | PHP |
| Database | MySQL (XAMPP) |
| Version Control | Git & GitHub |

---

## ⚙️ Installation & Setup Guide

### 📥 Requirements
- XAMPP installed
- Apache & MySQL enabled

### 🔧 Steps to Run Locally

1️⃣ Clone/download this repository into:
```
C:/xampp/htdocs/
```

2️⃣ Import the database:
- Open phpMyAdmin  
- Create DB: **course_purchase**
- Import file: `course_purchase.sql`

3️⃣ Create and update your DB credentials file:
Create a file named `config.php` and add:

```php
<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "course_purchase";
?>
```

➡ **Note:** This file is not included in repo for security reasons.

4️⃣ Run in browser:
```
http://localhost/infinite-learnspace/
```

---

## 🔐 Security
The following files are excluded for safety:
```
config.php
*.env
```
✔ Prevents exposing database credentials on GitHub

---

## 📝 Future Enhancements
- Online payment integration
- Email alerts & OTP login
- Wishlist / Save for later
- Enhanced responsive UI
- Progress tracking for users

---

## 🤝 Contribution
Pull requests are welcome.  
For major changes, open an issue to discuss ideas first.

---

## ⭐ Support
If you like this project, please ⭐ the repository to support it!

---

## 📬 Contact
For contributions or queries:  
📧 Email: *add your email here*
