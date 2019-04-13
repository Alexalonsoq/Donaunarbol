<?php 
///Menu fin
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
.derecha{
  position: absolute;
  top: 20%;
  left: 80%;
  transform: translate(-50%, -50%);
}



@media only screen and (max-width: 1100px) {
  .columns {
    width: 100%;
  }

  .video{
    width:100%;
    height:400px;
  }

 
}
#myParallax{
  position:relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.mainImage{
  background-image: url(../img/biology-blur-close-up.jpg);
  min-height:500px;
}




@media only screen and (max-width:600px){
  #myParallax{
    background-image: url(../img/biology-blur-close-up.jpg);
    
  }
}

@media only screen and (max-device-width: 1024px) {
  #myParallax {
    background-attachment: scroll;
    width: 100%;
    height:auto;
  }
}

.white-box{
  border:1px solid #e3e3e3;
  padding:20px;
  margin-bottom:20px;
}

#myBorder{
    color: #fff;
    padding: 18px;
    font-size: 25pt;
    letter-spacing: 10px;
}
span{
  color: #fff;
    padding: 18px;
    font-size: 25pt;
}



.caption{
  position: absolute;
  left: 0;
  top: 40%;
  width: 100%;
  text-align: center;
  color: #000;
}

.text{
  height:auto;
  background-color:white;
  /* margin-top:50%; */
}

#mainText{
  margin:10% 0;
}

.imageWorld{

  background-image: url(../img/earth-blue-planet-globe-planet.jpeg);
  min-height:500px;
}

</style>


 <div id="myParallax" class="mainImage">
            <div class="caption">
                <span id="myBorder ">NUESTRA CAMPAÑA</span>
                <br>
                <br>
                <span >Restauración ambiental y empoderamiento social</span>
            </div>
 </div>


 <div class="container-fluid text" id="mainText">
        <div class="row justify-content-md-center">
            <div class="col-md-8 ">
              <h3 style="color:black"> 
                <p align="justify"> 
                  Dona un Árbol al mundo es una campaña de restauración ambiental y empoderamiento social que se
                  suma a esfuerzos internacionales por frenar el cambio climático. Surgió en Julio de 2017
                  por iniciativa del Portal Social, The Tree School, quienes junto con muchas comunidades en México y Colombia
                  trabajan para lograr el objetivo de reforestar más de 50 mil árboles para el 2020. 
                </p>
                <p align="justify">
                  Por ello esta campaña convoca a personas, empresas y gobierno para que hagan
                  conciencia de los retos ambientales que enfrentamos, conozcan los beneficios que un
                  árbol trae al mundo y se sumen a apoyar esta causa.
                </p>
                <p align="justify">
                  Los árboles de esta campaña son plantados en la reserva de la Biosfera de la Sierra
                  Gorda en Querétaro, aunque pronto serán plantados también en los estados de Jalisco,
                  Puebla y Veracruz. Nuestro objetivo final es el extender la campaña no solo a estos estados,
                  queremos replicarla internacionalmente.
                </p>
              </h3>
            </div>
          </div>
  </div>


<div id="myParallax" class="imageWorld">
            <div class="caption">
                <span id="myBorder ">ESTAMOS TODOS JUNTOS EN ESTO</span>
                <br>
                <br>
                <span >Un mundo interconectado que debe generar conciencia </span>
            </div>
 </div>




<div>
  <img src="../img/pexels-photo.jpg" width="2500" height="500" class="img-responsive">    
</div>

 

  
<?php 
include('footer.php');
//include('menu.php');
?>

