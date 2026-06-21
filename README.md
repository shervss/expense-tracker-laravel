# 💰 Personal Expense Tracker (Laravel)

A simple Personal Expense Tracker built with Laravel that helps users manage their finances by recording income and expenses, categorizing transactions, and generating monthly financial reports.

## ✨ Features

* 🔐 User Authentication (Register/Login)
* ➕ Add Income and Expense Transactions
* 🏷️ Categorize Transactions
* 📋 View Transaction History
* 📊 Monthly Financial Reports
* 💰 Dashboard Summary
* 🔎 Transaction Search
* 📄 Pagination Support
* 🌙 Dark Mode Friendly Interface

---

## 📸 Preview

### Dashboard

![image alt](https://github.com/shervss/expense-tracker-laravel/blob/main/preview/preview1_main_dashboard.png?raw=true)

### Add Transaction

![image alt](https://github.com/shervss/expense-tracker-laravel/blob/main/preview/preview2_transactions_create.png?raw=true)

### Transactions List

![image alt](<img width="1919" height="752" alt="image" src="https://github.com/user-attachments/assets/6df4c8b2-b94e-4af5-ac52-b113f66ffb47" />)

### Monthly Reports

![image alt](https://github.com/shervss/expense-tracker-laravel/blob/main/preview/preview4_reports_monthly.png?raw=true)

---

## 🛠️ Requirements

Before running the project, make sure you have:

* PHP 8.2 or later
* Composer
* Node.js and npm
* MySQL
* Git

---

## 🚀 Installation Guide

### 1. Clone the Repository

```bash
git clone https://github.com/shervss/expense-tracker-laravel.git
```

### 2. Navigate to the Project Folder

```bash
cd expense-tracker-laravel
```

### 3. Install PHP Dependencies

```bash
composer install
```

### 4. Install Node Dependencies

```bash
npm install
```

### 5. Create Environment File

```bash
copy .env.example .env
```

or on Linux/macOS:

```bash
cp .env.example .env
```

### 6. Generate Application Key

```bash
php artisan key:generate
```

### 7. Create MySQL Database

Open phpMyAdmin and create a database named:

```text
expense_tracker
```

### 8. Configure Database Connection

Open `.env` and update:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=expense_tracker
DB_USERNAME=root
DB_PASSWORD=
```

Update the values if your MySQL configuration is different.

### 9. Run Database Migrations

```bash
php artisan migrate
```

### 10. Seed Default Categories

```bash
php artisan db:seed
```

This will create the following categories:

* Food
* Transportation
* Bills
* Entertainment
* Salary
* Others

### 11. Build Frontend Assets

```bash
npm run dev
```

### 12. Start the Laravel Server

```bash
php artisan serve
```

Open:

```text
http://127.0.0.1:8000
```

---

## 👤 Using the Application

### Register an Account

1. Open the application.
2. Click **Register**.
3. Create your account.
4. Login.

### Add a Transaction

1. Open Dashboard.
2. Click **Add Transaction**.
3. Select:

   * Transaction Type (Income or Expense)
   * Category
   * Amount
   * Description
   * Date
4. Click **Save Transaction**.

### View Transactions

1. Click **View Transactions**.
2. Browse all recorded transactions.
3. Use the search feature to find specific entries.

### View Monthly Report

1. Click **Monthly Reports**.
2. View:

   * Total Income
   * Total Expenses
   * Current Balance

---

## 📂 Project Structure

```text
app/
├── Http/Controllers
│   ├── TransactionController.php
│   └── ReportController.php

app/Models
├── Transaction.php
└── Category.php

resources/views
├── dashboard.blade.php
├── transactions/
└── reports/

database
├── migrations/
└── seeders/
```

---

## 🧰 Built With

* Laravel 12
* PHP 8.2
* MySQL
* Blade Templates
* Tailwind CSS

---

## 👨‍💻 Author

Shervin Marco Mangulabnan

---

## 📄 License

This project is for educational and portfolio purposes.
