<div align="center">

# LPMI Campus CMS

**A role-based Content Management System for LPMI Universitas Gunung Kidul**

Built with Laravel · PHP 8 · MySQL · Blade · Bootstrap

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat-square&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)](https://mysql.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=flat-square&logo=bootstrap&logoColor=white)](https://getbootstrap.com)
[![License](https://img.shields.io/badge/license-MIT-green?style=flat-square)](LICENSE)

[Live Demo](http://lpmi.ugk.ac.id/) · [Report Bug](https://github.com/Yefta2404-Ind/lpmi-campus-cms/issues) · [Request Feature](https://github.com/Yefta2404-Ind/lpmi-campus-cms/issues)

</div>

---

## Overview

LPMI Campus CMS is a web-based content management system built for the Internal Quality Assurance unit (LPMI) of Universitas Gunung Kidul. It enables administrators and staff to manage website content — news, gallery, pages, menus, and organizational structure — through a structured, role-controlled workflow without direct server or code access.

---

## Features

- **Role-Based Access Control** — Three distinct roles (Admin, Staff, Public) with policy-level enforcement
- **News Approval Workflow** — Staff submits content, Admin reviews and publishes; nothing goes live without approval
- **Dynamic Page & Menu Builder** — Create and manage static pages and navigation menus from the dashboard
- **Organization Structure Manager** — Maintain and display the institutional org chart dynamically
- **Gallery Management** — Upload and organize event photos tied to published content
- **Responsive UI** — Mobile-friendly interface for both admin panel and public-facing site

---

## Architecture

### Stack

| Layer | Technology |
|---|---|
| Backend Framework | Laravel 10.x (MVC) |
| Language | PHP 8.1 |
| Templating | Blade |
| Styling | Bootstrap 5 / Tailwind CSS |
| Database | MySQL |
| Auth | Laravel Breeze / built-in Auth |

### Application Flow

```
Browser Request
      │
      ▼
 Laravel Router (routes/web.php)
      │
      ├── Middleware (Authenticate, CheckRole)
      │
      ▼
 Controller Layer
  ├── AuthController
  ├── NewsController        ← submit / approve / publish
  ├── GalleryController
  ├── MenuController
  ├── PageController
  └── OrgStructureController
      │
      ▼
 Eloquent ORM (Models)
  ├── User          (with roles)
  ├── News          (status: draft | pending | published)
  ├── Gallery
  ├── Menu
  ├── Page
  └── OrgStructure
      │
      ▼
   MySQL Database
      │
      ├── Blade Views (Admin Panel)
      └── Blade Views (Public Site)
```

### Role Access Matrix

| Feature | Admin | Staff | Public |
|---|:-:|:-:|:-:|
| View published content | ✓ | ✓ | ✓ |
| Submit news / announcements | ✓ | ✓ | — |
| Approve & publish content | ✓ | — | — |
| Manage menus & pages | ✓ | — | — |
| Manage organization structure | ✓ | — | — |
| Manage gallery | ✓ | ✓ | — |
| User & role management | ✓ | — | — |

### Database Schema (ERD Overview)

```
users ──────────────── roles
  │                      │
  │ (has role)           │ (defines permission)
  │                      │
  ├──< news             ─┘
  │      ├── status: draft | pending | published
  │      └── approved_by → users.id (FK)
  │
  ├──< gallery
  │
  ├──< org_structures
  │      └── parent_id (self-referential, for hierarchy)
  │
  ├──< menus
  │      └── page_id (FK → pages)
  │
  └──< pages
```

> Full ERD diagram available in `/docs/erd.png` *(coming soon)*

---

## Screenshots

### Dashboard

<table>
  <tr>
    <td align="center" width="33%"><b>Admin</b></td>
    <td align="center" width="33%"><b>Staff</b></td>
    <td align="center" width="33%"><b>Public</b></td>
  </tr>
  <tr>
    <td><img src="https://github.com/user-attachments/assets/49f28b07-981a-4a7a-bd4e-ce4bbb4843fe" width="100%"/></td>
    <td><img src="https://github.com/user-attachments/assets/1a4c0613-417e-4387-b03c-85db785de783" width="100%"/></td>
    <td><img src="https://github.com/user-attachments/assets/b5f2362e-6962-42aa-8031-19bfc3828282" width="100%"/></td>
  </tr>
</table>

### News Management

<table>
  <tr>
    <td align="center" width="33%"><b>Public View</b></td>
    <td align="center" width="33%"><b>Staff — Submit</b></td>
    <td align="center" width="33%"><b>Admin — Approval</b></td>
  </tr>
  <tr>
    <td><img src="https://github.com/user-attachments/assets/79f502a4-7ed5-4c54-a74b-eab64a408f0b" width="100%"/></td>
    <td><img src="https://github.com/user-attachments/assets/6e14c924-10b6-4761-8b45-9876e32b18e7" width="100%"/></td>
    <td><img src="https://github.com/user-attachments/assets/e1a3a114-d154-49e6-a67d-72bfd5827c1d" width="100%"/></td>
  </tr>
</table>

### Menu & Page Management

<table>
  <tr>
    <td align="center" width="50%"><b>Menu — Index</b></td>
    <td align="center" width="50%"><b>Menu — Create</b></td>
  </tr>
  <tr>
    <td><img src="https://github.com/user-attachments/assets/b85879c4-aaa9-4a5d-859e-6a46ba9e1c8d" width="100%"/></td>
    <td><img src="https://github.com/user-attachments/assets/98e53deb-fac6-49ed-aeef-8fe79f49486d" width="100%"/></td>
  </tr>
  <tr>
    <td align="center"><b>Page — Index</b></td>
    <td align="center"><b>Page — Create</b></td>
  </tr>
  <tr>
    <td><img src="https://github.com/user-attachments/assets/4165157c-6818-484c-8cfe-9d609000c3aa" width="100%"/></td>
    <td><img src="https://github.com/user-attachments/assets/75e6e245-518a-45cb-b5a5-9eb0f4f335a6" width="100%"/></td>
  </tr>
</table>

### Organization Structure

<table>
  <tr>
    <td align="center" colspan="2"><b>Public View</b></td>
  </tr>
  <tr>
    <td colspan="2"><img src="https://github.com/user-attachments/assets/7a7353a2-41d6-437d-b379-31e43e27c814" width="100%"/></td>
  </tr>
  <tr>
    <td align="center" width="50%"><b>Admin — Index</b></td>
    <td align="center" width="50%"><b>Admin — Create</b></td>
  </tr>
  <tr>
    <td><img src="https://github.com/user-attachments/assets/8cf1078b-eef9-4987-8c36-1ccd6ef294c0" width="100%"/></td>
    <td><img src="https://github.com/user-attachments/assets/8b14070c-d0c1-4b3c-a7fa-1f8951bcaf27" width="100%"/></td>
  </tr>
</table>

---

## Getting Started

### Prerequisites

- PHP >= 8.1
- Composer
- MySQL
- Node.js *(optional, for asset compilation)*

### Installation

```bash
git clone https://github.com/Yefta2404-Ind/lpmi-campus-cms.git
cd lpmi-campus-cms

composer install

cp .env.example .env
php artisan key:generate

# Configure DB_DATABASE, DB_USERNAME, DB_PASSWORD in .env
php artisan migrate

php artisan serve
```

Visit `http://localhost:8000`

---

## Author

**Yefta Aditya**
[github.com/Yefta2404-Ind](https://github.com/Yefta2404-Ind)
