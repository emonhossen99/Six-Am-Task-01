# Quickstart

0. **Run the Project**: Execute the following command in your terminal:

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

1. **Task One Check**:

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

2. **Task Two Check**:

    Clear Cache:
    ```bash
    php artisan optimize:clear
    ```

    Run Swagger:
    ```bash
    php artisan l5-swagger:generate
    ```

    Go to this url  :
    ```bash
    /api/documentation
    ```
    ## 🔐 Registering a New User With Swagger

    First api will be create a new user provide (api/register):
    - **Name**
    - **Email**
    - **Password**
    - **Confirm Password**
    after created successfully then copy to token and authorize to swagger

   Second api will be login user  (api/login):
    - **Email**
    - **Password**
    after login successfully then copy to token and authorize to swagger

   Third api will be return auth user  (api/me):
   
   Fouth api will be logout auth user  (api/logout):


    # 🔐 Task Management API with Swagger

    This is a simple and secure Task Management API that allows **authenticated users** to create, update, and delete their own tasks. The API is fully documented using **Swagger** for easy testing and integration.

    ---

    ### ✅ Get All Tasks (Authenticated User)
    - Retrieve all tasks created by the currently logged-in user.

    ### ➕ Create a New Task
    - Create a task by providing the following fields:
    - `title` (string) — Task title  
    - `description` (string) — Task details  
    - `status` (integer) — `0` for **Pending**, `1` for **Publish**

    ### 🔍 Get a Single Task
    - Retrieve a specific task using its unique `id`.

    ### ✏️ Update a Task
    - Update a task by providing:
    - `id` (integer) — Task ID  
    - `title` (string) — Updated title  
    - `description` (string) — Updated description  
    - `status` (integer) — `0` for **Pending**, `1` for **Publish**

    ### ❌ Delete a Task
    - Delete a specific task by providing its `id`.

    ---

    

---
