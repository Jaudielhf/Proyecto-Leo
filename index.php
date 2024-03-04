<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
<script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
    <title>Restaurante</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">LA CASA DEL SABOR</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             
              <li class="nav-item">
                <a class="nav-link" href="./menu/adm_entradas/formulario_add.php">Nuevo</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categoria
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="./menu/adm_entradas/entradas.php">Entradas</a></li>
                  <li><a class="dropdown-item" href="./menu/platillos.php">Platillos</a></li>
                  <li><a class="dropdown-item" href="./menu/bebidas.php">Bebidas</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="./menu/postres.php">Postres</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      
    <div class="container">
      
        <div class="body-content">
            <div class="title-container">
                <div class="information-container">
                    <h1>RESTAURANTE</h1>
                    <h2>Información</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam debitis id ea reprehenderit, at praesentium tenetur perferendis voluptatem! Tenetur et deleniti nesciunt quis voluptatem voluptas nemo aperiam dolorum, eligendi laboriosam!</p>
                </div>
                <div class="img-container">
                    <img src="./src/img/imgprueba.jpg" alt="">
                </div>

            </div>
            <div class="cards-container">
                <article class="card">
                    <div class="card-int">
                        <span class="card__span">ENTRADAS</span>
                        <div class="img">
                            <img class="img" src="https://blog.simpliza.com.br/wp-content/uploads/2022/06/entradas-para-restaurantes-melhores-ideias-scaled-e1690810095581.jpg" alt="">
                        </div>
                        <div class="card-data">
                          <p class="title">This is a test title
                          </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          <button class="button" onclick="location.href='./menu/adm_entradas/entradas.php' " >Ver Productos</button>
                         
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-int">
                        <span class="card__span">PLATILLOS</span>
                        <div class="img">
                            <img class="img" src="https://media-cdn.tripadvisor.com/media/photo-s/13/ab/bb/9a/platillos-de-alta-cocina.jpg" alt="">
                        </div>
                        <div class="card-data">
                          <p class="title">This is a test title
                          </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          <button class="button" onclick="location.href='./menu/platillos.php'">Ver Productos</button>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-int">
                        <span class="card__span">BEBIDAS</span>
                        <div class="img">
                           <img class="img" src="https://media.glamour.mx/photos/63fbac8762e9478a3fe578a3/4:3/w_2431,h_1823,c_limit/Decoraci%C3%B3n%20de%20bebidas.jpg" alt="">
                        </div>
                        <div class="card-data">
                          <p class="title">This is a test title
                          </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          <button class="button" onclick="location.href='./menu/bebidas.php'">Ver Productos</button>
                        </div>
                    </div>
                </article>
                <article class="card">
                    <div class="card-int">
                        <span class="card__span">POSTRES</span>
                        <div class="img">
                            <img src="https://i.pinimg.com/originals/63/5a/18/635a189d1f8c5494690783ec6c8e76ed.jpg" alt="" class="img">
                        </div>
                        <div class="card-data">
                          <p class="title">This is a test title
                          </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          <button class="button" onclick="location.href='./menu/postres.php'">Ver Productos</button>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</body>
</html>