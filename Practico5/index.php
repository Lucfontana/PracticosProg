<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 5</title>
    <link rel="stylesheet" href="../Practico1/style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="#InfoPersonal">Información Personal</a></li>
            <li><a href="#calculo-promedio">Calificaciones</a></li>
        </ul>
    </nav>


    <main>
        <section id="InfoPersonal">
            <form action="conversiones_datos.php" method="post">
                <h1>Información Personal</h1>
                <label for="num">Nombre Completo:
                    <input type="string" name="num" placeholder="Ingrese el nombre completo" maxlength="100" required>
                </label>
                <label for="num">Cédula de Identidad:
                    <input type="string" name="num" placeholder="Ingrese la cédula de identidad" maxlength="8" required>
                </label>
                <label for="num">Localidad:
                    <input type="string" name="num" placeholder="Ingrese la localidad" maxlength="100" required>
                </label>
                <label for="num">Dirección:
                    <input type="string" name="num" placeholder="Ingrese la dirección" maxlength="100" required>
                </label>
                <label for="num">Teléfono:
                    <input type="string" name="num" placeholder="Ingrese el número de teléfono" maxlength="8" required>
                </label>
                <label for="num">Email:
                    <input type="string" name="num" placeholder="Ingrese el email" maxlength="100" required>
                </label>
            </form>
        </section>
        <section id="calculo-promedio">
            <h1>Calificaciones</h1>
            <form action="calculo_promedio.php" method="post">
                <?php for ($i=1; $i<=10; $i++): ?>
        <input type="number" name="nota<?php echo $i; ?>" class="nota<?php echo $i?>" placeholder="Nota <?php echo $i; ?>" min="0" max="10" required>
    <?php endfor; ?>
                <button type="submit">Calcular Promedio</button>
            </form>
        </section>
    </main>
</body>
</html>