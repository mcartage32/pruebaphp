<html>
<head>
</head>
<center>
<tittle>Insertar Productos</tittle><br>
<body>
<br>
<form name="insertar" method="POST" action="index.php?c=insertar&a=g">
<table border= 1>

<tr>
<td>Nombre del producto: </td>
<td><input type="text" name="nombre"></td>
</tr>
<tr>
<td>Referenica: </td>
<td><input type="text" name="referencia"></td>
</tr>
<tr>
<td>Precio: </td>
<td><input type="number" name="precio"></td>
</tr>
<tr>
<td>Peso: </td>
<td><input type="number" name="peso"></td>
</tr>
<tr>
<td>Categoria: </td>
<td><input type="text" name="categoria"></td>
</tr>
<tr>
<td>Stock: </td>
<td><input type="number" name="stock"></td>
</tr>
<tr>
<td>Fecha de creacion: </td>
<td><input type="date" name="fechacrea"></td>
</tr>
<tr>
<td>Fecha de ultima venta: </td>
<td><input type="date" name="fechaventa"></td>
</tr>

<tr>
<td colspan="2"><center><input type="submit" name="guardar" value="Guardar"></td>
</tr>


</form>
</table>
</body>
</html>