 
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos2.css">
	<title></title>
</head>
<body bgcolor="8DFF33">
	<center>
             <?php

             $id=$_POST['id'];
             $dinero=$_POST['dinero'];
             $cantidad=$_POST['cantidad'];

           

              $conexion=new mysqli("localhost","root","","trabajos");
              $sql = "SELECT * FROM parcial WHERE id=$id";
              $resultado=$conexion->query($sql);
              $dato=$resultado->fetch_assoc();
      
               
                ?>  
                 <table border="10" class="tabla">  
<tr>
    <th>NUMERO</th>
    <th>PRODUCTO</th>
    <th>PRECIO</th>

</tr>


                <tr>
                    <td><?php echo $dato['id'];  ?> </td>
                    <td><?php echo $dato['producto']; ?> </td>
                    <td><?php echo $dato['precio']; ?> </td>
                 </tr>  

                 </table>


                 <?php
 
               $total=$dato['precio'] * $cantidad;
               $cambio=$dinero - $total;
               $cambio3=$total- $dinero;

               if($dinero<$total)
                    {
                  ?>
                    <div class="total">
                     <p><br><br>
                     Pediste <?php echo $cantidad; ?> cantidades de <?php echo $dato['producto'];; ?> <br><br>
                     Debes de pagar: <?php echo $total; ?><br><br>
                     Pagaste con <?php echo $dinero; ?> pesos<br><br>
                     No tienes sufuciente dinero, te faltan: <?php echo $cambio3 ; ?> 
                     </div>
                   <?php

                    }
                     else
                    {
                    ?>
                      <div class="total">
                     <br><br>
                     Pediste <?php echo $cantidad; ?> cantidades de <?php echo $dato['producto']; ?> <br><br>
                     Debes de pagar: <?php echo $total; ?><br><br>
                     Pagaste con <?php echo $dinero; ?> pesos<br><br>
                     Gracias por la compra, su cambio es: <?php echo $cambio; ?>
                       

              <?php
               }
                      ?>

                      <a class="regresar" href="cliente.php">
                     <h1>REGRESAR</h1>
                     </a>
            </center></p>
                     </div>

                  
</html>




 