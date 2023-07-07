# Fitness Website PHP with Admin Dashboard

This repository contains a PHP-based fitness website with an admin dashboard. The website allows users to register, log in, view services, make requests to join the gym, and contact the administrators. The admin dashboard provides functionality for admin login, user registration, displaying user lists, and managing interested users.

## Features

- User Registration: Users can create an account by providing their name, email, and password.
- User Login: Registered users can log in using their credentials.
- Home Page: The home page showcases information about the fitness center and its services.
- Contact Page: Users can submit queries or messages to the administrators through the contact form.
- Service Page: Displays information about the services provided by the fitness center.
- Logout: Allows users to log out of their account.
- Admin Login: Admins can access the admin dashboard by providing their credentials.
- Admin Dashboard: Provides an interface for admins to manage user registrations and view interested users.
- Show All User List: Admins can view a list of all registered users.
- Show All Interested Users: Admins can view a list of users who have shown interest in joining the gym.

## Technologies Used

- PHP
- MySQL

## Installation

1. Clone the repository: `git clone https://github.com/<your-username>/fitness_website_php_with_admindashboard.git`
2. Set up a local web server (e.g., XAMPP, WAMP) and configure it to run PHP.
3. Import the provided MySQL database (`fitness_website.sql`) into your MySQL server.
4. Update the database credentials in the `conn.php` file located in the `connection` directory.
5. Start the local web server and navigate to `http://localhost/fitness/pages/login.php` to access the user page.
6. To access the admin dashboard, go to `http://localhost/fitness/admin/dashboard.php` and log in with admin credentials.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

