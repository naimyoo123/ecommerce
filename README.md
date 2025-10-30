# 🛒 Laravel E-Commerce Platform

Complete e-commerce system built with **Laravel 11**, **MySQL**, **Inertia + Vue**, and **TailwindCSS**.

---

## ⚙️ Stack
- **Laravel 11**  
- **MySQL** (Sail)  
- **Laravel Breeze + Sanctum**  
- **Inertia + Vue 3**  
- **TailwindCSS**  
- **Filament** (Admin Panel)

---

## 🚀 Run Locally
```bash
# Start Docker containers
./vendor/bin/sail up -d

# Run migrations and seed database
./vendor/bin/sail artisan migrate --seed

# Build frontend assets
./vendor/bin/sail npm run dev
