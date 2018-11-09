<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<!-- 	target="received" -->
<div class="container">
	<form name="frame" id="frame_1" action="received.php"  method="post" enctype="multipart/form-data" onSubmit="document.frame.target = 'received';return true;" >
<div class="row bd-example">
	<div class="col-md-6">
		<div class="form-group">
		    <label for="campo1">Nombre</label>
		    <input type="text" class="form-control" id="nombre" name="nombre" required>
		</div>
   </div>
   	<div class="col-md-6">
		<div class="form-group">
		    <label for="campo1">Apellido</label>
		    <input type="text" class="form-control" id="apellido"  name="apellido" required>
		</div>
   </div>
	<div class="col-md-6">
		<div class="form-group">
		    <label for="campo1">Hobby</label>
		    <input type="text" class="form-control" id="hobby" name="hobby" required>
		</div>
   </div>
	<div class="col-md-6">
		<div class="form-group">
		    <label for="campo1">Color favorito</label>
		    <input type="text" class="form-control" id="color" name="color" required>
		</div>
   </div>
	<div class="col-md-6">
		<div class="form-group">
		    <label for="campo1">Anime favorito</label>
		    <input type="text" class="form-control" id="anime" name="anime" required>
		</div>
   </div>
</div>
   <div class="row ">
   	<div class="col-md-12">
   		 <div class="text-center">
 <input type="submit"   class="btn btn-dark enviar" value="Enviar Información" onSubmit="document.received.target = 'right';return true;">
 <!--     <button type="button" class="btn btn-dark enviar">Enviar Información</button>  -->   		 </div>	
   	</div>
   </div>
	</form>
</div>
</div>
</div>

</body>
</html>

