# Final Project

- App Name : _ToPlanter_
- Build with : _PHP Native_ and _tailwindcss_
- Our Team :

  - YUDHA PRATAMA PUTRA 18.11.2375 (Ketua)
  - MUHAMMAD DWI PRASETYO 18.11.2365
  - CHANDRA AGUNG RIZKY 18.11.2354
  - ANDRE ADI ANUWAR 18.11.2558
  - MUH. ASADULLOH AL MUBAROK 18.11.1944

## Instalasi app

1. buka folder app
2. rename file app_copy.ini menjadi app.ini
3. Isi data database anda pada app.ini

### ! Jika nama folder utamanya (root) bukan FP

1. buka file .htaccess
2. ganti RewriteBase -nya jadi nama folder kalian

### ! Untuk menghindari lag atau bug di tailwindcss saat development

1. pastikan anda sudah menginstall [node.js](https://nodejs.org/en/)
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

[cara install tailwindcss di html](https://themesberg.com/knowledge-center/tailwind-css/html)
