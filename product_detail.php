<?php
$products = json_decode(file_get_contents('products.json'), true);
$id = isset($_GET['id']) ? $_GET['id'] : null;
$product = null;
foreach ($products as $p) {
    if ($p['id'] == $id) {
        $product = $p;
        break;
    }
}
if (!$product) {
    echo '<h2>Product not found.</h2>';
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $product['name']; ?> - Details</title>
    <link rel="stylesheet" href="final_homepage.css">
</head>
<body>
    <div class="ele">
        <img class="img" src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        <h2><?php echo $product['name']; ?></h2>
        <p class="price">₹<?php echo $product['price']; ?></p>
        <p><?php echo $product['description']; ?></p>
        <a href="products.php">Back to Catalog</a>
    </div>
</body>
</html> 