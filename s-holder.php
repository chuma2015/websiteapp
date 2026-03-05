<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Activate Bootstrap 3 Carousel via JavaScript</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    // Activate carousel
    $("#myCarousel").carousel();
    
    // Enable carousel control
//	$(".left").click(function(){
     //	$("#myCarousel").carousel('prev');
  //  });
    $(".right").click(function(){
     //	$("#myCarousel").carousel('next');
   // });
    
    // Enable carousel indicators
    $(".slide-one").click(function(){
    	$("#myCarousel").carousel(0);
    });
    $(".slide-two").click(function(){
    	$("#myCarousel").carousel(1);
    });
    $(".slide-three").click(function(){
    	$("#myCarousel").carousel(2);
    
});
</script>
<style type="text/css">
.carousel{
    
    margin-top: 2px;
}
.carousel .item{
    height: 139px; /* Prevent carousel from being distorted if for some reason image doesn't load */
    
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
    position: relative;
    margin-bottom: 18px;
margin-left:20px;
    
}
.bs-example{
	width:195px;
	height:139px;
	margin-top: 0;
margin-bottom: 18px;
margin-left:20px;
	 position: relative;
	
}
</style>
</head>
<body>
<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
    	<!-- Carousel indicators -->
       
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="active item">
                <img src="/img/holder/bk.PNG" alt="First Slide">
         		
            </div>
            
            <div class="item">
               <a href="http://www.bot-tz.org" rel="external">  <img src="/img/holder/bot.PNG" alt="BOT"></a>
                
            </div>
            
             <div class="item">
                <img src="/img/holder/public.PNG" alt="Public">
                
            </div>
            
             <div class="item">
                <img src="/img/holder/logo.PNG" alt="Tanzanian Logo">
                
            </div>
            
             <div class="item">
                <img src="/img/holder/mocu.PNG" alt="mocu">
            </div>
            
             <div class="item">
                <img src="/img/holder/sccult.PNG" alt="sccult">
            </div>
            
            <div class="item">
                <img src="/img/holder/tfc.PNG" alt="tfc">
            </div>
        </div>
        <!-- Carousel controls -->
         <!-- <a class="carousel-control left">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>-->
    </div>
</div>
</body>
</html>                            