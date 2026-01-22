# Cloud Clinic - Comprehensive Clinic Management System

Cloud Clinic is a robust, all-in-one medical clinic management platform built on the Laravel framework. It provides a seamless experience for administrators, doctors, and patients, offering advanced scheduling, billing, pharmacy management, and teleconsultation features.

## 🚀 Features

### For Patients
- **Online Appointment Booking**: Responsive booking interface with real-time slot availability.
- **Personal Dashboard**: Track upcoming visits, prescriptions, and medical records.
- **Medicine Bill History**: View and download receipts for pharmacy purchases.
- **Testimonials & Reviews**: Share feedback on clinic services and doctors.

### For Doctors
- **Session Management**: Flexible working hours and session interval settings.
- **Electronic Health Records (EHR)**: Detailed visit logs, observation notes, and prescriptions.
- **Holiday Management**: Set out-of-office dates to automatically block bookings.
- **Zoom Consultations**: Integrated video calling for virtual appointments.
- **Google Calendar Sync**: Automatically synchronize appointments with personal calendars.

### For Administrators
- **Comprehensive User Management**: Oversee staff, doctors, and patients with role-based permissions.
- **Pharmacy Management**: Track medicine inventory, categories, purchases, and sales billing.
- **Financial Analytics**: Interactive dashboards with earning charts and transaction logs.
- **Front-end Customization**: Manage FAQs, testimonials, services, and sliders through the admin panel.
- **Multi-Gateway Payment Integration**: Supports Stripe, PayPal, Razorpay, Paystack, and more.

---

## 🛠️ Technical Stack

- **Framework**: [Laravel 10](https://laravel.com/)
- **Real-time Components**: [Livewire 3](https://livewire.laravel.com/)
- **Frontend**: Blade, JavaScript (jQuery), Bootstrap 5, Sass
- **Charts**: [ApexCharts](https://apexcharts.com/)
- **State Management**: [Zustand](https://github.com/pmndrs/zustand) (where applicable)
- **Database**: MySQL / MariaDB
- **Storage**: Local / S3 (via Flysystem)

---

## 📦 Installation & Setup

Follow these steps to get the project running locally:

### 1. Prerequisites
- **PHP**: ^8.1
- **Composer**
- **Node.js & NPM**
- **MySQL**

### 2. Configuration
```bash
# Clone the repository
git clone https://github.com/your-username/clinic-management-system.git
cd clinic-management-system

# Install PHP dependencies
composer install

# Install JS dependencies
npm install

# Create environment file
cp .env.example .env

# Generate Application Key
php artisan key:generate
```

### 3. Database & Storage
1. Create a database named `clinic_management`.
2. Update the `DB_*` variables in your `.env` file.
3. Run migrations and seeders:
```bash
php artisan migrate --seed
php artisan storage:link
```

### 4. Running the Application
```bash
# Build assets
npm run dev

# Start the server
php artisan serve
```
Access the application at `http://localhost:8000`.

---

## 🧪 Developed By

This project was refined and customized with the following team:
- **Raphael Plaza**
- **Michael Ramos**

---

## 📄 License

The Cloud Clinic Management System is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
