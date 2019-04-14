<?php 
///Menu fin
 ?>
<style>
@font-face {
    font-family: myFont;
    src: url(../img/fonts/FontsFree-Net-HelveticaNeueLTCom-LtCn.ttf);
}

@font-face {
    font-family: myFont2;
    src: url(../img/fonts/HelveticaLTStd-Cond.otf);
}

body{
  font-family: myFont;
  font-size:40pt;
}



@media only screen and (max-width: 768px) {
    .columns {
        width: 100%;
    }

    .video{
      width:100%;
      height:400px;
    }

}

p{
  font-size:13pt;
}

#ambiental{
  margin:10% 0;
}

#myBorder{
    color: #fff;
    padding: 18px;
    font-size: 25pt;
    letter-spacing: 10px;
    background-color:#80a8d9;
}
.caption h3{
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

#myParallax{
  position:relative;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
@media only screen and (max-device-width: 1024px) {
  #myParallax {
    background-attachment: scroll;
    width: 100%;
    height:auto;
  }

  #myBorder{
    font-size: 15pt;
  }

  .caption{
    top:20%;
  }
}

.ambientalImage{
  background-image: url(../img/blooming-blossom-blurred-background.jpg);
  min-height:500px;
}

.waterImage{
 background-image: url( ../img/water.jpg);
 min-height:500px;
}

.treeImage{
  background-image: url(../img/pexels-photo.jpeg);
  min-height:500px;
}

.legalImage{
  background-image: url(../img/desk-writing-work-hand-man-table.jpg);
  min-height:500px;
}





</style>



<div class="content clearfix">
    <img src="../img/d.jpg" width="1500" height="700" class="img-responsive">
</div>

<div class="container-fluid"  style="background-color: #f4f4f4;">
    <div class="row" id="ambiental" >

      <div class="col-md-4 no-gutters text-center ">
        <h2 style="color: black" >Ambiental</h2>
      </div>

      <div class="col-md-6 no-gutters" style="background-color:#f4f4f4;">
            <iframe src="//www.youtube.com/embed/BWUhR1GQaYk?autoplay=0" width="100%" height="315" class="video" margin-top="0" > </iframe>

            <div class="col-md-12 texto text-justify no-gutters" padding="0" >
                <p  padding="0">
                    La reforestación de la zona ha significado una mejora inmediata en la calidad
                    del suelo, el cual al ser poco profundo tiende a erosionarse y volverse infértil
                    con facilidad, lo que se traducía en una alta probabilidad en cuestión de
                    deslaves y desastres naturales.
                </p>

                <p class="text-justify">
                    Mediante la restauración se mejora también la captación de lluvia y se encausan las aguas naturalmente, siendo más fácil aprovecharlas. Además
                    de que los nuevos árboles capturan CO2 de la atmósfera, lo que mejora 
                    automáticamente la calidad de vida de los habitantes de la zona.
                  </p>
            </div>

      </div>
    </div>
</div>
 
  
<!-- primer parallax -->
<div id="myParallax" class="ambientalImage">
            <div class="caption">
                <span id="myBorder" class="textWorld">NUESTRA AYUDA A LA NATURALEZA DEBE SER TOTAL </span>
               <h3>Tenemos el compromiso de recuperar lo que hemos perdido</h3>
            </div>
 </div>


 <div class="container-fluid"  style="background-color: #f4f4f4;">
    <div class="row" id="ambiental" >

      <div class="col-md-4 no-gutters text-center ">
        <h2 style="color: black">Social</h2>
      </div>

      <div class="col-md-6 no-gutters" style="background-color:#f4f4f4;">
            <iframe src="//www.youtube.com/embed/BWUhR1GQaYk?autoplay=0" width="100%" height="315" class="video" margin-top="0" > </iframe>

            <div class="col-md-12 texto text-justify no-gutters" padding="0" >
                    <p  class="text-justify">En las comunidades que trabajamos se imparten talleres y cursos en 
                  diferentes áreas tales  como finanzas básicas, cursos de educación ambiental,
                  asi como dinámicas de cohesión social. 
                  </p>

                  <p class="text-justify">Este proyecto ha logrado un empoderamiento y mayor integración de los
                  miembros de la comunidad, quienes ahora trabajan en conjunto para
                  mejorar su situación tanto económica, social y ambiental. </p>
            </div>

      </div>
    </div>
</div>


<div id="myParallax" class="waterImage">
            <div class="caption">
                <span id="myBorder" class="textWater">LA VIDA FLORECE EN ARMONÍA CON LA NATURALEZA   </span>
                 <h3>Nuestra sociedad debe encontrar el equilibrio con el planeta</h3>
            </div>
 </div>


 <div class="container-fluid"  style="background-color: #f4f4f4;">
    <div class="row" id="ambiental" >

      <div class="col-md-4 no-gutters text-center ">
        <h2 style="color: black">Económico</h2>
      </div>

      <div class="col-md-6 no-gutters" style="background-color:#f4f4f4;">
            <iframe src="//www.youtube.com/embed/BWUhR1GQaYk?autoplay=0" width="100%" height="315" class="video" margin-top="0" > </iframe>

            <div class="col-md-12 texto text-justify no-gutters" padding="0" >
                  <p class="text-justify">
                      La comunidad recibe un apoyo económico por cada árbol plantado, 
                      es decir, restaurar la zona se convierte en su ingreso.
                  </p>
                  <p class="text-justify">
                  También se identifican especies de árboles que traen otros beneficios, un ejemplo es el pinus cembroide, 
                  este árbol da un fruto que es altamente cotizado en el mercado, donde un Kg de piñón llega a alcanzar 
                  hasta los $45 dólares; asegurando así que esa producción futura genere un ingreso económico para la comunidad.
                  </p>
            </div>

      </div>
    </div>
</div>


<div id="myParallax" class="treeImage">
            <div class="caption">
                <span id="myBorder" class="textWater">LA GANANCIA DE UNOS DEBE SER LA GANANCIA DE TODOS</span>
                 <h3>Este proyecto beneficia económicamente a muchas Comunidades </h3>
            </div>
 </div>


 <div class="container-fluid"  style="background-color: #f4f4f4;">
    <div class="row" id="ambiental" >

      <div class="col-md-4 no-gutters text-center ">
        <h2 style="color: black">Legal</h2>
      </div>

      <div class="col-md-6 no-gutters" style="background-color:#f4f4f4;">
            <iframe src="//www.youtube.com/embed/BWUhR1GQaYk?autoplay=0" width="100%" height="315" class="video" margin-top="0" > </iframe>

            <div class="col-md-12 texto text-justify no-gutters" padding="0" >
                  <p class="text-justify">Existen múltiples tratados internacionales que buscan preservar la biodiversidad y
                    los espacios forestales en el mundo, algunos de ellos son: Convención sobre el Cambio Climático, 
                    Convenio sobre la diversidad biológica, Convención de lucha  contra  la desertificación. Instrumentos
                    que reflejan el interés de  la comunidad global por atender una problemática
                  que pone en riesgo millones de vidas.
                </p>
                  <p class="text-justify">
                  Es por ello que esta Campaña se une a los esfuerzos como sociedad civil organizada
                  contribuyendo a los objetivos plantedos en todas estas convenciones así como a la 
                    Agenda 2030 de las Naciones Unidas.
                  </p>
            </div>

      </div>
    </div>
</div>

<div id="myParallax" class="legalImage">
            <div class="caption">
                <span id="myBorder" class="textWater">RESERVAS DE LA BIOSFERA </span>
                 <h3>Reconocimiento internacional a través de la UNESCO </h3>
            </div>
 </div>



  <?php 
include('footer.php');

?>




