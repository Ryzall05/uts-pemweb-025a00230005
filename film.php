<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film - Apocalypse Cinema Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1 class="logo">Apocalypse Cinema Database (ACBD)</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Beranda & Profil</a></li>
                    <li><a href="film.php" class="active">Daftar Film</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container">
        <section class="summary-section">
            <h2>Ringkasan Koleksi</h2>
            <p>Statistik film akan ditampilkan di sini.</p>
        </section>
        <section class="catalog-section">
            <div class="movie-grid">
                <!-- contoh dummy -->
                <article class="movie-card">
                    <div class="poster-wrapper">
                        <span class="badge badge-rating">★ 8.5</span>
                        <span class="badge badge-type type-movie">Movie</span>
                        <img src="assets/sample.jpg" alt="Poster Film Sample" class="movie-poster">
                        <span class="movie-duration">01:45</span>
                    </div>
                    <div class="movie-info">
                        <h3 class="movie-title">Train to Busan</h3>
                        <p class="movie-year">2016</p>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 Apocalypse Cinema Database. Proyek UTS Pemrograman Web.</p>
    </footer>
</body>
</html>