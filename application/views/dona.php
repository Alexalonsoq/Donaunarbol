


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

.price .blue {
    background-color:#0080FF;
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
  <!--//Cambiar Imagen//!-->
  <img src="<?php echo base_url();?>img/fondo.jpg" width="1500"  class="img-responsive fondo" >
</div>
  <br>
  <br>
  <br>

<div class="row">

<div class="col-sm-3">
  <h3> </h3>
</div>
<div class="col-sm-6" >
   <p>
    <h3>
      <br><br>
   Estás donando para ayudar a proteger nuestros bosques, el aire que respiramos, así como
   el agua y la tierra de nuestro planeta. De igual forma también estás contribuyendo con el
   desarrollo social de mmuchas comunidades en México y Colombia. ¡Muchas gracias! 
    <br><br>
   <br>
   <br><br><br>

 </h3>
 </p>
</div>
<div class="col-sm-2">
  
</div>
</div>


<div style="clear:both; margin:25px" > </div>
<div style="clear:both; margin:25px" > </div>



<div class="col-sm-12 col-md-1 text-center mb-3 mb-md-0">
                
            </div>

<div class="container">
    <div class="container">
        <div class="row">
            
          <div class="col-sm-4" style="color:black";>  <h2>Recuerda que recibirás
           una foto con tu arbolito</h2>
 <h3 style="color:grey"> Nota* Muchas veces los correos que enviamos son canalizados a los emails no deseados, o directo a la papelera. Si no has recibido email en un lapso mayor a dos meses, por favor contáctanos. </h3>

 <h3 style="color:grey"> Recuerda que también podrás descargar tu foto en nuestra página en la sección de "Tu Árbol".  </h3>
 </div>
            
            <div class="col-sm-12 col-md-3 text-center text-md-left  mb-3 mb-md-0">
                <ul class="price">
    <li class="grey" > <h3 style=" color:#cfd74e">México </h3></li>
    <li class="dark-grey"> <div ><h3 style=" color:white" >
          <span class="currency">$</span>60.00 pesos</h3></div></li>
    <li>
     <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="mexico" value="mexico" checked>
          
        </div>
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
    <li>
     <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="colombia" value="colombia" >
          
        </div>
     </li>
    </ul>

            </div>
        </div>
    </div>
</div>

		
    
   <form  action="../Arbol" method="POST" >
    <label style="color:#A5DF00">Tu informacion</label>
  <div class="form-group">
    
    <input type="text" class="form-control" id="name" placeholder="Nombre" name="name">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="email" placeholder="Correo electronico" name="email">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="pais" placeholder="País" name="pais">
  </div>


    <br><br>
  <label style="color:#A5DF00">Tu arbolito</label>
  <div class="form-group">
    
    <input maxlength="25" type="text" class="form-control" id="frase" placeholder="Nombre del arbolito 25 caractéres" name="frase">
  </div>


  <label style="color: #A5DF00" >Forma de pago</label>
  <fieldset class="form-group">
    <div class="row">
       <div class="col-sm-12 col-md-3 text-center text-md-left  mb-3 mb-md-0">
                <ul class="price">
    <li class="grey" > <h3 style=" color:#0080FF">Deposito bancario </h3></li>
     <li>
     <div class="form-check">
          <input class="form-check-input" type="radio"  id="pago" value="banco" checked name="pago">
          
        </div>
     </li>
    </ul>
     
            </div>

        <div class="col-sm-12 col-md-3 text-center text-md-left  mb-3 mb-md-0">
                <ul class="price">
    <li class="blue" > <h3 style=" color:#FFFFFF"> Pay pal </h3></li>
      <li> <div class="form-check">
          <input class="form-check-input" type="radio"  id="pago" value="paypal" name="pago" >
          
        </div>
      </li>
    </ul>
     
            </div>

     
    </div>
  </fieldset>
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="8W5769HHW6MXU">
  <button type="submit" class="btn btn-primary float-right"  >Pagar</button>
</form>
  









	<?php 
include('footer.php');
//include('menu.php');
?>