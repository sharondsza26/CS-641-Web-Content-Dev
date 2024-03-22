<?php
include('../includes/connect.php');
if(isset($_POST['insert_cat'])){
    $category_title = mysqli_real_escape_string($con, $_POST['cat_title']);
    
    // Corrected the query by removing single quotes around the table name
    $select_query = "SELECT * FROM Categories WHERE category_title='$category_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if($number > 0){
        echo "<script>alert('This category is already in the database');</script>";
    } else {
        // The table name is without single quotes
        $insert_query = "INSERT INTO Categories (category_title) VALUES ('$category_title')";
        
        $result = mysqli_query($con, $insert_query);
        if($result){
            echo "<script>alert('Category has been inserted successfully');</script>";
        } else {
            // It's helpful to know why the query failed
            echo "<script>alert('Error inserting category: " . mysqli_error($con) . "');</script>";
        }
    }
}

?>
<h2 class="text-center">Insert Categories</h2>

<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-light" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="Categories" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-success border-0 p-2 my-3" name="insert_cat" value="Insert Categories">
    </div>
</form>
