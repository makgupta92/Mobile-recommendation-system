<html lang=''>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  position: absolute;right: 100px; top: 150px;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  opacity: 0;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
   <title>Moblie Recommender</title>
</head>
<?php
include('conn.php');
error_reporting(0);
if(isset($_GET['search_mobile'])){
	if(isset($_GET['budgetval'])){
		if(isset($_GET['p1'])){
			if($_GET['budgetval']=="1" && $_GET['p1']=="11"){
				$sqlqry="select * from table1 where price<=10000 order by Camera desc, rating desc";
			}
			if($_GET['budgetval']=="1" && $_GET['p1']=="12"){
				$sqlqry="select * from table1 where price<=10000 order by Battery desc";
			}
			if($_GET['budgetval']=="1" && $_GET['p1']=="13"){
				$sqlqry="select * from table1 where price<=10000 order by RAM desc";
			}
			if($_GET['budgetval']=="2" && $_GET['p1']=="11"){
				$sqlqry="select * from table1 where price>=10000 and price<=25000 order by Camera desc";
			}
			if($_GET['budgetval']=="2" && $_GET['p1']=="12"){
				$sqlqry="select * from table1 where price>=10000 and price<=25000 order by Battery desc";
			}
			if($_GET['budgetval']=="2" && $_GET['p1']=="13"){
				$sqlqry="select * from table1 where price>=10000 and price<=25000 order by RAM desc";
			}
			if($_GET['budgetval']=="3" && $_GET['p1']=="11"){
				$sqlqry="select * from table1 where price>=25000 order by Camera desc";
			}
			if($_GET['budgetval']=="3" && $_GET['p1']=="12"){
				$sqlqry="select * from table1 where price>=25000 order by Battery desc";
			}
			if($_GET['budgetval']=="3" && $_GET['p1']=="13"){
				$sqlqry="select * from table1 where price>=25000 order by RAM desc";
			}
			if($_GET['budgetval']=="1" && $_GET['p1']=="11" && $_GET['p2']=="22"){
				$sqlqry="select * from table1 where price<=10000 order by Camera DESC,Battery desc, rating desc";
			}
			if($_GET['budgetval']=="1" && $_GET['p1']=="11" && $_GET['p2']=="23"){
				$sqlqry="select * from table1 where price<=10000 order by Camera DESC,RAM desc, rating desc";
			}
			if($_GET['budgetval']=="1" && $_GET['p1']=="12" && $_GET['p2']=="21"){
				$sqlqry="select * from table1 where price<=10000 order by Battery desc, Camera DESC, rating desc";
			}
			if($_GET['budgetval']=="1" && $_GET['p1']=="12" && $_GET['p2']=="23"){
				$sqlqry="select * from table1 where price<=10000 order by Battery desc, RAM DESC, rating desc";
			}
			if($_GET['budgetval']=="1" && $_GET['p1']=="13" && $_GET['p2']=="21"){
				$sqlqry="select * from table1 where price<=10000 order by RAM desc, Camera DESC, rating desc";
			}
			if($_GET['budgetval']=="1" && $_GET['p1']=="13" && $_GET['p2']=="22"){
				$sqlqry="select * from table1 where price<=10000 order by RAM desc, Battery DESC, rating desc";
			}
			if($_GET['budgetval']=="1" && $_GET['p1']=="11" && $_GET['p2']=="22" && $_GET['p3']=="33"){
				$sqlqry="select * from table1 where price<=10000 order by Camera desc, Battery DESC, RAM desc, rating desc";
			}
			if($_GET['budgetval']=="1" && $_GET['p1']=="11" && $_GET['p2']=="23" && $_GET['p3']=="32"){
				$sqlqry="select * from table1 where price<=10000 order by Camera desc, RAM desc, Battery DESC, rating desc";
			}
			if($_GET['budgetval']=="1" && $_GET['p1']=="12" && $_GET['p2']=="21" && $_GET['p3']=="33"){
				$sqlqry="select * from table1 where price<=10000 order by Battery DESC, Camera desc, RAM desc, rating desc";
			}
			if($_GET['budgetval']=="1" && $_GET['p1']=="12" && $_GET['p2']=="23" && $_GET['p3']=="31"){
				$sqlqry="select * from table1 where price<=10000 order by Battery DESC, RAM desc, Camera desc, rating desc";
			}
			if($_GET['budgetval']=="1" && $_GET['p1']=="13" && $_GET['p2']=="21" && $_GET['p3']=="32"){
				$sqlqry="select * from table1 where price<=10000 order by RAM DESC, Camera desc, Battery desc, rating desc";
			}
			if($_GET['budgetval']=="1" && $_GET['p1']=="13" && $_GET['p2']=="22" && $_GET['p3']=="31"){
			}
				$sqlqry="select * from table1 where price<=10000 order by RAM DESC, Battery desc, Camera desc, rating desc";
			if($_GET['budgetval']=="2" && $_GET['p1']=="11" && $_GET['p2']=="22"){
				$sqlqry="select * from table1 where price>=10000 and price<=25000 order by Camera DESC,Battery desc, rating desc";
			}
			if($_GET['budgetval']=="2" && $_GET['p1']=="11" && $_GET['p2']=="23"){
				$sqlqry="select * from table1 where price>=10000 and price<=25000 order by Camera DESC,RAM desc, rating desc";
			}
			if($_GET['budgetval']=="2" && $_GET['p1']=="12" && $_GET['p2']=="21"){
				$sqlqry="select * from table1 where price>=10000 and price<=25000 order by Battery desc, Camera DESC, rating desc";
			}
			if($_GET['budgetval']=="2" && $_GET['p1']=="12" && $_GET['p2']=="23"){
				$sqlqry="select * from table1 where price>=10000 and price<=25000 order by Battery desc, RAM DESC, rating desc";
			}
			if($_GET['budgetval']=="2" && $_GET['p1']=="13" && $_GET['p2']=="21"){
				$sqlqry="select * from table1 where price>=10000 and price<=25000 order by RAM desc, Camera DESC, rating desc";
			}
			if($_GET['budgetval']=="2" && $_GET['p1']=="13" && $_GET['p2']=="22"){
				$sqlqry="select * from table1 where price>=10000 and price<=25000 order by RAM desc, Battery DESC, rating desc";
			}
			if($_GET['budgetval']=="2" && $_GET['p1']=="11" && $_GET['p2']=="22" && $_GET['p3']=="33"){
				$sqlqry="select * from table1 where price>=10000 and price<=25000 order by Camera desc, Battery DESC, RAM desc, rating desc";
			}
			if($_GET['budgetval']=="2" && $_GET['p1']=="11" && $_GET['p2']=="23" && $_GET['p3']=="32"){
				$sqlqry="select * from table1 where price>=10000 and price<=25000 order by Camera desc, RAM desc, Battery DESC, rating desc";
			}
			if($_GET['budgetval']=="2" && $_GET['p1']=="12" && $_GET['p2']=="21" && $_GET['p3']=="33"){
				$sqlqry="select * from table1 where price>=10000 and price<=25000 order by Battery DESC, Camera desc, RAM desc, rating desc";
			}
			if($_GET['budgetval']=="2" && $_GET['p1']=="12" && $_GET['p2']=="23" && $_GET['p3']=="31"){
				$sqlqry="select * from table1 where price>=10000 and price<=25000 order by Battery DESC, RAM desc, Camera desc, rating desc";
			}
			if($_GET['budgetval']=="2" && $_GET['p1']=="13" && $_GET['p2']=="21" && $_GET['p3']=="32"){
				$sqlqry="select * from table1 where price>=10000 and price<=25000 order by RAM DESC, Camera desc, Battery desc, rating desc";
			}
			if($_GET['budgetval']=="2" && $_GET['p1']=="13" && $_GET['p2']=="22" && $_GET['p3']=="31"){
				$sqlqry="select * from table1 where price>=10000 and price<=25000 order by RAM DESC, Battery desc, Camera desc, rating desc";
			}
			if($_GET['budgetval']=="3" && $_GET['p1']=="11" && $_GET['p2']=="22"){
				$sqlqry="select * from table1 where price>=25000 order by Camera DESC,Battery desc, rating desc";
			}
			if($_GET['budgetval']=="3" && $_GET['p1']=="11" && $_GET['p2']=="23"){
				$sqlqry="select * from table1 where price>=25000 order by Camera DESC,RAM desc, rating desc";
			}
			if($_GET['budgetval']=="3" && $_GET['p1']=="12" && $_GET['p2']=="21"){
				$sqlqry="select * from table1 where price>=25000 order by Battery desc, Camera DESC, rating desc";
			}
			if($_GET['budgetval']=="3" && $_GET['p1']=="12" && $_GET['p2']=="23"){
				$sqlqry="select * from table1 where price>=25000 order by Battery desc, RAM DESC, rating desc";
			}
			if($_GET['budgetval']=="3" && $_GET['p1']=="13" && $_GET['p2']=="21"){
				$sqlqry="select * from table1 where price>=25000 order by RAM desc, Camera DESC, rating desc";
			}
			if($_GET['budgetval']=="3" && $_GET['p1']=="13" && $_GET['p2']=="22"){
				$sqlqry="select * from table1 where price>=25000 order by RAM desc, Battery DESC, rating desc";
			}
			if($_GET['budgetval']=="3" && $_GET['p1']=="11" && $_GET['p2']=="22" && $_GET['p3']=="33"){
				$sqlqry="select * from table1 where price>=25000 order by Camera desc, Battery DESC, RAM desc, rating desc";
			}
			if($_GET['budgetval']=="3" && $_GET['p1']=="11" && $_GET['p2']=="23" && $_GET['p3']=="32"){
				$sqlqry="select * from table1 where price>=25000 order by Camera desc, RAM desc, Battery DESC, rating desc";
			}
			if($_GET['budgetval']=="3" && $_GET['p1']=="12" && $_GET['p2']=="21" && $_GET['p3']=="33"){
				$sqlqry="select * from table1 where price>=25000 order by Battery DESC, Camera desc, RAM desc, rating desc";
			}
			if($_GET['budgetval']=="3" && $_GET['p1']=="12" && $_GET['p2']=="23" && $_GET['p3']=="31"){
				$sqlqry="select * from table1 where price>=25000 order by Battery DESC, RAM desc, Camera desc, rating desc";
			}
			if($_GET['budgetval']=="3" && $_GET['p1']=="13" && $_GET['p2']=="21" && $_GET['p3']=="32"){
				$sqlqry="select * from table1 where price>=25000 order by RAM DESC, Camera desc, Battery desc, rating desc";
			}
			if($_GET['budgetval']=="3" && $_GET['p1']=="13" && $_GET['p2']=="22" && $_GET['p3']=="31"){
				$sqlqry="select * from table1 where price>=25000 order by RAM DESC, Battery desc, Camera desc, rating desc";
			}
		}
	}
	
	//$sqlqry="select * from table1";
	$res=mysqli_query($conn,$sqlqry);
	$tot=mysqli_affected_rows($conn);
}
?>
<body>
<div>
<h1 style="background-color:Blue"> <center><font size="50"color="brown">MOBILE RECOMENDATION SYSTEM</font></h1>
</div>

<div>
<form name="formdata" action="#" method="get">
                                        <div>

<br><br>
Budget <select name="budgetval" required> 
  <option value="">Select</option>
  <option value="1">Less than 10000</option>
  <option value="2">10000-25000</option>
  <option value="3">More than 25000</option>
	</select>
Priority 1 <select name="p1" required>
		<option value="">Select</option>  
         <option value="11">Camera</option>
         <option value="12">Battery</option>
		 <option value="13">RAM</option>
		 </select>
Priority 2 <select name="p2">
		<option value="">Select</option>  
         <option value="21">Camera</option>
         <option value="22">Battery</option>
		 <option value="23">RAM</option>
		 </select> 
Priority 3 <select name="p3">
		<option value="">Select</option>  
         <option value="31">Camera</option>
         <option value="32">Battery</option>
		 <option value="33">RAM</option>
		 </select>
		
<br><br>
<input type="submit" name="search_mobile">

</form>
<h2 style="background-color:MediumSeaGreen;"> Mobiles listed based on your requirements</h2>
<table border="1">
	<tr>
		<!--<th>Ranking</th>-->
		<th>Brand Name</th>
		<th>Product Name</th>
		<th>Price</th>
		<th>Rating</th>
		<th>Camera</th>
		<th>Battery</th>
		<th>RAM</th>
	</tr>
	<?php
		for($i=0;$i<=$tot;$i++){
			//$j=$i+1;
			$row=mysqli_fetch_array($res);
		?>
		<tr>
			<!--<td><?php echo $row['j']; ?></td>-->
			<td><?php echo $row['Brand_name']; ?></td>
			<td><?php echo $row['product_name']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td><?php echo $row['rating']; ?></td>
			<td><?php echo $row['Camera']; ?></td>
			<td><?php echo $row['Battery']; ?></td>
			<td><?php echo $row['RAM']; ?></td>
		</tr>
		<?php
		}
	?>
</table>
<br>
<h1> Learning Git </h1>
<h1> With Eric </h1>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="B1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="B2.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="B3.jpg" style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>

<script type="text/javascript">
	var elements = document.getElementsByTagName('select');
	var handler= function(e){
		for(var i=0; i<elements.length; i++){
			if(elements[i] != e.target){
				var children = elements[i].children;
				for(var j=0; j<children.length; j++){
					if(children[j].innerText == e.target.children[e.target.selectedIndex].innerText){
						elements[i].removeChild(children[j])
					}
				}
			}
		}
	}
	
	for(var i=0; i<elements.length; i++){
		elements[i].addEventListener('change',handler);
	}

</script>
</body>
<html>