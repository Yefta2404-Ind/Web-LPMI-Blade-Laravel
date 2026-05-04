<div align="center">

<br/>

```
██╗     ██████╗ ███╗   ███╗██╗     ██████╗ ███╗   ███╗███████╗
██║     ██╔══██╗████╗ ████║██║    ██╔════╝ ████╗ ████║██╔════╝
██║     ██████╔╝██╔████╔██║██║    ██║      ██╔████╔██║███████╗
██║     ██╔═══╝ ██║╚██╔╝██║██║    ██║      ██║╚██╔╝██║╚════██║
███████╗██║     ██║ ╚═╝ ██║██║    ╚██████╗ ██║ ╚═╝ ██║███████║
╚══════╝╚═╝     ╚═╝     ╚═╝╚═╝     ╚═════╝ ╚═╝     ╚═╝╚══════╝
```

### **Content Management System — LPMI Universitas Gunung Kidul**

*Kelola konten kampus dengan lebih efisien, dinamis, dan terstruktur.*

<br/>

[![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)
[![License](https://img.shields.io/badge/License-MIT-22c55e?style=for-the-badge)](LICENSE)

</div>

---

## 🎯 Tentang Proyek

**LPMI Campus CMS** adalah platform manajemen konten yang dibangun khusus untuk **Lembaga Penjaminan Mutu Internal (LPMI) Universitas Gunung Kidul**. Sistem ini dirancang untuk mempermudah pengelolaan konten website kampus — dari berita, galeri, hingga struktur organisasi — secara terpusat, aman, dan mudah digunakan oleh berbagai peran pengguna.

> 💡 *Tidak perlu sentuh kode. Cukup login, kelola, dan publish.*

---

## ✨ Fitur Unggulan

| Fitur | Deskripsi |
|-------|-----------|
| 🔐 **Auth & Role-Based Access** | Login aman dengan kontrol akses berbasis peran (Admin, Staff, Public) |
| 📊 **Admin Dashboard** | Tampilan ringkasan konten dan aktivitas sistem dalam satu layar |
| 📰 **Manajemen Berita & Pengumuman** | Workflow input → approval sebelum dipublikasikan |
| 🖼️ **Manajemen Galeri** | Upload dan kelola foto kegiatan kampus dengan mudah |
| 📄 **Manajemen Halaman & Menu** | Buat dan atur halaman statis serta navigasi website |
| 🏛️ **Struktur Organisasi** | Kelola tampilan struktur organisasi LPMI secara visual |
| 📱 **Responsive UI** | Tampil sempurna di desktop maupun mobile |
| ⚡ **CRUD Lengkap** | Operasi data penuh di semua modul |

---

## 🛠️ Tech Stack

```
Backend   →  Laravel (PHP)
Frontend  →  Blade Template + Bootstrap / Tailwind CSS + JavaScript
Database  →  MySQL
```

---

## 📸 Screenshots

### 🖥️ Dashboard

<table>
  <tr>
    <td align="center"><strong>Admin</strong></td>
    <td align="center"><strong>Staff</strong></td>
  </tr>
  <tr>
    <td><img width="500" alt="Admin Dashboard" src="https://github.com/user-attachments/assets/49f28b07-981a-4a7a-bd4e-ce4bbb4843fe" /></td>
    <td><img width="500" alt="Staff Dashboard" src="https://github.com/user-attachments/assets/1a4c0613-417e-4387-b03c-85db785de783" /></td>
  </tr>
</table>

<details>
<summary>📰 News Management — klik untuk lihat</summary>
<br/>

**Tampilan Publik**
<img width="900" alt="News Public" src="https://github.com/user-attachments/assets/79f502a4-7ed5-4c54-a74b-eab64a408f0b" />

**Staff (Input Berita)**
<img width="900" alt="News Staff" src="https://github.com/user-attachments/assets/6e14c924-10b6-4761-8b45-9876e32b18e7" />

**Admin (Approval)**
<img width="900" alt="News Admin Approval" src="https://github.com/user-attachments/assets/e1a3a114-d154-49e6-a67d-72bfd5827c1d" />
</details>

<details>
<summary>📄 Menu & Page Management — klik untuk lihat</summary>
<br/>

<img width="900" alt="Menu Index" src="https://github.com/user-attachments/assets/b85879c4-aaa9-4a5d-859e-6a46ba9e1c8d" />
<img width="900" alt="Page Index" src="https://github.com/user-attachments/assets/4165157c-6818-484c-8cfe-9d609000c3aa" />
</details>

<details>
<summary>🏛️ Organization Structure Management — klik untuk lihat</summary>
<br/>

**Tampilan Publik**
<img width="900" alt="Org Public" src="https://github.com/user-attachments/assets/7a7353a2-41d6-437d-b379-31e43e27c814" />

**Panel Admin**
<img width="900" alt="Org Admin" src="https://github.com/user-attachments/assets/8cf1078b-eef9-4987-8c36-1ccd6ef294c0" />
</details>

---

## 🚀 Instalasi

> Pastikan sudah menginstall **PHP 8+**, **Composer**, dan **MySQL** di mesin kamu.

```bash
# 1. Clone repository
git clone https://github.com/Yefta2404-Ind/lpmi-campus-cms.git
cd lpmi-campus-cms

# 2. Install dependencies
composer install

# 3. Konfigurasi environment
cp .env.example .env
php artisan key:generate

# 4. Setup database
# Edit .env → sesuaikan DB_DATABASE, DB_USERNAME, DB_PASSWORD
php artisan migrate

# 5. Jalankan server
php artisan serve
```

🎉 Buka **http://localhost:8000** di browser kamu!

---

## 👤 Author

<div align="center">

**Yefta Aditya**

[![GitHub](https://img.shields.io/badge/GitHub-Yefta2404--Ind-181717?style=for-the-badge&logo=github)](https://github.com/Yefta2404-Ind)

*Dibangun dengan ☕ dan Laravel untuk kemajuan LPMI Universitas Gunung Kidul*

</div>
