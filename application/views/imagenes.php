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




<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejemplos en Codeigniter</title>

	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">

	<script src=" https://code.jquery.com/jquery-3.3.1.js"> </script>
</head>
<body>
	




	<div class="container">
		<div class="row">


			
	       <div class="col-md-7">
				<ol class="breadcrumb">
		          <h3 ><span class="glyphicon glyphicon-edit"></span> Subir imagen</h3> 
                     <div class="col-md-6">    <button id="miboton" onclick="ShowHideElement()">Empresa</button>   </div>

		               <a href="salir" class="btn btn-warning" role="button" aria-disabled="true">Salir</a>
                </ol>
			           <br>

			          
				   <form id="form_subidas"   action="<?php echo base_url(); ?>login/subir" method="POST" >
                     
                       <div class="form-group" id="emp">
					Nombre de la empresa <input type="text" id="name_e" placeholder="Nombre" name="name_emp">
					 </div>
                     <div class="form-group">
					   <input type="file"  class="form-control" name="archivo[]" multiple>
					 </div>


					 <div class="form-group">
					 <input  class=" class="form-control" type="submit" value="Subir">
                     </div>

					

				     </form>

               

			</div>
			
		
		</div>
	</div>

	<!-- Script ocultar-->
		 <script type="text/javascript">
		 	$("#emp").hide();

		 	function ShowHideElement(){
		 		let text = "";
		 	if ($("#miboton").text() === "Empresa"){
		 		 	$("#emp").show();
		 		 	text = "Personas";

		 		 } else {
		 		 	$("#emp").hide();
		 		 	text = "Empresa";
		 		 }
		 		 $("#miboton").html(text);
		 	}
		 </script>	
     
	<script src="<?php echo base_url();?>assets/js/jquery-1.11.3.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/imagenes.js"></script>
</body>
</html>