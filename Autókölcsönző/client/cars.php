
<style>
  .hatter{
    background-color: lightgray;
    position: relative;
        background-color: lightgray;
        background-image: url('./images/hatterke.jpg');
        background-repeat: no-repeat;
        background-position-x: center;
        background-position-y: center;
        background-attachment: fixed;
        background-size: cover;
        height: 100%;
  
  }
  body{
    color: white;
    
  }
  .kep{
    width:300px;
    height: 200px;
  }
  .container{
   z-index: 9999;
  
  }
</style>



<div class="site-section hatter">
  <div class="container">
    <div class="row justify-content-center " id="sorika">

    </div>
    </div>
</div>

<script>
  fetch('../server/readAutok.php')
    .then(response=>response.json())
    .then(data=>szakrender(data))

    function szakrender(data){
      console.log(data);
      let tblStrszak = '';
          
          for(let obj of data) {
            tblStrszak += `
            <div class="col-lg-3 mx-2 col-md-6 mb-3  border border-secondary bg-secondary rounded pt-5 pb-5 ps-3 ">
              <div class="item-1 ">
              <div class="kepek"> 
              <img src="images/${obj.kep}" alt="Image" class="img-fluid rounded kep">
              </div>
              <div class="item-1-contents">
              <div class="text-center">
              <h3><p>${obj.auto_nev}</p></h3>
              <div class="rating">
                ${csillag(obj.mertek)}
              </div>
              <div class="rent-price"><span><h3>${obj.ar} HUF/nap</h3></span></div>
              </div>
            
              <div class="d-flex action">
              <?php
                  if(isset($_SESSION['username'])):
              ?>
              <a href="index.php?program=foglalas.php&id=${obj.car_id}" class="mt-3 btn btn-primary m-auto">Foglalás</a>
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
            </div>`
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