<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog de Videojuegos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <!--CABECERA-->
    <header id="cabecera">
        <!--LOGO-->
        <div id="logo">
            <a href="index.php">
                Blog de Videojuegos
            </a>
        </div>
        <!--MENU-->
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="index.php">Categoria 1</a>
                </li>
                <li>
                    <a href="index.php">Categoria 2</a>
                </li>
                <li>
                    <a href="index.php">Categoria 3</a>
                </li>
                <li>
                    <a href="index.php">Categoria 4</a>
                </li>
                <li>
                    <a href="index.php">Sobre mi</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>
    <div id="contenedor">
        <!--BARRA LATERAL-->
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Identifícate</h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <input type="submit" value="Entrar">
                </form>
            </div>

            <div id="register" class="bloque">
                <h3>Registrate</h3>
                <form action="registro.php" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <input type="submit" value="Registrar">
                </form>
            </div>
        </aside>
        <!--CAJA PRINCIPAL-->
        <div id="principal">
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid reiciendis perferendis unde earum eum. Doloribus laudantium delectus laborum voluptatibus consequuntur sed sunt, tenetur error aliquid aut dolores iusto ullam inventore.
                </p>
            </article>
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid reiciendis perferendis unde earum eum. Doloribus laudantium delectus laborum voluptatibus consequuntur sed sunt, tenetur error aliquid aut dolores iusto ullam inventore.
                </p>
            </article>
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid reiciendis perferendis unde earum eum. Doloribus laudantium delectus laborum voluptatibus consequuntur sed sunt, tenetur error aliquid aut dolores iusto ullam inventore.
                </p>
            </article>
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid reiciendis perferendis unde earum eum. Doloribus laudantium delectus laborum voluptatibus consequuntur sed sunt, tenetur error aliquid aut dolores iusto ullam inventore.
                </p>
            </article>
        </div>

    </div>
    <!--PIE DE PAGINA-->
    <footer id="pie">
        <p>
            Desarrollado por Carlos Lopez &copy; 2021
        </p>
    </footer>
</body>

</html>