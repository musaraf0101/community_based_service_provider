# Community Based Service Provider

A Laravel web application that connects users with local service providers. Admins manage the platform, users book services, and service providers manage their bookings and profiles.

---

## Features

**Admin**

- Dashboard overview
- Review and approve/reject service provider registrations
- Manage users and service providers (delete)
- View bookings with status (pending, ongoing, complete)

**User**

- Browse and book approved service providers
- Edit booking details
- Manage profile
- Rate service providers after a completed service

**Service Provider**

- Register and await admin approval before logging in
- Accept/manage incoming bookings
- Manage profile and update working status

---

## Tech Stack

- **Backend:** PHP 8.2+, Laravel 12
- **Frontend:** Blade, Tailwind CSS, Vite
- **Database:** MySQL
- **Other:** Laravel Tinker, Laravel Sail (optional)

---

## Requirements

- PHP >= 8.2
- Composer
- Node.js >= 18 & npm
- SQLite (bundled with PHP) **or** MySQL/MariaDB

---

## Setup

### 1. Clone the repository

```bash
git clone <your-repo-url>
cd community_based_service_provider
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Install Node dependencies

```bash
npm install
```

### 4. Configure environment

```bash
cp .env.example .env
php artisan key:generate
```

### 5. Configure the database

**Option A — SQLite (default, no extra setup needed)**

The `.env.example` already uses SQLite. Make sure the database file exists:

```bash
touch database/database.sqlite
```

**Option B — MySQL**

Edit `.env` and update the following:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=community_service_provider
DB_USERNAME=root
DB_PASSWORD=your_password
```

Then create the database in MySQL:

```sql
CREATE DATABASE community_service_provider;
```

### 6. Run migrations

```bash
php artisan migrate
```

### 7. Create a storage symlink

```bash
php artisan storage:link
```

---

## Running the Application

### Development (all services at once)

```bash
composer run dev
```

This starts the Laravel server, queue worker, log viewer, and Vite dev server concurrently.

### Or start manually in separate terminals

```bash
# Terminal 1 — Laravel server
php artisan serve

# Terminal 2 — Vite (CSS/JS hot reload)
npm run dev

# Terminal 3 — Queue worker (for jobs/notifications)
php artisan queue:listen --tries=1
```

Visit [http://localhost:8000](http://localhost:8000)

---

## Creating an Admin Account

After running migrations, register a user through the UI, then manually set the role to `admin` in the database (or via Tinker):

```bash
php artisan tinker
```

```php
\App\Models\User::where('email', 'your@email.com')->update(['role' => 'admin']);
```

---

## Building for Production

```bash
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## Running Tests

```bash
composer run test
```

---

## Project Structure

```
app/
  Http/Controllers/     # AdminController, UserController, ServiceProviderController, BookingController, RatingController
  Models/               # User, ServiceProvider, Booking, Rating
  Http/Middleware/       # RoleMiddleware (admin, user, service_provider)
database/
  migrations/           # Users, ServiceProviders, Ratings, Bookings tables
resources/views/
  admin/                # Admin dashboard & management pages
  auth/                 # Login & registration
  common_pages/         # Home, contact, provider listings
  components/           # Navbar, footer, sidebars
```

---

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
