<style>
    html {
scroll-behavior: smooth;
}
:root{
scrollbar-color: rgb(210,210,210) rgb(46,54,69) !important;
scrollbar-width: thin !important;
}
::-webkit-scrollbar {
height: 12px;
width: 8px;
background: #000;
}
::-webkit-scrollbar-thumb {
background: gray;
-webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.75);
}
::-webkit-scrollbar-corner {
background: #000;
}
body{
margin:0;
overflow-x:hidden;
font-family: 'Noto Sans JP', sans-serif;
background-size:cover;
background-repeat:no-repeat;
background-position:center;
}









/*DEFAULT*/
a{
text-decoration:none;
transition:0.5s;
}









/*TOP NAVIGATION*/
header{
position:fixed;
top:2rem;
width:100%;
z-index:9;
transition:0.5s;
}

.topnav {
overflow: hidden;
background-color: #333;
width:80%;
height:70px;
margin:auto; 
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
transition:0.5s;
background-size:cover;
background-position:center;
}

.topnav a {
float: left;
display: block;
color: #f2f2f2;
text-align: center;
padding: 24px 20px;
text-decoration: none;
font-size: 17px;
position:relative;
transition:0.5s;
}

.logo{
width:30px;
position:relative;
top:-5px;
}

#active{
display:flex;
background:#eb592a;
}

.active:hover{
color:#fff;
}

.topnav .icon {
display: none;
}

.dropdown {
float: left;
overflow: hidden;
}

.dropdown .dropbtn {
font-size: 17px;    
border: none;
outline: none;
color: white;
padding: 24px 20px;
background-color: inherit;
font-family: inherit;
transition:0.5s;
}

.dropdown-content {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 180px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}

.dropdown-content a {
float: none;
color: black;
padding: 12px 16px;
margin:auto 0rem;
text-decoration: none;
display: block;
text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
color: #eb592a;
}

.dropdown-content a:hover {
background-color: #ddd;
color: black;
}

.dropdown:hover .dropdown-content {
display: block;
}

#files {
display: none;
}

@media screen and (max-width: 820px) {
.topnav{
height:auto;
}
#active b{
display:none;
}
.logo{
width:40px;
position:static;
}
.dropdown .dropbtn {
padding: 14px 16px;
}
.topnav a:not(:first-child), .dropdown .dropbtn {
display: none;
}
.topnav a.icon {
float: right;
display: block;
}
}

@media screen and (max-width: 820px) {
.topnav.responsive {position: relative;}
.topnav.responsive .icon {
position: absolute;
right: 0;
top: 0;
}
.topnav.responsive a {
float: none;
display: block;
text-align: left;
padding: 14px 16px;
}
.topnav.responsive .dropdown {float: none;}
.topnav.responsive .dropdown-content {position: relative;}
.topnav.responsive .dropdown .dropbtn {
display: block;
width: 100%;
text-align: left;
}
}











/*ANIMATION*/
.animate{
visibility: visible;
-webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
from {top: -50px; opacity: 0;} 
to {top: 60px; opacity: 1;}
}

@keyframes fadein {
from {top: -50px; opacity: 0;}
to {top: 60px; opacity: 1;}
}




















/*CONTAINER*/
.container{
width:100%;
height:200vh;
}
</style>

<!DOCTYPE html>
<html>
<head>

<!--TITLE-->
<title>NavBar</title>

<!--PLUGIN-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--EXTERNAL STYLESHEET-->
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--TOP NAVIGATION-->
<header id="header">
<div class="topnav" id="myTopnav">
<a href="#" id="active"><img src="https://i.ibb.co/42Kw9Sj/logo.png" class="logo"> <b>LOGO_HERE</b></a>
<a href="index.php">HOME</a>
<a href="index.php?program=services.php">Szervíz</a>
<a href="index.php?program=cars.php">Autóink</a>
<a href="index.php?program=about.php">Rólunk</a>
<a href="index.php?program=blog.php">Blog</a>
<a href="index.php?program=contact.php">Kapcsolatfelvétel</a>
<a href="index.php?program=proba2.php">Próba2</a>
<a href="#ClickOnTheIcon" style="float:right;"> 
<div class="image-upload">

</form>
</div>
</a>


<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
</div>
</header>





<!--CONTAINER-->
<div class="container">

</div>





</div>


<!--JAVASCRIPT-->
<script type="text/javascript" src="js/custom.js"></script>
</body>

<script>
    //TOP NAVIGATION
function NavBar() {
var x = document.getElementById("myTopnav");
if (x.className === "topnav") {
x.className += " responsive";
} else {
x.className = "topnav";
}
}
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
document.getElementById("myTopnav").style.width = "100%";
document.getElementById("header").style.position = "fixed";
document.getElementById("header").style.top = "0%";
} else {
document.getElementById("myTopnav").style.width = "80%";
document.getElementById("header").style.position = "fixed";
document.getElementById("header").style.top = "2rem";
}
}






//NAV BG IMAGE
var imagesObject = [];
function handleFileSelect(evt) {
var files = evt.target.files; // FileList object

// Loop through the FileList and render image files as thumbnails.
for (var i = 0, f; f = files[i]; i++) {

// Only process image files.
if (!f.type.match('image.*')) {
continue;
}
var reader = new FileReader();

// Closure to capture the file information.
reader.onload = function(e) {
displayImgData(e.target.result)
addImage(e.target.result);
};
reader.readAsDataURL(f);
}
}

function loadFromLocalStorage(){
var images = JSON.parse(localStorage.getItem("navbg"))

if(images && images.length > 0){
imagesObject = images;
images.forEach(displayImgData);
}
}

function addImage(imgData){
imagesObject.push(imgData);
localStorage.setItem("navbg", JSON.stringify(imagesObject));
 var txt;
  var r = confirm("Do you want to set the same image as body background?");
  if (r == true) {
    document.body.style.backgroundImage = "linear-gradient(rgba(1,1,1,.5), rgba(1,1,1,.5)),url(" + imgData + ")";
    localStorage.setItem("bodybgconfirm","true");
  } else {
    localStorage.setItem("bodybgconfirm","false");
  }
}

function displayImgData(imgData){
document.getElementById("myTopnav").style.backgroundImage = "linear-gradient(rgba(1,1,1,.5), rgba(1,1,1,.5)),url(" + imgData + ")";
var bodybg = localStorage.getItem("bodybgconfirm");
if(bodybg=="true"){
document.body.style.backgroundImage = "linear-gradient(rgba(1,1,1,.5), rgba(1,1,1,.5)),url(" + imgData + ")";
}
}

document.getElementById('files').addEventListener('change', handleFileSelect, false);
loadFromLocalStorage();





</script>
</html>