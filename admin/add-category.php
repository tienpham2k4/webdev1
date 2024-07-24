<h1> Add new Category</h1>
<hr>
<form action="<?php echo getAdminUrl("process-add-category.php") ?>" method="POST" class="">
    <div class="form-group">
        <label for="">   
            Category Name        
        </label> 
        <input type="text" class="form-control"
        name="category_name" required>
    </div>
    <button type="submit" class="btn btn-primary mt-3"> 
        Save
    </button>
</form>