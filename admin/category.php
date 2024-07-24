<?php 
$getCategorySql = "SELECT * FROM `categories` ";
$result = $mysql ->query($getCategorySql);
$categories = null;
if( $result && $result -> num_rows>0) 
{
    $categories = $result;
}
?>
<h1>Categories</h1>
<a href="<?php echo getAdminUrl("?action=add-category")?>"
class="btn btn-primary">
    Add Category
</a>
<hr>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th width="20px" align="center">
                No
            </th>
            <th width="170px" >
                Category name
            </th>
            <th width="170px" align="center">
                Action
            </th>
        </tr>
    </thead> 
    <tbody>
        <?php
        if($categories==null)
        {?>
        <tr>
            <td colspan="3">No data</td>
        </tr>
        <?php
        }
        else
        {
            $i=1;
            while($category = $categories ->fetch_assoc())
            {?>
                <tr>
                    <td align="center">
                        <?php echo $i++?>

                    </td>
                    <td>
                        <?php echo $category ['name']?>
                    </td>
                    <td align ="right">
                        <a href="<?php echo getAdminUrl("?action=edit-category&id=".$category['id'])?>"
                        class ="btn btn-info">Edit</a>
                        <a href="<?php echo getAdminUrl("delete-category.php?id=".$category['id'])?>"
                         class="me-2 btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php
            }
        }
         ?>


    </tbody>
</table>