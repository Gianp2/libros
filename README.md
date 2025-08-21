# Catálogo de Libros 

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

## Video Demostrativo
🎥 Grabación de pantalla mostrando todas las funcionalidades y la gestión de la base de datos:  

[Ver video demostrativo](Grabación de pantalla 2025-08-20 140357.mp4)

> Nota: Asegurate de subir el archivo `Grabación de pantalla 2025-08-20 140357.mp4` al repositorio para que el enlace funcione.

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
