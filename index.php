
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
        nav {
            margin: 1rem;
        }
        nav a {
            margin: 0 1rem;
            text-decoration: none;
            color: #333;
        }
        main {
            padding: 2rem;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: .2rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    
    <header>
        <h1>Bienvenid@ a mi pagina</h1>
    </header>
    <nav>
        <a href="index.html">Inicio</a>
        <a href="SobreMi.html">Sobre Mi</a>
        <a href="Contacto.html">Contacto</a>
        <a href="Catalogo.html">Catálogo</a>
    </nav>
    <main>        

        <h2>Pagina Principal</h2>
        <?php
        echo "Este es un texto ejecutado con php";
        ?>

        <p>Esta es una prueba para la página de mi estudio indie de videojuegos (idea en construcción), siéntete libre de explorarla a tu gusto.</p>
        <ul>
            <li>El Último Brote</li>
            <li>Plasmatic</li>
            <li>Pathswer</li>
        </ul>

       <h2>Contenido de mis Juegos</h2>
        <video width="560" height="315" controls>
            <source src="Semilla.mp4" type="video/mp4">
            Tu navegador no soporta la reproducción de este video.
        </video>
        <p>Esta es una canción que yo mismo compuse para el primer juego serio que desarrollé en mis estudios (El Último Brote), la canción se llama Semilla.</p>
        
        <h2>Inspiración Visual - Pixel art</h2>
<div class="image-grid" id="pexelsImages"></div>

<script>
  const apiKey = 'LvPhl6Q9FkiX8ByP1Xl5vNCxSErYulyYTFli4ucwtmYx81clsSCFE4oe';
  const query = 'pixel art';

  fetch(`https://api.pexels.com/v1/search?query=${query}&per_page=6`, {
    headers: {
      Authorization: apiKey
    }
  })
  .then(response => response.json())
  .then(data => {
    const container = document.getElementById('pexelsImages');
    data.photos.forEach(photo => {
      const img = document.createElement('img');
      img.src = photo.src.medium;
      img.alt = photo.photographer;
      container.appendChild(img);
    });
  })
  .catch(error => console.error('Error al obtener imágenes:', error));
</script>

    </main>
    <footer>
        <p>&copy; 2025 Michael Zuleta - Daikiri</p>
    </footer>
</body>
</html>
