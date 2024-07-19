<?php
session_start();
if ( empty($_SESSION['username_pengelolaan_sampah'])){
    header('location:login');}
    include "proses/connect.php";
    $query = mysqli_query($conn,"SELECT * FROM tb_user WHERE username = '$_SESSION[username_pengelolaan_sampah]'");
    $hasil = mysqli_fetch_array($query);
  
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>penggelolaan sampah terpadu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        :root {
            --primary-color: #04a304;
            --secondary-color: #6c757d;
            --background-color: #f8f9fa;
            --font-family: 'Arial', sans-serif;
        }

        body {
            font-family: var(--font-family);
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: var(--primary-color);
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
        }

        .navbar-brand i {
            margin-right: 8px;
        }

        .sidebar {
            background-color: var(--secondary-color);
            padding: 1rem;
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 0.5rem 0;
            margin-bottom: 1rem;
        }

        .sidebar a:hover, .sidebar a.active {
            background-color: var(--primary-color);
            border-radius: 4px;
            color: #fff;
        }

        #main-content {
            margin-left: 270px;
            padding: 2rem;
        }

        .card {
            margin-top: 1rem;
            background-color: #ffffff;
            border: 1px solid #ced4da;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .fixed-bottom {
            background-color: transparent;
            color: var(--primary-color);
            padding: 0.5rem;
        }

        .nav-pills .nav-link.active {
            background-color: var(--primary-color);
        }
    </style>
</head>

<body style="height: 3000px;">
    <!-- header -->
    <?php include "header.php"; ?>
    <!-- end header -->
    <div class="container-lg">
        <div class="row">
            <!-- sidebar -->
            <?php include "sidebar.php"; ?>
            <!-- end sidebar -->
            
            <!-- content -->
            <?php 
           
                include $page;
           
            ?>
            <!-- content -->
        </div>
        <div class="fixed-bottom text-center mb-2">
            PENGELOLAAN SAMPAH TERPADU
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
