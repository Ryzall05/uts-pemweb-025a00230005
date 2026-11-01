<?php
declare(strict_types=1);
// Load data film & fungsi logika
require __DIR__ . "/data.php";
require __DIR__ . "/functions.php";

$totalFilm = getTotalFilm($films);
$totalPenonton = getTotalPenonton($films);
$rataRating = getRataRataRating($films);
$totalMovie = getTotalMovie($films);
$totalSeries = getTotalSeries($films);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Apocalypse Cinema Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1 class="logo">Apocalypse Cinema Database (ACDB)</h1>
            <nav>
                <ul>
                    <li><a href="index.php" class="active">Beranda & Profil</a></li>
                    <li><a href="film.php">Daftar Film</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container">
        <section class="profile-section">
            <h2>Tentang ACDB</h2>
            <p>
                Selamat datang di <strong>Apocalypse Cinema Database (ACDB)</strong>, sebuah platform katalog dinamis berbasis PHP murni yang menyajikan pustaka data film bergenre horor, thriller, dan apokalips zombie. Seluruh koleksi, rating, serta statistik dalam web ini dikurasi secara langsung berdasarkan pengalaman pribadi pembuat sebagai penikmat film bertema <em>survival horror</em>.
            </p>
            <p>
                ACDB hadir sebagai wadah informasi yang praktis dan interaktif untuk memberikan rekomendasi terbaik, memudahkan sesama pecinta film apokalips zombie dalam menjelajahi daftar koleksi, serta melihat detail lengkap mulai dari tahun rilis, durasi, hingga statistik tontonan.
            </p>        
        </section>
        <section class="profile-card">
            <h3>Tentang Pembuat Web</h3>
            <p><strong>Nama:</strong> Ahmad Fahrizal</p>
            <p><strong>Status:</strong> Mahasiswa S1 Informatika</p>
            <p><strong>Universitas:</strong> Tiga Serangkai University</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 Apocalypse Cinema Database. Proyek UTS Pemrograman Web.</p>
    </footer>
</body>
</html>