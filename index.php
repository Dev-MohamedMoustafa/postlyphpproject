<?php
    include('functions.php');
    session_start();
    if (isset($_SESSION['islogged']) && $_SESSION['islogged'] == true) {
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/main.css">
            <title>Postly</title>
        </head>
        <body>
            <!-- header -->
            <?php include("partials/header.php") ?>
            <!-- body -->
            <div class="main">
                <br>
                <section id="banner">
                    <div class="inner">
                        <h2 class="post-title">Clothes Store</h2>
                        <hr />
                        <p>Discover the latest fashion trends<br>Shop the new collection of clothing, footwear, accessories, beauty products and more<br>Order today</p>
                        <br>
                        <p>~ By <a href="#"><strong>@David</strong></a></p><br>
                        <img class="like-button" src="images/icons/unliked.png" alt="" width="25px">
                        <p>0 Likes</p>
                        <br>
                        
                    </div>
                </section>
                <section id="banner">
                    <div class="inner">
                        <h2 class="post-title">Clothes Store</h2>
                        <hr />
                        <p>Discover the latest fashion trends<br>Shop the new collection of clothing, footwear, accessories, beauty products and more<br>Order today</p>
                        <br>
                        <p>~ By <a href="#"><strong>@David</strong></a></p><br>
                        <img class="like-button" src="images/icons/unliked.png" alt="" width="25px">
                        <p>0 Likes</p>
                        <br>
                        
                    </div>
                </section>
                <section id="banner">
                    <div class="inner">
                        <h2 class="post-title">Clothes Store</h2>
                        <hr />
                        <p>Discover the latest fashion trends<br>Shop the new collection of clothing, footwear, accessories, beauty products and more<br>Order today</p>
                        <br>
                        <p>~ By <a href="#"><strong>@David</strong></a></p><br>
                        <img class="like-button" src="images/icons/unliked.png" alt="" width="25px">
                        <p>0 Likes</p>
                        <br>
                        
                    </div>
                </section>
                <section id="banner">
                    <div class="inner">
                        <h2 class="post-title">Clothes Store</h2>
                        <hr />
                        <p>Discover the latest fashion trends<br>Shop the new collection of clothing, footwear, accessories, beauty products and more<br>Order today</p>
                        <br>
                        <p>~ By <a href="#"><strong>@David</strong></a></p><br>
                        <img class="like-button" src="images/icons/unliked.png" alt="" width="25px">
                        <p>0 Likes</p>
                        <br>
                        
                    </div>
                </section>
                <section id="banner">
                    <div class="inner">
                        <h2 class="post-title">Clothes Store</h2>
                        <hr />
                        <p>Discover the latest fashion trends<br>Shop the new collection of clothing, footwear, accessories, beauty products and more<br>Order today</p>
                        <br>
                        <p>~ By <a href="#"><strong>@David</strong></a></p><br>
                        <img class="like-button" src="images/icons/unliked.png" alt="" width="25px">
                        <p>0 Likes</p>
                        <br>
                        
                    </div>
                </section>
                <section id="banner">
                    <div class="inner">
                        <h2 class="post-title">Clothes Store</h2>
                        <hr />
                        <p>Discover the latest fashion trends<br>Shop the new collection of clothing, footwear, accessories, beauty products and more<br>Order today</p>
                        <br>
                        <p>~ By <a href="#"><strong>@David</strong></a></p><br>
                        <img class="like-button" src="images/icons/unliked.png" alt="" width="25px">
                        <p>0 Likes</p>
                        <br>
                        
                    </div>
                </section>
                <section id="banner">
                    <div class="inner">
                        <h2 class="post-title">Clothes Store</h2>
                        <hr />
                        <p>Discover the latest fashion trends<br>Shop the new collection of clothing, footwear, accessories, beauty products and more<br>Order today</p>
                        <br>
                        <p>~ By <a href="#"><strong>@David</strong></a></p><br>
                        <img class="like-button" src="images/icons/unliked.png" alt="" width="25px">
                        <p>0 Likes</p>
                        <br>
                        
                    </div>
                </section>
                <section id="banner">
                    <div class="inner">
                        <h2 class="post-title">Clothes Store</h2>
                        <hr />
                        <p>Discover the latest fashion trends<br>Shop the new collection of clothing, footwear, accessories, beauty products and more<br>Order today</p>
                        <br>
                        <p>~ By <a href="#"><strong>@David</strong></a></p><br>
                        <img class="like-button" src="images/icons/unliked.png" alt="" width="25px">
                        <p>0 Likes</p>
                        <br>
                        
                    </div>
                </section>
                <section id="banner">
                    <div class="inner">
                        <h2 class="post-title">Clothes Store</h2>
                        <hr />
                        <p>Discover the latest fashion trends<br>Shop the new collection of clothing, footwear, accessories, beauty products and more<br>Order today</p>
                        <br>
                        <p>~ By <a href="#"><strong>@David</strong></a></p><br>
                        <img class="like-button" src="images/icons/unliked.png" alt="" width="25px">
                        <p>0 Likes</p>
                        <br>
                        
                    </div>
                </section>
                
            <!-- footer -->
            <div class="footer">
                <p>&copy; All Rights Reserved. Developed & Designed By Mohamed Moustafa.</p>
            </div>
        </body>
        </html>';
    } else {
        redirect("login.php");
    }
?>
	

