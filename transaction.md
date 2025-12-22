Gas. Kita turunin PRD tadi jadi **DB schema + migration Laravel** yang **siap kamu pakai langsung**.
Aku susun dengan mindset **freelancer-grade**: rapi, scalable, dan aman.

Di bawah ini urutannya:

1. Gambaran schema
2. Relasi antar tabel
3. Migration code (copy–paste ready)

---

## 1️⃣ Database Schema Overview

### Tables

-   `users`
-   `categories`
-   `transactions`

---

## 2️⃣ Relasi Antar Tabel

```
users
 ├── categories
 └── transactions

categories
 └── transactions
```

-   1 User → banyak Category
-   1 User → banyak Transaction
-   1 Category → banyak Transaction

---

## 3️⃣ Migration: users (default Laravel)

Biasanya sudah ada. Pastikan strukturnya seperti ini:

```php
Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password');
    $table->rememberToken();
    $table->timestamps();
});
```

---

## 4️⃣ Migration: categories

### Command

```bash
php artisan make:migration create_categories_table
```

### Migration File

```php
Schema::create('categories', function (Blueprint $table) {
    $table->id();

    $table->foreignId('user_id')
        ->constrained()
        ->onDelete('cascade');

    $table->string('name');

    $table->enum('type', ['income', 'expense']);

    $table->timestamps();

    $table->unique(['user_id', 'name', 'type']);
});
```

### Kenapa desainnya begini?

-   `user_id` → kategori per user
-   `type` → pisahin income & expense
-   `unique` → user tidak bisa bikin kategori sama dua kali

---

## 5️⃣ Migration: transactions

### Command

```bash
php artisan make:migration create_transactions_table
```

### Migration File

```php
Schema::create('transactions', function (Blueprint $table) {
    $table->id();

    $table->foreignId('user_id')
        ->constrained()
        ->onDelete('cascade');

    $table->foreignId('category_id')
        ->constrained()
        ->onDelete('restrict');

    $table->decimal('amount', 15, 2);

    $table->enum('type', ['income', 'expense']);

    $table->string('description')->nullable();

    $table->date('transaction_date');

    $table->timestamps();

    $table->index(['user_id', 'transaction_date']);
});
```

### Kenapa begini?

-   `decimal(15,2)` → aman buat duit
-   `transaction_date` → jangan pakai `created_at`
-   `restrict` category → mencegah hapus kategori yang masih dipakai
-   index → filter bulanan lebih cepat

---

## 6️⃣ Final SQL Mental Model (penting 🧠)

Contoh query yang **pasti kepakai**:

### Total expense bulanan

```sql
SELECT SUM(amount)
FROM transactions
WHERE user_id = ?
AND type = 'expense'
AND MONTH(transaction_date) = ?
AND YEAR(transaction_date) = ?
```

### Expense per category

```sql
SELECT categories.name, SUM(transactions.amount)
FROM transactions
JOIN categories ON transactions.category_id = categories.id
WHERE transactions.user_id = ?
AND transactions.type = 'expense'
GROUP BY categories.name
```

Schema ini **sudah optimal** untuk query-query itu.

---

## 7️⃣ Checklist Setelah Migration

Setelah ini kamu HARUS punya:

-   Model `Category`
-   Model `Transaction`
-   Relasi Eloquent
-   Seeder kategori default

---

## 8️⃣ Next Logical Step (pilih salah satu)

Kalau kita lanjut secara ideal:

1️⃣ **DB → Eloquent Models + Relations**
2️⃣ **Seeder kategori default**
3️⃣ **API contract (request/response JSON)**
4️⃣ **Dashboard query (monthly summary)**

Tinggal bilang:

> “lanjut ke models”
> atau
> “buatkan seeder”
> atau
> “langsung ke dashboard query”

Gas terus, ini udah jalur freelancer beneran 🚀
