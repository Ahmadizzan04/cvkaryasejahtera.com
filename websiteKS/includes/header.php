<?php
// Default title jika belum ditentukan
if (!isset($pageTitle)) {
    $pageTitle = "Distributor FMCG & Pengembangan Pasar";
}
$companyName = "CV Karya Sejahtera";
$current_page = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?> | <?= $companyName ?></title>
    <meta name="description" content="<?= $companyName ?> - Distributor FMCG terpercaya langsung dari pabrik (tepung terigu, minyak goreng, lemak nabati) melayani Ruteng, Manggarai, Labuan Bajo, Flores, dan NTT.">
    
    <!-- Google Fonts: Plus Jakarta Sans for Smooth & Modern Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Swiper CSS for Smooth Sliders / Carousels -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Custom Refined CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-white">
