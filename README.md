# Final Project

- App Name : _ToPlanter_
- Build with : _PHP Native_ and _tailwindcss_
- Our Team :

| Nama  | NIM | Status |
| ------------- |:-------------:|:-------------:|
| YUDHA PRATAMA PUTRA | 18.11.2375 | Ketua |
| MUHAMMAD DWI PRASETYO | 18.11.2365 | Wakil |
| CHANDRA AGUNG RIZKY | 18.11.2354 | Anggota |
| ANDRE ADI ANUWAR | 18.11.2558 | Anggota |
| MUH. ASADULLOH AL MUBAROK | 18.11.1944 | Anggota |

## Update Note

- v2
  - Ubah cara routing mengikuti [Tutorial Web Programming UNPAS "Membuat Aplikasi MVC dengan PHP"][1]
  - `app/controllers/pages` adalah tempat mengarahkan user ke tampilan halaman berdasarkan nama file (controller) dan methodnya, serta memberikan data ke halaman
  - `app/core/App.php` adalah tempat memecah url request menjadi nama file (controller) , method, dan parameter
  - `app/core/Controller.php` adalah tempat mengambil views, dan data app.ini
  - `app/init.php` adalah tempat mendeklarasikan file php yang ingin di sertakan
  - file views ditempatkan di folder sesuai dengan nama controllers/pages yang mengaturnya
- v2.0.1
  - menambah class model di `app/models`
  - restruktur `app/models/database.sql`
  - `app/core/Database.php` adalah wrapper database yang langsung berhubungan dengan database dan data sensitif database
  - koneksi yang digunakan di `app/core/Database.php` adalah koneksi dengan `PDO`
  - menambah info host dan type database di file `app/app.ini`
  - `app/controllers/middleware` adalah tempat pengubung antara `pages` dengan `model`
- v2.0.1.1
  - ubah cara init class di `app/init.php` menggunakan `spl_autoload_register($className)`
  - Menambahkan Fungsi Login

## Instalasi app

1. buka folder `app`
2. rename file `app_copy.ini` menjadi `app.ini`
3. buka `app.ini`
4. Isi data database kalian

### ! Jika nama folder utamanya (root) bukan FP

1. buka file .htaccess
2. ganti `RewriteBase` -nya jadi nama folder kalian
3. buka folder `app`, lalu buka file `app.ini`
4. ganti `app_path` dan `app_root` menjadi nama folder utama kalian

### ! Untuk menghindari lag atau bug di tailwindcss saat development

1. pastikan anda sudah menginstall [node.js][2]
2. buka terminal atau cmd kalian
3. ketikkan untuk menginstall dependencies

```sh
    npm install
```

4. setelah itu kalian ketikkan ini untuk menjalankan tailwindcss CLI

```node
    npx tailwindcss -i assets/css/main.css -o assets/css/tailwindcss.css --minify --watch
```

5. biarkan terminal atau cmd kalian tetap terbuka
6. done, kalian bisa lanjutkan development kalian tanpa khawatir bug

#### Just Note

```php
// Alternative penulisan php echo
<?= $variable; ?> = <?php echo;?>
```

[1]: (https://www.youtube.com/playlist?list=PLFIM0718LjIVEh_d-h5wAjsdv2W4SAtkx)
[2]: (https://nodejs.org/en/)

[cara install tailwindcss di html](https://themesberg.com/knowledge-center/tailwind-css/html)
