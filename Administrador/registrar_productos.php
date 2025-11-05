<?php 
    session_start();
    include "../config.php";

    if (!isset($_SESSION['admin']) || $_SESSION['admin']['rol'] != 'admin') {
    header("Location: ../login.php");
    exit();
    }

    $sql_categorias = "SELECT nombre_categoria FROM categorias";
    $resultado = mysqli_query($conn, $sql_categorias);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Productos - OnlyMarket</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<body>
    <div class="container-fluid bg-light p-3">
        <h5>Aqui podras registrar los nuevos productos al inventario</h5>
    </div>

    <div class="container-row container-fluid mt-4">
        <div class="card shadow col-lg-5 col-md-6 col-sm-12">
            <div class="card-header bg-secondary text-white">
                <h5>Registrar productos</h5>
            </div>
            <form method="POST">
                <div class="form-row px-2 py-3">
                    <div class="col-md-6">
                        <label for="categoria" class="form-label">Ingresa la categoria del producto</label>
                        <select name="categoria" id="categoria" class="form-select">
                            <?php while($recorrer = mysqli_fetch_row($resultado)){ ?>
                                <option value=""><?php echo $recorrer[0]?></option>        
                            <?php }?>
                        </select><br>
                        <a href="#" class="text-muted">¿No encuentras la categoria?<br><strong>Registrar la categoria</strong></a>
                    </div>
                    <div class=""></div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>