# 📄 Dokumentasi Setup Web Server Lokal (Rofiq)

## 🧩 Stack yang Digunakan
- MySQL 5.7 (tanpa installer)
- PHP 7.3 (manual, FastCGI)
- Nginx (web server)
- CodeIgniter 3 (proyek di `D:\rental`)
- Git + VS Code

---

## 🛠️ Langkah-Langkah & Solusi

### 1. Git untuk VS Code
- Pilih opsi: `Git from the command line and also from 3rd-party software` saat install.

### 2. MySQL CLI (tanpa GUI)
- Jalankan dengan: `mysqld --console`
- Masalah: `ER_ACCESS_DENIED_ERROR` → belum atur user/password.

### 3. Web Server Ringan
- Menggunakan stack manual: **Nginx + PHP + MySQL**
- Tidak menggunakan XAMPP karena berat.

### 4. Script Otomatis Menyalakan Server
- `start-webserver.cmd`: Menjalankan MySQL, PHP FastCGI, dan Nginx.
- `shutdown-webserver.cmd`: Mematikan semua proses.

### 5. Konfigurasi Nginx untuk CI3
```nginx
server {
    listen 80;
    server_name localhost;
    root D:/rental;
    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }

    location ~ /\.ht {
        deny all;
    }
}
```

### 6. PHP Error: `Call to undefined function mysqli_init()`
- Solusi:
  - Edit `php.ini`: `extension=mysqli`
  - Pastikan path: `extension_dir = "C:/Users/rofiq/Downloads/webserver/php7.3/ext"`

### 7. PHP Warning: `Unable to load dynamic library`
- Solusi:
  - Download PHP versi lengkap
  - Set extension_dir dengan benar

### 8. Session Error: `session_start(): Failed to initialize storage module`
- Solusi:
  - Edit `php.ini`:
    ```ini
    session.save_path = "C:/Users/rofiq/Downloads/webserver/php7.3/tmp"
    ```
  - Buat folder `tmp`

---

mysqld --console
mysqld -u root
cd C:\Users\rofiq\Downloads\webserver\php7.3
start php-cgi.exe -b 127.0.0.1:9000

cd C:\Users\rofiq\Downloads\webserver\nginx
start nginx.exe

## ✅ Status Akhir
Semua berjalan dengan sukses:
- ✔️ MySQL aktif
- ✔️ PHP 7.3 lengkap
- ✔️ CI3 bisa diakses via Nginx
- ✔️ Git terintegrasi dengan VS Code