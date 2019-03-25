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

.header{
  max-width:100%;
  /* max-height:auto; */
  heigh:auto;
  /* display:block; */
  background: url('../img/patri.jpg');
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
  background-color: #eee;
  font-size: 20px;
}

.price .green {
  background-color: #8db600;
  font-size: 20px;
} 

.price .blue {
  background-color: #80a8d9;
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

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}

@media only screen and (min-width:900px) {
  .header {
    height: 500px;
  }
}





.arbol{
  background-color:rgba(0,0,0,.4);
  padding:2%;
  margin:10% 0%;
  padding-bottom:4%;
  color:white;
}

#buscar{
  width:100%;
  height:100%;
  background-color:black;
  border-color:black;
  border-radius:0;
}

.input{
  margin:0;
  padding:0;
  border-radius:0;
}

.formulario{
  padding:0;
  background-color:blue;
}


.boton{
  height:34px;
  background-color:yellow;
  padding:0;
}

input{
  border-radius:0;
}
.form-control{
  border-radius:0;
  border:none;
}


</style>



<div class= "header">
    <div class="container ">
        <div class="row justify-content-md-center ">
              <div class="col-md-5  arbol">

                <div class="row ">
                          <div class="col-md-12 align-items-start">
                              <h3>Busca la foto de tu Árbol</h3>
                          </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-md-12  align-items-start">
                            <p >Inserta el folio que viene al reverso de tu comprobante de donación para que conozcas si tu Árbol ya fue plantado o en que etapa se encuentra.
                        </div>
                </div>
                <br>
               <div class="row no-gutters">
               <div class="col-md-12 align-items-start">
               <form class="needs-validation" novalidate>
                 <div class="col-md-9 input">
                 <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="folio" placeholder="Folio de tu Árbol">
                 </div>
                 <div class="col-md-3 boton">
                 <button type="submit" class="btn btn-primary" id="buscar">Buscar</button>
                 </div>
               
                </form>
               </div>
               </div>
               <br>
                      <div class="row">
                            <div class="col-md-12 align-items-start">
                                <p>Cualquier duda comentario escríbenos a arbolito@donaunarbolalmundo.org</p>
                            </div>
                      </div>
               </div>
          </div>
    </div>
</div>

<!-- <img src="../img/patri.jpg" width="100%" height="800" class="img-responsive"> -->

<div class="container-fluid">
<div class="row justify-content-md-center"> 
<div class="col-sm-6 align-items-start"  >
 <p>
  
  <br><br>
  <h3>Para nosotros es  muy importante generar un vínculo  entre las personas y  la naturaleza, una  forma de lograrlo es presentándole su árbol
  por  medio de una  fotografia. Cuando  una persona  dona un  árbol al
  mundo, no  solo  entrega  una suma  de dinero,  sino que se involucra
  para ser parte del cambio en este planeta y esa voluntad la puede ver
  cristalizada en el nuevo árbol que dio al mundo.</h3> <br><br>
  <br>
  <br><br><br>
</p>
</div>
</div>
</div>


<!-- <div class="col-sm-3">
  <h3> </h3>
</div> -->














<div class="row  no-gutters"  >
 
 <div class=" col-sm-4 col-lg-4">
  <img src="../img/gust.jpg"    class="img-responsive">
</div>
<div class="col-sm-4 col-lg-4 " >
 <img src="../img/germa.jpg"   class="img-responsive">
</div>
<div class="col-sm-4 col-lg-4 " >
  <img src="../img/e042 _GUSTAVO.jpeg"     class="img-responsive">
</div>

</div>








<?php 
 /////////// Tu arbolito: 

?>
<br>
<br>

<br>

<div class="container colorGray">
<div class="row justify-content-md-center"  >
 <div class="col-sm-9">
 <div class="row">
   <div class="col-sm-3">
      <h1 style="color:#80a8d9";>Tu arbolito </h1>
   </div>
 </div>
</div>
</div>
  
<br>
<br>

<div class="row justify-content-md-center">
      <div class="col-sm-3 col-lg-4">
        <ul class="price">
          <li > 
            <div >
              <h3 style=" color:#6495ED" >
                Especies de nuestros árboles
              </h3>
              <img src="../img/arbol_azul.png" alt="" class="img-responsive">
            </div>
           </li>
         </ul>
       </div>
      
       <div class="col-sm-3 col-lg-4">
            <ul class="price">
              <li class="blue"> 
                <div >
                  <h3 style=" color:white" >
                    Beneficios de los árboles
                  </h3>
                  <img src="../img/carita2.png" alt="" class="img-responsive">
                </div>
              </li>
             </ul>
         </div>

      <div class="col-sm-3 col-lg-4">
          <ul class="price">
            <li  > 
              <div >
                <h3 style=" color:#6495ED">
                  Brigadas
                </h3>
            <img src="../img/Chaleco.png" alt="" class="img-responsive">
                </div>
              </li>  
              </ul>
      </div>
</div>

</div>

 

  <!-- <div style="clear:both; margin:10px" > </div> -->




    







<div class="container">



  <br><br>
  <br><br>

</div>
</div>


<div class="content clearfix">



  <img src="../img/brigada.jpg"  height="800" class="img-responsive">


</div>






  <!-- <div class="col-sm-6">
 <img src="../img/grafica.png" class="img-responsive">
  </div>
 

 <div class="col-sm-6"> 
  <br><br><br>
  <h3>
  SI AÚN NO HAS RECIBIDO TU ARBOLITO ESCRIBENOS A
  contacto@portalsocial.mx Ó LLAMANOS AL 2228383691.</h3>
  <br>

  <h4>Por diversas razones puede que no te haya llegado; quizá aún  </h4>
  <h4>no es plantado, o nuestro equipo no ha tomado la fotografia, o</h4>
  <h4>quizá llegó a tu correo a la bandeja de no deseados y por ello</h4>
  <h4>ello no lo has podido ver. Algunas de estas pueden ser las ra-</h4>
  <h4>zones por eso te pedimos que nos contactes y nos envíes el</h4>
  <h4>número de folio de tu arbolito.</h4>
</div> -->









<?php 
include('footer.php');
?>