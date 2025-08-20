# Catálogo de Libros - Gianluca Pasquinelli

## Descripción
Aplicación web desarrollada en **PHP Orientado a Objetos** utilizando el patrón **MVC** y conexión a base de datos con **PDO**.
El sistema permite gestionar libros, autores y usuarios con login de administrador.

## Funcionalidades
- Página inicial de presentación.
- Gestión de libros (CRUD).
- Gestión de autores (CRUD, ahora con opción de agregar nuevos autores).
- Sistema de autenticación (usuario: `admin`, contraseña: `admin`).
- Conexión a base de datos vía PDO.
- Footer centrado para una mejor estética.

## Instalación
1. Importar el archivo SQL: `Pasquinelli_Gianluca.sql` en su gestor de base de datos.
2. Configurar credenciales en `config/config.php`.
3. Levantar un servidor local (ej. XAMPP, Laragon) y apuntar el directorio raíz a la carpeta `public/`.
4. Acceder vía navegador a `http://localhost/libros`.

## Credenciales
- Usuario: **admin**
- Contraseña: **admin**

## Estructura de Carpetas
- `app/Controllers` → Controladores.
- `app/Models` → Modelos con acceso a base de datos.
- `app/Views` → Vistas HTML/PHP.
- `public/` → Archivos públicos y punto de entrada `index.php`.
- `config/` → Configuración de conexión a BD.

## Documentación adicional
El proyecto incluye un **video demostrativo** mostrando las funcionalidades y el uso en base de datos.


