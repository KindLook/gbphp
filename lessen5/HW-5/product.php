
<?php

require_once 'parts/header.php';
if (isset($_GET['product'])) {
    $currentProduct = $_GET['product'];
    $product = mysqli_query($link, "SELECT * FROM products WHERE title='$currentProduct'");
    $product = mysqli_fetch_all($product, MYSQLI_ASSOC);
}
?>
<div class="product-card">
    <a href="index.php">Вернуться на главную</a>

    <div class="descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, assumenda corporis deserunt dicta dolores ex illum inventore iusto nam nisi nobis obcaecati perspiciatis qui ratione recusandae similique sunt veritatis voluptatibus.</div>
    <img width="300" src="img/amanita.jpg" alt="Фото">
</div>
