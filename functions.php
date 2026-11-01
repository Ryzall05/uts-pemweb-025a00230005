<?php

declare(strict_types=1);

function e(string $teks): string {
    return htmlspecialchars($teks, ENT_QUOTES, 'UTF-8');
}

// Hitung total Film
function getTotalFilm(array $data): int {
    return count($data);
}

// Hitung total Penonton
function getTotalPenonton(array $data): int {
    $total = 0;
    foreach ($data as $film) {
        $total += $film['penonton'];
    }
    return $total;
}

// Hitung rata rata Rating
function getRataRataRating(array $data): float {
    if (count($data) == 0) return 0.0;

    $totalRating = 0;
    foreach ($data as $film) {
        $totalRating += $film['rating'];
    }
    return round($totalRating / count($data), 1);
}

// Hitung Jumlah Movie
function getTotalMovie(array $data): int {
    $count = 0;
    foreach ($data as $film) {
        if ($film['tipe'] === 'Movie') {
            $count++;
        }
    }
    return $count;
}

// Hitung Jumlah Series
function getTotalSeries(array $data): int {
    $count = 0;
    foreach ($data as $film) {
        if ($film['tipe'] === 'Series') {
            $count++;
        }
    }
    return $count;
}