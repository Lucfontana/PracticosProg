<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2</title>
    <link rel="stylesheet" href="../Practico1/style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="#tablas">Tablas de Multiplicar</a></li>
            <li><a href="#5oro">¿Cuál es tu probabilidad de sacar el 5 de oro?</a></li>
            <li><a href="#factoriales">Factoriales de un numero</a></li>
        </ul>
    </nav>


    <main>
        <section id="tablas">
            <form action="resultados-2.php" method="post">
                <h1>Tablas de Multiplicar</h1>
                <label for="num1">Elige un Número:
                    <input type="number" name="numero" placeholder="Ingrese el número" required>
                </label>
                <input type="submit" value="Verificar" name="numeroTabla">

            </form>
            <?php if (isset($resultado1)): ?>
                <div class="resultado">
                    <?= $resultado1 ?>
                    <?= $resultado2 ?>
                    <?= $resultado3 ?>
                    <?= $resultado4 ?>
                    <?= $resultado5 ?>
                    <?= $resultado6 ?>
                    <?= $resultado7 ?>
                    <?= $resultado8 ?>
                    <?= $resultado9 ?>
                    <?= $resultado10 ?>
                </div>
            <?php endif; ?>

        </section>


        <section id="5oro">
            <form action="resultados-2.php" method="post">
                <h1>El secreto detras de las probabilidades del 5 de oro</h1>
                <label for="lado">Elige 5 numeros entre el 01 y el 48
                    <input type="number" name="ci7" placeholder="Ingrese número" maxlength="2" required>
                </label>
                <input type="submit" value="Enviar" name="adivina5oro">
            <?php if (isset($digVerificador)): ?>
                <div class="resultado">Resultado: <?= $digVerificador ?></div>
            <?php endif; ?>
            </form>

        </section>

        <section id="factoriales">
            <form action="resultados-2.php" method="post">
                <h1>Calculador de Factoriales</h1>
                <label for="lado">Ingrese el numero:
                    <input type="number" name="ci7" placeholder="Ingrese número" maxlength="7" required>
                </label>
                <input type="submit" value="Enviar" name="factorial">
            <?php if (isset($digVerificador)): ?>
                <div class="resultado">Resultado: <?= $digVerificador ?></div>
            <?php endif; ?>
            </form>

        </section>

        <main>
</body>

</html>