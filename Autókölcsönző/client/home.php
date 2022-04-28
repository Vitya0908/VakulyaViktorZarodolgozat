<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="utf-8" />
  <title>Főoldal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/fooldal.css">

  <!-- Demo styles -->

</head>

<body>
  <div id="cimhatter">
<h1 id="cim">Vitya autókölcsönzője</h1>
</div>
<div class="container hatterke">
  <img src="./images/" alt="">
    


  <div class="site-section">
  <div class="container">
    <div class="row justify-content-center " id="sorika">


    </div>
</div>
<style>
  .meret{
    height: 180px;
  }

  .meret1{
    height: 160px;
  }

</style>
<script>
  fetch('../server/readNepszeruseg.php')
    .then(response=>response.json())
    .then(data=>szakrender(data))

    function szakrender(data){
      console.log(data);
      let tblStrszak = '';
          
          for(let obj of data) {
            tblStrszak += `
            <div class="col-lg-3 mx-2 col-md-6 mb-4 border border-secondary rounded pr-5 pt-5 pb-5 ps-3 bg-secondary betu">
              <div class="item-1 ">
              <div class="kepek"> 
              <img src="images/${obj.kep}" alt="Image" class="img-fluid rounded">
              </div>
              <div class="item-1-contents">
              <div class="text-center">
              <h3><p>${obj.auto_nev}</p></h3>
              <div class="rating">
                ${csillag(obj.mertek)}
              </div>
              <div class="rent-price"><span>${obj.ar}HUF/nap</span></div>
              </div>
              <ul class="specs">
              <li>
              <span>Márka</span>
              <span class="spec">${obj.marka}</span>
              </li>

              <li>
              <span>Típus</span>
              <span class="spec">${obj.auto_nev}</span>
              </li>

              <li>
              <span>Váltó</span>
              <span class="spec">${obj.valto}</span>
              </li>

              <li>
              <span>Évjárat</span>
              <span class="spec">${obj.evjarat}</span>
              </li>

              <li>
              <span>Teljesítmény</span>
              <span class="spec">${obj.loero} LE</span>
              </li>

              <li>
              <span>Ülések száma</span>
              <span class="spec">${obj.ulesek_szama}</span>
              </li>

              </ul>
              <div class="d-flex action">
              <?php
                  if(isset($_SESSION['username'])):
              ?>
              <a href="index.php?program=foglalas.php&id=${obj.car_id}" class="btn btn-primary m-auto mt-2">Foglalás</a>
              <?php
                else:
              ?>
                <p>Jelentkez be a kölcsönzéshez</p>
              <?php
                endif
              ?>
              </div>
              </div>
              </div>
            </div>
            
            `
          }
          
          document.getElementById('sorika').innerHTML = tblStrszak;
        }
        function csillag (db) {
          let a = "";

          for(let i = 0; i<db; i++) {
            a += `<span class="icon-star text-warning"></span>`;
          }

          return a;
        }
</script>




    <div class="row g-5">
      <div class="col-md-6 col-sm-12  ">
        <div class="p-1 border bg-light meret1">
          <h2 class="">Amik az árba beletartoznak</h2>
          <ul>
            <li>Biztosítási díjat</li>
            <li>Ha lerobbana az autó azonnali segély nyújtást biztosítunk és csere autót.</li>
            <li>
              <p class="fs-4-text">500km/nap, ezt meghaladóan +60ft/km.</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="p-3 border bg-light">
          <h2 class="">Bérleti díj nem tartalmazza</h2>
          <ul>
            <li>A szabályszegéseket követő büntetéseket.</li>
            <li>Autópálya és parkolási díjakat.</li>
            <li>
              <p class="fs-4-text">Üzemanyag díjat</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="p-3 border bg-light meret">
          <h2 class="">Szükséges Dokumentumok</h2>
          <ul>
            <li>Személyi igazolvány vagy útlevél</li>
            <li>Lakcímkártya</li>
            <li>Érvényes jogosítvány</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="p-3 border bg-light">
          <h2 class="">Cégek esetén</h2>
          <ul>
            <li>cég képviselőjének személyes adatai</li>
            <li>aláírási címpéldány</li>
            <li>friss cégkivonat</li>
            <li>bélyegző</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <script src="carusel.js">
  </script>
</body>

</html>