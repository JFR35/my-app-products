# RETO 1: Entorno Servidor - Comercio Electrónico con Laravel

Este proyecto es un sitio web de comercio electrónico construido con Laravel, diseñado para permitir a los usuarios buscar productos, agregarlos a un carrito de compras y calcular el subtotal. Se han implementado migraciones, seeders y funcionalidades básicas del carrito. Próximamente se integrará autenticación, autorización basada en roles y APIs para pasarelas de pago.

##  Tecnologías Utilizadas

* **Framework:** Laravel (PHP)
* **Base de Datos:** MySQL
* **Gestor de Dependencias:** Composer Npm
* **Motor de Plantillas:** Blade
* **Frontend:** Bootstrap

## ✨ Funcionalidades

* **Buscador de Productos:** Encuentra tus productos favoritos fácilmente.
* **Carrito de Compras:**
    * Agrega productos al carrito.
    * Elimina productos del carrito.
    * Calcula el subtotal automáticamente.
* **Poblado de Datos:** Datos iniciales poblados mediante Seeders para una experiencia de inicio rápida.
* **Autenticación y Autorización (Próximamente):** Seguridad mejorada con autenticación de usuarios y autorización basada en roles.
* **Integración con Pasarelas de Pago (Próximamente):** Facilitando transacciones seguras y convenientes.

## ️ Instalación y Configuración

1.  **Clonar el repositorio:**

    ```bash
    git clone [https://github.com/JFR35/my-app-products.git]
    cd my-app-products
    ```

2.  **Instalar dependencias:**

    ```bash
    composer install
    ```
    ``` bash
    npm install bootstrap
    ```

3.  **Configurar el archivo `.env`:**

    * Copiar el archivo de ejemplo:

        ```bash
        cp .env.example .env
        ```

    * Configurar las credenciales de la base de datos:

        ```bash
        echo "DB_CONNECTION=mysql" >> .env
        echo "DB_HOST=127.0.0.1" >> .env
        echo "DB_PORT=3306" >> .env
        echo "DB_DATABASE=nombre_bd" >> .env
        echo "DB_USERNAME=usuario" >> .env
        echo "DB_PASSWORD=contraseña" >> .env
        ```

4.  **Generar la clave de la aplicación:**

    ```bash
    php artisan key:generate
    ```

5.  **Ejecutar migraciones y seeders:**

    ```bash
    php artisan migrate --seed
    ```

6.  **Iniciar el servidor:**

    ```bash
    php artisan serve
    ```

##  Próximas Mejoras

* Implementación completa de autenticación y autorización.
* Integración de APIs para pasarelas de pago.
* Mejoras en la interfaz de usuario y experiencia del usuario.
* Pruebas unitarias e integración continua.

