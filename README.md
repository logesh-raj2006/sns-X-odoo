# SNS-X Odoo PHP Integration

This repository contains the integration bridge for the **Odoo x SNS Hiring Hackathon '26**. The project architecture utilizes **PHP (XAMPP)** as the primary interface to interact with an Odoo ERP backend via API.

## 🏗 Project Architecture
This project follows a decoupled architecture:
* **Frontend/Logic:** PHP 8.x running on **XAMPP**.
* **Backend ERP:** Odoo (accessed via XML-RPC API).
* **Interface:** All data operations are performed using Odoo's External API, meaning no direct Python customization was required for the frontend implementation.



## 🚀 Getting Started

### Prerequisites
1.  **XAMPP:** Download and install from [apachefriends.org](https://www.apachefriends.org/).
2.  **Odoo Instance:** A running Odoo server (local or cloud) on port `8069`.
3.  **PHP XML-RPC:** Ensure the extension is enabled in your `php.ini`.

### Installation
1.  **Clone the Repository** into your XAMPP web root:
    ```bash
    cd C:/xampp/htdocs
    git clone [https://github.com/logesh-raj2006/sns-X-odoo.git](https://github.com/logesh-raj2006/sns-X-odoo.git)
    ```
2.  **Configure Connection:**
    Open the PHP configuration file (e.g., `config.php`) and update your Odoo credentials:
    ```php
    $url = "http://localhost:8069";
    $db = "your_database_name";
    $username = "your_email";
    $password = "your_api_key";
    ```

## 🛠 Features Developed
* **PHP-Based Dashboard:** Custom UI built with PHP/HTML/CSS to display Odoo data.
* **API Connectivity:** Full CRUD (Create, Read, Update, Delete) operations on Odoo models using PHP.
* **XAMPP Optimized:** Designed to run seamlessly within a standard Apache environment.

## 📂 Folder Structure
* `index.php` - The main entry point for the PHP application.
* `lib/` - Contains API libraries (like Ripcord) for Odoo communication.
* `assets/` - CSS and JS files for the frontend styling.
* `odoo_addon/` - The Odoo module structure required to support this integration.

## 👤 Author
Team Leader 
1.Logesh Raj-Kgisl institute of Technology

Team members 

1.Jaisurya-Kgisl institute of technology 

2.Poorani-Kgisl institute of technology

3.Swetha-Kgisl institute of technology 


---
*Note: This repository focuses on the PHP implementation and API integration aspects of the Odoo ecosystem.*
