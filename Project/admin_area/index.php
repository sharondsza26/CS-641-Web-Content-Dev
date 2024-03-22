<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS LINK-->
    <link rel="stylesheet" href="../style.css">
    <style>
    .admin-image{
        width: 100px;
        object-fit: contain;
        padding: auto;
    }
    .footer{
        position: absolute;
        bottom: 0;
    }
    </style>
</head>
<body>
    <!--NavBar-->
    <div class="container-fluid p-0" > 
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <div class="container-fluid">
                <img src="../Images/shoecart.webp" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class= "nav-item">
                            <a href="" class="nav-link">
                                Welcome Guest
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

<!-- second Navbar-->
        <div class = "bg-light">
            <h3 class ="text-center p-2">
                Manage Products/Details
            </h3>
        </div>

        <!--Third NAvbar-->
        <div class="row">
            <div class="col-md-12 bg-light p-1 d-flex align-items-center">
                <div class="p-4">
                    <a href="#">
                        <img src="../Images/profile.png" alt="" class="admin-image">
                    </a>
                    <p class="text text-center">
                        Admin Name
                    </p>
                </div>
                <div class="button text-center">
                    <button>
                        <a href="insert_product.php" class="nav-link text bg my-1 ">
                            Insert Products
                        </a>
                    </button>
                    <button>
                        <a href="" class="nav-link text bg my-1">
                            View Products
                        </a>
                    </button>
                    <button>
                        <a href="index.php?insert_category" class="nav-link text bg my-1">
                            Insert Categories
                        </a>
                    </button>
                    <button>
                        <a href="" class="nav-link text bg my-1">
                            View Catergories
                        </a>
                    </button>
                    <button>
                        <a href="index.php?insert_brands" class="nav-link text bg my-1">
                            Insert Brands
                        </a>
                    </button>
                    <button>
                        <a href="" class="nav-link text bg my-1">
                            View Brands
                        </a>
                    </button>
                    <button>
                        <a href="" class="nav-link text bg my-1">
                            All Orders
                        </a>
                    </button>
                    <button>
                        <a href="" class="nav-link text bg my-1">
                            All Payments
                        </a>
                    </button>
                    <button>
                        <a href="" class="nav-link text bg my-1">
                            List Users
                        </a>
                    </button>
                    <button>
                        <a href="" class="nav-link text bg my-1">
                            Logout
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <!--Fourth child-->
        <div class="container my-3">
            <?php 
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            elseif(isset($_GET['insert_brands'])){
                include('insert_brands.php');
            }
            ?>
        </div>


        <!--FOOTER-->
    <style>
    .bg-red-700 {
        background-color:#D32F2F; /* Replace with the desired red-400 color code */
    }
</style>
<div class="bg-red-700 p-3 text-center footer" >
    <p>
        All Rights reserved ®- Designed for Project-2024
    </p>
</div>

    </div>




<!-- bootstrap js link -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>