
    <?php foreach($products as $key=>$product ) : ?> 
        <div class="col-md-3 text-center">
            <a><img src="admin/<?php echo $product->getImg() ?>" alt="" /></a>
            <h3><?php echo $product->getName() ?></h3>
            <p><?php echo $product->getPrice() ?></p>
            <a class="btn " href="index.php?page=detail-product&id=<?php echo $product->getId() ?>">Chi tiết</a> 
            <a href="index.php?page=list-cart&id=<?php echo $product->getId() ?>">Add To Cart</a>
        </div>             
    <?php endforeach;?> 

