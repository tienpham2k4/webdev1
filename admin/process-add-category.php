<?php
include "../function.php";

if (isset($_POST['category_name'])) {
    $categoryName = $_POST['category_name'];
    // check xem category name có trong database chưa
    $checkExistCategory = "SELECT * FROM `categories` WHERE `name` =`$categoryName`";
    //var_dump($checkExistCategory);die;
    $result = $mysql->query("$checkExistCategory");
    if ($result && $result->num_rows>0) 
    {
        //Nếu có -> thông báo lỗi
        die('Category exist');
    } else 
    {
        //Nếu không
        //Insert vaof database
        $insertCategoryQuery = "INSERT INTO `categories`(`name`) VALUES ('$categoryName')";
        $result = $mysql->query($insertCategoryQuery);
        if ($result)
        {
            //Chuyển hướng về trang category
            header("location:". getAdminUrl("?action=category&insert_category_success=1"));
        } else 
        {
            die('Unable to save category!');
        }

    }
}
 else 
 {
    die('Invalid data');

}
