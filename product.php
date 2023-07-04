<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREMLIN STROM</title>
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="stylesheet" href="./Css/Responsive.css">
    <link rel="shortcut icon" href="./Images/logo.png" type="image/x-icon">
    <link href="./Plugin/bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel link -->
    <link rel="stylesheet" href="./Plugin/owl.carousel.min.css">


</head>

<body id="ProductDetailsPage">
    <header>
        <div class="Shipping-available">
            <p>Offer Going On</p>
        </div>
        <div class="container-fluid">
            <div class="d-flex">
                <div class="logo">
                    <a href="index.html">
                        <img src="./Images/logo.png" alt="Logo" class="img-fluid">
                    </a>
                </div>
                <div class="navRight d-flex">
                   <?php include './inc/nav.php' ?>
                    <div class="navIcons">
                        <span>
                            <img src="./Images/SVG icons/bars.svg" alt="Bars" id="bars">
                            <li> <a href=""><img src="./Images/SVG icons/cart.svg" alt=""></a></li>
                        </span>
                    </div>
                </div>
            </div>
          
        </div>
    </header>



    <section>
        <div class="container">
            <div class="d-flex Product-details">
                <div class="images-view">
                    <div class="full-view">
                        <img src="./Images/Product/Product (3).png" alt="product" id="first-image">
                        <img src="./Images/Product/Product (4).png" alt="product" id="second-image">
                    </div>
                    <div class="ProductSingle-item-view d-flex">
                        <span id="Image1">
                            <img src="./Images/Product/Product (3).png" alt="product">
                        </span>
                        <span id="Image2">
                            <img src="./Images/Product/Product (4).png" alt="product">
                        </span>
                    </div>
                </div>
                <div class="Produdct-Describtion">
                    <div class="title">
                        <h2>PRO KIT BUNDLE</h2>
                        <div class="price">
                            <h3>$70.00<del>$130.00</del><span>Sale</span> </h3>
                        </div>
                    </div>
                    <div class="description">
                        <span>Description</span>
                        <ul>
                            <li>Limited Time Only* Bundle that includes the exact uniform that our Team Secret
                                Professionals wear in the heat of competition.</li><br>
                            <li>- Bundle includes Team Secret Pro Jersey & Pro Hoodie</li>
                            <li>-Exact Uniform that our Team Secret players wear.</li>
                            <li>-Official Team Sponsor Logos</li><br>
                            <li>The size you select is the size of the Pro Jersey & Pro Hoodie.</li>
                        </ul>
                    </div>
                    
                    <div class="low-stock">
                        <button>Very Low Stock</button>
                    </div>
                    <div class="AddToCartButton">
                        <Button class="btn btn-dark form-control">Buy Now</Button>
                    </div>
                    <div class="delivery-price">
                        <div class="inernational card">
                            <img src="./Images/SVG icons/world.svg" alt="">
                            <h4>International delivery</h4>
                            <p>For all you SEAcret fans</p>
                        </div>
                        <div class="free-Shipping card">
                            <img src="./Images/SVG icons/dolar.svg" alt="">
                            <h4>Free Shipping</h4>
                            <p>When you spend over $200</p>
                        </div>
                    </div>

                    <div class="singup-for-newsLatter">
                        <h4>Sign up for our newsletter</h4>
                        <p>The latest deals and savings, sent straight to your inbox.</p>
                        <span>
                            <input type="text">
                            <button>Sign up</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </section>





    <!--You may also like section.. -->
    <section class="Shop-our-gear you-may-like" id="Shop">
        <div class="container">
            <h3>You may also like.....</h3>
            <div class="Product-Slide">
                <div class="item Product-item">
                    <div class="Product-card">
                        <div class="product">
                            <img src="./Images/Product/Product (5).png" alt="product">
                            <img src="./Images/Product/Product (6).png" alt="product">
                        </div>
                        <span>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                            <p>$35</p>
                        </span>
                        <button>View Product</button>
                    </div>
                </div>
                <div class="item Product-item">
                    <div class="Product-card">
                        <div class="product">
                            <img src="./Images/Product/Product (3).png" alt="product">
                            <img src="./Images/Product/Product (4).png" alt="product">
                        </div>
                        <span>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                            <p>$35</p>
                        </span>
                        <button>View Product</button>
                    </div>
                </div>
                <div class="item Product-item">
                    <div class="Product-card">
                        <div class="product">
                            <img src="./Images/Product/Product (7).png" alt="product">
                            <img src="./Images/Product/Product (8).png" alt="product">
                        </div>
                        <span>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                            <p>$35</p>
                        </span>
                        <button>View Product</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- footer section slides.. -->
  <?php include './inc/footer.php' ?>