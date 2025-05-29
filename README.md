# 🧾 Inventory Management System

A complete web-based **Inventory Management System** designed to streamline the operations of small to medium businesses. It manages suppliers, products, customers, orders, and shipment tracking using a clean frontend, efficient backend, and a robust relational database.

---

## 🚀 Features

- 📦 **Product Management**: Add, view, and manage product inventory
- 🤝 **Supplier Management**: Store and update supplier details
- 🧍 **Customer Management**: Manage customer data
- 🛒 **Order Processing**: Record and track customer orders
- 🚚 **Shipment Tracking**: Monitor shipment status and estimated arrival

---

## 🛠️ Tech Stack

| Layer       | Technology         |
|-------------|--------------------|
| Frontend    | HTML5, CSS3        |
| Backend     | PHP (XAMPP)        |
| Database    | MySQL              |
| Server      | Apache (via XAMPP) |

---

## 🗃️ ER Diagram Overview
![ER Diagram](https://github.com/user-attachments/assets/fc7ef5de-c143-40f1-b6e4-6b1009601cff)
---

## MySql Workbench
Connect with the Port that has not been usen (ex port:3306)

- Install **[XAMPP](https://www.apachefriends.org/)**
- Ensure **Apache** and **MySQL** modules are running

##  SQL Setup

1. Open `phpMyAdmin` (http://localhost/phpmyadmin)
2. Create a new database: `inventory_db`
3. Import the file from `/sql/inventory_db.sql`

Run the Application with the index.html file or using the http://localhost/InventoryProject/index.html and add the data it will be add successfully in the database.
## Feature improvements

-Automatically update stock when sales or purchases are made.
-Use AJAX or WebSockets for real-time data refresh.
-Stock Alerts / Low Stock Notifications
-Alert users when product quantity falls below a set threshold.
-Can be sent via email, SMS, or in-app notification.

