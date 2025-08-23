<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4</title>
    <link rel="stylesheet" href="../Practico1/style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="#calculos-sencillos">Verificación de existencia de CI</a></li>
            <li><a href="#calculo-diversos">Generador de Dígitos Verificadores</a></li>
        </ul>
    </nav>


    <main>
        <section id="verificar_existencia_cedula">
            <form action="verificar_cedula.php" method="post">
                <h1>Verificar si una CI existe</h1>
                <label for="num1">Cédula de Identidad:
                    <input type="number" name="ci" placeholder="Ingrese su CI" maxlength="8" required>
                </label>
                <input type="submit" value="Verificar" name="verificarCI">

            </form>
            <?php if (isset($verificadorCI)): ?>
                <div class="resultado">CI: <?= $verificadorCI ?></div>
            <?php endif; ?>

        </section>


        <section id="digito_verificador">
            <form action="verificar_cedula.php" method="post">
                <h1>Generador de Dígitos Verificadores</h1>
                <label for="lado">Ingrese los primeros 7 dígitos de una CI:
                    <input type="number" name="ci7" placeholder="Ingrese CI sin digito verificador" maxlength="7" required>
                </label>
                <input type="submit" value="Enviar" name="generarDV">
            <?php if (isset($digVerificador)): ?>
                <div class="resultado">Resultado: <?= $digVerificador ?></div>
            <?php endif; ?>
            </form>

        </section>


        <main>
</body>

</html>