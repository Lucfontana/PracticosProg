<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="#calculos-sencillos">Calculos Sencillos</a></li>
            <li><a href="#calculo-diversos">Calcular Areas</a></li>
            <li><a href="#baskara">Calcular Baskhara</a></li>
        </ul>
    </nav>

    <a href="/lab6/index.html" class="back-btn">⬅ Volver al inicio</a>

    <main>
        <section id="calculos-sencillos">
            <form action="calcSimple.php" method="post">
                <h1>Calculos Sencillos</h1>
                <label for="num1">Número 1:
                    <input type="number" name="num1" placeholder="Ingrese un número">
                </label>
                <label for="num2">Número 2:
                    <input type="number" name="num2" placeholder="Ingrese un número">
                </label>
                <label for="operador">Operador
                    <select name="operador" id="" placeholder="Ingrese un operador">
                        <option value="">Ingrese un operador</option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="x">x</option>
                        <option value="/">/</option>
                    </select>
                </label>
                <input type="submit" value="Calcular" name="calculoBasico">

            </form>
            <?php if (isset($resultado)): ?>
                <div class="resultado">Resultado de la operacion: <?= $resultado ?></div>
            <?php endif; ?>

        </section>


        <section id="calculo-diversos">
            <form action="paso2.php" method="post">
                <h1>Cálculo área cuadrado</h1>
                <label for="lado">Medida del lado:
                    <input type="number" name="num1" placeholder="Ingrese medida del lado">
                </label>
                <input type="submit" value="Enviar" name="enviarCuadrado">
            <?php if (isset($areaCuad)): ?>
                <div class="resultado">Resultado: <?= $areaCuad ?></div>
            <?php endif; ?>
            </form>

            <form action="paso2.php" method="post">
                <h1>Cálculo área rectangulo</h1>
                <label for="base">Medida de la base:
                    <input type="number" name="num1" placeholder="Ingrese medida del lado">
                </label>
                <label for="altura">Medida de la altura:
                    <input type="number" name="num2" placeholder="Ingrese medida de la altura">
                </label>
                <input type="submit" value="Enviar" name="enviarRectangulo">
                </label>
                <?php if (isset($areaR)): ?>
                    <div class="resultado">Resultado: <?= $areaR ?></div>
                <?php endif; ?>
            </form>

            <form action="paso2.php" method="post">
                <h1>Cálculo área triángulo</h1>
                <label for="base">Medida de la base:
                    <input type="number" name="num1" placeholder="Ingrese medida de la base">
                </label>
                <label for="altura">Medida de la altura:
                    <input type="number" name="num2" placeholder="Ingrese medida de la altura">
                </label>
                <input type="submit" value="Enviar" name="enviarTriangulo">
                <?php if (isset($areaT)): ?>
                    <div class="resultado">Resultado: <?= $areaT ?></div>
                <?php endif; ?>
            </form>

            <form action="paso2.php" method="post">
                <h1>Cálculo Circunferencia</h1>
                <label for="radio">Medida del radio:
                    <input type="number" name="num1" placeholder="Ingrese medida de la circunferencia">
                </label>
                <input type="submit" value="Enviar" name="enviarCircunferencia">
                </label>
                <?php if (isset($areaCir)): ?>
                    <div class="resultado">Resultado: <?= $areaCir ?></div>
                <?php endif; ?>
            </form>


        </section>

        <section id="baskara">
            <form action="resultados.php" method="post">
                <h1>Cálculo de Baskara</h1>
                <label for="lado">Numero A:
                    <input type="number" name="numA" placeholder="Ingrese el numero de exponente 2: " required>
                </label>
                <label for="lado">Numero B:
                    <input type="number" name="numB" placeholder="Ingrese el numero de exponente 1: " required>
                </label>
                <label for="lado">Numero C:
                    <input type="number" name="numC" placeholder="Ingrese el termino independiente: " required>
                </label>
                <input type="submit" value="Enviar" name="bhaskara">
                <?php if (isset($mensajeA) || isset($mensajeB)): ?>
                    <div class="resultado"> <?= $mensajeA ?></div>
                    <div class="resultado"> <?= $mensajeB ?></div>
                <?php endif; ?>
            </form>
        </section>
                </main>
</body>

 <footer>
        <p>© Laboratorios de Programación</p>
    </footer>

</html>