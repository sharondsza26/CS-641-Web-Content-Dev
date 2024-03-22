<?php
include('includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E shop site using PHP and MySQL.</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Style CSS-->
    <link rel="stylesheet" href="style.css"> 


</head>
<body>


    <!--Navbar-->
<div class = "container-fluid p-0">


        <!--HOME NAVBAR-->
<style>
    .bg-red-500 {
        background-color:#F44336; /* Replace with the desired red-600 color code */
    }
</style>
    <nav class="navbar navbar-expand-lg navbar-light bg-red-500" >
        <div class="container-fluid p-0">
            <img src = "./Images/Logo.webp" alt="" class="logo" >
            <button class="navbar-toggler"  type="button" data-toggle="collapse" 
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
            aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse " 
            id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item" style="padding-right: 20px;">
                    <a class="nav-link font-weight-bold text-dark " aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item " style="padding-right: 20px;">
                    <a class="nav-link font-weight-bold text-dark" href="/">Products</a>
                    </li>
                    <li class="nav-item " style="padding-right: 20px;">
                    <a class="nav-link font-weight-bold text-dark" href="/">Register</a>
                    </li>
                    <li class="nav-item " style="padding-right: 20px;">
                    <a class="nav-link font-weight-bold text-dark" href="/">Contact</a>
                    </li>
                    <li class="nav-item " style="padding-right: 20px;">
                    <a class="nav-link font-weight-bold text-dark" href="/"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>

                    <li class="nav-item " style="padding-right: 20px;">
                    <a class="nav-link font-weight-bold text-dark" href="/">Total</a>
                    </li>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 ml-auto pr-3" >
                    <input class="form-control mr-sm-2" type="search" 
                    placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


<!--WELCOME CONTAINER-->
<style>
    .bg-red-400 {
        background-color:#EF5350; /* Replace with the desired red-500 color code */
    }
</style>
<na class="navbar navbar-expand-lg navbar-light bg-red-400">
    <ul class="navbar-nav me-auto">
        <li class="nav-item text-center" style="padding-right: 10px;">
            <a class="nav-link font-weight-bold text-dark " href="/">Welcome Guest</a>
        </li>
        <li class="nav-item text-center" style="padding-right: 10px;">
            <a class="nav-link font-weight-bold text-dark " href="/">Login</a>
        </li>
    </ul>
</na>

<!--DISPLAY-->
<style>
    .bg-red-300 {
        background-color:#E57373; /* Replace with the desired red-400 color code */
    }
</style>
<div class="bg-red-300 p-0">
    <h3 class="text-center font-weight-bold text-dark">
    Covert Corner
    </h3>
    <p class="text-center font-weight-bold text-dark">
    "Whispers of Style at Covert Corner."
    </p>
</div>

<!--SIDE ROW & PRODUCTS-->
<style>
    .bg-white {
        background-color:#fff; /* Replace with the desired red-400 color code */
    }
</style>
<div class="row bg-white" >
    <div class="col-md-10">
    <style>
    .bg-blue-400 {
        background-color:#42A5F5; /* Replace with the desired red-400 color code */
    }
    .bg-red-600 {
        background-color:#E53935; /* Replace with the desired red-400 color code */
    }
    </style> 
        <!--PRODUCTS-->
        <div class="row">
            <div class="col-md-3 mb-2" >
                <div class="card">
                <img src="./Images/airjordanmid.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nike Air Jordan Mid</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/airmax.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nike Air Max</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/gazelle.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Addidas Samba</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/new1.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">New Balance 9060</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/olive.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nike Air Jordan 4</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/panda.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nike Panda Dunks Low</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/simba.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Addidas Samba Black Edition</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/sneakers.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Air Jordan 4 Dj Khalid Edition</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/conerse.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Converse Chuck'70s</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/brown.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Converse Chuck lows</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/boots.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Converse Boots</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/new.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">New Balance 750</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/puma.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Puma HighCross</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/crocs.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Crocs</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/drmartin.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dr Martins</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/skechers.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Skechers Running Shoe</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/vans.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Vans Old School</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/heydude1.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hey Dude BoatShoes</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/brooks.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Brooks Jogging Shoe</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/puma2.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Puma Casuals</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/dc.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">DC</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/vans2.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Vans Brown Edition</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/nb.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">New Balance Classic</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/under.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Under Armour Gym Shoe</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/yy.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">YY Nation</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/Tus.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Thrusday Boots White Classic</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card">
                <img src="./Images/timber.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Timberland Boots</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn bg-blue-400">Add To Cart</a>
                    <a href="#" class="btn bg-red-600">View More</a>
                </div>
                </div>
            </div>
        </div>
        
    </div>
    <style>
    .bg-white {
        background-color:#fff; /* Replace with the desired red-400 color code */
    }
    </style>
    <div class="col-md-2 bg-white p-0">
        <!--SIDENAV-->
        <ul class="navbar-nav me-auto text-center p-0">
            <li class="nav-item bg-red-200 ">
                <a href="#" class="nav-link font-weight-bold text-danger"><h4>Brands</h4></a>
            </li>
            <?php
            $select_brands="SELECT * FROM Brands";
            $result_brands=mysqli_query($con, $select_brands);
            // $row_data=mysqli_fetch_assoc($result_brands);
            // echo $row_data['brand_title'];
            while($row_data=mysqli_fetch_assoc($result_brands)){
                $brand_title=$row_data['brand_title'];
                $brand_id=$row_data['brand_id'];
                echo "
                <li class='nav-item bg-red-300 mb-2 ' style='border: solid #000; border-radius: 5px; '>
                <a href='index.php?brand=$brand_id' class='nav-link font-weight-bold text-dark'>$brand_title</a>
                </li>
                ";
            }
            ?>
        </ul>
    </div>
</div>



    <!--FOOTER-->
    <style>
    .bg-red-700 {
        background-color:#D32F2F; /* Replace with the desired red-400 color code */
    }
</style>
<div class="bg-red-700 p-3 text-center" >
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