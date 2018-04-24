<?php

session_start();
if(isset($_GET['add-to-cart'])):
    if(!isset($_SESSION['add-to-cart'])):
        $_SESSION['add-to-cart'] = array();
    endif;
    $itemID = (isset($_GET['add-to-cart']) && !empty($_GET['add-to-cart']) ? (int) $_GET['add-to-cart'] : null);

    if($itemID !== null):
        $qty = 1;
        $_SESSION['add-to-cart'][$itemID] = $qty ;
    endif;

endif;

//Display
if(isset($_SESSION['add-to-cart']) && !empty($_SESSION['add-to-cart'])){
    foreach ($_SESSION['add-to-cart'] as $prodID => $qty):
        echo "Item ID: " . $prodID . " quantity: " . $qty . "<br />";
    endforeach;
}else{
    echo "No items in cart";
}
var_dump(($_SESSION['add-to-cart']));

session_start();
?>

<html>

<body>
<?php
session_start();
?>
<?php echo $_SESSION['name']; ?>

</body>