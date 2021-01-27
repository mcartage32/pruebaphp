<html>
<head>
</head>
<center>
<tittle>Productos</tittle><br>
<body>
<br>
<a href="?c=insertar">AGREGAR PRODUCTO</a>
<br><br>
<table border= 1>

<tr>
<td>Nombre del producto</td>
<td>Referencia</td>
<td>Precio</td>
<td>Peso</td>
<td>Categoria</td>
<td>Stock</td>
<td>Fecha de creacion</td>
<td>Fecha de la ultima venta</td>
</tr>

<?php

foreach($data["producto"] as $fila)
{ echo "<tr>";
  echo "<td>".$fila["nombre"]."</td>";
  echo "<td>".$fila["referencia"]."</td>";
  echo "<td>".$fila["precio"]."</td>";
  echo "<td>".$fila["peso"]." lbs"."</td>";
  echo "<td>".$fila["categoria"]."</td>";
  echo "<td>".$fila["stock"]."</td>";
  echo "<td>".$fila["fecha creacion"]."</td>";
  echo "<td>".$fila["fecha ultima venta"]."</td>";
 echo "</tr>";
}



?>
</table>
</body>
</html>