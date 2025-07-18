<?php
$products = json_decode(file_get_contents('products.json'), true);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Catalog</title>
    <link rel="stylesheet" href="final_homepage.css">
</head>
<body>
    <div class="second_div">
        <div class="second-box">
            <?php foreach ($products as $product): ?>
                <div class="ele">
                    <img class="img" src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                    <p><?php echo $product['name']; ?></p>
                    <p class="price">₹<?php echo number_format($product['price']); ?></p>
                    <a href="product_detail.php?id=<?php echo $product['id']; ?>">View Details</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html> 