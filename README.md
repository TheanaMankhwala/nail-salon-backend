# Nail Salon Backend

This is the **backend API** for a Nail Salon Booking System built with **Laravel 12**.  
It handles **customers, services, bookings, and payments**.

## Features

- Customer management (create, update, view)
- Service management (add, update, list services)
- Booking management (create, view, cancel bookings)
- Payment integration (simulate or record payments)
- Migrations included for database setup

## Technologies Used

- PHP 8.x
- Laravel 12
- PostgreSQL
- Composer

## Getting Started

1. Clone the repository
   ```bash
   git clone https://github.com/TheanaMankhwala/nail-salon-backend.git
   cd nail-salon-backend
2. Install dependenceies
         composer install

3. set up environment 
         cp .env.example .env
         php artisan key:generate
4 Run migrations 
      php artisan migrate
4. Start the development server
       php artisan serve



