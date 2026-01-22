CREATE DATABASE `skooby-duo`; -- Criando o banco de dados
USE `skoob2`; -- Indicando o uso do banco de dados

----------------------------------------
--          Tabela de Livros          --
----------------------------------------
CREATE TABLE book (
        book_id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(100) NOT NULL,
        author VARCHAR(100) NOT NULL,
        description TEXT NOT NULL
    );

----------------------------------------
--        Tabela de Categorias        --
----------------------------------------
CREATE TABLE category (
  category_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL
);

----------------------------------------
-- Tabela de Ligação Livro-Categoria  --
----------------------------------------
CREATE TABLE book_category (
  book_id INT NOT NULL,
  category_id INT NOT NULL,
  PRIMARY KEY (book_id, category_id),
  FOREIGN KEY (book_id) REFERENCES book(book_id) ON DELETE CASCADE,
  FOREIGN KEY (category_id) REFERENCES category(category_id) ON DELETE CASCADE
);

----------------------------------------
--          Tabela de Status          --
----------------------------------------
CREATE TABLE reading_status (
  status_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(20) NOT NULL
);

INSERT INTO reading_status (name) VALUES ('Quero ler'), ('Já li');

----------------------------------------
--   Tabela de Ligação Livro-Status   --
----------------------------------------
CREATE TABLE book_status (
  book_id INT NOT NULL,
  status_id INT NOT NULL,
  PRIMARY KEY (book_id, status_id),
  FOREIGN KEY (book_id) REFERENCES book(book_id) ON DELETE CASCADE,
  FOREIGN KEY (status_id) REFERENCES reading_status(status_id) ON DELETE CASCADE
);