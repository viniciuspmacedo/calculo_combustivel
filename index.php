<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Combustível</title>

    <style>
        main {
            margin: 0 auto;
            border: 1px solid red;
            max-width: 250px;
        }

        form {
            display: flex;
            flex-direction: column;
            max-width: 300px;
        }

        input[type="submit"] {
            margin-top: 16px;
        }
    </style>
</head>

<body>
    <main>
        <form action="result.php" method="post">
            <div><label for="consumo_etanol">Consumo etanol (km/l)</label>
                <input type="number" min="1" step="0.01" name="consumo_etanol">
            </div>
            <div><label for="consumo_gasolina">Consumo gasolina (km/l)</label>
                <input type="number" min="1" step="0.01" name="consumo_gasolina">
            </div>
            <label for="distancia">Distância a percorrer</label>
            <input type="number" min="1" step="0.01" name="distancia">
            <label for="preco_etanol">Preço Etanol</label>
            <input type="number" min="1" step="0.01" name="preco_etanol">
            <label for="preco_gasolina">Preço Gasolina</label>
            <input type="number" min="1" step="0.01" name="preco_gasolina">
            <input type="submit" value="Calcular">
        </form>
    </main>

</body>

</html>