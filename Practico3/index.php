<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 3</title>
    <link rel="stylesheet" href="../Practico1/style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="#conversiones">Conversiones de bases</a></li>
            <li><a href="#calculo-diversos">Operaciones con resultados en distintas bases</a></li>
        </ul>
    </nav>


    <main>
        <section id="conversiones">
            <form action="conversiones_datos.php" method="post">
                <h1>Conversiones de bases</h1>
                <label for="num">Número a convertir:
                    <input type="string" name="num" placeholder="Ingrese el número a convertir" maxlength="8" required>
                </label>
                <label for="desde">Base de origen:
                    <select name="desde" id="desde">
                        <option value=""></option>
                        <option value="10">Decimal</option>
                        <option value="2">Binario</option>
                        <option value="8">Octal</option>
                        <option value="16">Hexadecimal</option>
                    </select>
                </label>

                <label for="destino">Base de destino:
                    <select name="destino" id="destino">
                        <option value=""></option>
                        <option value="10">Decimal</option>
                        <option value="2">Binario</option>
                        <option value="8">Octal</option>
                        <option value="16">Hexadecimal</option>
                    </select>
                </label>
                
                <input type="submit" value="Convertir" name="convertir">

            </form>
            <?php if (isset($conversion)): ?>
                <div class="resultado">Resultado: <?= $conversion ?></div>
            <?php endif; ?>

        </section>


        <section id="calculo-diversos">
            <form action="conversiones_datos.php" method="post">
                <h1>Operaciones con resultados en distintas bases</h1>
                <label for="num1">Ingrese el primer numero:
                    <input type="number" name="num1" placeholder="Ingrese el primer numero" maxlength="7" required>
                </label>
                <label for="base1">Base:
                    <select name="base1" id="base1" required>
                        <option value=""></option>
                        <option value="10">Decimal</option>
                        <option value="2">Binario</option>
                        <option value="8">Octal</option>
                        <option value="16">Hexadecimal</option>
                    </select>
                </label>
                <label for="num2">Ingrese el segundo numero:
                    <input type="number" name="num2" placeholder="Ingrese el segundo numero" maxlength="7" required>
                </label>
                <label for="base2">Base:
                    <select name="base2" id="base2">
                        <option value=""></option>
                        <option value="10">Decimal</option>
                        <option value="2">Binario</option>
                        <option value="8">Octal</option>
                        <option value="16">Hexadecimal</option>
                    </select>
                </label>
                <label for="operacion">Operación:
                    <select name="operacion" id="operacion">
                        <option value=""></option>
                        <option>+</option>
                        <option>-</option>
                        <option>/</option>
                        <option>*</option>
                    </select>
                </label>
                <input type="hidden" name="Calcular" value=1>
                <input type="submit" value="Enviar">
            <?php if (isset($resultado)): ?>
                <div class="resultado"><?= $resultado ?></div>
                <div class="resultado"><?= $resultado2 ?></div>
                <div class="resultado"><?= $resultado3 ?></div>
                <div class="resultado"><?= $resultado4 ?></div>
            <?php endif; ?>
            </form>

        </section>


        <main>
</body>

</html>