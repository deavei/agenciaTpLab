<div class="container bg-light">
<div class="col-md-10">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th class="bg-success">id</th>
            <th class="bg-success">Marca</th>
            <th class="bg-success">Modelo</th>
            <th class="bg-success">Año</th>
            <th class="bg-success">Precio</th>
            <th class="bg-success">Descripcion</th>
            <th class="bg-success">Fecha de Compra</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM autos";
                $auto = mysqli_query($conexion, $query);
                $contador = 0; 
                
                while($asiento = mysqli_fetch_array($auto)){ ?>
                    <tr>
                    <td class="bg-success"><?php echo $asiento['id'];?></td>
                    <td><?php echo $asiento['marca'];?></td>
                    <td><?php echo $asiento['modelo'];?></td>
                    <td><?php echo $asiento['anio'];?></td>
                    <td><?php echo $asiento['precio'];?></td>
                    <td><?php echo $asiento['descripcion'];?></td>
                    <td><?php echo $asiento['fechaDeCompra']?></td>
                    </tr>

                <?php 
                    $contador++;
                } ?>
            <div class="container m-2">
                <p class="bg-success">
                <?php echo 'Cantidad de vehiculos: '. $contador;?>
                </p>
            </div>
        </tbody>

    </table>
</div>

</div> <!-- Container -->

<?php 
    include('./includes/footer.php');
?>