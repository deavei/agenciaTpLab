<div class="container ">
<div class="col-md-2">
    <a href="./acciones.php?id=0000" class="btn btn-success btn-block">Nuevo</a>
</div>
            
    <div class="col-md-10 bg-light">
        <table class="table table-bordered">
        <thead>
        <tr>
            <th class="bg-success">id</th>
            <th class="bg-success">Nombre</th>
            <th class="bg-success">Documento</th>
            <th class="bg-success">Direccion</th>
            <th class="bg-success">Accion</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $query = "SELECT * FROM clientes";
                $cliente = mysqli_query($conexion, $query);
                
                while($asiento = mysqli_fetch_array($cliente)){ ?>
                    <tr>
                    <td class="bg-success"><?php echo $asiento['id'];?></td>
                    <td><?php echo $asiento['nombre'];?></td>
                    <td><?php echo $asiento['documento'];?></td>
                    <td><?php echo $asiento['direccion'];?></td>
                    <td><?php echo 'accion';?></td>
                    </tr>

                <?php 
                } ?>
        </tbody>
        </table>

    </div>
    

    </div>