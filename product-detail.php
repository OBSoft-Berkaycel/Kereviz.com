
<?php 

	include("C://xampp/htdocs/kereviz/web_service.php");

	//for motherboards
	$queryMotherboard="SELECT * FROM PRODUCTS WHERE TYPE='Motherboard'";
	$resultMotherboard=mysql_query($queryMotherboard);

 ?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Products</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="eCommerceAssets/styles/eCommerceStyle.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"> </script>
	<script src="js/wow.js"></script>
	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	
	
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""  class="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.html">Products <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">OEM</a>
                <a class="dropdown-item" href="#">Computers</a>
				  <a class="dropdown-item" href="#">Sound System</a>
				  <a class="dropdown-item" href="our_creation.html">Our Creation</a>
                
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Log In</a>
			</li>
			  <li class="nav-item">
			  <a class="nav-link " href="#"><span style="font-weight: bold;">Sign Up</span></a>
			  </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
	

	
<div id="mainWrapper" style="width: 90%;">
  
  
  <div id="content">
    <section class="sidebar bg-dark"> 
      <!-- This adds a sidebar with 1 searchbox,2 menusets, each with 4 links -->
      
      <div id="menubar">
        <nav class="menu">
          <h2><!-- Title for menuset 1 -->
			  <a href="Product Pages/OEM/OEM.html">OEM</a></h2>
          <hr>
          <ul>
            <!-- List of links under menuset 1 -->
            <li><a href="Product Pages/OEM/motherboard.html" title="Link">Motherboard</a></li>
            <li><a href="Product Pages/OEM/cpu.html" title="Link">CPU</a></li>
            <li><a href="Product Pages/OEM/gpu.html" title="Link">GPU(Video RAM)</a></li>
			<li><a href="Product Pages/OEM/cases.html" title="Link">Cases</a></li>
            <li><a href="Product Pages/OEM/ram.html" title="Link">RAM</a></li>
            <li><a href="Product Pages/OEM/hdd.html" title="Link">HDD</a></li>
			<li><a href="Product Pages/OEM/ssd.html" title="Link">SSD</a></li>
			<li><a href="Product Pages/OEM/coolingSystem.html" title="Link">Cooling Systems</a></li>
			<li><a href="Product Pages/OEM/monitor.html" title="Link">Monitor</a></li>
			<li><a href="Product Pages/OEM/mouse.html" title="Link">Mouse</a></li>
			<li><a href="Product Pages/OEM/keyboard.html" title="Link">Keyboard</a></li>
           
          </ul>
        </nav>
        <nav class="menu">
          <h2>COMPUTERS</h2>
          <!-- Title for menuset 2 -->
          <hr>
          <ul>
            <!--List of links under menuset 2 -->
            <li><a href="#" title="Link">Notebook</a></li>
            <li><a href="#" title="Link">Desktop</a></li>
            <li><a href="#" title="Link">Tablet</a></li>
            
          </ul>
        </nav>
		  <nav class="menu">
          <h2>SOUND SYSTEMS</h2>
          <!-- Title for menuset 2 -->
          <hr>
          <ul>
            <!--List of links under menuset 2 -->
            <li><a href="#" title="Link">Microphones</a></li>
            <li><a href="#" title="Link">Headphones</a></li>
            <li><a href="#" title="Link">Speakers</a></li>
           
          </ul>
        </nav>
      </div>
    </section>
	  
	  
	  
    <section class="mainContent">
		
      <div class="productRow">
		  <!-- Each product row contains info of 3 elements -->
		  
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="https://productimages.hepsiburada.net/s/35/500/10494335385650.jpg"></div>
          	<p >Lenovo IdeaPad L340-15IRH Intel Core i5 9300H 16GB 512GB SSD GTX1650 Freedos 15.6" 
 </p>
			<p class="price">6799,00 $
</p>
          	<p class="productContent"><del>7999,00 $</del> </p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
		  
        <article class="productInfo"><!-- Each individual product description -->
          <div>
			 <img alt="sample" src="https://productimages.hepsiburada.net/s/36/500/10510493351986.jpg"></div>
			  <p>Lenovo V155 AMD Ryzen R5 3500U 12GB 1TB HDD GTX 1050 15.6" FHD Freedos Bilgisayar</p>
				<p class="price">4499,00 $</p>
			  <p class="productContent"><del>4499,00 $</del></p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
		  
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="https://productimages.hepsiburada.net/s/35/500/10465870118962.jpg
"></div>
         <p>Asus VivoBook 15 X512DA-EJ957 AMD Ryzen 5 3500U 8GB 256GB SSD Freedos 15.6" 
</p>
				<p class="price">3899,00 $
</p>
			  <p class="productContent"><del>4999,00 $
</del></p>
          <input type="button" name="button" value="Buy" class="buyButton">
        </article>
      </div>
		
	
    </section>
  </div>
	
	 <div class="container text-white bg-dark p-4">
      <div class="row">
        <div class="col-6 col-md-8 col-lg-7">
          <div class="row text-center">
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>Home Page</a> </li>
                <li class="btn-link"> <a>Products</a> </li>
                <li class="btn-link"> <a>About</a> </li>
                <li class="btn-link"> <a>Contact Us</a> </li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled">
                <li class="btn-link"> <a>Privacy Policy</a> </li>
                <li class="btn-link"> <a>User Agreement</a> </li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
				<span class="price">Social Media</span>
              <ul class="list-unstyled">
                <li class="btn-link"> <a href="https://tr.linkedin.com/">LinkedIn</a> </li>
                <li class="btn-link"> <a href="https://twitter.com/explore">Twitter</a> </li>
                <li class="btn-link"> <a href="https://www.instagram.com/?hl=tr">Intagram</a> </li>
                <li class="btn-link"> <a href="https://tr-tr.facebook.com/">Facebook</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-5 col-6">
          <address>
            <strong>OB Soft Technologies, Inc.</strong><br>
            
            Istanbul Heybeliada, 34973<br>
            <abbr title="Phone">Phone:</abbr> (210)-452-3446
          </address>
          <address>
            <strong>Ayyıldız St. Dilek Residance No:356 Heybeliada/Istanbul</strong><br>
            <a href="mailto:#">obSoftTech@obsoft.com</a>
          </address>
        </div>
      </div>
    </div>
	
 </div>
  <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © OB Soft Technologies. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
</body>
</html>
