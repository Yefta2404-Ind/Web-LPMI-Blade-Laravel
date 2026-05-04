<div align="center">

<img src="https://capsule-render.vercel.app/api?type=waving&color=0:1a1a2e,50:16213e,100:0f3460&height=200&section=header&text=LPMI%20Campus%20CMS&fontSize=48&fontColor=e94560&fontAlignY=38&desc=Content%20Management%20System%20%E2%80%94%20Universitas%20Gunung%20Kidul&descAlignY=58&descColor=a8b2d8" width="100%" />

<br/>

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com)
[![Blade](https://img.shields.io/badge/Blade-FF6B6B?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/docs/blade)
[![License](https://img.shields.io/badge/License-MIT-22c55e?style=for-the-badge)](LICENSE)

<br/>

[![Live Demo](https://img.shields.io/badge/🌐%20Live%20Demo-Visit%20Site-0f3460?style=for-the-badge)](https://your-demo-link.com)

<br/>

> A modern, role-based Content Management System built for **LPMI Universitas Gunung Kidul** — manage campus content efficiently without touching a single line of code.

</div>

<br/>

---

## 📌 Overview

**LPMI Campus CMS** is a full-featured web application that centralizes content management for LPMI's official website. Built on the Laravel framework, it supports multi-role access so that admins, staff, and the public each see exactly what they need — nothing more, nothing less.

| What it solves | How |
|---|---|
| Scattered content updates | Centralized dashboard for all content types |
| No approval workflow | Staff submits → Admin reviews → Published |
| Static, hard-to-edit pages | Dynamic page & menu builder |
| Unstructured org info | Visual organization structure manager |

<br/>

---

## ✨ Features

<div align="center">

| 🔐 Auth & Authorization | 📊 Admin Dashboard | 📰 News & Announcements |
|:-:|:-:|:-:|
| Secure login with role-based access control for Admin, Staff, and Public | Activity summary and content overview in one place | Full editorial workflow: draft → submit → approve → publish |

| 🖼️ Gallery Management | 📄 Pages & Menus | 🏛️ Organization Structure |
|:-:|:-:|:-:|
| Upload and manage event photos with ease | Build static pages and navigation menus dynamically | Manage and display LPMI's organizational chart |

</div>

<br/>

---

## 🏗️ Architecture

```
┌─────────────────────────────────────────────────────────┐
│                        Browser                          │
└────────────────────┬────────────────────────────────────┘
                     │ HTTP Request
                     ▼
┌─────────────────────────────────────────────────────────┐
│                    Laravel Router                        │
│              routes/web.php  ·  routes/api.php          │
└──────┬──────────────┬──────────────────┬────────────────┘
       │              │                  │
       ▼              ▼                  ▼
┌──────────┐   ┌──────────────┐   ┌───────────────┐
│ Middleware│   │  Controllers │   │    Policies   │
│  (Auth,  │   │              │   │  (Role-Based  │
│  Roles)  │   │  - Auth      │   │   Access)     │
└──────────┘   │  - News      │   └───────────────┘
               │  - Gallery   │
               │  - Menu      │
               │  - Page      │
               │  - OrgChart  │
               └──────┬───────┘
                      │
                      ▼
          ┌───────────────────────┐
          │      Models (ORM)     │
          │  Eloquent / Laravel   │
          └──────────┬────────────┘
                     │
                     ▼
          ┌───────────────────────┐
          │      MySQL Database   │
          │                       │
          │  users   · roles      │
          │  news    · gallery    │
          │  pages   · menus      │
          │  org_structures       │
          └───────────────────────┘
                     │
         ┌───────────┴────────────┐
         ▼                        ▼
┌─────────────────┐     ┌──────────────────┐
│   Blade Views   │     │   Public Views   │
│  (Admin Panel)  │     │  (Landing Page)  │
└─────────────────┘     └──────────────────┘
```

### Role Access Matrix

| Feature | 👑 Admin | ✍️ Staff | 🌐 Public |
|---|:-:|:-:|:-:|
| View public content | ✅ | ✅ | ✅ |
| Submit news / announcements | ✅ | ✅ | ❌ |
| Approve & publish content | ✅ | ❌ | ❌ |
| Manage menus & pages | ✅ | ❌ | ❌ |
| Manage organization structure | ✅ | ❌ | ❌ |
| Manage gallery | ✅ | ✅ | ❌ |
| User & role management | ✅ | ❌ | ❌ |

<br/>

---

## 🛠️ Tech Stack

| Layer | Technology |
|---|---|
| **Backend** | Laravel (PHP 8.x) |
| **Templating** | Blade Template Engine |
| **Styling** | Bootstrap / Tailwind CSS |
| **Database** | MySQL |
| **Language** | PHP, JavaScript |
| **Package Manager** | Composer |

<br/>

---

## 📸 Screenshots

### 🖥️ Dashboard

<table>
  <tr>
    <td align="center" width="33%"><b>👑 Admin</b></td>
    <td align="center" width="33%"><b>✍️ Staff</b></td>
    <td align="center" width="33%"><b>🌐 Public</b></td>
  </tr>
  <tr>
    <td><img src="https://github.com/user-attachments/assets/49f28b07-981a-4a7a-bd4e-ce4bbb4843fe" width="100%" alt="Admin Dashboard"/></td>
    <td><img src="https://github.com/user-attachments/assets/1a4c0613-417e-4387-b03c-85db785de783" width="100%" alt="Staff Dashboard"/></td>
    <td><img src="https://github.com/user-attachments/assets/b5f2362e-6962-42aa-8031-19bfc3828282" width="100%" alt="Public View"/></td>
  </tr>
</table>

### 📰 News Management

<table>
  <tr>
    <td align="center" width="33%"><b>🌐 Public View</b></td>
    <td align="center" width="33%"><b>✍️ Staff — Submit</b></td>
    <td align="center" width="33%"><b>✅ Admin — Approval</b></td>
  </tr>
  <tr>
    <td><img src="https://github.com/user-attachments/assets/79f502a4-7ed5-4c54-a74b-eab64a408f0b" width="100%" alt="News Public"/></td>
    <td><img src="https://github.com/user-attachments/assets/6e14c924-10b6-4761-8b45-9876e32b18e7" width="100%" alt="News Staff"/></td>
    <td><img src="https://github.com/user-attachments/assets/e1a3a114-d154-49e6-a67d-72bfd5827c1d" width="100%" alt="News Admin Approval"/></td>
  </tr>
</table>

### 📄 Menu & Page Management *(Admin Only)*

<table>
  <tr>
    <td align="center" width="50%"><b>📋 Menu — Index</b></td>
    <td align="center" width="50%"><b>➕ Menu — Create</b></td>
  </tr>
  <tr>
    <td><img src="https://github.com/user-attachments/assets/b85879c4-aaa9-4a5d-859e-6a46ba9e1c8d" width="100%" alt="Menu Index"/></td>
    <td><img src="https://github.com/user-attachments/assets/98e53deb-fac6-49ed-aeef-8fe79f49486d" width="100%" alt="Menu Create"/></td>
  </tr>
  <tr>
    <td align="center"><b>📋 Page — Index</b></td>
    <td align="center"><b>➕ Page — Create</b></td>
  </tr>
  <tr>
    <td><img src="https://github.com/user-attachments/assets/4165157c-6818-484c-8cfe-9d609000c3aa" width="100%" alt="Page Index"/></td>
    <td><img src="https://github.com/user-attachments/assets/75e6e245-518a-45cb-b5a5-9eb0f4f335a6" width="100%" alt="Page Create"/></td>
  </tr>
</table>

### 🏛️ Organization Structure *(Admin Only)*

<table>
  <tr>
    <td align="center" colspan="2"><b>🌐 Public View</b></td>
  </tr>
  <tr>
    <td colspan="2"><img src="https://github.com/user-attachments/assets/7a7353a2-41d6-437d-b379-31e43e27c814" width="100%" alt="Org Public"/></td>
  </tr>
  <tr>
    <td align="center" width="50%"><b>🛠️ Admin — Index</b></td>
    <td align="center" width="50%"><b>➕ Admin — Create</b></td>
  </tr>
  <tr>
    <td><img src="https://github.com/user-attachments/assets/8cf1078b-eef9-4987-8c36-1ccd6ef294c0" width="100%" alt="Org Admin"/></td>
    <td><img src="https://github.com/user-attachments/assets/8b14070c-d0c1-4b3c-a7fa-1f8951bcaf27" width="100%" alt="Org Create"/></td>
  </tr>
</table>

<br/>

---

## 🚀 Getting Started

### Prerequisites

- PHP 8.0+
- Composer
- MySQL
- Node.js *(optional, for asset compilation)*

### Installation

```bash
# 1. Clone the repository
git clone https://github.com/Yefta2404-Ind/lpmi-campus-cms.git
cd lpmi-campus-cms

# 2. Install PHP dependencies
composer install

# 3. Set up environment
cp .env.example .env
php artisan key:generate

# 4. Configure your database in .env
# DB_DATABASE=your_db_name
# DB_USERNAME=your_username
# DB_PASSWORD=your_password

# 5. Run migrations
php artisan migrate

# 6. Start the development server
php artisan serve
```

Open **`http://localhost:8000`** in your browser. You're good to go! 🎉

<br/>

---

## 👨‍💻 Author

<div align="center">

<img src="https://capsule-render.vercel.app/api?type=waving&color=0:0f3460,50:16213e,100:1a1a2e&height=120&section=footer&text=Yefta%20Aditya&fontSize=28&fontColor=e94560&fontAlignY=55&desc=github.com%2FYefta2404-Ind&descAlignY=78&descColor=a8b2d8" width="100%" />

[![GitHub](https://img.shields.io/badge/GitHub-Yefta2404--Ind-181717?style=for-the-badge&logo=github)](https://github.com/Yefta2404-Ind)

*Built with ☕ and passion for LPMI Universitas Gunung Kidul*

</div>
