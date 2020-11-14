<?php  
	include 'app/page.php';
?>

<?php 
	include 'layouts/headr.php'
?>
	

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      <img src="pic/1.jpg" alt="Los Angeles">
		    </div>

		    <div class="item">
		      <img src="pic/2.jpg" alt="Chicago">
		    </div>

		    <div class="item">
		      <img src="pic/3.jpg" alt="New York">
		    </div>
		  </div>

  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
</div>

 <!-- malulmotlar begin -->
 	<div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <h3 class="mt-4 mb-4 text-center text-uppercase text-primary">Maqolalar</h3>
            </div>
            <?php foreach ($items as $item): ?>
            <div class="col-md-4 col-lg-4 col-xs-4">
                <div class="small-news">
                <a class="small-news__img" href=""><img style="height: 300px;margin-left: 80px; width: 300px;border-radius: 5px;" class="card-img-top" src="<?=$item['img_link']?>" /></a>
                    <div class="small-news__content"  >
                    	<form action="batafsil.php" method="GET">
                           <a style="margin-left: 80px;" class="small-news__title" href="batafsil.php?id=<?=$item['id']?>"><?=$item['short_m']?></a>
                        </form>
                       <!--  <div class="news-meta"><span><?=$item['time']?></span></div> -->
                         <ul style="margin-left: 40px;"><i class="glyphicon glyphicon-eye-open"> <?=$item['view']?></i></ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
 <!-- malumotlar end -->
 
 <?php include 'layouts/footer.php'?>
