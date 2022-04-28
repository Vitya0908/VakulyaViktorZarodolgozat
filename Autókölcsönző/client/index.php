<?php
    session_start(); 
?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="auth/login.css">
  <link href=
'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
		rel='stylesheet'>
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
	</script>
	<script src=
"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
	</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Főoldal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a href="index.php?program=services.php" class="nav-link">Szervíz</a>
      <a href="index.php?program=cars.php" class="nav-link">Autóink</a>
      <a href="index.php?program=about.php" class="nav-link">Rólunk</a>
      <a href="index.php?program=blog.php" class="nav-link">Gyakori kérdések</a>
      <a href="index.php?program=contact.php" class="nav-link">Kapcsolatfelvétel</a>
</div>
<div class="navbar-nav loginSystem">
      <?php
                if(isset($_SESSION['username'])):
            ?>
            <a href="#" class="nav-link">Felhasználónév: <?=$_SESSION['username']?></a>
            <a href="../server/logout.php" class="nav-link">Kilépés</a>
            <?php
                    else:
                ?>
                 <a href="index.php?program=auth/login.php" class="nav-link">Bejelentkezés</a>
                 <a href="index.php?program=auth/register.php" class="nav-link">Regisztráció</a>
                 <?php
                    endif
                    ;
                ?>
      </div>
    </div>
  </div>
</nav>
<?php
            if(isset($_GET["program"]))
                include $_GET["program"];
            else
                include "home.php";
        ?>
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-fluid my-5">

  <footer class="text-white text-center text-lg-start bg-dark">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Autókölcsönző</h5>

          <p>
           Köszönjük ha minket választ, grantáljuk, hogy minden zökkenő mentesen fog lezajlani.
          </p>

          <p>
            Önnek csak az autók élvezetét kell élvezni mi pedig biztosítjuk, hozzá a rendszeresen karban tartott autót.
          </p>

          <div class="mt-4">
            <!-- Facebook -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-facebook-f"></i></a>
            <!-- Dribbble -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-dribbble"></i></a>
            <!-- Twitter -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-twitter"></i></a>
            <!-- Google + -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-google-plus-g"></i></a>
            <!-- Linkedin -->
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
       

          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Budapest</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">zarodolgozat123@gmail.com</span>
            </li>
           
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Nyitva tartás</h5>

          <table class="table text-center text-white">
            <tbody class="fw-normal">
              <tr>
                <td>Hétfő - Kedd:</td>
                <td>8:00 - 17:00</td>
              </tr>
              <tr>
                <td>Szerda - Szombat</td>
                <td>8:30 - 17:30</td>
              </tr>
              <tr>
                <td>Vasárnap</td>
                <td>9:00 - 12:00</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->


  </footer>

</div>
<!-- End of .container -->
<script>
      console.log(document.URL)
      for( let obj of document.links)
        if(obj.href==document.URL)
          obj.style = "color: #007bff !important;"
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>