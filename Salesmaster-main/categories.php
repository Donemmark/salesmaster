<?php
session_start();
ob_start();
include('constant.php');
if (!isset($_SESSION['user'])) {
    header('location: login.php');
    exit;
}
if ($admin != 1) {
    header('location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include('nav.php') ?>

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Grocery</a></li>
            <li><a class="dropdown-item" href="#">Car</a></li>
            <li><a class="dropdown-item" href="#">Health & Beauty</a></li>
            <li><a class="dropdown-item" href="#">Phones & Tablets</a></li>
            <li><a class="dropdown-item" href="#">Computing</a></li>
            <li><a class="dropdown-item" href="#">Electronics</a></li>
            <li><a class="dropdown-item" href="#">Fashion</a></li>
            <li><a class="dropdown-item" href="#">Sporting Goods</a></li>
            <li><a class="dropdown-item" href="#">Gaming</a></li>
            <li><a class="dropdown-item" href="#">Baby Product</a></li>
            <li><a class="dropdown-item" href="#">Gaming</a></li>
            <li><a class="dropdown-item" href="#">Home & Office</a></li>

        </ul>
    </div>


<br>
<div class="container mt-4">
<!-- Categories Form Start         -->         
            <div class="col-md-4">
                <div class="row">
                    <form action="">
                        <div class="card">
                        <div class="card-header">
                            <h2>Add Categories</h2>
                        </div>

                        <div class="card-body">
                            <form method="post">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" name="item" placeholder="Item title">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <input type="text" class="form-control" name="description" placeholder="Enter description">
                                </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group">
                                <div style="float:right">
                                    <button type="submit" class="btn btn-primary btn-block" name="AddCategory"><span>Add Category</span></button>
                                </div>
                        
                            </div>   
                        </div>
                        </div>
                    </form> 
                
                </div>
            </div> <br>
   <!-- Categories Form Start         -->

<!-- Categories Table Start         -->
    <!-- <div class="row pb-5"> -->
        <!-- <div class="col-md-12 pt-4"> -->
            <div class="card">
                <div class="card-header">
                    <h1>Categories</h1>
                </div>
                <div class="card-body table-responsive">
                    <table class="table">
                        <tr>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created</th>
                            <th>Status</th>
                        </tr>
                        <?php $i = 1;
                        $sql = $db->query("SELECT * FROM categories");
                        while ($row = mysqli_fetch_assoc($sql)) {
                            $e = $i++ ?>
                            <tr>
                                <td><?= $e ?></td>
                                <td><?= $row['title'] ?></td>
                                <td><?= $row['description'] ?></td>
                                <td><?= $row['created'] ?></td>
                                <td><?= $row['status'] ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div> 
            </div>
            <div class="card-footer"></div>
        <!-- </div> -->
    <!-- </div> -->
<!-- Categories Table End         -->
</div>


    <?php include('footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>