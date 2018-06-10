<?php
include('conn.php');

if(isset($_GET['search_mobile'])){
	$sqlqry="select * from table1";
	$res=mysqli_query($conn,$sqlqry);
	$tot=mysqli_affected_rows($conn);
}
?>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Moblie Recommender</title>
</head>
<body>
<div>
<h1 style="background-color:Blue"> <center><font size="50"color="brown">Mobile Recommender</font></h1>
</div>

<div>
<form name="formdata" action="#" method="get">
                                        <div>
<!--<div id='cssmenu'>
<ul>
   
   <li class='active has-sub'><a href='#'><span>Budget</span></a>
      <ul name="budgetval">
		<select required> 
  <li class='has-sub'><a href='#'><span><option value="">Select</option></span></a></li>
  <li class='has-sub'><a href='#'><span><option value="1">Less than 10000</option></span></a></li>
  <li class='has-sub'><a href='#'><span><option value="2">10000-25000</option></a></li>
  <li class='has-sub'><a href='#'><span><option value="3">More than 25000</option></a></li>
	</select>
		
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Priority 1</span></a>
      <ul>
	  <select name="p1" required>
		<li class='has-sub'><a href='#'><span><option value="">Select</span></a>
            
         </li>	  
         <li class='has-sub'><a href='#'><span><option value="11">Camera</span></a>
            
         </li>
         <li class='has-sub'><a href='#'><span><option value="12">Battery</span></a>
            
         </li>
		 <li class='has-sub'><a href='#'><span><option value="13">RAM</span></a>
            
         </li>
		 </select> 
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Priority 2</span></a>
      <ul>
	  <select name="p2">
		<li class='has-sub'><a href='#'><span><option value="">Select</span></a>
            
         </li>
         <li class='has-sub'><a href='#'><span><option value="21">Camera</span></a>
            
         </li>
         <li class='has-sub'><a href='#'><span><option value="22">Battery</span></a>
            
         </li>
		 <li class='has-sub'><a href='#'><span><option value="23">RAM</span></a>
            
         </li>
		 </select> 
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Priority 3</span></a>
      <ul>
	  <select name="p3">
		<li class='has-sub'><a href='#'><span><option value="">Select</span></a>
            
         </li>
         <li class='has-sub'><a href='#'><span><option value="31">Camera</span></a>
            
         </li>
         <li class='has-sub'><a href='#'><span><option value="32">Battery</span></a>
            
         </li>
		 <li class='has-sub'><a href='#'><span><option value="33">RAM</span></a>
            
         </li>
		 </select > 
      </ul>
   </li>
</ul>
</div>-->
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
<br>

<p style="background-color:MediumSeaGreen;"> Top 3 mobiles based on your requirements are:<p>

</body>
<html>