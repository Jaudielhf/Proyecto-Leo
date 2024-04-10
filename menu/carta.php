<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
<script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
    <title>Menú del Restaurante</title>
    <?php
  require_once '../navegacion/nav-bar.php';
  ?>
    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f8f9fa;
}

.grid-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

.menu-section, .grid-item {
    background-color: #ffffff;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

h2 {
    color: #cc7a00;
    border-bottom: 2px solid #cc7a00;
    padding-bottom: 5px;
    margin-bottom: 15px;
}

.menu-item {
    margin-bottom: 15px;
    padding-bottom: 15px;
    border-bottom: 1px solid #e0e0e0;
}

.menu-item h3 {
    color: #333333;
    margin-bottom: 5px;
}

.menu-item p {
    color: #666666;
    margin-bottom: 5px;
}

.menu-item .price {
    font-weight: bold;
    color: #cc7a00;
}
h1 {
    text-align: center;
    margin-top: 20px;
    color: #cc7a00;
}

    </style>
</head>
<body>
    <h1 class="h1">Menú del Restaurante</h1>

    <?php
// Incluir el archivo connect_data.php para obtener $menuItems
$menuItems = include 'connect_data.php';

// Verificar si $menuItems es un array y no está vacío
if (is_array($menuItems) && !empty($menuItems)) {
    // Agrupar los productos por categoría
    $groupedMenu = [];
    foreach ($menuItems as $menuItem) {
        $categoria = $menuItem['categoria'];
        $groupedMenu[$categoria][] = $menuItem;
    }

    // Definir las categorías en un orden específico
    $categorias = ['entrada', 'platillo', 'bebida', 'postre'];

    // Mostrar cada sección de la carta por categoría
    echo '<div class="grid-container">';
    for ($i = 0; $i < count($categorias); $i++) {
        $categoria = $categorias[$i];
        if ($categoria === 'platillo' || $categoria === 'postre') {
            echo '<div class="grid-item">';
        } else {
            echo '<div class="menu-section">';
        }
        echo '<h2>' . ucwords($categoria) . '</h2>';
        if (isset($groupedMenu[$categoria])) {
            foreach ($groupedMenu[$categoria] as $item) {
                echo '<div class="menu-item">';
                echo '<h3>' . $item['nombre'] . '</h3>';
                echo '<p><strong>Ingredientes:</strong> ' . $item['ingredientes'] . '</p>';
                echo '<p class="price">Precio: $' . $item['precio'] . '</p>';
                echo '</div>';
            }
        } else {
            echo '<p>No hay productos en esta categoría.</p>';
        }
        echo '</div>';
    }
    echo '</div>';
} else {
    echo '<p>No se encontraron productos en el menú.</p>';
}
?>


</body>
</html>
