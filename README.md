# 🛒 Laravel E-Commerce Platform

> A modern e-commerce starter built with **Laravel 11**, **MySQL (Docker/Sail)**, **Inertia.js + Vue 3**, and **TailwindCSS**.  
> Designed as a scalable foundation for future e-commerce features like product management, authentication, and admin dashboards.

---

## ⚙️ Tech Stack

| Layer | Technology |
|-------|-------------|
| Backend | Laravel 11 |
| Frontend | Inertia.js + Vue 3 |
| Auth & API | Laravel Breeze + Sanctum |
| Styling | TailwindCSS |
| Admin (Ready) | Filament |
| Database | MySQL (via Laravel Sail – Docker) |

---

## 🚀 Run Locally

```bash
# 1️⃣ Start Docker environment
./vendor/bin/sail up -d

# 2️⃣ Run migrations and optional seeders
./vendor/bin/sail artisan migrate --seed

# 3️⃣ Start the dev server
./vendor/bin/sail npm run dev
