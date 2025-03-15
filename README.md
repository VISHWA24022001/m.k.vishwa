# Laravel Product Management App

This is a Laravel-based Product Management Application that includes the following features:
- Basic Routing and Controller
- Full CRUD Operations (Create, Read, Update, Delete)
- Database Seeding and Faker for realistic data generation
- Authentication Middleware for access control
- Clean and responsive UI using Bootstrap

---

## 🚀 **Setup Instructions**
Follow the steps below to set up and run the project on your local environment:

### **1. Clone the Repository**
```bash
git clone https://github.com/VISHWA24022001/m.k.vishwa.git



### **2. Install Dependencies**
### **Make sure you have Composer installed, then run:**

composer install


### **3. Set Up Environment Variables**
### **(i)Copy the .env.example file to .env:**

cp .env.example .env

### **(ii)Generate the application key:**

php artisan key:generate

### **(iii)Configure your database settings in the .env file:**

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=vishwa
DB_USERNAME=root
DB_PASSWORD=


### **4. Set Up Database**
### **(i)Create the database manually or using the command line:**

mysql -u root -p -e "CREATE DATABASE vishwa;"

### **(ii)Run the migrations:**

php artisan migrate


### **5. Seed the Database**

### **To generate 10 fake users using Laravel Seeder:**

php artisan db:seed --class=UserSeeder

### **login credentials
email = m.k.vishwa@gmail.com
password = 123456
### **every user password = 123456


### **6. Start the Development Server**

### **(i)Start the Laravel development server:**

php artisan serve

### **(ii)Open your browser and visit:**

http://127.0.0.1:8000


### **7. Test Routes**

Route |	Method	| Description
/	GET	 Simple welcome message
/products	GET	 List  all products
/products/create	GET	 Form to add a new product
/products/{id}/edit	GET	 Form to edit an existing product
/products/{id}	DELETE	 Delete a product
/home	GET	 Protected route (requires login)


 ### **Project Structure**


 ├── app
│   ├── Http
│   │   ├── Controllers
│   │   │   └── ProductController.php
│   │   └── Middleware
│   │       └── Authenticate.php
│   └── Models
│       └── Product.php
├── database
│   ├── migrations
│   ├── seeders
│   │   └── UserSeeder.php
├── resources
│   ├── views
│       └── products
│           ├── index.blade.php
│           ├── create.blade.php
│           ├── edit.blade.php
├── routes
│   └── web.php
└── .env
