<?php require_once 'parts/head.php'; ?>

<title>Dynamic</title>

</head>
<body>
<?php require_once 'parts/header.php'; ?>

<?php
    //Получаем все товары
    $products = $this->getProducts();
?>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4 mb-5">Наши товары</h1>
</div>
<div class="container">
    <div class="card-deck mb-3 text-center">
        <?php foreach ($products as $product): ?>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal"><?= $product['name']; ?></h4>
            </div>
            <div class="card-body">
                <p class="card-title pricing-card-title h3"><?= $product['price']; ?> руб</p>
                <p><?= $product['description']; ?></p>
                <a class="btn btn-lg btn-outline-primary" href="#"><span>Подробнее</span></a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require_once 'parts/footer.php'; ?>
</body>
</html>