# 📝 PHP To-Do List (CRUD)

A fully functional task management web application built from scratch to master CRUD operations (Create, Read, Update, Delete) and database interactions.

## ✨ Features
- **Create:** Add new tasks effortlessly.
- **Read:** View a list of all tasks, ordered by the newest first.
- **Update:** Edit existing task names using a dedicated update form.
- **Delete:** Remove tasks securely via URL parameters.

## 🛠️ Technologies Used
- **Frontend:** HTML5, CSS3 (Custom Dark Theme), Bootstrap 5.
- **Backend:** PHP (Procedural).
- **Database:** MySQL (`todo_db`).

## 🚀 How to Run Locally
1. Clone this repository or download the folder.
2. Start your local server (e.g., XAMPP, WAMP).
3. Import the database:
   - Create a database named `todo_db`.
   - Create a `tasks` table with the following columns:
     - `id` (INT, Primary Key, Auto Increment)
     - `task_name` (VARCHAR 255)
     - `status` (VARCHAR 50, Default: 'Pending')
     - `created_at` (TIMESTAMP, Default: CURRENT_TIMESTAMP)
4. Update the `config.php` file if your database credentials differ from the standard `root` with no password.
5. Open the project folder in your browser (`http://localhost/.../01-PHP-TodoList-CRUD`).

---
*First milestone in my Full Stack journey! 🚀*
