<?php
if(isset($_GET['id'])) 
{
    $categoryId =$_GET['id'];
    $getCategorySql = "SELECT * FROM `categories` WHERE `id` = '$categoryId'";
    $result = $mysql -> query($getCategorySql);
    $category=null;
    if($result && $result ->num_rows > 0)
    {
        $category = $result->fetch_assoc();
    }
}
else
die("Invalid data");
?>
<h1> Edit Category</h1>
<hr>
<form action="<?php echo getAdminUrl("process-update-category.php") ?>" method="POST" class="">
    <div class="form-group mb-3">
        <label for="">   
            Category Name        
        </label> 
        <input type="text" class="form-control"
        value="<?php echo $category ['name']?>"
        name="category_name" required>
        <input type="hidden" name ="id" value="<?php echo $category['id']?>">
    </div>
    <button type="submit" class="btn btn-primary mt-3"> 
        Save
    </button>
</form>