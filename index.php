
<?php 
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $card = $_POST['cardname'];
    $description = $_POST['description'];
    $sell = $_POST['sell'];
    $colvo = $_POST['colvo'];


    $lines = file('products.ini');
    $sub = count($lines)/5;

    $cardData = "[$sub]\n";
    $cardData .= "name =\"$card\"\n";
    $cardData .= "description =\"$description\"\n";
    $cardData .= "sell =\"$sell\"\n";
    $cardData .= "colvo =\"$colvo\"\n";

    file_put_contents('products.ini', $cardData, FILE_APPEND);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="create">
        <h2>Создать карточку товара</h2>
    
        <form method="post" class="forma">
            <input type="text" name="cardname" placeholder="Название товара" required>
            <textarea name="description" id="" cols="30" rows="10" placeholder="Описание товара" required></textarea>
            <input type="text" name="sell" placeholder="Цена товара" required>
            <input type="number" name="colvo" placeholder="Количество товара" required>
            <input type="submit" value="Создать">
        </form>

        <a href="card.php">Страница с товаром</a>
    </div>
</body>
</html>