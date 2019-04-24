
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
  heigh:auto;
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
.logos{
  background-color:#f4f4f4;
}

@font-face {
    font-family: title;
    src: url(img/fonts/GOTHAM-ULTRA.ttf);
}
@font-face {
    font-family: dona;
    src: url(img/fonts/HELVETICALTSTD-ROMAN.otf);
}
#participacion{
  font-family:title;
  font-size:33pt;
}

#dona{
  font-family:dona;
  font-size:20pt;
}

.arbol h3{
  font-family:gothamMedium;
}

.invitacion h2{
  font-family: boldHelvetica;
}


</style>



<!-- <div class="contenedor-fluid">
  <img src="<?php echo base_url();?>img/fondo.jpg" width="1500"  class="img-responsive fondo" >
</div> -->

<div class= "header">
    <div class="container ">
        <div class="row justify-content-start ">
              <div class="col-md-12  arbol">

                <div class="row ">
                          <div class="col-md-12 align-items-center callToAction">
                              <h1 id="participacion">¡Tu participación es importante!</h1>
                          </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-md-5  align-items-center regala ">
                            <h3>Regala un árbol al mundo</h3>
                        </div>
                </div>

                <div class="row">
                        <div class="col-md-2  align-items-center ">
                          <a class="btn btn-primary dona" href="<?php echo base_url();?>home/dona"  role="button" ><h4 id="dona">DONA</h4></a>
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
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <h1 color="blue">Necesitamos tu ayuda</h1>
        </div>
    </div>
    <br>
    <div class="row justify-content-md-center">
        <div class="col-md-8" align="center"> 
            <h3 style="color:grey"; >Estamos trabajando por un mundo mejor, luchando contra el Cambio
        Climático y nuestra forma de hacerlo es plantando árboles, ya que cada
        año se pierden mas de 15 mil millones.</h3>
         <h2>¡Vamos a recuperarlos!</h2>
         </div>
    </div>
<br>
  <div class="row justify-content-md-center">
      <div class="col-md-8">
           <a class="btn btn-primary conoceMas" href="<?php echo base_url();?>home/campana" target="_blank" role="button"> <h2>Conoce más</h2></a>
      </div>
  </div>
</div>
<br>
<br>
  

        <div class="row  no-gutters">
            <div class="col-sm-3"><img src="<?php echo base_url();?>img/1.jpg" alt="img1" class="img-responsive" ></div>
            <div class="col-sm-3"><img src="<?php echo base_url();?>img/2.jpg" alt="img2" class="img-responsive" ></div>
            <div class="col-sm-3"><img src="<?php echo base_url();?>img/4.jpg" alt="img5" class="img-responsive"></div>
            <div class="col-sm-3"><img src="<?php echo base_url();?>img/3.jpg" alt="img5" class="img-responsive" ></div>
        </div>       
<br>
<br>
<div class="col-sm-12 col-md-1 text-center mb-3 mb-md-0">
                
            </div>

<div class="container invitacion">
    <div class="container">
        <div class="row">
            
          <div class="col-sm-4" style="color:black";>  <h2 style="font-weight:bold">Por eso queremos invitarte a Donar un Árbol al Mundo</h2>
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
        <h1 align="center " class="topRank">Top Rank Donadores</h1>
    </div>
  </div>
</div>
  

<div class="container-fluid logos">
    <div class="row justify-content-center">

        <div class="col-md-8">
        <br>
        <br>
          <h1 align="center"   style=" color:grey" >
              Esta campaña es llevada a cabo por el Portal Social, The Tree School 
              y muchas comunidades en México y Colombia; todos juntos trabajan para lograr el objetivo de plantar
              más de 50 mil árboles para el 2020
          </h1>
        </div>
    </div>
    <br>
    	<div class="content clearfix ">
  			<img src="<?php echo base_url();?>img/logosSocial.png"  width="3500px"  class="img-responsive"> 
  		</div>

</div>


<div class="content clearfix ">
  
        <img src="<?php echo base_url();?>img/vistaRecortada.jpg" width="3500px"  class="img-responsive">
   
</div>

<!-- <div style="clear:both;" > </div> -->
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
  <img src="<?php echo base_url();?>img/patrocinadores2.jpg"   class="img-responsive">
    
</div>

<div style="clear:both;" > </div>

  <div class="content clearfix">
<img src="<?php echo base_url();?>img/tierrita.jpg"  class="img-responsive">
</div>


	<?php 
include('footer.php');
//include('menu.php');
?>