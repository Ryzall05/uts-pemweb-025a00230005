<?php

declare(strict_types=1);

require __DIR__ . "/data.php";
require __DIR__ . "/functions.php";

$totalFilm     = getTotalFilm($films);
$totalPenonton = getTotalPenonton($films);
$rataRating    = getRataRataRating($films);
$totalMovie     = getTotalMovie($films);
$totalSeries    = getTotalSeries($films);

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
            <h1 class="logo">Apocalypse Cinema Database (ACDB)</h1>
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
            <div class="stats-grid">
                <h3>Total Film</h3>
                <p><?= $totalFilm ?> Judul</p>
            </div>
            <div class="stat-card">
                <h3>Total Penonton</h3>
                <p><?= number_format($totalPenonton, 0, ',', '.') ?></p>
            </div>
            <div class="stat-card">
                <h3>Rata-Rata Rating</h3>
                <p>★ <?= $rataRating ?></p>
            </div>
            <div class="stat-card">
                <h3>Tipe Konten</h3>
                <p><?= $totalMovie ?> Movie | <?= $totalSeries ?> Series</p>
            </div>
        </section>
        <section class="catalog-section">
            <h2>Film Unggulan Hari Ini</h2>
            <div class="movie-grid">
                <?php foreach ($films as $film): ?>
                    <article class="movie-card">
                        <div class="poster-wrapper">
                            <span class="badge badge-rating">★ <?= e((string)$film['rating']) ?></span>
                            <span class="badge badge-type <?= $film['tipe'] === 'Movie' ? 'type-movie' : 'type-series' ?>">
                                <?= e($film['tipe']) ?>
                            </span>
                            <img src="<?= e($film['poster']) ?>" alt="Poster <?= e($film['judul']) ?>" class="movie-poster">
                            <span class="movie-duration"><?= e($film['durasi']) ?></span>
                        </div>
                        <div class="movie-info">
                            <h3 class="movie-title"><?= e($film['judul']) ?></h3>
                            <p class="movie-year"><?= e((string)$film['tahun']) ?> • <?= e($film['negara']) ?></p>
                            <p class="movie-genre"><strong>Genre:</strong> <?= e($film['genre']) ?></p>
                            <p class="movie-views">👁️ <?= number_format($film['penonton'], 0, ',', '.') ?> Penonton</p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    <footer class="footer-katalog">
        <p>&copy; 2026 Apocalypse Cinema Database. Proyek UTS Pemrograman Web.</p>
    </footer>
</body>
</html>