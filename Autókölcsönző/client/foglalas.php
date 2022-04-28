

<style>
    .kepmeret{
        width: 450px;
        height: 250px;
    }
    body{
        color: white;
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

    .beljebb{
        margin-left: 175px;
        margin-bottom: 20px;
    }

    .datumb{
        margin-left: 35px;
    }

    .neveb{
     
        margin-left: 140px;
    }
    .felsorolasb{
        margin-top: 15px;
        margin-left: 80px;
    }
    .kepb{
        padding-top: 10px;
        padding-left: 10px;
        padding-bottom: 10px;
        padding-right: 10px;
    }

    .datumk{
        margin-top: 100px;
        margin-left: 10px;
    }

</style>

<div id="carId" class="d-none">
    
<?=$_GET["id"]
?>
 </div>
 <div id="sorika">
 <div class="container ">
    <div id="lejebb">
<div class="border border-dark  bg-secondary">
<div class="row g-0">
  <div class=" col-md-4 kepb"><img src="" alt="" class="kepek img-fluid kepmeret"></div>
  <div class=" col-md-4 m-auto ">
      <p id="autocim"></p>
                    <ul class="felsorolasb">
                  </ul>
                  </div>

                  <div class=" col-md-4">
                      <form action="">
                <div class="datumk"> Kezdeti dátum: <input type="text" class="my_date_picker" id="startDate"></div>

	            <div class="mb-4 datumb"> Vég dátum:    <input type="text" class="my_date_picker" id="endDate"></div>

    <div class="btn btn-primary beljebb" onclick="foglal()">Foglalás</div>
    </form>
</div>  

                  </div>

                  </div>
                 
                 
                 
     
 </div>

<script>
   
let id=document.querySelector('#carId').textContent

console.log(document.querySelector('#carId').textContent)

     fetch(`../server/readFoglalas.php?id=${id}`)
    .then(response=>response.json())
    .then(data=>{
        document.querySelector('.kepek').src="./images/"+data.kep
        document.querySelector('#autocim').innerHTML=`<h1 class="neveb"> ${data.auto_nev}</h1>` 
      document.querySelector('ul').innerHTML=` <li>${data.evjarat}</li>   <li>${data.szin}</li>   <li>${data.loero} lóerő</li>   <li>Ülések száma: ${data.ulesek_szama}</li>  <li>Váltó típusa: ${data.valto}</li> <li>Ár: <span class="ar"> ${data.ar}</span> Ft</li>`
        
    })

    let foglalt = []

$(document).ready(function () {
    $(function () {
        $(".my_date_picker").datepicker({
            dateFormat: 'dd-mm-yy',
            beforeShowDay: my_check
        });
    });

    let getDateArray = function (start, end) {
        let arr = new Array(),
            dt = new Date(start);
        while (dt <= end) {
            let s = new Date(dt)
            arr.push(s.toLocaleDateString());
            dt.setDate(dt.getDate() + 1);
        }
        return arr;
    }

    fetch(`../server/readDatum.php?id=${id}`)
        .then(result => result.json())
        .then(data => {
            console.log("szerver oldalról érkezik:",data)
            //az adatbázisból érkező adatokat összegyűjtjük:
            let foglaltPeriodusok = []
            
            for(let obj of data){
                console.log('data:',obj)
                foglaltPeriodusok.push({ startDate: new Date(obj.rental_date), endDate: new Date(obj.return_date) })
            }
            for (let obj of foglaltPeriodusok)
                foglalt = [...foglalt, ...getDateArray(obj.startDate, obj.endDate)]
    })

function my_check(in_date) {
    if (foglalt.includes(in_date.toLocaleDateString())) 
        return [false, "notav", 'Not Available'];
    else 
        return [true, "av", "available"];
}
    
})


function foglal(){
    let sd=document.getElementById('startDate').value
    let ed=document.getElementById('endDate').value
   
  

   // let ma=new Date()
    //console.log(ma.toLocaleDateString())
    var d = new Date();
var mm = d.getMonth() + 1 <10 ? '0'+(d.getMonth()+1) : d.getMonth()+1;
var dd = d.getDate()<10 ? '0'+d.getDate() : d.getDate();
var yy = d.getFullYear();
var myDateString = yy + '-' + mm + '-' + dd; //(US)
//sd= dd + '-' + mm + '-' + yy; //(US)
//ed= dd + '-' + mm + '-' + yy; //(US)
let sdarr=sd.split('-')
let edarr=ed.split('-')
let sdString=`${sdarr[2]}-${sdarr[1]}-${sdarr[0]}`
let edString=`${edarr[2]}-${edarr[1]}-${edarr[0]}`


if(sdString<myDateString || edString<sdString)
    alert("Rossz Dátum")
    else{
        fetch(`../server/readIdopontfoglalas.php?rental_date=${sdString}&return_date=${edString}&car_id=${id}`)  
        .then(result => result.text())
        .then(data => console.log(data))
        console.log(sd,ed,id)


        datum1 = new Date(sdString);
datum2 = new Date(edString);
kul = datum2.getTime()-datum1.getTime();
let ar = parseInt(document.querySelector('.ar').innerHTML)
alert(kul/(1000*60*60*24)+' nap van a két dátum között. \n\tÁr:'+(ar*kul/(1000*60*60*24))+' Ft.');

    }
}
           


   

  

   
</script>