<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Quran API</title>
    </head>
    <body>
      <h3>Quran API</h3>
      <p>Get List of Surahs : <a href="<?php echo url()->current(); ?>/surah"><?php echo url()->current(); ?>/surah</a></p>
      <p>Get Ayahs by the number of Surah : <strong><?php echo url()->current(); ?>/surah/{number}</strong><br>
      Example : Get Alfatiha <a href="<?php echo url()->current(); ?>/surah/1"><?php echo url()->current(); ?>/surah/1</a></p>
      <p><ul>Credit :<li><a href="https://alquran.cloud/">https://alquran.cloud/</a> (Surah, Ayah, and English Translation) <a href="https://github.com/islamic-network/alquran.cloud/blob/master/LICENSE" target="_blank">LICENSE</a></li>
      <li><a href="https://quran.kemenag.go.id/">https://quran.kemenag.go.id/</a> (Indonesia Translation)</li></ul></p>
      <p>All code for this app is open source (and built with open source tools). You can check <a href="https://github.com/elfaro1453/quranapi.idn.sch.id">the repository</a></p>
    </body>
</html>
