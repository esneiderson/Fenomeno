<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilos2.css">
	<title></title>
</head>
<body bgcolor="8DFF33">
    <center>
<div >
    
	
			<h1>PRODUCTOS DISPONIBLES</h1>
		</div>
      <table border="10" class="tabla">  
<tr>
    <th>NUMERO</th>
    <th>PRODUCTO</th>
    <th>PRECIO</th>

</tr>


    <?php
                    $conexion=new mysqli("localhost","root","","trabajos");
                    $sql = "SELECT * FROM parcial";
                    $resultado=$conexion->query($sql);
                    while($dato=$resultado->fetch_assoc())
                    {
                ?>   
                <tr>
                    <td><?php echo $dato['id'];  ?> </td>
                    <td><?php echo $dato['producto']; ?> </td>
                    <td><?php echo $dato['precio']; ?> </td>
                

                </tr>   
                <?php
                    }
                ?> 
                    </table>

			

	
			</div>

</div>
        <div  class="todos2">
            
            <form action="total.php" method="POST"><br>
             <label>INGRESE QUE QUIERE COMPRAR</label> <br><br>
            <input type="text" name="id" required=""placeholder="NUMERO">
            <br><br>
            <input type="text" name="dinero" required="" placeholder="DINERO">
            <br><br>
            <input type="text" name="cantidad" required="" placeholder="CANTIDAD">
            <br><br>
            <input type="submit" name="enviar" value="ENVIAR">
            <input type="reset" name="limpiar" value="LIMPIAR"> <br><br>

               </form>
               <div >
                        <a href="index.php">
                     <h1>VOLVER</h1>
                     </a>
            </div>



        </div>        

    

</center>
</div>
</body>