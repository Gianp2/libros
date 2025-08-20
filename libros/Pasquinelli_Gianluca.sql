-- SQL Dump — Pasquinelli_Gianluca.sql
-- Base: catalogo_libros_pasquinelli

CREATE DATABASE IF NOT EXISTS catalogo_libros_pasquinelli;
USE catalogo_libros_pasquinelli;

DROP TABLE IF EXISTS books;
DROP TABLE IF EXISTS authors;
DROP TABLE IF EXISTS users;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES
('admin', MD5('admin'));

CREATE TABLE authors (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  description TEXT
);

INSERT INTO authors (name, description) VALUES
('Gabriel García Márquez', 'Autor colombiano, ganador del Nobel.'),
('J.K. Rowling', 'Autora británica, famosa por la saga de Harry Potter.'),
('Stephen King', 'Escritor estadounidense de terror y misterio.'),
('Ejemplo', 'Descripción del ejemplo.');

CREATE TABLE books (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(150) NOT NULL,
  author_id INT NULL,
  description TEXT,
  year INT NULL,
  FOREIGN KEY (author_id) REFERENCES authors(id) ON DELETE SET NULL
);

INSERT INTO books (title, author_id, description, year) VALUES
('Cien años de soledad', 1, 'Obra clave del realismo mágico.', 1967),
('Harry Potter y la piedra filosofal', 2, 'Primera entrega de la saga.', 1997),
('El resplandor', 3, 'Novela de terror psicológico.', 1977);
