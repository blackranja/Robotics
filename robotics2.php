<?php
##The Robotic page Body OBJECTS
class RoBotics2{
  private $Rheading1;
  private $Rheading2;
  private $Rheading3;
  private $Rheading4;
  private $Rheading5;
  public function Rbody1($Rheading1,$Rheading2,$Rheading3,$Rheading4,$Rheading5,$Rtitle1,$Rtitle2,$Rtitle3,
  $Rtitle4,$image1,$image2,$image3,$image4,$dis1,$dis2,$dis3,$dis4){
    ?>
    <div class="carousel slide carousel-fade" data-interval="20000" data-ride="carousel" id="motorCarousel1">
<ol class="carousel-indicators">
<li data-target="#motorCarousel1" data-slide-to="0" class="active"></li>
<li data-target="#motorCarousel1" data-slide-to="1" ></li>
<li data-target="#motorCarousel1" data-slide-to="2"></li>
<li data-target="#motorCarousel1" data-slide-to="3"></li>
<li data-target="#motorCarousel1" data-slide-to="4"></li>
</ol>
<div class="carousel-inner">
<div class="active item">
<img src=<?php echo '"'."img/".$image1.'"';?> alt="Packt" width="100%">
<div class="carousel-caption">
<h1><i class="text-primary"><?php echo $Rheading1;?></i><small><?php $Rtitle1;?></small></h1>
</div>
</div>
<div class="item">
<img src="ani/ani59.gif" alt="Packt" width="100%">
<div class="carousel-caption">
<h1><i class="text-success"><?php echo $Rheading2;?></i></h1>
</div>
</div>
<div class="item">
<img src=<?php echo '"'."img/".$image2.'"';?> alt="Packt" width="100%">
<div class="carousel-caption">
<h1><i class="text-info"><?php echo $Rheading3</i></h1>
</div>
</div>
<div class="item">
<img src="ani/ani55.gif" alt="Packt" width="100%">
<div class="carousel-caption">
<h1><i class="text-warning">RANJA MOTORS</i></h1>
</div>
</div>
</div>
<a class="carousel-control left" href="#motorCarousel1" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="carousel-control right" href="#motorCarousel1" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
<div>

  }
}
