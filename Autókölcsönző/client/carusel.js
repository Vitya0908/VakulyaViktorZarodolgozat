
    fetch('carousel.php')
    .then(response => response.json())
    .then(data => render(data))


function render(data){
    let myString='<div class="carousel-indicators">'
    let i=0
    for(let obj in data){
        i++
        myString+=`
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="`+i+`" class="active" aria-current="true" aria-label="Slide "`+i+`"></button>`
    }
    myString+=`</div> <div class="carousel-inner">`
    i=0
    for(let obj of data){    
        i++
        myClass=i==1?'active':''
        myString+=`
        <div class='carousel-item ${myClass}'>
            <img src='${obj.kep}' class='d-block w-100' alt='...'>
        </div>`
    }
myString+=`</div>`
document.querySelector('#fotok').innerHTML=myString
}
