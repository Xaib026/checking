<?php
$con  = mysqli_connect("localhost", "root", "", "db_mac4less");
if(isset($_POST['add-cart'])){
    
}


?>
<table border="1" width="100%">
    <tr>
        <td>name</td>
        <td>name</td>
        <td>name</td>
        <td>name</td>
        <td>name</td>
    </tr>

    <?php
    $sql = "select * from tbl_cart";
    $res = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
    ?>

        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['productName'] ?></td>
            <td><?= $row['productModel'] ?></td>
            <td><?= $row['productPrice'] ?></td>
            <td>
                <form method="POST"><button>Remove</button></form>
            </td>
        </tr>
    <?php
    }
    ?>

</table>



<table border="1" width="100%">
    <tr>
        <td>name</td>
        <td>name</td>
        <td>name</td>
        <td>name</td>
        <td>name</td>
    </tr>

    <?php
    $sql = "select * from tbl_products limit 2";
    $res = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
    ?>

        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['productName'] ?></td>
            <td><?= $row['productModel'] ?></td>
            <td><?= $row['productPrice'] ?></td>
            <td>
                <form method="POST"><button name="add-cart">Add to cart</button></form>
            </td>
        </tr>
    <?php
    }
    ?>

</table>