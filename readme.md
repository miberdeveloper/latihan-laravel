# Latihan CRUD

## Yang harus disiapkan pertama

1. Membuat database yang bernama `crud_laravel`
2. Membuat membuat tabel `mahasiswa` di dalam database `crud_laravel`
3. Membuat kolom dari tabel `mahasiswa` yang berisi 
   - `id : int auto increment`
   - `nama : varchar(255)`
   - `alamat : varchar(255)`
   - `nomer_hp : varchar(15)`


## Cara menggunakan file laravel
1. Mengclone/mendownload project ini ( [Tutorial github](https://www.petanikode.com/tutorial/git/) )
2. jika melakukan clone project ini yaitu dengan cara di command prompt
   ```bash
    $ git clone https://github.com/miberdeveloper/latihan-laravel.git
   ```
   > Diharapkan untuk menginstall GIT terlebih dahulu [Link download](https://git-scm.com/downloads)
3. Setelah di clone/download kemudian masuk ke dalam folder yang sudah di download
4. Setelah masuk kemudian melakukan **Update Composer** dengan cara `composer update` pada command prompt
   > Harus connect ke internet
5. Mengiinisialisasi **Key Generate** laravel dengan cara `php artisan key:generate` pada command prompt
6. Setelah itu melakukan config cache dengan cara `php artisan config:cache` pada command prompt
7. Setelah selesai laravel sudah bisa digunakan

Good luck :smile:
