# tubescloudarc
* Tidak ada sistem registrasi di sini. Admin-lah yang menambah/menghapus user di halamannya.

Penggunaan :

* Membuat database dan tabel :
    - buat database dengan nama "codeigniter" dan tabel "login_session" di phpmyadmin
    - isi tabel adalah "id (AUTOINCREMENT, PRIMARY), username (varchar), password(varchar), dan level(varchar)".
    - masukan data admin sebagai data awal ke tabel "login_session" dengan username : admin dan password : admin dan level :          admin.
    - di sini, nilai level akan sama dengan username.
    - Anda perlu memasukan data admin yang dijelaskan sebelumnya ke tabel, karena jika tidak maka program akan error.

* Menjalankan script  
    - setelah di download semua, simpan hasilnya di dalam folder htdocs Anda.
    - cara mengetesnya : ketikan "localhost/WebVersi1/index.php/auth"
    - maka akan muncul halaman depan. silahkan klik "Log in".
    - maka akan muncul halaman login. Masukan username dan password admin.
    - maka akan muncul halaman utama milik admin. 
    - bagian kiri halaman akan terdapat fitur "new folder, upload, download, dsb" (belum jalan)
    - yang sudah selesai adalah bagian User management yang terletak di bagian kanan atas (dropdown menu admin).
    - klik dropdown menu admin itu dan akan muncul beberapa pilihan User management.

* Add user untuk menambahkan user (semacam registrasi oleh admin)
    - Idenya adalah saat admin menambahkan username dan password, maka di direktori                                                   "localhost/WebVersi1/application/controllers" akan terbentuk folder baru yang bernama sama dengan username yang      ditambahkan oleh admin.
    - Sama juga di direktori "localhost/WebVersi1/application/views" akan terbentuk folder baru bernama sama dgn username yg ditambahkan.
    - SECARA DEFAULT, di direktori "localhost/application" untuk controllers dan views,sudah terdapat folder bernama "admin" dan "member". 
    - Jika ada username baru yg ditambahkan, maka folder bernama username itu akan berisi semua file php yang dimiliki oleh folder default "member".
    - Folder DEFAULT admin dan member tidak boleh dihapus.
    - Sistem penamaan file yang ada di folder user baru juga tidak boleh diubah-ubah.
    - Anda boleh menambahkan script ke dalam file di dalam folder user baru tersebut, namun jangan MERUBAH isi script yang sudah ada sebelumnya.

* Edit user akan mengedit username dan password di phpmyadmin serta nama folder yang terbentuk di windows explorer.
* Delete user sama prinsipnya dgn edit user.

