<?php

require_once 'parts/header.php';

$products = mysqli_query($link, "SELECT * FROM products");
$products = mysqli_fetch_all($products, MYSQLI_ASSOC);



?>

    <div class="main">
        <? foreach ($products as $product) { ?>
        <div class="card">
            <a href="product.php">
                <img src="img/<?=$product['img']?>" alt="<?=$product['rus_name']?>">
            </a>
            <div class="label"><?=$product['rus_name']?></div>
        </div>
        <? } ?>
    </div>


</body>
</html>

