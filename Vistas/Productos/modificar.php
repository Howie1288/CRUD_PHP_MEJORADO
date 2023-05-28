<?php
    var_dump($_GET);
?>
<?php include_once '../../includes/header.php'?>
    <div class="container">
        <h1 class="text-center">Modificar productos</h1>
        <div class="row justify-content-center">
            <form action="/crudphp18may2023/controladores/productos/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="producto_id">
                <div class="row mb-3">
                    <div class="col">
                        <label for="producto_nombre">Nombre del producto</label>
                        <input type="text" name="producto_nombre" id="producto_nombre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="producto_precio">Precio del producto</label>
                        <input type="number" step="0.01" min="0" name="producto_precio" id="producto_precio" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-warning w-100">Modificar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>