<style>
    body{
        background-color: #9ACBFF;
    }

    .fo{
        margin-top: 50px;
    }
    .kepee{
        width: 800px;
        height: 450px;
       padding-top: 30px;
    }

    #sor{
        text-align: center;
    }

    .bal{
        padding-top: 50px;
    }

    .meret{
        width:600px;
        height: 500px;
    }
    .ar{
        text-align: center;
    }
</style>
<div id="carId" class="d-none">
    
<?=$_GET["id"]
?>
 </div>
 
<div class="container">
    <div class="row border border-dark fo">
        <div class="col-lg-12 text-center">
            <div id="sor">
</div>
</div>
        <div class="col-lg-6">
        <div class=" kepee">
            <div class="meret">

<img src="" alt="" id="kepecske" class="img-fluid">
</div>
</div>
        </div>
        <div class="col-lg-6 bal"><ul>
            <li>a</li>
            <li>a</li>
            <li>a</li>
</ul>
<form action="">
    <input type="date" id="start" name="start">
    <input type="date" id="end" name="end">
    <input type="text" hidden value="<?=$_GET["id"]?>" id="car" name="car">
<input type="button" value="Foglalás" onclick="foglalas()">
</form>
   
    </div>
    <div class="col-lg-6">
        Itt lesz az autó ára.
    </div>
    </div>
</div>
</div>
<script>
console.log(document.querySelector('#carId').textContent)
let id=document.querySelector('#carId').textContent
     fetch(`../server/readFoglalas.php?id=${id}`)
    .then(response=>response.json())
    .then(data=>{
        console.log(data)
        document.getElementById('sor').innerHTML=`<h1>${data.auto_nev}</h1>`
        document.getElementById('kepecske').setAttribute('src',"images/"+data.kep)
        
    })

    function foglalas(){
        let start = document.getElementById('start').value
        let end = document.getElementById('end').value
        let id = document.getElementById('car').value
        //console.log(start)
        //console.log(end)
        //console.log(id)
        
        const formData=new FormData(document.querySelector('form'))
        for(let obj of formData)
        console.log(obj)
        fetch('../server/booking.php',{method:"POST",body:formData})
            .then(res=>res.text())
            .then(data=>console.log(data))
    }

</script>