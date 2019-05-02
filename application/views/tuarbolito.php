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
  heigh:auto;
  background: url('../img/patri.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
  margin-top:-12vh;
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
  padding-top:3%;
  margin:13% 0%;
  padding-bottom:7%;
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
  font-family: fontFooter;
  font-size:20px;
}

input{
  border-radius:0;
}
.form-control{
  border-radius:0;
  border:none;
}

.tuArbolito p{
  font-size:13px;
  /* margin-top:3%; */
}


.tuArbolitoText p{
  margin:30% 0;
  font-family: lightHelvetica;
}
.busca, input{
  font-family: fontFooter;
  font-size:20px;
}

.price h3{
  font-family: boldHelvetica;
}

.container h1{
  font-family: boldHelvetica;
}

.icons{
  padding:10% 0;
}

.imagenes {
  margin-bottom:5%;
}

@media screen and (max-width:768px){
  #header{
    margin-top:12vh;
  }
}





</style>



<div class= "header" id="header">
    <div class="container tuArbolito">
        <div class="row justify-content-md-center ">
              <div class="col-md-6  arbol">

                <div class="row ">
                          <div class="col-md-12 align-items-start">
                              <h3 class="busca">Busca la foto de tu Árbol</h3>
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

               <form class="needs-validation" novalidate  action="../buscar" method="POST">
                 <div class="col-md-9 input">
                 <input type="text" class="form-control " id="folio" aria-describedby="folio" placeholder="Folio de tu Árbol" name="folio">
                 </div>
                 <div class="col-md-3 boton">
                 <button type="submit" class="btn btn-primary" id="buscar" >Buscar</button>
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

<div class="container-fluid tuArbolitoText">
    <div class="row justify-content-md-center"> 
        <div class="col-sm-6 align-items-start"  >
              <p class="text-justify">Para nosotros es  muy importante generar un vínculo  entre las personas y  la naturaleza, una  forma de lograrlo es presentándoles su árbol
              por  medio de una  fotografia. Cuando  una persona  Dona un  Árbol al
              Mundo, no  solo  entrega  una suma  de dinero,  sino que se involucra
              para ser parte del cambio en este planeta y esa voluntad la puede ver
              reflejada en el nuevo árbol que dio al mundo.</p> 
        </div>
    </div>
</div>

<div class="row  no-gutters imagenes"  >
 
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
  

      <div class="row justify-content-md-center icons">
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


<div class="content clearfix">
  <img src="../img/brigada.jpg"  height="800" class="img-responsive">
</div>


<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>





<?php 
include('footer.php');
?>