<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Login
	</title>

	

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container" id="content">
	<div class="row">
		<div class="col-md-4"> </div>
			<div class="col-md-4">
			<div class="col-md-12 text-center">
				<img src="img/log.png" alt="">
				
			</div>	
		<div class="col-md-12">
			<form action="Login/valida" method="POST">
				<div class="form-group">
					<label for="user">Usuario</label>
					<input type="text" class="form-control" id="user" placeholder="Usuario" name="user">
				</div>
				<div>
					<label for="pass">Password</label>
					<input type="Password" class="form-control" id="pass" placeholder="Password" name="pass">
				</div>
				<div class="col-md-12 text-right"> 
					<button type="submit" class="btn btn-default" >Entrar </button>
				</div>  
				

			</form>
			
		</div>
		</div>
		<div class="col-md-4"> </div>
	</div>



</div>


<!--<script > 
function saluda(){
	alert("Hola");
}
 $(document).ready(function(){
 	saluda();
 });



</script>
-->
</body>
</html>