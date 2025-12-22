📄 PRODUCT REQUIREMENTS DOCUMENT (PRD)
Product Name

Spendly (nama dummy, gampang diganti)

Product Type

Web-based Expense Tracker Application

Target Platform

Web (Desktop & Mobile Responsive)

Backend: Laravel

Frontend: Blade + Tailwind CSS

1. 🎯 Problem Statement

Banyak individu dan freelancer:

Tidak mencatat pengeluaran harian

Sulit melihat total bulanan

Tidak tahu uang bocor di kategori apa

Solusi existing:

Terlalu kompleks

Tidak fleksibel

Tidak sesuai kebutuhan personal

2. 💡 Solution Overview

Aplikasi web sederhana untuk:

Mencatat pemasukan & pengeluaran

Mengelompokkan berdasarkan kategori

Melihat ringkasan keuangan bulanan

Digunakan cepat, tanpa ribet

3. 👤 Target Users
   Primary User

Freelancer

Karyawan

Mahasiswa tingkat akhir

User Characteristics

Mobile-first

Tidak mau setup rumit

Fokus ke daily usage

4. 🔑 Key Goals

Pencatatan transaksi < 10 detik

Dashboard langsung informatif

Data aman (auth-based)

Mudah dikembangkan ke mobile app (API-ready)

5. 🧩 Core Features (MVP)
   5.1 Authentication

Register

Login

Logout

Session-based auth

5.2 Transaction Management

User dapat:

Menambah transaksi

Mengedit transaksi

Menghapus transaksi

Field:

Amount

Type (income / expense)

Category

Description

Date

5.3 Category Management

Default categories (Food, Transport, Bills)

Custom category per user

Edit & delete category

5.4 Dashboard Summary

Menampilkan:

Total income bulan ini

Total expense bulan ini

Balance

Expense per category

5.5 Transaction List

List transaksi

Filter by:

Date range

Category

Type

Pagination

6. 🚫 Out of Scope (Untuk MVP)

Multi-currency

Budgeting limit

Export PDF

Grafik kompleks

Reminder

(Bisa jadi upsell versi v2)

7. 🧱 Data Model (High Level)
   User

id

name

email

password

Category

id

user_id

name

type (income/expense)

Transaction

id

user_id

category_id

amount

type

description

date

8. 🔗 Relationships

User → hasMany Categories

User → hasMany Transactions

Category → hasMany Transactions

9. 🌐 API Endpoints (Draft)
   Auth
   POST /login
   POST /register
   POST /logout

Categories
GET /categories
POST /categories
PUT /categories/{id}
DELETE /categories/{id}

Transactions
GET /transactions
POST /transactions
PUT /transactions/{id}
DELETE /transactions/{id}

Dashboard
GET /dashboard/summary

10. 🧪 Validation Rules (Example)

Amount > 0

Category belongs to logged-in user

Date cannot be future date (optional)

11. 🔐 Security Requirements

Auth middleware

User-based data isolation

CSRF protection

Validation on all inputs

12. 🧑‍🎨 UI / UX Principles

Mobile-first

Minimal form

Clear CTA

No unnecessary animation

13. ⚙️ Non-Functional Requirements

Response time < 500ms

Pagination on list

Error message jelas & konsisten

Clean code structure

14. 🚀 Future Enhancements

Monthly budget

Chart (bar/pie)

Export CSV

API public version

Mobile app integration

15. 📦 Success Metrics

User bisa input transaksi < 10 detik

Dashboard langsung terbaca

Zero data leak antar user

16. 🧠 Why This Project Is Perfect for You

Karena:

Banyak CRUD & JOIN

Cocok buat Laravel

Mudah dikembangkan

Real-world & jualan-able

Bisa jadi backend API untuk Android app kamu nanti 😏

Kalau kamu mau, next aku bisa:
1️⃣ Turunin PRD ini jadi DB schema + migration
2️⃣ Buatin API contract lengkap (request/response)
3️⃣ Breakdown task jadi To-do developer style (week plan)
4️⃣ Simulasikan ini sebagai project client (estimasi harga)

Pilih langkah berikutnya, kita lanjut 🚀

convert PRDnya dalam bentuk file markdown

Siap. Ini PRD Expense Tracker versi Markdown (.md) yang siap kamu taruh di repo GitHub, Notion, atau kirim ke calon client.
Strukturnya clean, profesional, dan developer-friendly.

Kamu bisa langsung copy–paste ke file bernama misalnya:

PRD-Expense-Tracker.md

# 📄 Product Requirements Document (PRD)

## Expense Tracker Application

---

## 1. Product Overview

### Product Name

**Spendly** (working title)

### Product Type

Web-based Expense Tracker Application

### Target Platform

-   Web (Responsive: Desktop & Mobile)
-   Backend: Laravel
-   Frontend: Blade + Tailwind CSS

---

## 2. Problem Statement

Many individuals such as freelancers, employees, and students:

-   Do not consistently track daily expenses
-   Struggle to understand monthly spending patterns
-   Lack visibility into where their money is going

Existing solutions are often:

-   Overly complex
-   Not customizable
-   Misaligned with simple personal finance needs

---

## 3. Solution Overview

A lightweight web application that allows users to:

-   Record income and expenses quickly
-   Categorize transactions
-   View monthly financial summaries
-   Access data securely from any device

---

## 4. Target Users

### Primary Users

-   Freelancers
-   Employees
-   Final-year students

### User Characteristics

-   Mobile-first usage
-   Prefer simplicity over complexity
-   Need fast data entry and clear summaries

---

## 5. Product Goals

-   Transaction input in under 10 seconds
-   Clear and readable dashboard summary
-   Secure, user-isolated data
-   API-ready for future mobile app integration

---

## 6. Core Features (MVP)

### 6.1 Authentication

-   User registration
-   User login
-   User logout
-   Session-based authentication

---

### 6.2 Transaction Management

Users can:

-   Create a transaction
-   Edit a transaction
-   Delete a transaction

Transaction fields:

-   Amount
-   Type (income / expense)
-   Category
-   Description
-   Date

---

### 6.3 Category Management

-   Default system categories (e.g. Food, Transport, Bills)
-   User-defined custom categories
-   Edit and delete categories

---

### 6.4 Dashboard Summary

Displays:

-   Total income (current month)
-   Total expense (current month)
-   Current balance
-   Expense breakdown by category

---

### 6.5 Transaction List

-   Paginated transaction list
-   Filter by:
    -   Date range
    -   Category
    -   Transaction type

---

## 7. Out of Scope (MVP)

The following features are excluded from the initial release:

-   Multi-currency support
-   Budget limits
-   PDF export
-   Advanced charts
-   Reminder or notification system

---

## 8. Data Model (High-Level)

### User

-   id
-   name
-   email
-   password

### Category

-   id
-   user_id
-   name
-   type (income / expense)

### Transaction

-   id
-   user_id
-   category_id
-   amount
-   type
-   description
-   date

---

## 9. Data Relationships

-   User has many Categories
-   User has many Transactions
-   Category has many Transactions

---

## 10. API Endpoints (Draft)

### Authentication

POST /login
POST /register
POST /logout

### Categories

GET /categories
POST /categories
PUT /categories/{id}
DELETE /categories/{id}

### Transactions

GET /transactions
POST /transactions
PUT /transactions/{id}
DELETE /transactions/{id}

### Dashboard

GET /dashboard/summary

---

## 11. Validation Rules

-   Amount must be greater than zero
-   Category must belong to the authenticated user
-   Transaction date cannot be in the future (optional)

---

## 12. Security Requirements

-   Authentication middleware on protected routes
-   User-based data isolation
-   CSRF protection
-   Input validation on all requests

---

## 13. UI / UX Principles

-   Mobile-first design
-   Minimal and clear forms
-   Clear call-to-action buttons
-   Avoid unnecessary animations

---

## 14. Non-Functional Requirements

-   API response time under 500ms
-   Pagination on all list endpoints
-   Consistent error response format
-   Clean and maintainable code structure

---

## 15. Future Enhancements

-   Monthly budgeting feature
-   Charts and analytics (bar/pie)
-   CSV export
-   Public API access
-   Mobile application integration

---

## 16. Success Metrics

-   Users can input a transaction in under 10 seconds
-   Dashboard provides immediate financial insight
-   No data leakage between users

---

## 17. Notes

This project is designed to:

-   Demonstrate Laravel fullstack capabilities
-   Serve as a portfolio project
-   Be scalable for real-world client usage
