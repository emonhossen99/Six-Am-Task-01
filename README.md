# Quickstart

1. **Run the Project**: Execute the following command in your terminal:

    Clone Project To Github :
    ```bash
    git clone https://github.com/emonhossen99/Six-Am-Task-01.git
    ```

    Env and database setup (MYSQL) and run below the command:

    ```bash
    composer update
    ```

    Generate JWT token:

    ```bash
    php artisan jwt:secret
    ```

---

2. **Task One Check**:

    Run Seeder:
    ```bash
    php artisan db:seed
    ```

    Run Project:
    ```bash
    php artisan serve
    ```

    Open to local server then you can see one login interface :
    ```bash
    composer update
    ```

    Generate JWT token:

    ```bash
    php artisan jwt:secret
    ```

    Provide  Email & Password (Admin Route Check):
    Email :

    ```bash
    admin@gmail.com
    ```
    Password :
    ```bash
    admin@gmail.com
    ```

    Provide  Email & Password (User Route Check):
    Email :

    ```bash
    user@gmail.com
    ```
    Password :
    ```bash
    admin@gmail.com
    ```

    ## 🔐 Registering a New User

    If you want to register as a new user:

    1. Click the **"Login"** button located below the **"Create Account"** section.
    2. You will be redirected to the **registration page**.
    3. On the registration form, please fill in the following details:
    - **Name**
    - **Email**
    - **Password**
    - **Confirm Password**
    4. After submitting the form, your account will be created successfully.

---



### Laravel-এর জন্য সম্পূর্ণ উদাহরণ:

```md
# My Laravel Project

A Laravel-based application for [describe your project briefly].

## Quickstart

1. **Clone the repo**:

    ```bash
    git clone https://github.com/your-username/your-laravel-project.git
    cd your-laravel-project
    ```

2. **Install dependencies**:

    ```bash
    composer install
    npm install && npm run dev
    ```

3. **Set up environment file**:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Run migrations (and seed if needed)**:

    ```bash
    php artisan migrate --seed
    ```

5. **Start the development server**:

    ```bash
    php artisan serve
    ```

