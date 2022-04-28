<?php
    session_start(); 
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    .swiper {
        width: 600px;
        height: 300px;
    }
</style>

<nav class="navbar navbar-expand-sm navbar-light bg-light">

    <a href="" class="navbar-brand mb-0 h1">
        
    </a>
    <button type="button" 
    data-bs-toggle="collapse" 
    data-bs-target="#navbarNav"
     class="navbar-toggler navbar fixed-top navbar-light bg-light"
     
     aria-controls="navbarNav"
     aria-expanded="false"
     aria-label="Toggle navigation"
     >
        Menü
    </button>
    <div class="collapse navbar-collapse navbar fixed-top navbar-light bg-light" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="index.php" class="nav-link">Főoldal</a>
            </li>
            <li class="nav-item active">
                <a href="index.php?program=services.php" class="nav-link">Szervíz</a>
            </li>
            <li class="nav-item active">
                <a href="index.php?program=cars.php" class="nav-link">Autóink</a>
            </li>
            <li class="nav-item active">
                <a href="index.php?program=about.php" class="nav-link">Rólunk</a>
            </li>
            <li class="nav-item active">
              <a href="index.php?program=blog.php" class="nav-link">Blog</a>
            </li>
            <li class="nav-item active">
                <a href="index.php?program=contact.php" class="nav-link">Kapcsolatfelvétel</a>
            </li>
        </ul>
        <ul class="navbar-nav ">
            <?php
                if(isset($_SESSION['username'])):
            ?>
        <li class="nav-item active">
                 <a href="#" class="nav-link"><?=$_SESSION['username']?></a>
                </li>
        <li class="nav-item active">
                 <a href="../server/logout.php" class="nav-link">Logout</a>
                </li>
                <?php
                    else:
                ?>

        <li class="nav-item active">
                 <a href="index.php?program=auth/login.php" class="nav-link">Login</a>
                </li>
            <li class="nav-item active">
                <a href="index.php?program=auth/register.php" class="nav-link">Register</a>
            </li>
        
            <?php
                    endif;
                ?>
        </ul>
    </div>
    <!-- active disabled -->
  </nav>


  
        <?php
            if(isset($_GET["program"]))
                include $_GET["program"];
            else
                include "home.php";
        ?>

     

    <script>
      console.log(document.URL)
      for( let obj of document.links)
        if(obj.href==document.URL)
          obj.style = "color: #007bff !important;"
    </script>
