
# SIA Development Web Dashboard

This project is a custom web-based dashboard developed for **SIA Development** to manage projects, teams, and users through a secure and responsive PHP application.

## 🔧 Features

- Project and team management (Add/Edit/Delete)
- Modular and reusable PHP components
- Basic login system (temporary)
- Email functionality integration
- Responsive frontend using custom assets

## ⚠️ Important Note

> **Login System Warning:**
>
> This project includes a **temporary and simplified login system** used strictly for testing and demonstration purposes.  
> The **original secure authentication system was not included** due to confidentiality and authorization restrictions from the client (**SIA Development**).  
> Please do **NOT** use the included login code in production environments.

## 📁 Project Structure

```
.
├── assets/
├── dashboard/
│   ├── assets/
│   ├── conn/ (auth.php, conn.php, sessions.php, etc.)
│   ├── CRUD scripts (add/edit/delete)
│   └── common-pages/
├── SIA/
├── sia_dashboard.sql
├── error_log
├── prepros.config
```

## ✅ Requirements

- PHP 7.x or later
- MySQL or MariaDB
- Web server (Apache, Nginx, etc.)

## 🚀 Installation & Usage

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/sia-dashboard.git
   ```
2. Import the database:
   - File: `sia_dashboard.sql`
3. Update your database credentials in:
   ```
   dashboard/conn/conn.php
   ```
4. Launch using your local server (e.g., XAMPP, MAMP).

## 📩 Contact

Developed by: Mostafa Nassar  
Email: mostafahosam254@gmail.com  
LinkedIn: https://www.linkedin.com/in/mostafa-hosam-270894212/

---

> *This system was built exclusively for SIA Development and is intended for internal use and demonstration only.*
