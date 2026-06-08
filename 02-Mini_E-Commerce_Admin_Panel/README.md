# 🛒 Mini E-Commerce Admin Panel (PHP CRUD)

A simple, responsive, and fully functional Content Management System (CMS) for managing store products. Built from scratch as part of my **Full Stack Web Development Journey**.

## ✨ Features

- **Create (Add):** Add new products with details (Name, Price, Quantity, Category).
- **Read (View):** Display all products in a clean, responsive table.
- **Update (Edit):** Edit existing product details (auto-fetches and displays old data).
- **Delete (Remove):** Safely remove products from the database with a JavaScript confirmation alert.
- **UI/UX:** Fully styled using **Bootstrap 5** for a modern, mobile-friendly interface.

## 🛠️ Technologies Used

- **Backend:** PHP (MySQLi)
- **Database:** MySQL
- **Frontend:** HTML5, Bootstrap 5 CDN

## 📁 Project Structure

├── config.php # Database connection setup
├── index.php # Main dashboard (Create & Read operations)
├── update.php # Edit product details form (Update operation)
└── delete.php # Delete product logic (Delete operation)


## 🚀 How to Run the Project (Local Setup)

1. **Install XAMPP** (or any local server environment).
2. **Start Apache and MySQL** from the XAMPP Control Panel.
3. Clone this repository or copy the project folder into your `htdocs` directory:
   `C:\xampp\htdocs\Mini-Store-CRUD`
4. Open **phpMyAdmin** (`http://localhost/phpmyadmin/`) and create a new database named `store_db`.
5. Run the following SQL query to create the `products` table:

```sql
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    quantity INT NOT NULL,
    category VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
