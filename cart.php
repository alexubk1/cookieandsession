<?php require 'inc/head.php'; ?>

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
                echo " <table class='table-striped'><tr><td> le produit :" . $qty . " " ." à bien été ajouté au panier". "</td></tr></table><br />";
            endforeach;
        }else{
            echo "No items in cart";
        }

        session_start();
        ?>

        <html>

        <body>
        <?php
        session_start();
        ?>
        <?php echo $_SESSION['name']; ?>

        </body>



<?php require 'inc/foot.php'; ?>
