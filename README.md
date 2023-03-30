## Hello, Kami Dari Kelompok 233 Kelas SI-44-03  <img src="https://media.giphy.com/media/hvRJCLFzcasrR4ia7z/giphy.gif" width=25> !
<div align="center">
<img src="https://i.giphy.com/media/qgQUggAC3Pfv687qPC/giphy.webp">
</div>
<br>
 
 
## TUGAS BESAR REKAYASA PERANGKAT LUNAK
Pada tugas besar Rekayasa Perangkat Lunak (RPL) ini kami membuat sebuah website bernama `FarmHouse`. `FarmHouse` adalah sebuah website tentang edukasi dunia peternakan. Website ini dibuat menggunakan [PHP](https://www.php.net/) dan [Laravel](https://laravel.com/) sebagai framework untuk Backend dan [HTML](https://en.wikipedia.org/wiki/HTML) dan [CSS](https://en.wikipedia.org/wiki/CSS) dengan framework [Bootstrap](https://getbootstrap.com/) untuk Frontend.

## Tentang Kami
Kami merupakan kelompok 233 (FarmHousers)  yang berasal dari kelas SI-44-03, program studi S1 Sistem Informasi, Telkom University. Kami beranggotakan 6 orang, diantaranya:

| No  | Nama                                                                 | NIM        | Role            |
| --- | -------------------------------------------------------------------- | ---------- | --------------- |
| 1   | [M. Felix Nugraha Tarjono](https://www.instagram.com/felix.ngrh)     | 1202204268 | Project Manager |
| 2   | [Rafid Fadhil](https://www.instagram.com/rafidfadhill)               | 1202204021 | Analyst         |
| 3   | [Novan Janis Aditya Halawa](https://www.instagram.com/novanjanis)    | 1202201382 | Programmer      |
| 4   | [Fadli Izurohman](https://www.instagram.com/izurohmanq)              | 1202204033 | Programmer      |
| 5   | [Ruben Adisuryo Nugroho](https://www.instagram.com/rubenadi_)        | 1202200152 | Programmer      |
| 6   | [Diki Ilham Firmansyah](https://www.instagram.com/diki_if)           | 1202202134 | Programmer      |


## Repository Structure

The repository is structured as follows:

-   `main` adalah main branch repositori dan berisi kode versi stabil terbaru.
-   `dev` adalah development branch repositori dan berisi versi pengembangan kode terbaru.
-   `feature/feature_name` adalah Branch repositori yang digunakan untuk mengembangkan fitur baru dan digabungkan menjadi dev saat sudah selesai.

## Cara Menjalankan Aplikasi
*Salin perintah ini di terminal kamu atau git bash*

- Clone project from github

```bash
git clone https://github.com/SI-RPL-2023/SI4402_228_TITIPAN.git 
```

- Copy the .env.example file to .env

```bash
cp .env.example .env
```

- Change the database name in the .env file

```bash
DB_PORT=your_mysql_port
DB_DATABASE=your_database_name
```

- Install Composer

```bash
composer install
```

- Generate Key

```bash
php artisan key:generate
```

- Migrate Database

```bash
php artisan migrate
```

- Link Storage

```bash
php artisan storage:link
```

- Run the server

```bash
php artisan serve
```
## Diagram ERD 

![WhatsApp Image 2023-03-30 at 16 21 48](https://user-images.githubusercontent.com/100100825/228791303-55dd10f8-89c2-4e6f-935d-45bb8a5aacd8.jpeg)

## Class Diagram 

![WhatsApp Image 2023-03-30 at 16 22 16](https://user-images.githubusercontent.com/100100825/228792497-864c78c5-525a-41dd-b72a-087429c1f9b3.jpeg)

## Usecase Diagram

![WhatsApp Image 2023-03-30 at 16 28 09](https://user-images.githubusercontent.com/100100825/228813937-be0897cb-cd77-48ce-b743-91f04ee7a782.jpeg)

