<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_qty = $_POST['product_qty'];

    // kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
    $item_in_cart = false;
    foreach ($_SESSION['cart'] as $item) {
        if ($item['product_id'] == $product_id) {
            $item_in_cart = true;
            $item['product_qty'] += $product_qty;
            break;
        }
    }

    // nếu sản phẩm chưa có trong giỏ hàng thì thêm vào
    if (!$item_in_cart) {
        $item = array(
            'product_id' => $product_id,
            'product_name' => $product_name,
            'product_price' => $product_price,
            'product_qty' => $product_qty
        );
        array_push($_SESSION['cart'], $item);
    }
}

if (isset($_POST['update_price'])) {
    $product_id = $_POST['product_id'];
    $new_price = $_POST['new_price'];
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['product_id'] == $product_id) {
            $item['product_price'] = $new_price;
            $item['item_total_price'] = $new_price * $item['product_qty'];
            break;
        }
    }
    $total_price = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total_price += $item['item_total_price'];
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Shopping Cart</title>
</head>

<body>
    <h1>Shopping Cart</h1>
    <style>
        
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h1 {
            font-size: 36px;
            color: #00704A;
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 50px;
        }

        th {
            background-color: #00704A;
            color: #fff;
            text-align: left;
            padding: 10px;
        }

        td {
            border: 1px solid #ccc;
            padding: 10px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #00704A;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #004C32;
        }
    
    </style>
    <?php
    if (!empty($_SESSION['cart'])) {
        echo '<table>';
        echo '<tr><th>Product Name</th><th>Price</th><th>Quantity</th><th>Total</th><th>Action</th></tr>';
        $total_price = 0;
        foreach ($_SESSION['cart'] as $item) {
            $product_name = $item['product_name'];
            $product_price = $item['product_price'];
            $product_qty = $item['product_qty'];
            $item_total_price = $product_price * $product_qty;
            $total_price += $item_total_price;
            echo '<tr>';
            echo '<td>' . $product_name . '</td>';
            echo '<td>' . $product_price . '</td>';
            echo '<td>' . $product_qty . '</td>';
            echo '<td>' . $item_total_price . '</td>';
            echo '<td>';
            echo '<form method="post">';
            echo '<input type="hidden" name="product_id" value="' . $item['product_id'] . '">';
            echo '<input type="text" name="new_price" value="' . $item['product_price'] . '">';
            echo '<input type="submit" name="update_price" value="Update">';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
        }
        echo '<tr><td colspan="3">Total:</td><td>' . $total_price . '</td><td></td></tr>';
        echo '</table>';
    } else {
        echo 'Your cart is empty.';
    }
    ?>
    <h2>Add Product to Cart</h2>
    <form method="post">
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" id="product_name"><br>
        <label for="product_price">Price:</label>
        <input type="text" name="product_price" id="product_price"><br>
        <label for="product_qty">Quantity:</label>
        <input type="text" name="product_qty" id="product_qty"><br>
        <input type="submit" name="add_to_cart" value="Add to Cart">
    </form>
</body>

</html>