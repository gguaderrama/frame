<?php
if(isset($_POST['nombre'])){
	if($_POST['nombre'] && $_POST['apellido'] && $_POST['hobby'] && $_POST['color'] && $_POST['anime']){
		$cadena = $_POST['nombre'].'|'.$_POST['apellido'].'|'.$_POST['hobby'].'|'.$_POST['color'].'|'.$_POST['anime'];
		// echo $cadena;
	}
}

?>

<?php  if(isset($cadena)){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
	
</head>
<body>
<div class="container">
	<br/>
   <div class="row ">
   	<div class="col-md-12">
   		 <div class="text-left">
        <button type="button" class="btn btn-primary split">Parseo Field</button>
   		 </div>	
   	</div>
   </div>
	<div class="row bd-example">
	<form action="received.php" id="frame" method="POST" enctype="multipart/form-data"></form>
		<div class="col-md-6">
		<div class="form-group">
		<label for="campo1">Cadena</label>
		<input type="text" class="form-control" id="nombre" name="cadena" value="<?php echo $cadena; ?>">
		</div>
		</div>
		<div class="col-md-6">
		<div class="form-group">
		    <label for="campo1">Nombre</label>
		    <input type="text" class="form-control loop" id="nombre" name="nombre" required>
		</div>
   </div>
   	<div class="col-md-6">
		<div class="form-group">
		    <label for="campo1">Apellido</label>
		    <input type="text" class="form-control loop" id="apellido"  name="apellido" required>
		</div>
   </div>
	<div class="col-md-6">
		<div class="form-group">
		    <label for="campo1">Hobby</label>
		    <input type="text" class="form-control loop" id="hobby" name="hobby" required>
		</div>
   </div>
	<div class="col-md-6">
		<div class="form-group">
		    <label for="campo1">Color favorito</label>
		    <input type="text" class="form-control loop" id="color" name="color" required>
		</div>
   </div>
	<div class="col-md-6">
		<div class="form-group">
		    <label for="campo1">Anime favorito</label>
		    <input type="text" class="form-control loop" id="anime" name="anime" required>
		</div>
   </div>
	</form>
</div>
</div>
</div>
<?php  } ?>

</body>
</html>
<script>
$(document).ready(function(){
		cadena = '<?php echo $cadena; ?>';
		res = cadena.split('|');
	$('.split').on('click',function(){
		i = 0;
		for(i=0; i < res.length; i++){
		console.log(res[i]);
		$('input.loop').eq(i).val(res[i]);
		}

	});
});
	
</script>

