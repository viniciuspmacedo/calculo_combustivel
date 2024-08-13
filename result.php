<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 
    $distancia = $_POST['distancia'];
    $preco_etanol = $_POST['preco_etanol'];
    $preco_gasolina = $_POST['preco_gasolina'];
    $consumo_etanol = $_POST['consumo_etanol'];
    $consumo_gasolina = $_POST['consumo_gasolina'];

    $total_etanol = ($distancia/$consumo_etanol) * $preco_etanol;
    $total_gasolina = ($distancia/$consumo_gasolina) * $preco_gasolina;
    ?>
    <p>Gasto com etanol R$ <?php echo $total_etanol?></p>
    <p>Gasto com gasolina R$ <?php echo $total_gasolina?></p>    
</body>
</html>