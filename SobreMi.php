<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sobre Mí</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding-bottom: 60px; 
      background-color: #f4f4f4;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 1rem;
      text-align: center;
    }

    nav a {
      margin: 0 0.5rem;
      text-decoration: none;
      color: #333;
    }

    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 0.5rem;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    .card {
      margin-top: 1rem;
    }
  </style>
</head>
<body>

  <script src="js/bootstrap.bundle.min.js"></script>

  <header>
    <h1>Sobre Mí</h1>
  </header>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Daikiri Studio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="SobreMi.php">Sobre Mi</a></li>
          <li class="nav-item"><a class="nav-link" href="Contacto.html">Contacto</a></li>
          <li class="nav-item"><a class="nav-link" href="Catalogo.html">Catálogo</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container mt-4">
    <div class="card shadow-sm p-4">
      <h2 class="mb-3">Sobre Mí</h2>
      <p>
        Mi nombre es Michael Zuleta, soy un Colombiano de 23 años (y contando). La cosa que más adoro en el mundo son los videojuegos,
        desde pequeño fui expuesto a ese maravilloso y a veces incluso enriquecedor mundillo. Desde entonces esta pasión se ha convertido en una piedra 
        angular en mi vida, cambiando mi manera de ver el mundo, de relacionarme con los demás, e incluso la manera en la que entiendo conceptos como la 
        vida o la muerte. En 2023 terminé mi tecnología en desarrollo de videojuegos y entornos interactivos, y desde entonces he estado pensando en crear 
        mi propio estudio de videojuegos, en el que pueda poner en marcha las ideas que he tenido desde tan pequeño y que aún no he visto desarrolladas en
        la industria. Aunque aún no he comenzado a construir estas ideas, esta página es para exponer mis deseos y sueños respecto a las mismas.
      </p>
      <p>
        <?php
          echo "Como dato curioso, mi género favorito de videojuegos es el RPG, y mi juego favorito es Skyrim.";
        ?>
      </p>
    </div>
  </main>

  <footer>
    <p>&copy; 2025 Michael Zuleta - Daikiri</p>
  </footer>

</body>
</html>
