
            <?php 
            if (isset($_GET['x']) && $_GET['x']=='home'){
                $page = "home.php";
                include "main.php";
            }elseif (isset($_GET['x']) && $_GET['x']=='beranda'){
                $page = "beranda.php";
                include "main.php";
            }elseif (isset($_GET['x']) && $_GET['x']=='jadwalpengumpulan'){
                $page = "jadwalpengumpulan.php";
                include "main.php";
            }elseif (isset($_GET['x']) && $_GET['x']=='laporanpenggaduan'){
                $page = "laporanpenggaduan.php";
                include "main.php";
            }elseif (isset($_GET['x']) && $_GET['x']=='panduandaurulang'){
                $page = "panduandaurulang.php";
                include "main.php";
            }elseif (isset($_GET['x']) && $_GET['x']=='login'){
                include "login.php";
            }elseif (isset($_GET['x']) && $_GET['x']=='logout'){
                include "proses/proses_logout.php";
            }elseif (isset($_GET['x']) && $_GET['x']=='user'){
                $page = "user.php";
                include "main.php";
            }

        
            else{
                $page = "home.php";
                include "main.php";
            }
            ?>
        