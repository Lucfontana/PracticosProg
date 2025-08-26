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
                        <option value="none"></option>
                        <option value="10">Decimal</option>
                        <option value="2">Binario</option>
                        <option value="8">Octal</option>
                        <option value="16">Hexadecimal</option>
                    </select>
                </label>

                <label for="destino">Base de destino:
                    <select name="destino" id="destino">
                        <option value="none"></option>
                        <option value="10">Decimal</option>
                        <option value="2">Binario</option>
                        <option value="8">Octal</option>
                        <option value="16">Hexadecimal</option>
                    </select>
                </label>
                
                <input type="submit" value="Convertir" name="convertir">

            </form>
            <?php if (isset($conversion)): ?>
                <div class="resultado">CI: <?= $conversion ?></div>
            <?php endif; ?>

        </section>


        <section id="calculo-diversos">
            <form action="conversiones_datos.php" method="post">
                <h1>Operaciones con resultados en distintas bases</h1>
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