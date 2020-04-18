<div class="container p-4">
<div class="row">
<div class="col-md-4">
    <div class="card card-body">
    <form action="acciones.php" method="POST">
        <div class="form-group">
            <input class="form-control" type="text" name="marca" placeholder="Marca del vehiculo">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="modelo" placeholder="Modelo">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="anio" placeholder="Año">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="precio" placeholder="Precio $">
        </div>
        <div class="form-group">
            <textarea name="descripcion" rows="3" placeholder="Descripcion del vehiculo." class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success btn-block" name="venderYa" value="Vender!">
        </div>
    </form>
    </div>
</div>
</div>
</div>