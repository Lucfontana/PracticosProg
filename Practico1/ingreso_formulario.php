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
             <li><a href="#calculos-sencillos">Calculos Sencillos</a></li>
        <li><a href="#calculo-diversos">Calcular Areas</a></li>
        <li><a href="#baskara">Calcular Baskhara</a></li> 
        </ul>
    </nav>
    
    
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
        </section>


        <section id="calculo-diversos">
            <form action="paso2.php" method="post">
                <h1>Cálculo área cuadrado</h1>
                <label for="lado">Medida del lado: 
                    <input type="number" name="num1" placeholder="Ingrese medida del lado">
                </label>
                <input type="submit" value="Enviar" name="enviarCuadrado">
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
            </form>

            <form action="paso2.php" method="post">
                <h1>Cálculo Circunferencia</h1>
                <label for="radio">Medida del radio: 
                    <input type="number" name="num1" placeholder="Ingrese medida de la circunferencia">
                </label>
                <input type="submit" value="Enviar" name="enviarCircunferencia">
                </label>
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
                <div id="result">
                    
                </div>
            </form>
        </section>
    <main>
</body>
</html>





