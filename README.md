## About Tickety

This project allows users to check the status of their support tickets and submit new support requests. It features a dark/light mode toggle, a responsive design, and an interactive user experience using Livewire and Tailwind CSS.

### 🚀 Features

- Open a New Support Ticket – Users can easily submit new support requests. Upon submission, an email notification will be sent to the customer, confirming their request and providing a unique reference number for tracking.
- Search Ticket – Users can search for a ticket by entering a reference number.
- View Ticket Details & Replies – Display ticket details and related responses.
- Real-time Ticket Updates – Fetch and display tickets instantly using WebSockets and Laravel Reverb.
- Instant Notifications – Get notified when a new ticket is created without refreshing the page.

### 🦾 Built With

- **Laravel + Blade + Livewire** – Full stack framework.
- **Tailwind CSS** – Responsive and modern UI design.

### 🧰 First-Party Services & Packages

- **Laravel Reverb** – Enables real-time communication via WebSockets.
- **Laravel Pulse** – Provides monitoring and insights into application performance.

---

### 🛠️ Prerequisites

Ensure you have the following installed:
- PHP 8.3+
- Composer
- Node.js & NPM
- MySQL
- phpstorm (recommended) or other IDE

### 🔧 Installation & Setup

1. Clone the Repository

    ```bash
    git clone git@github.com:shashikanuwan/tickety.git
    ```
    ```bash
   cd tickety
    ```
   
2. Install dependencies
    
    ```bash
   composer install
   ```
   ```bash
   npm install
   ```
3. Set Up Environment Variables
    
    ```bash
   cp .env.example .env
   ```
   Update the database credentials, email and other configuration values.

4. Generate the application key

    ```bash
   php artisan key:generate
    ```
   
5. Run migrations and seeders

    ```bash
    php artisan migrate --seed
    ```
   
6. Start the local development server:

    ```bash
    composer run dev
    ```
   and
    ```bash
   php artisan reverb start
   ```
   
   Visit `http://localhost:8000` to start using Tickety.

### 📝 Testing

- Tests
    ```bash
    php artisan test
    ```
  
### 🚀 Monitoring Guide

🔒 Authentication Required – Only authenticated users can access this monitoring dashboard.

- Accessing Laravel Pulse: `http://localhost:8000/pulse`
  

---

### 📂 Screenshots

Screenshots of the application in different views (mobile, tablet, desktop) are located in the [Google Drive](https://drive.google.com/drive/folders/1Eavg8LX7WQTpzSitJKqyeT8LIDcieHD1?usp=drive_link).

### 📜 License
This project is licensed under the MIT License.

### 📩 Contact
For any questions, reach out at [contact@shashikanuwan.me](mailto:contact@shashikanuwan.me)

### 🙏 Credits
 - [Task-Trail](https://github.com/shashikanuwan/task-trail)
 - [Laravel](https://laravel.com/)
 - [Tailwind CSS](https://tailwindcss.com/)
 - [Livewire](https://laravel-livewire.com/)
 - [Heroicons](https://heroicons.com/)
