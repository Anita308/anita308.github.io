<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- navbar section starts  -->

<nav class="navbar">
    <a href="home.php"> <i class="fas fa-home"></i> <span>home</span> </a>
    <a href="about.php"> <i class="fas fa-user"></i> <span>about</span> </a>
    <a href="portfolio.php"> <i class="fas fa-briefcase"></i> <span>portfolio</span> </a>
    <a href="blog.php"> <i class="fas fa-blog"></i> <span>blogs</span> </a>
    <a href="contact.php"> <i class="fas fa-address-book"></i> <span>contact</span> </a>
</nav>

<!-- navbar section ends -->

<!-- contact section starts  -->

<section class="contact">

<h1 class="heading"> contact <span>me</span> </h1>

<div class="row">

    <div class="info-container">

        <h1>get in touch</h1>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas dolorem sunt sapiente vel minus eaque voluptate fugit corrupti omnis tempora?</p>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-map"></i>
                <div class="info">
                    <h3>address :</h3>
                    <p>mumbai, india - 400104</p>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <div class="info">
                    <h3>email :</h3>
                    <p>sanashaikh@gmail.com</p>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-phone"></i>
                <div class="info">
                    <h3>number :</h3>
                    <p>+123-456-7890</p>
                </div>
            </div>

        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>

    </div>

    <form action="">

        <div class="inputBox">
            <input type="text" placeholder="your name">
            <input type="number" placeholder="your number">
        </div>

        <div class="inputBox">
            <input type="email" placeholder="your email">
            <input type="text" placeholder="your subject">
        </div>

        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>

        <input type="submit" value="send message" class="btn">

    </form>

</div>

</section>

<!-- contact section ends -->

</body>
</html>