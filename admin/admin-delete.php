<?php


    require '../config/function.php';

    $paraRestultId = checkParamId('id');
    if(is_numeric($paraRestultId)){
        $adminId = validate($paraRestultId);
        $admin = getById('admins', $adminId);
        if ($admin['status'] == 200){

            $adminDeleteRes = delete('admins', $adminId);
            if($adminDeleteRes){
                redirect('admin.php', 'Admin Delete Successfully !');

            }else{
                redirect('admin.php', 'Somthing Went Wrong!');

            }
        }
        else{
            redirect('admin.php', $admin['message']);

        }
    }
    else{
        redirect('admin.php', 'Somthing Went Wrong!');
    }
?>