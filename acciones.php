
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
        include('./listarVehiculos.php');
    }
    elseif(isset($_POST['clientes'])){
        include('./listarClientes.php');
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

    //Venta del vehiculo al cliente
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        //Por ahora se elimina el vehiculo, que seria la idea... y luego asignarselo a un id de usuario.
        if($id == '0000') header('Location: clientes.php');
        $query = "DELETE FROM autos WHERE id = $id";
        mysqli_query($conexion, $query);

        header('Location: index.php');

    }

    //Agregamos un nuevo cliente con datos proporcionados en formulario nuevoCliente
    if(isset($_POST['nuevoCliente'])){
        //echo 'Llego a comprobacion!';
        $nombre = $_POST['nuevo'];
        $documento = $_POST['documento'];
        $direccion = $_POST['direccion'];

        //Consulta a db
        $query = "INSERT INTO clientes(nombre, documento, direccion) VALUES('$nombre', '$documento', '$direccion')";
        $resultado = mysqli_query($conexion, $query);

        if(!$resultado){
            echo 'Consulta fallida';
        }
        header('Location: listarClientes.php');
    }

include('./includes/footer.php');
?>