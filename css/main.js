$(document).ready(function(){
cadena = '<?php echo $cadena; ?>';
    res = cadena.split('|');
   i = 0;
    for(i=0; i < res.length; i++){
    	console.log(res[i]);
        $('input.loop').eq(i).val(res[i]);
    }

});
	