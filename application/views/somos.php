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

.price .grey {
    background-color: #eee;
    font-size: 20px;
}

.price .green {
    background-color: #8db600;
    font-size: 20px;
} 

.price .blue {
    background-color: #6495ED;
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

div.a {
  text-align: center;
}

div.b {
  text-align: left;
}

div.c {
  text-align: right;
}

div.d {
  text-align: justify;
}

#bienvenida {color:white;background:#B7B4D5;}
#bienvenida2 {color:#0f0;}
#bienvenida3 {color:#f00;}



.graph {
position: relative; /* IE is dumb */
width: 500px;

padding: 2px;
}

.right{
    float: right;
    background:red
}




.graph .bar {
display: block;
position: relative;
background: #00BFFF;
text-align: center;
color: #333;
height: 2em;
line-height: 2em;
}
.graph .bar span { position: absolute; left: 1em; }


@media only screen and (max-width: 600px) {
    .columns {
        width: 100%;
    }
}

</style>


<div class="row">
  <div class="col-sm-6 "><img src="../img/frase.jpg"  class="img-responsive"></div>
  
  <div class="col-sm-6 ">

   <div class="container-fluid ">
    <P> <h4>Esta campaña tiene muchos colaboradores, gente incansable que 
    hace la diferencia día a día, personas que piensan que trabajar
    por la mejora del mundo no es tiempo perdido, por el contrarío,
    creen que es una forma de corresponder al planeta pues nos ha
    dado todo sin condiciones. Algunos de ellos entregan su trabajo
    otros entregan su donación pero todos contribuyen. </h4></P> 
   
    <br> 
    <h4> Entonces partiendo del hecho de que esta campaña la construyen miles de personas podemos decir que es guíada por tres organismos: El Portal Social, The Tree School y el vivero Rio Blanco.
      </h4> 
     </div>
  </div>

</div>


<div class="row">
  <div class="col-sm-6 container-fluid"><img src="../img/portal.jpg"  class="img-responsive"></div>
  
  <div class="col-sm-6 container-fluid">

   <div class="container-fluid" >
       <h3> Portal social</h3>
       <br><br>

     <h4>Es una plataforma digital que apoya a profesionales del área social
    así como a ONG's de diversas ramas. Tiene la tarea de junto con
    ellos ofrecer contenido audiovisual con sentido social. Esto lo hace
    por medio de vídeos, infografías, blog, etc. Difundiendo contenidos
    educativos, informativos y motivacionales con el objeto de incidir en
    los usuarios de manera positiva para que puedan conocer a fondo
    problemáticas de índole social, tomar consciencia y participar para
    su solución. </h4>
  
   
    <br> <h2><a href="https://portalsocial.mx/" target="_blank">www.portalsocial.mx 
      </a> </h2>
     

     </div>
  </div>

</div>
</div>

<div style="clear:both; margin:10px" > </div>
 

<div class="row">
  <div class="col-sm-6"><br>

   <div class="container-fluid" >
       <h3> THE TREE SCHOOL</h3>
       <br><br>

     <h4>Es una asociación civil comprometida con la Educacion para un Desarrollo sustentable, integrada por un equipo multidiciplinario de expertos(as), que trabajancon honestidad, respeto y pasion, ofresiendosoluciones integrales que incrementen el bienestar economico, mejoren las relaciones sociales en armonía con el ambiente, para satisfacer las necesidades del presente sin comprometer las del futuro</h4>
  
    <br> <h2> <a href="http://www.thetreeschool.org/" target="_blank">www.thetreeschool.org 
      </a></h2>
     </div>
  </div>

  <div class="col-sm-6 "><img src="../img/thetree.jpg"  class="img-responsive"></div>
  
  </div>


<div style="clear:both; margin:10px" > </div>
 

<div class="row">

  <div class="col-md-6 container-fluid"><img src="../img/rio.jpg" width="655" height="700" class="img-responsive"></div>
  

  <div class="col-md-6 container-fluid"><br>

   <div class="container-fluid" >
       <h3> VÍVERO RÍO BLANCO</h3>
       <br><br>

     <h4>Es un vívero enclavado en la Sierra Gorda de Quer'etaro, tiene el objeto de reforestar, conservar y proveer recursos económicos y ambientales a su comunidad, Su capacidad esde 80 mil plantas al año.</h4>
     <h4>Es muy valioso resaltar que este proyecto ha sido liderado por mujeres desde su inicio.</h4>
  
    
     </div>
  </div>

  
  
  </div>


  
 

	<?php 
include('footer.php');

?>