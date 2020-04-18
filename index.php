<?php
//DB y cabecera
include ('db.php');
include ('./includes/cabecera.php');

?>


<div class="container p-4" >
<?php if(isset($_SESSION['mensaje'])){ 
    
    ?>
    <div class="alert alert-primary" role="alert">
        <?php echo $_SESSION['mensaje'];
                session_unset();
        ?>
    </div>
<?php
}
?>
    <div class="row">
        
        <div>
        
            <div class="card card-body">
                <form action="acciones.php" method="POST">
                <div class="form-group">
                    <input type="submit" class="btn btn-info btn-block" name="comprar" value="Comprar">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-info btn-block" name="vender" value="Vender">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block" name="stock" value="Listar Vehiculos">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block" name="clientes" value="Listar Clientes">
                </div>
                </form>
            </div>

        </div>
    </div>
</div>



<?php 
    //footer
    include ('./includes/footer.php');
?>

