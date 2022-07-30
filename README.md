<h1 align="center">Laravel Retail Store</h1>

## Author

Dibuat oleh :

- Muhammad Ridha Hasbyallah (202010370311196) Operating Database
- Wahyu Patriaji (202010370311197) Front and back-end developer
- Muhammad Bagas Khoirul Anam (202010370311199) Report Writer
- Ihrom Saputra (202010370311323) Final Report and Database Desaigner

## Install

**Clone Repository**

```bash
https://github.com/whyaji/retail-store-laravel
```

**Download zip**

```bash
extract file zip
```

## Buka di kode editor


## Install composer

```bash
composer install
```

## Copy .Env

```bash
copy .env.example menjadi .env
```

## Buat database di localhost (myphpadmin atau oracle apex untuk table dapat di generate dengan file Tugas Besar Basisdata.ddl yang disediakan)

```bash
nama database : TBRSDB
```

## Setting database di .env untuk myphpadmin

```bash
DB_PORT=3306
DB_DATABASE=TBRSDB
DB_USERNAME=root
DB_PASSWORD=
```

## Setting database di .env untuk oracle apex versi 11g atau yang lain, untuk DB_USERNAME adalah workspace pada apex dan DB_PASSWORD isikan sesuai dengan yang di apex, jangan lupa nyalakan ekstensi oci8_19 dengan cara menghilangkan ';' pada extension=oci8_19 di file php.ini yang berada pada path php di install. 

```bash
DB_CONNECTION=oracle
DB_HOST=localhost
DB_PORT=1521
DB_DATABASE=xe
DB_USERNAME=TBRSDB
DB_PASSWORD=
```

## Generate key

```bash
php artisan key:generate
```

## Jalankan Serve

```bash
php artisan serve
```

## Contributing

Contributions, issues and feature requests di persilahkan.
Jangan ragu untuk memeriksa halaman masalah jika Anda ingin berkontribusi. **Berhubung Project ini saya sudah selesaikan dengan kelomok saya, namun banyak fitur yang kalian dapat tambahkan silahkan berkontribusi yaa!**

## License

- Copyright © 2022 Whyaji.
