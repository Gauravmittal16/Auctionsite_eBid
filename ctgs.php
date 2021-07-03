<html>
<head><title>luxry</title>
<link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="fontawesome/css/all.css">
  <script src="jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <style>
  .thumbnail{background-color:#e4f1fe;}
h1{
	border-bottom:1px solid black;
}

  </style></head>
<body>

<?php
$ct=$_GET['ctgs'];
if($ct=="luxury")
{
echo "<h1 align='center'>Luxuries</h1>";
echo "<div id='portfolio' class='container-fluid text-center bg-grey'>
  
  <div class='row text-center slideanim'>
    <div class='col-sm-4'>
      <div class='thumbnail'>
        <img src='car1.jpg' alt='Paris' width='300' height='200'>
        <h3><strong>VOLVO S3 is On Sale </strong></h3>
        <p><strong>Price : $ 25,000</strong></p>
		  <p><strong>Bids : 5</strong></p>
		    <p><strong>Colour : Black</strong></p>
			 <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#SignupModal'>Bid Now</button>
      </div>
    </div>
    <div class='col-sm-4'>
      <div class='thumbnail'>
        <img src='car3.jpg' alt='New York' width='300' height='200'>
<h3><strong>Sold imported car with best price</strong></h3>
 <p><strong>Price : $ 25,000</strong></p>
		  <p><strong>Bids : 5</strong></p>
		    <p><strong>Colour : Black</strong></p>
			 <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#SignupModal'>Bid Now</button>
      </div>
    </div>
    <div class='col-sm-4'>
      <div class='thumbnail'>
        <img src='jumbcar.jpg' alt='San Francisco' width='300' height='200'>
<h3><strong>Sold imported car with best price</strong></h3>
  <p><strong>Price : $ 25,000</strong></p>
		  <p><strong>Bids : 5</strong></p>
		    <p><strong>Colour : Black</strong></p>
			 <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#SignupModal'>Bid Now</button>
      </div>
    </div>
  </div>
  ";
echo "<div id='portfolio' class='container-fluid text-center bg-grey'>
  
  <div class='row text-center slideanim'>
    <div class='col-sm-4'>
      <div class='thumbnail'>
        <img src='car1.jpg' alt='Paris' width='300' height='200'>
        <h3><strong>VOLVO S3 is On Sale </strong></h3>
        <p><strong>Price : $ 25,000</strong></p>
		  <p><strong>Bids : 5</strong></p>
		    <p><strong>Colour : Black</strong></p>
			 <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#SignupModal'>Bid Now</button>
      </div>
    </div>
    <div class='col-sm-4'>
      <div class='thumbnail'>
        <img src='car3.jpg' alt='New York' width='300' height='200'>
<h3><strong>Sold imported car with best price</strong></h3>
 <p><strong>Price : $ 25,000</strong></p>
		  <p><strong>Bids : 5</strong></p>
		    <p><strong>Colour : Black</strong></p>
			 <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#SignupModal'>Bid Now</button>
      </div>
    </div>
    <div class='col-sm-4'>
      <div class='thumbnail'>
        <img src='jumbcar.jpg' alt='San Francisco' width='300' height='200'>
<h3><strong>Sold imported car with best price</strong></h3>
  <p><strong>Price : $ 25,000</strong></p>
		  <p><strong>Bids : 5</strong></p>
		    <p><strong>Colour : Black</strong></p>
			 <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#SignupModal'>Bid Now</button>
      </div>
    </div>
  </div><br/>
  ";  
}
else if($ct=="classics")
{
echo "<h1 align='center'>Classics</h1>";
}
else if($ct=="sports")
{
echo "<h1 align='center'>Sports</h1>";
}
else if($ct=="vans")
{
echo "<h1 align='center'>Vans</h1>";
}
else if($ct=="bigfam")
{
echo "<h1 align='center'>Big Family Sedans</h1>";
}
else 
{
echo "<h1 align='center'>For Small Family</h1>";
}
?>
</body></html>