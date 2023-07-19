<!DOCTYPE html>
<html>

<head>
    <title>ADMIN</title>
    <link href="ASSETS/Logo/LOGIN.png" rel="shortcut icon">
    <link href="style_header.css" rel="stylesheet">
    <link href="style_home.css" rel="stylesheet">
    <link href="style_table.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body>
    <?php
    include "header.php";
    ?>
    <div class="sidebar">

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="./home.php" class="active"><span class="home"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="./product.php"><span class="hamburger"></span>
                        <span>Product</span></a>
                </li>
                <li>
                    <a href="./transaction.php"><span class="shopping-cart"></span>
                        <span>Transaction</span></a>
                </li>
                <li>
                    <a href="./admin.php"><span class="admin"></span>
                        <span>Admin</span></a>
                </li>
                <li>
                    <a href="./customer.php"><span class="customer"></span>
                        <span>Customer</span></a>
                </li>
            </ul>
        </div>
    </div>

</body>

</html>