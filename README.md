<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

# Laravel Employee Dashboard With Login System

A Laravel-based Employee Dashboard With Login System with user authentication and a protected employee dashboard. Built using Laravel's authentication middleware, this system allows you to manage employee data securely.

---

## 🚀 Features

- 🔐 **Login System** with Laravel Auth Middleware
- 👨‍💼 **Employee Dashboard** (Protected after login)
- ➕ Add Employee
- ✏️ Edit Employee
- 🗑️ Delete Employee
- 📄 View Employee Details
- 📸 Upload Profile Image for Employee
- 🚪 Secure Logout

---

## 🛠️ Tech Stack

- Laravel (PHP Framework)
- Blade Templates
- Bootstrap 5 (for UI)
- MySQL (or any DB)
- Auth Middleware

---

## 🧪 Installation Steps

```bash
# Clone the repo
git clone https://github.com/your-username/laravel-employee-dashboard.git

cd laravel-employee-dashboard

# Install dependencies
composer install

# Copy .env file and configure DB
cp .env.example .env

# Generate key
php artisan key:generate

# Run migrations
php artisan migrate

# Serve the project
php artisan serve
