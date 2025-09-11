<?php

    require "../config/function.php";
    $paramResult = checkParamId('index');
    if(is_numeric($paramResult)){
        $indexValue = validate($paramResult);

        if(isset($_SESSION['productItems']) && isset($_SESSION['productItemIds'])){

            
            unset($_SESSION['productItems'][$indexValue]);
            unset($_SESSION['productItemsIds'][$indexValue]);

            redirect('order-create.php', 'Item Remove');
        }
        else{
            redirect('order-create.php', 'There is No Items');
        }
    }
    else{
        redirect('order-create.php', 'param not numeric');
    }
?>
