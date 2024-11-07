## Blog App

This is a simple blog application built with **React** for the front end, **PHP** as the backend API, and **MySQL** as the database. The app allows users to create, read, update, and delete blog posts.

## Features

- Create new blog posts with a title and content.
- View a list of all blog posts.
- Update existing blog posts.
- Delete blog posts.

## Technologies Used

- **React** - Front-end library
- **PHP** - Back-end API
- **MySQL** - Database
- **Axios** - For handling HTTP requests

## Installation

### 1. Set up the Database

1. Create a new MySQL database:

```sql
CREATE DATABASE blog_app;

USE blog_app;

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
