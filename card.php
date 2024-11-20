<?php 
$cards = parse_ini_file('products.ini', true); // Изменено на $cards

if ($cards === false) {
    $cards = [];
} // Закрывающая скобка для if должна быть здесь

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
    <?php if(empty($cards)): ?>
        <h2>Товаров нет</h2>
    <?php else: ?>
        <h2>Товары</h2>
        <?php foreach($cards as $cardName => $card): ?> 

            <div class="cardbox">

                <div class="cardtitle">
                    <?php echo "Название товара:" . $card['name']; ?>
                </div>
                <div class="carddiscript">
                    <?php echo "Описание товара:" . $card['description']; ?>
                </div>
                <div class="cardsell">
                    <?php echo "Цена: " . $card['sell']; ?>
                </div>
                <div class="cardcoll">
                <?php echo "Количество на складе: " . $card['colvo']; ?>
                </div>
            </div>
            <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>