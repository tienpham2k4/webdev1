<?php
include "../function.php";

if (isset($_POST['category_name']) && isset($_POST['id'])) 
{
    $categoryName = $_POST['category_name'];
    $categoryId = $_POST['id'];

    // Kiểm tra xem category name có trong database chưa
    $checkExistCategory = "SELECT * FROM `categories` WHERE `name` = '$categoryName' AND `id` != $categoryId";

    $result = $mysql->query("$checkExistCategory");

    if ($result && $result->num_rows > 0) {
        // Nếu có -> thông báo lỗi
        die('Category already exists');
    } else {
        // Nếu không
        // Cập nhật category trong database
        $updateCategoryQuery = "UPDATE `categories` SET `name`='$categoryName' WHERE `id`=$categoryId";

        $result = $mysql->query($updateCategoryQuery);

        if ($result) {
            // Chuyển hướng về trang category
            header("location:". getAdminUrl("?action=category&update_category_success=1"));
        } else {
            die('Unable to update category!');
        }
    }
} else {
    die('Invalid data');
}
