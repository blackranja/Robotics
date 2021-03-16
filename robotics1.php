<?php
#CREATING OBJECTS FOR THE BODY
class RoBotics{
  private $title;
  private $MainHeading1;
  private $Rtitle1;
  private $Rtitle2;
  private $Rtitle3;
  private $Rtitle4;
  private $Rtitle5;
  private $Rtitle6;
  private $Rtitle7;
  private $Rtitle8;
  private $Rtitle9;
  private $Rtitle10;
  private $Rtitle11;

  public function RBhead(){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title><?php echo "$title";?></title>
      <link rel="stylesheet" href="frontEnd/bootstrap/bootstrap.min.css">
      <link href="frontEnd/bootstrap/bootstrap.min.js">
    </head>
    <?php
  }
  public function RBnav($MainHeading1,$Rtitle1,$Rtitle2,$Rtitle3,$Rtitle4,$Rtitle5,$Rtitle6,$Rtitle7,$Rtitle8,$Rtitle9,$Rtitle10,$Rtile11){
    ?>
    <nav role="navigation" class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-header">
<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="" class="navbar-brand"><span class="glyphicon glyphicon-home text-danger"><?php echo $MainHeading1;?></span></a>
</div>
<div id="navbarCollapse" class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li class="active"><a href=""> <span class="glyphicon glyphicon-wrench"></span><?php echo $Rtitle1;?></a></li>
<li><a href=""><span class="glyphicon glyphicon-tower"></span><?php echo $Rtitle2;?></a></li>
<li class="dropdown">
<a data-toggle="dropdown" class="dropdown-toggle" href="">
<span class="glyphicon glyphicon-tower"></span><?php echo $Rtile3;?><b class="caret"></b></a>
<ul role="menu" class="dropdown-menu">
<li><a href="#"><span class="glyphicon glyphicon-map-marker"></span><?php echo $Rtile4;?><span class="badge badge-warning">50</span></a></li>
<li><a href='#'><span class="glyphicon glyphicon-map-marker"></span><?php echo $Rtile5;?><span class="badge">5</span></a></li>
<li><a href="#"><span class="glyphicon glyphicon-map-marker"></span><?php echo $Rtile6;?><span class="badge">10</span></a></li>
<li><a href="#"><span class="glyphicon glyphicon-map-marker"></span><?php echo $Rtile7;?><span class="badge">50</span></a></li>
<li class="divider"></li>
<li><a href="#"><span class="glyphicon glyphicon-map-marker"></span><?php echo $Rtile8;?><span class="badge">320</span></a></li>
<li><a href="#"><span class="glyphicon glyphicon-map-marker"></span><?php echo $Rtile9;?><span class="badge">80</span></a></li>
<li><a href="#"><span class="glyphicon glyphicon-map-marker"></span><?php echo $Rtile10;?><span class="badge">20</span></a></li>
<li><a href="#"><span class="glyphicon glyphicon-map-marker"></span><?php echo $Rtile11;?><span class="badge">40</span></a></li>
</ul>
</li>
<li class="dropdown">
<a data-toggle="dropdown" class="dropdown-toggle" href="carBrands.html">
<span class="glyphicon glyphicon-tower"></span> Car Brands <b class="caret"></b></a>
<ul role="menu" class="dropdown-menu">
<li><a href="#"><span class="glyphicon glyphicon-map-marker"></span> TOYOTA<span class="badge badge-warning">50</span></a></li>
<li><a href='#'><span class="glyphicon glyphicon-map-marker"></span> NISSAN<span class="badge">5</span></a></li>
<li><a href="#"><span class="glyphicon glyphicon-map-marker"></span> HONDA<span class="badge">10</span></a></li>
<li><a href="#"><span class="glyphicon glyphicon-map-marker"></span> MAZDA <span class="badge">50</span></a></li>
<li class="divider"></li>
<li><a href="#"><span class="glyphicon glyphicon-map-marker"></span> BENZ <span class="badge">320</span></a></li>
<li><a href="#"><span class="glyphicon glyphicon-map-marker"></span> BMW <span class="badge">80</span></a></li>
<li><a href="#"><span class="glyphicon glyphicon-map-marker"></span> BENTLY <span class="badge">20</span></a></li>
<li><a href="#"><span class="glyphicon glyphicon-map-marker"></span> ROLLS <span class="badge">40</span></a></li>
</ul>
</li>
<li><a href="#"><span class="glyphicon glyphicon-phone-alt"></span> Support</a></li>
</ul>
<form role="search" class="navbar-form navbar-right">
<div class="form-group"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
<input type="text" placeholder="Search Here" class="form-control" name="searchone">
</div>
</form>
</div>
</nav>
<?php
  }
}
