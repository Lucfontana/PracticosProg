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

    <a href="/lab6/index.html" class="back-btn">⬅ Volver al inicio</a>
    <main>
        <section id="InfoPersonal">
            <form action="datos.php" method="post">
                <h1>Información Personal</h1>
                <label>Nombre Completo:
                    <input type="text" placeholder="Nombre Completo" name="nombre" maxlength="50" required>
                </label>
                <label>Cédula de Identidad:
                    <input type="number" placeholder="Cédula de Identidad" name="cedula" maxlength="8" required>
                </label>
                <label>Localidad:
                    <input type="text" placeholder="Localidad" name="localidad" maxlength="50" required>
                </label>
                <label>Dirección:
                    <input type="text" placeholder="Dirección" name="direccion" maxlength="100" required>
                </label>
                <label>Teléfono:
                    <input type="number" placeholder="Teléfono" name="telefono" maxlength="12" required>
                </label>
                <label>Email:
                    <input type="email" placeholder="Email" name="email" maxlength="50" required>
                </label>
        </section>

        <section id="calculo-promedio">
            <h1>Calificaciones</h1>
                <label>Matemáticas:
                    <input type="number" placeholder="Nota" name="notas[]" min="1" max="12" required>
                </label>
                <label>Filosofía:
                    <input type="number" placeholder="Nota" name="notas[]" min="1" max="12" required>
                </label>
                <label>Ciberseguridad:
                    <input type="number" placeholder="Nota" name="notas[]" min="1" max="12" required>
                </label>
                <label>Inglés:
                    <input type="number" placeholder="Nota" name="notas[]" min="1" max="12" required>
                </label>
                <label>Programación:
                    <input type="number" placeholder="Nota" name="notas[]" min="1" max="12" required>
                </label>
                <label>Ingeniería:
                    <input type="number" placeholder="Nota" name="notas[]" min="1" max="12" required>
                </label>
                <label>Sistemas Operativos:
                    <input type="number" placeholder="Nota" name="notas[]" min="1" max="12" required>
                </label>
                <label>Sociología:
                    <input type="number" placeholder="Nota" name="notas[]" min="1" max="12" required>
                </label>
                <label>Profundización:
                    <input type="number" placeholder="Nota" name="notas[]" min="1" max="12" required>
                </label>
                <label>Cálculo:
                    <input type="number" placeholder="Nota" name="notas[]" min="1" max="12" required>
                </label>

                <button type="submit" value="Calcular Promedio" name="calcularPromedio">Calcular Promedio</button>
            </form>
        </section>
    </main>
</body>
</html>