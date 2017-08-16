<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>::. Conversor .::</title>

<!--------- CSS ---------->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<script>

function converter(tipo){
	
	decimal =  $('#decimal').val();
	binario =  $('#binario').val();
	octal =  $('#octal').val();
	hexadecimal =  $('#hexadecimal').val();
	
	$.ajax({
		data:'decimal='+	decimal+'&binario='+binario+'&octal='+octal+'&hexadecimal='+hexadecimal+'&tipo='+tipo,
		type:'POST',
		url:"ajax/converter.php",
		success: function(msg){
			
			$('#decimal').val();
			$('#binario').val();
			$('#octal').val();
			$('#hexadecimal').val();
				
		}
	});

}

</script>

</head>

<body>


<div class="container">
    <div class="centro">
        <form action="index.php" method="get">
           
            
            
            <div class="form-group">
                <label for="valor">Decimal</label>
                <input type="email" class="form-control" id="decimal" onChange="converter(1);">
            </div>
            
            <div class="form-group">
                <label for="valor">Binário</label>
                <input type="email" class="form-control" id="binario" onChange="converter(2);">
            </div>
            
            <div class="form-group">
                <label for="valor">Octal</label>
                <input type="email" class="form-control" id="octal" onChange="converter(3);">
            </div>
            
            <div class="form-group">
                <label for="valor">Hexadecimal</label>
                <input type="email" class="form-control" id="hexadecimal" onChange="converter(4);">
            </div>
            
            <center>
            	<button type="submit" class="btn btn-default">Enviar</button>
       		</center>
        </form>
    </div>
</div>

?>
</body>
</html>