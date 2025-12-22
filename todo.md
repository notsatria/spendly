Gas. Ini **developer task list / checklist** yang **langsung bisa kamu pakai kerja harian**, bukan high-level doang.
Strukturnya aku bikin seperti **real freelance sprint board**: dari setup → backend → frontend → finishing.

Kamu bisa copy ini ke:

-   GitHub Project
-   Notion
-   Jira
-   Trello

---

# 🧑‍💻 Expense Tracker – Developer Task List

---

## 🟢 PHASE 0 – Project Setup

-   [x] Create Laravel project
-   [x] Setup `.env` (DB, APP_KEY)
-   [x] Setup database (MySQL / PostgreSQL)
-   [x] Run initial migration
-   [x] Setup Git repository

---

## 🟢 PHASE 1 – Authentication

### Backend

-   [ ] Setup auth (Laravel Breeze / custom)
-   [ ] Create login endpoint
-   [ ] Create register endpoint
-   [ ] Create logout endpoint
-   [ ] Protect routes with auth middleware

### Frontend (Blade)

-   [ ] Login page UI
-   [ ] Register page UI
-   [ ] Validation error handling
-   [ ] Flash message for auth status

---

## 🟢 PHASE 2 – Category Management

### Backend

-   [ ] Create Category model
-   [ ] Define User → Categories relationship
-   [ ] Create CategoryController
-   [ ] Create CategoryRequest validation
-   [ ] Create CRUD endpoints:

    -   [ ] List categories
    -   [ ] Create category
    -   [ ] Update category
    -   [ ] Delete category

-   [ ] Restrict category access by user
-   [ ] Prevent deleting category with transactions

### Frontend

-   [ ] Category list page
-   [ ] Add category form
-   [ ] Edit category form
-   [ ] Delete category confirmation modal

---

## 🟢 PHASE 3 – Transaction Management

### Backend

-   [ ] Create Transaction model
-   [ ] Define relationships:

    -   [ ] User → Transactions
    -   [ ] Category → Transactions

-   [ ] Create TransactionController
-   [ ] Create TransactionRequest validation
-   [ ] CRUD endpoints:

    -   [ ] List transactions
    -   [ ] Create transaction
    -   [ ] Update transaction
    -   [ ] Delete transaction

-   [ ] Filter transactions:

    -   [ ] Date range
    -   [ ] Category
    -   [ ] Type (income / expense)

-   [ ] Pagination

### Frontend

-   [ ] Transaction list table
-   [ ] Add transaction form
-   [ ] Edit transaction form
-   [ ] Delete confirmation
-   [ ] Filter UI (date, category, type)

---

## 🟢 PHASE 4 – Dashboard

### Backend

-   [ ] Monthly income summary query
-   [ ] Monthly expense summary query
-   [ ] Balance calculation
-   [ ] Expense per category query
-   [ ] Create DashboardController

### Frontend

-   [ ] Dashboard page layout
-   [ ] Summary cards (income, expense, balance)
-   [ ] Expense per category list

---

## 🟢 PHASE 5 – Validation & Security

-   [ ] Request validation for all forms
-   [ ] Authorization checks (policy/gate)
-   [ ] Prevent cross-user data access
-   [ ] Handle 404 & 403 errors
-   [ ] CSRF protection

---

## 🟢 PHASE 6 – UX & Quality

-   [ ] Consistent layout (Blade master)
-   [ ] Responsive UI (mobile-first)
-   [ ] Empty state handling
-   [ ] Loading & disabled state on submit
-   [ ] User-friendly error messages

---

## 🟢 PHASE 7 – Seeders & Initial Data

-   [ ] Create category seeder
-   [ ] Seed default income categories
-   [ ] Seed default expense categories
-   [ ] Link seeders to user creation (optional)

---

## 🟢 PHASE 8 – Optimization & Cleanup

-   [ ] Refactor controllers
-   [ ] Use Form Request classes
-   [ ] Add DB indexes if needed
-   [ ] Remove unused code
-   [ ] Format code (PSR-12)

---

## 🟢 PHASE 9 – Deployment

-   [ ] Setup production `.env`
-   [ ] Configure Nginx
-   [ ] Setup database on server
-   [ ] Run migration on server
-   [ ] Setup storage permissions
-   [ ] Enable HTTPS

---

## 🟢 PHASE 10 – Portfolio & Freelance Readiness

-   [ ] Write README.md
-   [ ] Add screenshots
-   [ ] Document API endpoints
-   [ ] Prepare demo account
-   [ ] Push final code to GitHub

---

## 🧠 Estimasi Waktu (Realistis)

| Phase           | Estimasi |
| --------------- | -------- |
| Setup + Auth    | 1–2 hari |
| Category        | 1 hari   |
| Transaction     | 2 hari   |
| Dashboard       | 1 hari   |
| Polish + Deploy | 1–2 hari |

**Total: ±7–9 hari kerja santai**

---

## 🎯 Kenapa Checklist Ini Penting

-   Bisa kamu kerjakan **step by step**
-   Bisa kamu tunjukin ke client
-   Bisa kamu pakai buat estimasi harga
-   Bisa diubah jadi sprint board

---

## 🔥 Next Move (tinggal pilih)

Kalau mau lanjut:

1️⃣ Convert checklist → **API contract detail (request/response)**
2️⃣ Buatin **dashboard query SQL + Eloquent**
3️⃣ Simulasikan **project client + pricing freelance**
4️⃣ Upgrade ke **Laravel + API (Sanctum)**

Tinggal bilang, kita lanjut tanpa muter-muter 🚀
