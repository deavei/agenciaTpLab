<?
$query= "SELECT * FROM autos";
$autos = mysqli_query($conexion, $query);

while(true){
    
    $asiento = mysqli_fetch_array($autos);
    if(!$asiento)break;
?>
<div class="container">
<div class="row">

    <div class="col-sm">
    <div class="container m-1">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php 
            echo $asiento['marca'] .' '. $asiento['modelo'];
        ?>
        </h5>
    <p class="card-text"><?php echo 'Año: '.$asiento['anio'];?></p>
    <p class="card-text"><?php echo '$ '.$asiento['precio'];?></p>
    <p class="card-text"><?php echo $asiento['descripcion'];?></p>
    <a href="./acciones.php?id=<?php echo $asiento['id'];?>" class="btn btn-info btn-block">Comprar!</a>
    </div>
    </div>
    </div>
    </div>



    <?php 
        if(!$asiento)break;
        $asiento = mysqli_fetch_array($autos);
        
    ?>

    <div class="col-sm">
    <div class="container m-1">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title"><?php 
            echo $asiento['marca'] .' '. $asiento['modelo'];
        ?>
    </h5>
    <p class="card-text"><?php echo 'Año: '.$asiento['anio'];?></p>
    <p class="card-text"><?php echo '$ '.$asiento['precio'];?></p>
    <p class="card-text"><?php echo $asiento['descripcion'];?></p>
    <a href="./acciones.php?id=<?php echo $asiento['id'];?>" class="btn btn-info btn-block">Comprar!</a>
    </div>
    </div>
    </div>
    </div>
    
    <?php 
        if(!$asiento)break;
        $asiento = mysqli_fetch_array($autos);
    ?>

    <div class="col-sm">
    <div class="container m-1">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title"><?php 
            echo $asiento['marca'] .' '. $asiento['modelo'];
        ?>
    </h5>
    <p class="card-text"><?php echo 'Año: '.$asiento['anio'];?></p>
    <p class="card-text"><?php echo '$ '.$asiento['precio'];?></p>
    <p class="card-text"><?php echo $asiento['descripcion'];?></p>
    <a href="./acciones.php?id=<?php echo $asiento['id'];?>" class="btn btn-info btn-block">Comprar!</a>
    </div>
    </div>
    </div>
    </div>

</div>
</div>

<?php 

}?>