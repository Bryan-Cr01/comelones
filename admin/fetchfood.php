


<html>
<head>
<title></title>
                         <link rel="stylesheet" type="text/css" href="css/welcome.css"/>
</head>


<body>

<div class="maindiv">

<div class="leftdiv" style="margin-left:-10px;">
				
					<center><a style="text-decoration:none;color:#000000;" href="food.php"><p  class="leftdiv1"> Add Food</p></a></center>
				<center><a style="text-decoration:none;color:#000000;" href="beverages.php"><p  class="leftdiv1">Add Beverages</p></a></center>
				<center><a  style="text-decoration:none;color:#000000;"href="combo offers.php"><p  class="leftdiv1">Add Combo Offers</p></a></center>
<center><a  style="text-decoration:none;color:#000000;"href="logout.php"><p  class="leftdiv1">Logout</p></a></center>

</div>


<div class="rightdiv">

<table border="4" style="color:#FFFFFF;margin-top:40px;margin-left:-30px;margin-right:10px;"cellpadding="1"   width="1055" height="430" align="right">
<tr>
<th> f_id </th>
<th> menu_type </th>
<th> producto </th>
<th> imagen </th>
<th> precio </th>
</tr>
<?php

mysql_connect("localhost","root","");
mysql_select_db("coffeecafe");
$x= mysql_query("select * from  food");
while ($y= mysql_fetch_array($x))
{
?>
<tr >
	<td><?php echo $y[0]."<br/>"; ?></td>


	<td><?php echo $y[1]."<br/>"; ?></td>

	<td> <?php echo $y[2]."<br/>";  ?> </td>

	<td><?php echo $y[3]."<br/>";  ?></td>

     <td><?php echo $y[4]."<br/>"; ?></td>
	
	

<td><a href="foodedit.php?preeti=<?php echo $y[0]; ?>">edit</a></td>
</tr>

<?php

}
?>
</table>

</div>






</body></html>