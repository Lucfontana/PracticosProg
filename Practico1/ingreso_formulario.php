<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li><h1>Calculos Sencillos</h1></li>
            <li><h1>Calcular Areas</h1></li>
            <li><h1>Calcular Baskhara</h1></li>
        </ul>
    </nav>
    
    
    <main>
        <section id="calculos-sencillos">
            <form action="resultado.php" method="post">
                <h1>Calculos Sencillos</h1>
                <label for="num1">Número 1: 
                    <input type="number" name="num1" placeholder="Ingrese un número">
                </label>
                <label for="num2">Número 2: 
                    <input type="number" name="num2" placeholder="Ingrese un número">
                </label>
                <input type="submit" value="Sumar" name="sumar">
                <input type="submit" value="Restar" name="restar">
                <input type="submit" value="Multiplicar" name="multiplicar">
                <input type="submit" value="Dividir" name="dividir">
            </form>
        </section>


        <section id="calculo-diversos">
            <form action="resultado.php" method="post">
                <h1>Cálculo área cuadrado</h1>
                <label for="lado">Medida del lado: 
                    <input type="number" name="num1" placeholder="Ingrese medida del lado">
                </label>
                <input type="submit" value="Enviar" name="enviarCuadrado">
            </form>

            <form action="resultado.php" method="post">
                <h1>Cálculo área rectangulo</h1>
                <label for="base">Medida de la base: 
                    <input type="number" name="num1" placeholder="Ingrese medida del lado">
                </label>
                <label for="altura">Medida de la altura: 
                    <input type="number" name="num2" placeholder="Ingrese medida de la altura">
                </label>
                <input type="submit" value="Enviar" name="enviarRectangulo">
                <label for="num2">Número 2: 
                </label>
            </form>

            <form action="resultado.php" method="post">
                <h1>Cálculo área triángulo</h1>
                <label for="base">Medida de la base: 
                    <input type="number" name="num1" placeholder="Ingrese medida de la base">
                </label>
                <label for="altura">Medida de la altura: 
                    <input type="number" name="num2" placeholder="Ingrese medida de la altura">
                </label>
                <input type="submit" value="Enviar" name="enviarTriangulo">
            </form>

            <form action="resultado.php" method="post">
                <h1>Cálculo Circunferencia</h1>
                <label for="radio">Medida del radio: 
                    <input type="number" name="num1" placeholder="Ingrese medida del lado">
                </label>
                <input type="submit" value="Enviar" name="enviarRectangulo">
                <label for="num2">Número 2: 
                </label>
            </form>
            
            
        </section>

        <section id="baskara">
            <form action="resultado.php" method="post">
                <h1>Cálculo de Baskara</h1>
                <label for="lado">Numero A: 
                    <input type="number" name="numA" placeholder="Ingrese el numero de exponente 2: ">
                </label>
                <label for="lado">Numero B: 
                    <input type="number" name="numA" placeholder="Ingrese el numero de exponente 1: ">
                </label>
                <label for="lado">Numero C: 
                    <input type="number" name="numA" placeholder="Ingrese el termino independiente: ">
                </label>
                <input type="submit" value="Enviar" name="enviarCuadrado">
            </form>
        </section>
    <main>
</body>
</html>





