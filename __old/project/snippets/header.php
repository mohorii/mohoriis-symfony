<?php

include './data/pages.php';
global $pages;

$fileName = basename($_SERVER["SCRIPT_FILENAME"], '.php');
$page = $pages[$fileName];
$pageTitle = $page['titleDescription'] ?? $page['title'];
$pageImageUrl = $page['image'] ?? false
?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Moritz Preuß">
    <title>Moritz Preuß | <?= $pageTitle ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="./dist/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./dist/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./dist/img/favicon-16x16.png">
    <link rel="manifest" href="./dist/img/site.webmanifest">

    <meta name="msapplication-TileColor" content="#212121">
    <meta name="theme-color" content="#212121">


    <link href="./dist/main.min.css" rel="stylesheet">
</head>
<body>

<header id="header" class="header">
    <?php include 'header/navbar.php' ?>
</header>
<main>
