<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>::. Conversor .::</title>

<!--------- CSS ---------->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">


</head>

<body>


<div id="conteudo">
    
    <div class="container">
        
        <div class="centro">
               
                <div class="titulo">Conversor</div>
               
                <div class="row">
                
                    <div class="col-sm-6">
                        
                        <div class="form-group">
                            <label for="valor">Valor</label>
                            <input type="text" class="form-control" id="valor" placeholder="Digite o valor" onkeyup="verifica_valor(this.value);">
                        </div>
                    
                    </div>     
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="valor">Base</label>
                            <div class="form-group">
                                <select class="form-control" id="base" onChange="verifica_base(this.value);"> 
                                  <option value="1">Decimal</option>
                                  <option value="2">Binário</option>
                                  <option value="3">Octal</option>
                                  <option value="4">Hexadecimal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <hr>
                
                <div class="titulo_pequeno">Resultado</div>
                
                <div class="row">
                    
                    <div class="col-sm-6">
                    
                        <div class="form-group">
                            <label for="valor">Decimal</label>
                            <input type="email" class="form-control" id="decimal" onChange="converter(1);">
                        </div>
                        
                    </div>
                    
                    <div class="col-sm-6">
                    
                        <div class="form-group">
                            <label for="valor">Binário</label>
                            <input type="email" class="form-control" id="binario" onChange="converter(2);">
                        </div>
                    
                    </div>
                    
                    <div class="col-sm-6">
                        
                        <div class="form-group">
                            <label for="valor">Octal</label>
                            <input type="email" class="form-control" id="octal" onChange="converter(3);">
                        </div>
                    
                    </div>
                    
                    <div class="col-sm-6">
                    
                        <div class="form-group">
                            <label for="valor">Hexadecimal</label>
                            <input type="email" class="form-control" id="hexadecimal" onChange="converter(4);">
                        </div>
                    
                    </div>
                    
                </div>
                        
            </form>
        </div>
    </div>

</div>


<script src="js/jquery.js"></script>
<script>

function verifica_base(){
	
	$('#valor').val("");
	$('#decimal').val("");
	$('#binario').val("");
	$('#octal').val("");
	$('#hexadecimal').val("");
		
}

function verifica_valor(valor){
	
	converter(valor);
		
}

function converter(valor){
	
	base =  $('#base').val();	
		
	$.ajax({
		data:'base='+base+'&valor='+valor,
		type:'POST',
		dataType:"json",
		url:"ajax/converter.php",
		success: function(msg){
			
			$('#decimal').val(msg.decimal);
			$('#binario').val(msg.binario);
			$('#octal').val(msg.octal);
			$('#hexadecimal').val(msg.hexadecimal);
			
		}
	});

}

</script>

</body>
</html>