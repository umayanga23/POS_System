<?php


    require '../config/function.php';

    $paraRestultId = checkParamId('id');

    if(is_numeric($paraRestultId)){

        $categoryId = validate($paraRestultId);

        $categories = getById('categories', $categoryId);

        if ($categories['status'] == 200){

            $categoryDeleteRes = delete('categories', $categoryId);
            if($categoryDeleteRes){
                redirect('categories.php', 'Categories Delete Successfully !');

            }else{
                redirect('categories.php', 'Somthing Went Wrong!');

            }
        }
        else{
            redirect('categories.php', $categories['message']);

        }
    }
    else{
        redirect('categories.php', 'Somthing Went Wrong!');
    }
?>