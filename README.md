# Quran API
Quran API support Bahasa Indonesia and English Translation. 

## Set Up and Run Locally.
This project was built using Laravel 7, so you need at least PHP 7.2 and Composer installed on your machine.

1. Clone this repo
2. Using cmd, run `cd quran`
3. Run `composer install`
1. Run `php artisan serve`
2. Go to localhost:8000

## Deploy to Server
Since this project uses sqlite, you don't need to set up any database. 

Set up project and upload all files in root project to your server which support php >7.2.

## Database Structure
Since it uses sqlite database, you may use the database in other purpose such as building android app.

The database is located at `\quran\database\alquran.db`

Please refer to this sql for the database structure :

```
CREATE TABLE `info_surah` (
  `number` INTEGER PRIMARY KEY,
  `asma` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `translationId` text DEFAULT NULL,
  `translationEn` text DEFAULT NULL,
  `numberOfAyahs` int(11) DEFAULT NULL,
  `typeId` text DEFAULT NULL,
  `typeEn` text DEFAULT NULL,
  `orderNumber` int(11) DEFAULT NULL
);
CREATE TABLE `quran_id` (
  `id`INTEGER PRIMARY KEY,
  `surahId` int(11) DEFAULT NULL,
  `verseId` int(11) DEFAULT NULL,
  `ayahText` longtext DEFAULT NULL,
  `indoText` longtext DEFAULT NULL,
  `enText` longtext DEFAULT NULL,
  `readText` longtext DEFAULT NULL,
  `juz` int(11) DEFAULT NULL,
  `manzil` int(11) DEFAULT NULL,
  `page` int(11) DEFAULT NULL,
  `ruku` int(11) DEFAULT NULL,
  `hizbQuarter` int(11) DEFAULT NULL,
  `sajda` tinyint(1) DEFAULT NULL
);
```

## License
This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
