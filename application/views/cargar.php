<style type="text/css">
	
.container{
    margin-top:20px;
}
.image-preview-input {
    position: relative;
	overflow: hidden;
	margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}

</style>



<!DOCTYPE html>
<html lang="en">





  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/ico/favicon.ico">
    <title>Cargar</title>
    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="../css/navbar-fixed-top.css" rel="stylesheet">
	<link href="../css/preview-image.css" rel="stylesheet">

	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script>
	$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Abrir"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Cambiar");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});
</script>


  </head>
  <body>
		

    <div class="container">
		
      <!-- Main component for a primary marketing message or call to action -->
      <div class="row">
 
	   <ol class="breadcrumb">
		  
		  <li class="active">Personas</li>
		  <li > <a href="carga">Empresas </a></li>
		   <a href="salir" class="btn btn-warning" role="button" aria-disabled="true">Salir</a>

		  </ol>
		 <div class="col-md-7">
		 <h3 ><span class="glyphicon glyphicon-edit"></span> Subir imagen</h3>

			<form class="form-horizontal" id="subir" action="insert_img" method="POST" enctype="multipart/form-data">
				 
			 
			  
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" id="nombre"  required name="nombre">
				  
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="ap_p" class="col-sm-3 control-label">Apellido paterno</label>
				<div class="col-sm-9">
				  <input type="text" class='form-control' name="ap_p" id="ap_p" required name="ap_p"> </input>
				</div>
			  </div>	
			  
			


			<div class="form-group">
				<label for="ap_m" class="col-sm-3 control-label">Apellido materno</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" id="ap_m"  required name="ap_m">
				  
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="id_img" class="col-sm-3 control-label">Id imagen</label>
				<div class="col-sm-9">
				  <input type="text" class='form-control' name="id_img" id="id_img" required name="id_img"> </input>
				</div>
			  </div>	
			  
			  <div class="form-group">
				<label for="correo" class="col-sm-3 control-label">Correo</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" id="email" name="email" required name="email">
				</div>
			  </div>

			    




<div class="container">
    <div class="row">    
        <div class=" col-sm-offset-2 col-sm-4 ">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group image-preview">
                  <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Cancelar
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Abrir</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="fileImagen"/> <!-- rename it -->
                    </div>
                </span>

                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
               
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    </div>
</div>

<br>

			  <div class="form-group">
			  <div id='loader'></div>
			  <div class='outer_div'></div>
				<div class="col-sm-offset-3 col-sm-9">
				  <button type="submit" class="btn btn-success">Subir datos</button>
				  

				</div>
				  
			  </div>
			</form>
			
			
			
		</div>
		
		 
		
			  
			
			  
			 
			  
			  
		 </form>
		</div>
    </div> 
	</div><!-- /container -->

		<?php include("footer.php");?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="../js/jasny-bootstrap.min.js"></script>
	
  </body>
</html>