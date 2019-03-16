
<?php 
include('menu.php');

?>

<style>
.price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    transition: 0.3s;
    margin-bottom:10px;
}

.price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
    background-color: #111;
    color: white;
    font-size: 25px;
}

.price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
}


.price .grey {
    background-color: #f4f4f4;
    font-size: 20px;
}

.dark-grey{
    background-color:#9a999e; 
}

.price .green {
    background-color:#cfd74e;
    font-size: 20px;
} 

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
}

.contenedor{
    position: relative;
    display: inline-block;
    text-align: center;
}
 
.texto-encima{
    position: absolute;
    top: 10px;
    left: 10px;
}
.centrado{
    position: absolute;
    top: 50%;
    left: 30%;
    transform: translate(-50%, -50%);
}

@media only screen and (max-width: 600px) {
    .columns {
        width: 100%;
    }
}

.fondodiv {
      padding: 14px;
      background-color: #2ECCFA;
    }
.conoceMas{
  background-color:#80a8d9;
  border-color:#80a8d9;
}
.fondo{
  margin-top:-20%;
}
</style>



<div class="contenedor-fluid">
  <img src="<?php echo base_url();?>img/fondo.jpg" width="1500"  class="img-responsive fondo" >
</div>
  <br>
  <br>
  <br>




<div class="container" align="center">
   <h1 color="blue">Necesitamos tu ayuda</h1>
   <br>
     <div class="col-md-4"></div>
  <div class="col-md-4" align="center"> <h3 style="color:grey"; >Estamos trabajando por un mundo mejor, luchando contra el Cambio
Climático. Nuestra forma de hacerlo es reforestando, ya que cada
año se pierden mas de 15 mil millones de árboles en el planeta.</h3>
<h2>¡Vamos a recuperarlos!</h2>

<a class="btn btn-primary conoceMas" href="<?php echo base_url();?>home/campana" target="_blank" role="button"> <h2>Conoce más</h2></a>
</div>
</div>
<div style="clear:both; margin:25px" > </div>
<div style="clear:both; margin:25px" > </div>





		




  
<div class="container-fluid" >
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner ">

      <div class="item active ">
        <img src="<?php echo base_url();?>img/1.jpg" alt="img1" class="imagen" >
        <div class="carousel-caption">
          
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>img/2.jpg" alt="img2" >
        <div class="carousel-caption">
          
        </div>
      </div>
    
      <div class="item">
        <img src="<?php echo base_url();?>img/3.jpg" alt="img5" >
        <div class="carousel-caption">
          
      </div>
      </div>
      
      <div class="item">
        <img src="<?php echo base_url();?>img/4.jpg" alt="img5" >
        <div class="carousel-caption">
          
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
</div>

<div style="clear:both; margin:50px" > </div>
  


<div class="col-sm-12 col-md-1 text-center mb-3 mb-md-0">
                
            </div>

<div class="container">
    <div class="container">
        <div class="row">
            
          <div class="col-sm-4" style="color:black";>  <h2>Por esto queremos invitarte a que dones un Árbol al mundo</h2>
 <h3 style="color:grey"> Así podrás recibir un email con la foto de tu arbolito </h3>
 <h3 style="color:grey"> Recuerda que con esta donación no solo contribuiras al medio ambiente, sino que también ayudarás a empoderar a las comunidades participantes en nuestra campaña. </h3>
 </div>
            
            <div class="col-sm-12 col-md-3 text-center text-md-left  mb-3 mb-md-0">
                <ul class="price">
    <li class="grey" > <h3 style=" color:#cfd74e">México </h3></li>
    <li class="dark-grey"> <div ><h3 style=" color:white" >
          <span class="currency">$</span>60.00 pesos</h3></div></li>
    <li >
        <img src="<?php echo base_url();?>img/luciana_home.jpg" class="img-responsive arbol" >
</li>
    </ul>
            </div>
            <div class="col-sm-12 col-md-1 text-center mb-3 mb-md-0">
                
            </div>
            <div class="col-sm-12 col-md-3 text-center text-md-left  mb-3 mb-md-0">
                <ul class="price">
    <li class="green" > <h3 style=" color:white">Colombia  </h3></li>
    <li class="grey"> <div class="pricing-table-price"><h3 style=" color:#cfd74e">
          <span class="currency">$</span>60.00 pesos</h3></div></li>
    <li >
        <img src="<?php echo base_url();?>img/juliana_home.jpg" class="img-responsive arbol" >
</li>
    </ul>

            </div>
        </div>
    </div>
</div>
  

<div class="p-3 mb-2 bg-light">
  <ul class="price">
    <li  style=" color:grey" > <h1 >Esta es una campaña llevada acabo por el portal social, The Tree School </h1>
    <h1> y el vivero Río Blanco, en donde trabajan juntos para lograr el objetivo </h1>
    <h1> de reforestar más de 50 mil árboles para el 2020.</h1>
     </li>
     <li>
    	<div class="container-fluid" align="center">
  			<img src="<?php echo base_url();?>img/treeschool1.jpg" width="200" height="200" style="margin: 0 -15px" >
  			<img src="<?php echo base_url();?>img/portal-social.jpg" width="200" height="200" style="margin: 0 -15px">
  			<img src="<?php echo base_url();?>img/sierra.png" width="200" height="200" style="margin: 0 -15px">
  		</div>
</li>
    
  </ul>
</div>


<div class="content clearfix">
<img src="<?php echo base_url();?>img/vista.jpg" width="1500"  class="img-responsive">
</div>

<div style="clear:both;" > </div>

<div class="content clearfix">
  <img src="<?php echo base_url();?>img/patrocinadores.png"  width="1500" class="img-responsive">
    
</div>

<div style="clear:both;" > </div>

  <div class="content clearfix">
<img src="<?php echo base_url();?>img/tierrita.jpg"  class="img-responsive">
</div>


	<?php 
include('footer.php');
//include('menu.php');
?>