<?php 
///Menu fin
?>
<style>



#header, #myParallax{
  position:relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.mainImage{
  background-image: url(../img/biology-blur-close-up.jpg);
  min-height:500px;
  margin-top:-12vh;
}

@media only screen and (max-device-width: 1024px) {
  #header {
    background-attachment: scroll;
    width: 100%;
    height:auto;
  }
}

.white-box{
  border:1px solid #e3e3e3;
  padding:20px;
  margin-bottom:20px;
  height:245px;
}

.gray-box{
  background-color:#f4f4f4;
  padding:20px;
  margin-bottom:20px;
  height:245px;
}



#myBorder{
    color: #fff;
    padding: 18px;
    font-size: 25pt;
    letter-spacing: 10px;
    background-color:rgba(122,122,122,.5);
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
  margin-top:3%;
}



.text{
  height:auto;
  background-color:white;
}

#mainText{
  margin:10% 0;
}

.imageWorld{

  background-image: url(../img/earth-blue-planet-globe-planet.jpg);
  min-height:500px;
}

.imageWorld .textWorld{
  background-color:#80a8d9;
}

.actions{
  margin:10% 0;
}

.videoTitle{
  margin-bottom:30px;
}

@media only screen and (max-width: 1100px) {
  /* .columns {
    width: 100%;
  } */

  .video{
    width:100%;
    height:400px;
  }

  #myBorder{
    font-size: 25pt;
    letter-spacing: 4px;
    padding:0;
  }

  .caption{
    top:20%;
  }
  
}

@media only screen and (min-width:768px) and (max-width:1100px){
  .white-box, .gray-box{
    height:350px;
  }
}

.campanaText p{
  font-family:myFont;
  margin-top:20px;
  
}

.footerFont {
  font-family:fontFooter;
 
}

@media screen and (max-width:768px){
  #header{
    margin-top:12vh;
  }
}

.campanaText p{
  font-size:16pt;
}


</style>

<div id="campana">
      
 <div  class="mainImage" id="header">
            <div class="caption">
                <span id="myBorder" class="textWorld">NUESTRA CAMPAÑA</span>
                <br>
                <br>
                <span >Restauración ambiental y empoderamiento social</span>
            </div>
 </div>


 <div class="container-fluid text" id="mainText">
        <div class="row justify-content-md-center">
            <div class="col-md-8 campanaText"  >
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
            </div>
          </div>
  </div>


<div id="myParallax" class="imageWorld">
            <div class="caption">
                <span id="myBorder" class="textWorld">ESTAMOS TODOS JUNTOS EN ESTO</span>
                <br>
                <br>
                <span >Un mundo interconectado que debe generar conciencia </span>
            </div>
 </div>

 <div class="container actions">    
        <br>
        <div class="row">
          <div class="col-md-6 text-center footerFont">
            <h2 style="font-weight: bold">¿Cómo funciona?</h2>
          </div>
          <div class="col-md-3 col-sm-12">
              <div class="white-box">
                    <p style="font-weight: bold" >01. CONCIENCIA</p>
                    <p align="justify">Es fundamental que todas las personas
                      conozcamos más de la situación ambiental de neustro planeta 
                      y seamos conscientes de la importancia que los árboles representan 
                      para nuestras vidas.
                    </p>
                </div>
    </div>

  
    <div class="col-md-3 col-sm-12">
      <div class="gray-box">
        <p style="font-weight: bold">02. ACCIÓN</p>
        <p align="justify">Invitamos a hacer una donación
          con la cual podremos plantar
          muchos árboles y 
          ayudar a comunidades con 
           rezago social.
        </p>
      </div>
    </div>
</div>

<div class="row justify-content-end">
      <div class="col-md-3 col-sm-12">
          <div class="gray-box">
            <p style="font-weight: bold">03. CONEXIÓN</p>
            <p align="justify">Una vez que se planta el árbol ponemos 
              el distintivo con el nombre elegido por el
              donador,luego se envía la fotografía, 
              para crear un vínculo
              muy especial.
            </p>
          </div>
        </div> 

        <div class="col-md-3 col-sm-12">
          <div class="white-box">
          <p style="font-weight: bold">04. DIFUSIÓN</p>
          <p align="justify">
            Invitamos a que las personas se asuman como parte de esta
            campaña y nos ayuden a difundirla con sus amigos y familiares 
            para que de este modo ellos también puedan unirse a la causa.
          </p>
        </div> 
        </div>
 </div>

<!-- Fin div contenedor -->
</div>


 <div class="container-fluid" style="background-color: #f4f4f4;">
      <br> <br> <br> <br>
      <div class="row justify-content-end footerFont" >
                <div class="col-md-3 align-items-center">
                      <div class="text-center">
                          <h1 class="videoTitle">Vídeo</h1>
                      </div>
                      <div class="row justify-content-start">
                          <div class="col-md-12 d-flex align-items-md-center">
                            <p>
                              Conoce cómo funciona la campaña y como puedes
                              ser parte de ella. Ayúdanos a compartir
                              este vídeo para causar un impacto muy grande. 
                            </p> 
                          </div>
                      </div>
                </div>
            <div class="col-sm-7" style="background-color:#f4f4f4;"><br>
              <iframe  class="video "src="//www.youtube.com/embed/BWUhR1GQaYk?autoplay=0" width="600" height="350"> 
              </iframe>
              <br><br><br><br>
            </div>
      </div>
            <br>
            <br>
            <br>
</div>




<div>
  <img src="../img/pexels-photo.jpg" width="2500" height="500" class="img-responsive">    
</div>

</div>
 

  
<?php 
include('footer.php');
//include('menu.php');
?>

