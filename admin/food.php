<html>
				<head>
								<title></title>
								<link rel="stylesheet" type="text/css" href="css/food.css"/>
								
								
								</head>
				
  <body>
				
				<div class="maindiv">
				
				<div class="leftdiv">
				
						<center><a style="text-decoration:none;color:#000000;" href="food.php"><p  class="leftdiv1"> Agrega comida</p></a></center>
				<center><a style="text-decoration:none;color:#000000;" href="beverages.php"><p  class="leftdiv1">Añadir bebidas</p></a></center>
				<center><a  style="text-decoration:none;color:#000000;"href="combo offers.php"><p  class="leftdiv1">Añadir ofertas combinadas </p></a></center>
				<center><a  style="text-decoration:none;color:#000000;"href="logout.php"><p  class="leftdiv1">Cerrar sesión</p></a></center>

			</div>
			
			
			<div class="rightdiv">
			
			
			 <form action="food1.php"  method="post" enctype="multipart/form-data">
			
			 
			 
	<p style="margin-top:-80px;"><a style="text-decoration:none;color:#FFFFFF;" href="fetchfood.php">editar</a></p><br/><b/>
		
	   Sub menu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="menutype">
	   
	   
      			<option value = "0"> - seleccionar - </option>
<option value = "1"> come pequeño </option>
<valor de la opción = "2"> comensal / Sandwiches </option>
<option value = "3"> Sundaes </option>
<option value = "4"> Pastel lejos </option>
<option value = "5"> Tiros de postre </option>
						</select><br/><br/>
	 
	 
	 Product &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="product" /><br/><br/>
      
	 
	 		Image&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" value="file" name="image"/><br/><br/>
			Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="price" ><br/><br/>
			
			
	 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="submit"/>

			
			</div>
			
			
			
								
					
    </div>
	</div>
	
	</body>
	</html>
