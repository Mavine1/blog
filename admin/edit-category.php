<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
     <!---font awesome link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://kit.fontawesome.com/4b57ca4420.js" crossorigin="anonymous"></script>
   <!--Fonts-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
     <!--css-->
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <nav>
        <div class="container nav_container">

            <a href="index.html" class="nav_logo">Post</a>
     <ul class="nav_items">
          <li><a href="blog.html">Blog</a></li>
          <li><a href="About.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="contact.html">Contact</a></li>
          <!-- <li><a href="login.html">Login</a></li> -->
          <li class="nav_profile">
            <div class="avatar">
                <!--mavine-->
                <img src="./images/avatar1.jpg" alt="">
            </div>
            <ul>
                <li><a href ="dashboard.html">Dashboard</a></li>
                <li><a href ="Logout.html">Logout</a></li>
            </ul>
          </li>
     </ul>
            <button id="open_nav-btn"><i class="fa-solid fa-bars"></i></button>
            <button id="close_nav-btn"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </nav>
    <!-----Ending Nav-->
<section class="form_section">
   <div class="container form_section-container">
    <h2>Edit  category</h2>
    <form action="" enctype="multipart/form-data">
        <input type="text" placeholder="Title">
        <textarea rows="4">Description</textarea>
        <button type="submit" class="btn">Update Category</button>
    </form>
   </div> 
</section>
</body>
</html>