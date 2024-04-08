<!DOCTYPE html>
<html>

<head>
    <title>Añadir usuario</title>
</head>

<body>
    <div class="container">
    <div class="col">
        <div class="row">
        <form method="post" action="insert.php">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Ingredientes</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ingredientes"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Instrucciones</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="instrucciones"></textarea>
        </div>
        <select class="form-select" aria-label="Default select example" name="categoria">
            <option selected>Categoria</option>
            <option value="entrada">Entrada</option>
            <option value="platillo">Platillo</option>
            <option value="bebida">Bebida</option>
            <option value="postre">Postre</option>
        </select>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Codigo</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="codigo">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Precio</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="precio">
        </div>
        <button type="submit" class="btn btn-primary" value="Continuar">Agregar</button>
    </form>

        </div>
    </div>
    </div>
    
</body>

</html>