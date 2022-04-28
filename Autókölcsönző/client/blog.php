<style>
  .accordion {
  max-width: 400px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  border-radius: 5px;
  overflow: hidden;
  font-family: "Quicksand", sans-serif;
  background: #004C99;
}

 body{
    background-color: #9ACBFF;
   
        
        background-color: lightgray;  
        position: relative;
        background-color: lightgray;
        background-image: url("./images/hatterke.jpg");
        background-repeat: no-repeat;
        background-position-x: center;
        background-position-y: center;
        background-attachment: fixed;
        background-size: cover;
        height: 100%;
  
  }

.accordion__label,
.accordion__content {
  padding: 14px 20px;
}

.accordion__label {
  display: block;
  color: #ffffff;
  font-weight: 500;
  cursor: pointer;
  position: relative;
  transition: background 0.1s;
}

.accordion__label:hover {
  background: rgba(0, 0, 0, 0.1);
}

.accordion__label::after {
  content: "";
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 20px;
  width: 12px;
  height: 6px;
  background-size: contain;
  transition: transform 0.4s;
}

.accordion__content {
  background: #ffffff;
  line-height: 1.6;
  font-size: 0.85em;
  display: none;
}

.accordion__input {
  display: none;
}

.accordion__input:checked ~ .accordion__content {
  display: block;
}

.accordion__input:checked ~ .accordion__label::after {
  transform: translateY(-50%) rotate(0.5turn);
}



</style>

<div class="container mt-3">
    <div class="row justify-content-center " id="sorika">
<div class="accordion">
  <div>
    <input type="radio" name="example_accordion" id="section1" class="accordion__input">
    <label for="section1" class="accordion__label">Mit jelent 1 bérleti nap?</label>
    <div class="accordion__content">
      <p>
      A bérleti nap nem naptári napra vonatkozik, mindig 24 órás időtartamot jelent.
      </p>
    </div>
  </div>
  <div>
    <input type="radio" name="example_accordion" id="section2" class="accordion__input">
    <label for="section2" class="accordion__label">Mikor kell a bérlésért fizetnem?</label>
    <div class="accordion__content">
     
      <p>
      A bérleti díj minden esetben előre fizetendő, legkésöbb az autó átvételekor.
      </p>
    </div>
  </div>
  <div>
    <input type="radio" name="example_accordion" id="section3" class="accordion__input">
    <label for="section3" class="accordion__label">Mennyit mehetek az autóval egy nap?</label>
    <div class="accordion__content">
    
      <p>
      Egy bérlési nap a jármű kategóriájától függően 150-250 km használatot tesz lehetővé, amely felett kilóméter díjat számítunk fel. A kilóméter limit és az extra kilóméterekért felszámított díj minden jármű esetében a jármű adatlapján jelenik meg.
      </p>
    </div>
  </div>
  <div>
    <input type="radio" name="example_accordion" id="section4" class="accordion__input">
    <label for="section4" class="accordion__label">Mennyit kell tankolnom?</label>
    <div class="accordion__content">
      <p>
      A gépkocsi tele üzemanyagtartállyal kerül átadásra. Amennyiben a bérlő a gépkocsit nem teletöltött üzemanyagtartállyal adja vissza, a bérlő a hiányzó üzemanyag árát + 5000 forint szolgáltatási díjat köteles megtéríteni.
      </p>
    </div>
  </div>
  <div>
  <div>
    <input type="radio" name="example_accordion" id="section5" class="accordion__input">
    <label for="section5" class="accordion__label">Hány éves kortól bérelhetek?</label>
    <div class="accordion__content">
      <p>
      Bérleti szolgáltatásunkat 18+ éves kortól lehet igénybe venni.
      </p>
    </div>
  </div>
  <div>
</div>
</div>
</div>