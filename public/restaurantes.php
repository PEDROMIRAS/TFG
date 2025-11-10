<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/restaurantes.css">
    <script src="https://kit.fontawesome.com/f97389225c.js" crossorigin="anonymous"></script>
    <title>Restaurantes</title>
</head>
<body>
    <header>
        <!-- Botón para volver -->
        <button class="back-button" onclick="window.location.href='../index.php'">
            <i class="fa-solid fa-arrow-left"></i>
            Volver
        </button>
    </header>
    <main>
        <div class="titulo">
            <h1>Restaurantes</h1>
        </div>
        
        <div class="filtros">
            <div class="filtro">
                <i class="fa-solid fa-filter"></i>
                <span>Filtros</span>
            </div>
            <div class="filtro">
                <i class="fa-solid fa-sort"></i>
                <span>Ordenar</span>
            </div>
            <div class="filtro">
                <i class="fa-solid fa-map"></i>
                <span>Mapa</span>
            </div>
        </div>
        <div class="restaurantes-container">
            <!-- Aquí irán los restaurantes -->
            <ul class="restaurantes">
                <li>
                    <a href="#">
                    <h3>Restaurante 1 — La Mar de Sabores</h3>
                    <p>Especialidad en pescados frescos y cocina mediterránea frente al mar.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <h3>Restaurante 2 — Fuego & Brasas</h3>
                    <p>Carnes a la parrilla y vinos selectos en un ambiente rústico moderno.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <h3>Restaurante 3 — Sakura</h3>
                    <p>Alta cocina japonesa con sushi artesanal y teppanyaki en vivo.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <h3>Restaurante 4 — La Terraza Verde</h3>
                    <p>Platos vegetarianos y veganos con ingredientes ecológicos de proximidad.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <h3>Restaurante 5 — Don Pasta</h3>
                    <p>Auténtica trattoria italiana con pasta fresca hecha a mano.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <h3>Restaurante 6 — El Molino Viejo</h3>
                    <p>Gastronomía tradicional con un toque moderno en un entorno rural encantador.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <h3>Restaurante 7 — Cielo Rooftop</h3>
                    <p>Cócteles de autor y tapas gourmet con vistas panorámicas de la ciudad.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <h3>Restaurante 8 — La Parrillada del Puerto</h3>
                    <p>Pescados y mariscos a la brasa con un ambiente marinero auténtico.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <h3>Restaurante 9 — Aroma</h3>
                    <p>Fusión de sabores mediterráneos y asiáticos con un toque innovador.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <h3>Restaurante 10 — El Huerto</h3>
                    <p>Comida saludable con productos de temporada y recetas caseras.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <h3>Restaurante 11 — La Cava</h3>
                    <p>Bodega gourmet con tapas selectas y una cuidada selección de vinos.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <h3>Restaurante 12 — El Mirador</h3>
                    <p>Restaurante panorámico con cocina de autor y postres caseros.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <h3>Restaurante 13 — Street Bites</h3>
                    <p>Comida urbana y street food internacional en un ambiente joven y moderno.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <h3>Restaurante 14 — Sabores del Sur</h3>
                    <p>Cocina andaluza con especialidad en pescaíto frito y tapas tradicionales.</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <h3>Restaurante 15 — Nordik</h3>
                    <p>Comida escandinava moderna con diseño minimalista y productos orgánicos.</p>
                    </a>
                </li>
            </ul>
        </div>
    </main>
    <?php include('footer.php'); // footer.php está en la misma carpeta (public/) ?>
</body>
</html>