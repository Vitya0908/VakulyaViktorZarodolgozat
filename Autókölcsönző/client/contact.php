<style>
  body{
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

  #hatter{
    background-color: white;
    text-align: center;
    padding-bottom: 10px;
    padding-top: 10px;
  }
</style>

<div id="hatter">
<h2>Vedd fel velünk a kapcsolatot</h2>
</div>
    <div class="site-section" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
         
          
        </div>
      </div>
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form method="post" id="contactForm">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0 mb-2">
                  <input type="text" class="form-control" placeholder="Családnév" id="csNev" name="csNev">
                </div>
                <div class="col-md-6 mb-2">
                  <input type="text" class="form-control" placeholder="Keresztnév" id="kerNev" name="kerNev">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12 mb-2">
                  <input type="text" class="form-control" placeholder="Email címed" id="email" name="email">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12 mb-2">
                  <textarea name="message" class="form-control" placeholder="Üzeneted felénk." cols="30" rows="10" id="message"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto mb-2">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Üzenet küldése">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5 mb-2">
              <h3 class="text-black mb-4">Kapcsolatfelvételi információk</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Address:</span>
                  <span>Kitudjaazt utca 3. , Budapest, Magyarország</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+36301947566</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>vakulyavitya@gmail.com</span></li>
                <span id="msg"></span>
              </ul>
    
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="contact.js"></script>


    

   