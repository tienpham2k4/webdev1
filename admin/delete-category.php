<?php
include "../function.php";
if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];

    $checkExistCategory = "SELECT * FROM `categories` WHERE `id` ='$categoryId'";
    // var_dump($checkExistCategory);die;
    $result = $mysql->query($checkExistCategory);
    if ($result && $result->num_rows > 0) 
    {
        //Nếu có -> tiến hành xoá.
        $deleteCategorySql = "DELETE FROM `categories` WHERE `id` = '$categoryId'";
        $result = $mysql->query($deleteCategorySql);
        if ($result)
            //nếu thành công chuyển hướng user
            header("location:" . getAdminUrl("?action=category&delete_category_success=1"));
    }
    else
    {
        //xoá ko đc
        die('Unable to delete.');
    }

} 
else
{
    die('Invalid data');
}
