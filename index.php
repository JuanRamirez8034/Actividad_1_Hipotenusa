<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Hipotenusa</title>
</head>
<!--Realice un programa en PHP que permita calcular la hipotenusa del triangulo rectángulo 
de lados 3 cm y 4 cm
h^2 = L1^2 + L2^2-->
<body>
    <div class="principal">
        <h1>CALCULAR HIPOTENUSA</h1>
        <div class="secundaria">
            <form action="index.php" method="POST">
                <h3>Datos del triangulo</h3>
                <label for="lado1">Lado #1</label> <br>
                <input type="number" name="lado_1" id="lado1" placeholder="Ingrese L1">
                <br>
                <label for="lado2">Lado #2</label> <br>
                <input type="number" name="lado_2" id="lado2" placeholder="Ingrese L2">
                <br>
                <input type="submit" value="Calcular" name="calcular">
            </form>
            <div class="resultado">
                <h3>Resultado</h3>
                <?php include("./assets/main.php")?>
            </div>
        </div>
    </div>
</body>
</html>