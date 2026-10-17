<?php
require_once "auth.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Biodata mahasiswa - Web Programming 1">
  <title>Biodata | Web Programming 1</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Web Programming 1</h1>
    <p>Praktikum Pemrograman Web</p>
  </header>
  <nav>
    <a href="dashboard.php">Dashboard</a>
    <a href="index.php">Home / Biodata</a>
    <a href="layout.php">Layout Lab</a>
    <a href="data_mahasiswa.php">Data Mahasiswa</a>
    <a href="form_mahasiswa.php">Tambah Mahasiswa</a>
    <a href="logout.php">Logout</a>
  </nav>
  <main>
    <section>
      <h2>Biodata Mahasiswa</h2>
      <img src="foto.jpg" alt="Foto Profil" class="profile-photo">
      <table class="data-table">
        <tbody>
          <tr>
            <th scope="row">Nama</th>
            <td>Rasyadan Rizky Firdaus</td>
          </tr>
          <tr>
            <th scope="row">NIM</th>
            <td>4112755201250006</td>
          </tr>
          <tr>
            <th scope="row">Program Studi</th>
            <td>Informatika</td>
          </tr>
          <tr>
            <th scope="row">Email</th>
            <td>rasyadan.firdaus.fict@krw.horizon.ac.id</td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>
  <footer>
    <p>Web Programming 1</p>
  </footer>
</body>

</html>
