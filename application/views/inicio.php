
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

.header{
  max-width:100%;
  /* max-height:auto; */
  heigh:auto;
  /* display:block; */
  background: url('img/fondo.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
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
  /* margin-top:-20%; */
}

@media only screen and (min-width:900px) {
  .header {
    height: 500px;
  }
}

.callToAction{
  margin-top:10%;
  color:white;
  text-shadow:2px 2px 6px black;
}

.callToAction h1{
  font-size:4.5em;
  font-weight:bold;
}

.regala{
  background-color:rgba(255,255,255,.3);
}

.regala h3{
  color:#80a8d9;
  font-weight:bold;
  font-size:2.5em;
}

.dona{
  margin-top:10%;
  width:100%;
}

#topRank{
  color:white;
  background-color:black;
  height:500px;
}

.topRank{
  margin-top:2%;
}


</style>



<!-- <div class="contenedor-fluid">
  <img src="<?php echo base_url();?>img/fondo.jpg" width="1500"  class="img-responsive fondo" >
</div> -->

<div class= "header">
    <div class="container ">
        <div class="row justify-content-start ">
              <div class="col-md-8  arbol">

                <div class="row ">
                          <div class="col-md-12 align-items-center callToAction">
                              <h1>¡Tu participación es importante!</h1>
                          </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-md-5  align-items-center regala">
                            <h3>Regala un árbol al mundo</h3>
                        </div>
                </div>

                <div class="row">
                        <div class="col-md-3  align-items-center ">
                        <a class="btn btn-primary dona" href="<?php echo base_url();?>home/dona"  role="button" "><h4>DONA</h4></a>
                        </div>
                </div>
                <br>
               
               </div>
          </div>
    </div>
</div>
  <br>
  <br>
  <br>




<div class="container" align="center">
   <h1 color="blue">Necesitamos tu ayuda</h1>
   <br>
     <div class="col-md-4"></div>
  <div class="col-md-4" align="center"> <h3 style="color:grey"; >Estamos trabajando por un mundo mejor, luchando contra el Cambio
Climático y nuestra forma de hacerlo es plantando árboles, ya que cada
año se pierden mas de 15 mil millones.</h3>
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
            
          <div class="col-sm-4" style="color:black";>  <h2>Por eso queremos invitarte a Donar un Árbol al Mundo</h2>
          <br>
 <h3 style="color:grey"> Así podrás recibir la foto de tu árbol por correo electrónico o descargarla en nuestra página</h3>
 <br>
 <h3 style="color:grey"> Recuerda que con esta donación no solo contribuiras al medio ambiente, sino que también ayudarás a empoderar personas de muchas comunidades con rezago social </h3>
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

<div class="container-fluid" id="topRank">
  <div class="row justify-content-center">
    <div class="col-md-12 align-items-center">
        <h1 align="center " class="topRank">Top rank donadores</h1>
    </div>
  </div>
</div>
  

<div class=" mb-2 bg-light">
  <ul class="price">
    <li  style=" color:grey" > <h1 >Esta campaña es llevada a cabo por el Portal Social, The Tree School </h1>
    <h1> y muchas comunidades en México y Colombia; todos juntos trabajan para lograr el objetivo de plantar </h1>
    <h1> más de 50 mil árboles para el 2020.</h1>
     </li>
     <li>
    	<div class="container-fluid" align="center">
  			<img src="<?php echo base_url();?>img/treeschool2.png" width="200" height="200"  >
  			<img src="<?php echo base_url();?>img/portal-social2.png" width="200" height="200" >
  			<img src="<?php echo base_url();?>img/sierra2.png" width="200" height="200" >
  		</div>
</li>
    
  </ul>
</div>


<div class="content clearfix">
<img src="<?php echo base_url();?>img/vista.jpg" width="1500"  class="img-responsive">
</div>

<div style="clear:both;" > </div>
<br>
<br>
<div class="container">
  <div class="row  justify-content-center">
    <div class="col-md-12">
      <h1 align="center "  style=" color:grey" >
        Gracias a miles de donadores este proyecto es posible, entre ellos, valiosas empresas e instituciones que han ayudado a nuestra casusa de manera muy especial
      </h1>
    </div>
  </div>
</div>

<div class="content clearfix">
  <img src="<?php echo base_url();?>img/patrocinadores2.jpg"  width="1500" class="img-responsive">
    
</div>

<div style="clear:both;" > </div>

  <div class="content clearfix">
<img src="<?php echo base_url();?>img/tierrita.jpg"  class="img-responsive">
</div>


	<?php 
include('footer.php');
//include('menu.php');
?>