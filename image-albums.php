<!doctype html>
<html lang="en">
<head>
   
<?php include 'header.php'; ?>
  
    <!--====== Title ======-->
    <title>Image-Albums</title>
    
</head>

<body>
  
    <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
   
    <!--====== HEADER PART START ======-->
    
    <?php include 'nav.php'; ?>
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Image-Albums</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Image-Albums</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <br><br> <br><br>
    <!--====== PAGE BANNER PART ENDS ======-->
   
<div class="container">
    <h2 class="text-center">Images Galley</h2>
    <div class="row">
	    <div class="col-sm-3">
	      <a href="images.php">  <div class="item"><img src="images/publication/p-1.jpg" class="img-thumbnail"></div>
		    
	    </div></a>
	    <div class="col-sm-3">
        <a href="images.php"> <div class="item"><img src="images/publication/p-2.jpg" class="img-thumbnail"></div>
	    </div></a>
	    <div class="col-sm-3">
        <a href="images.php"> <div class="item"><img src="images/publication/p-3.jpg" class="img-thumbnail"></div>
	    </div></a>

    <div class="col-sm-3">
        <a href="images.php"> <div class="item"><img src="images/publication/p-4.jpg" class="img-thumbnail"></div>
	    </div></a>
    </div>
</div>
   
</div>
    <!--====== EVENTS PART START ======-->
   
    <!--====== EVENTS PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
    
    <?php include 'footer.php'; ?>
    
    <!--====== FOOTER PART ENDS ======-->
   
   
    
    

</body>
</html>
