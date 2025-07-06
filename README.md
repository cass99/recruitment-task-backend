# Recruitment Task Backend

## Setup Instructions

1. **Create the `.env` file**  
   Based on the `.env.example` file, create a `.env` file in the root directory.

2. **Install Composer dependencies**  
   Run the following command in both the `plugins` folder and the `themes/recruitment-task-backend` folder:
   ```bash
   composer install
   ```

3. **Start Docker containers**  
   To create and start Docker containers, run:
   ```bash
   docker-compose up -d
   ```

4. **Configure WordPress**
    - Complete the WordPress installation in your browser.
    - Activate the theme named **"Recruitment Task"**.
    - Optionally, activate the plugin **"WP API SwaggerUI"** for API documentation.

5. **API Request URL**  
   The base URL for the module is:
   ```
   http://localhost/wp-json/api/v1/module
   ```
