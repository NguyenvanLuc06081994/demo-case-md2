
<?php
//echo "<pre>";
//print_r($cartCurrent);
//?>
<table class="table table-hover">
    <tr>
        <th>Product Name</th>
        <th>Product Image</th>
        <th>Product Price</th>
        <th>Quantity</th>
        <th>Total Price</th>
    </tr>
    <?php foreach ($cartCurrent->items as $key => $product): ?>
        <tr>
            <td><?php echo $product ['item']['name'] ?></td>
            <td><img src="admin/<?php echo $product['item']['img'] ?>" alt="" style="width: 75px; height: 75px;"></td>
            <td><?php echo $product['item']['price'] ?></td>
            <td><?php echo $product['totalQty'] ?></td>
            <td><?php echo $product['totalPrice'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<h3>SubTotal : <?php echo $cartCurrent->totalPrice; ?></h3>
<a href="index.php?page=cart-detail&id=<?php echo $product['item']['id']?>" class="btn btn-primary">Check Out</a>