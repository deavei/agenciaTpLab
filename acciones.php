
<?php
//Incluimos cabecera y footer
include('./includes/cabecera.php');
include('db.php');

    if(isset($_POST['comprar'])){
        include('./getVehiculo.php');
    }
    elseif(isset($_POST['vender'])){
        include('./addVehiculo.php');
    }
    elseif(isset($_POST['stock'])){
        echo 'El usuario quiere comprar';
    }
    elseif(isset($_POST['clientes'])){
        echo 'El usuario quiere comprar';
    }


    if(isset($_POST['venderYa'])){
        //echo "llego desde venderYa";
        //Guardamos en variables locales los datos obtenidos por medio del metodo POST
        $marca =    $_POST['marca'];
        $modelo =   $_POST['modelo'];
        $anio =     $_POST['anio'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        /*
        echo $marca;
        echo $modelo;
        echo $anio;
        echo $descripcion;
        echo $precio;
        */

        $query = "INSERT INTO autos(marca, modelo, anio, precio, descripcion) 
                        VALUES('$marca', '$modelo', '$anio', '$precio', '$descripcion')";
        
        $resultado = mysqli_query($conexion, $query);
        if(!$resultado){
            echo 'Consulta fallida';
        }

        $_SESSION['mensaje'] = 'Se ha realizado la venta correctamente.';
        header('Location: index.php');
        
    }
include('./includes/footer.php');
?>