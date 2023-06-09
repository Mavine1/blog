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
    <!---Ending of nav-->

<header class="category_title">
     <h2>Category title</h2>
    </header>

<section class="posts">
        <div class="container posts_container">
           <article class="post">
            <div class="post_thumbnail">
                <img src="./images/blog2.jpg">
            </div>
            <div class="post_info">
                <a href="Category-posts.html" class="category_button">Wild Life</a>
                <h3 class="post_title">
                    <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In.</a>
                </h3>
                <p  class="post_body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit libero ducimus omnis pariatur repellat explicabo dolor? Ullam tempore
                     saepe fuga molestias voluptatem a!
                </p>
                <div class="post_author">
                    <div class="post_author-avatar">
                        <img src="./images/avatar3.jpg">
                    </div>
                    <div class="post_author-info">
                        <h5>By: Brian Makau</h5>
                        <small>April 13, 2023 - 10:33am</small>
                    </div>
                </div>
            </div>
           </article> 
           <article class="post">
            <div class="post_thumbnail">
                <img src="./images/blog3.jpg">
            </div>
            <div class="post_info">
                <a href="" class="category_button">Wild Life</a>
                <h3 class="post_title">
                    <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In.</a>
                </h3>
                <p  class="post_body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit libero ducimus omnis pariatur repellat explicabo dolor? Ullam tempore
                     saepe fuga molestias voluptatem a!
                </p>
                <div class="post_author">
                    <div class="post_author-avatar">
                        <img src="./images/avatar4.jpg">
                    </div>
                    <div class="post_author-info">
                        <h5>By: Jane Mugendi</h5>
                        <small>March 28, 2023 - 11:03am</small>
                    </div>
                </div>
            </div>
           </article> 
           <article class="post">
            <div class="post_thumbnail">
                <img src="./images/blog4.jpg">
            </div>
            <div class="post_info">
                <a href="" class="category_button">Wild Life</a>
                <h3 class="post_title">
                    <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In.</a>
                </h3>
                <p  class="post_body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit libero ducimus omnis pariatur repellat explicabo dolor? Ullam tempore
                     saepe fuga molestias voluptatem a!
                </p>
                <div class="post_author">
                    <div class="post_author-avatar">
                        <img src="./images/avatar5.jpg">
                    </div>
                    <div class="post_author-info">
                        <h5>By: Valeria Kigen</h5>
                        <small>May 03, 2023 - 9:23am</small>
                    </div>
                </div>
            </div>
           </article> 
           <article class="post">
            <div class="post_thumbnail">
                <img src="./images/blog5.jpg">
            </div>
            <div class="post_info">
                <a href="" class="category_button">Wild Life</a>
                <h3 class="post_title">
                    <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In.</a>
                </h3>
                <p  class="post_body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit libero ducimus omnis pariatur repellat explicabo dolor? Ullam tempore
                     saepe fuga molestias voluptatem a!
                </p>
                <div class="post_author">
                    <div class="post_author-avatar">
                        <img src="./images/avatar6.jpg">
                    </div>
                    <div class="post_author-info">
                        <h5>By: Joey Khatesh</h5>
                        <small>December 23, 2022 - 07:33pm</small>
                    </div>
                </div>
            </div>
           </article> 
           <article class="post">
            <div class="post_thumbnail">
                <img src="./images/blog6.jpg">
            </div>
            <div class="post_info">
                <a href="" class="category_button">Wild Life</a>
                <h3 class="post_title">
                    <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In.</a>
                </h3>
                <p  class="post_body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit libero ducimus omnis pariatur repellat explicabo dolor? Ullam tempore
                     saepe fuga molestias voluptatem a!
                </p>
                <div class="post_author">
                    <div class="post_author-avatar">
                        <img src="./images/avatar7.jpg">
                    </div>
                    <div class="post_author-info">
                        <h5>By: Miriam Kerubo</h5>
                        <small>April 13, 2023 - 4:13pm</small>
                    </div>
                </div>
            </div>
           </article> 
           <article class="post">
            <div class="post_thumbnail">
                <img src="./images/blog7.jpg">
            </div>
            <div class="post_info">
                <a href="" class="category_button">Wild Life</a>
                <h3 class="post_title">
                    <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In.</a>
                </h3>
                <p  class="post_body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit libero ducimus omnis pariatur repellat explicabo dolor? Ullam tempore
                     saepe fuga molestias voluptatem a!
                </p>
                <div class="post_author">
                    <div class="post_author-avatar">
                        <img src="./images/avatar8.jpg">
                    </div>
                    <div class="post_author-info">
                        <h5>By: John Kibirio</h5>
                        <small>February 23, 2023 - 8:10pm</small>
                    </div>
                </div>
            </div>
           </article> 
           <article class="post">
            <div class="post_thumbnail">
                <img src="./images/blog8.jpg">
            </div>
            <div class="post_info">
                <a href="" class="category_button">Wild Life</a>
                <h3 class="post_title">
                    <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In.</a>
                </h3>
                <p  class="post_body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit libero ducimus omnis pariatur repellat explicabo dolor? Ullam tempore
                     saepe fuga molestias voluptatem a!
                </p>
                <div class="post_author">
                    <div class="post_author-avatar">
                        <img src="./images/avatar9.jpg">
                    </div>
                    <div class="post_author-info">
                        <h5>By: Janet Muga</h5>
                        <small>March  13, 2023 - 10:57am</small>
                    </div>
                </div>
            </div>
           </article> 
        </div>
    </section>
<!---End of posts-->

<section class="category_buttons">
   <div class="container category_buttons-container">
    <a href="" class="category_button">Art</a>
    <a href="" class="category_button">Wild Life</a>
    <a href="" class="category_button">Travel</a>
    <a href="" class="category_button">Science $ Technology</a>
    <a href="" class="category_button">Food</a>
    <a href="" class="category_button">Music</a>
   </div> 
</section>

<!---End of Category-->

<footer>
    <div class="footer_socials">
        <a href="https://youtube.com " target="_blank"><i class="fa-brands fa-youtube"></i></a>
        <a href="https://facebook.com " target="_blank"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://instagram.com " target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://Linkedin.com " target="_blank"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://twitter.com " target="_blank"><i class="fa-brands fa-twitter"></i></a>
    </div>
    <div class="container footer_container">
        <article>
            <h4>Categories</h4>
            <ul>
                <li><a href="">Art</a></li>
                <li><a href="">Wild Life</a></li>
                <li><a href="">Travel</a></li>
                <li><a href="">Music</a></li>
                <li><a href="">Science & Technology</a></li>
                <li><a href="">Food</a></li>
            </ul>
        </article>
        <article>
            <h4>Support</h4>
            <ul>
                <li><a href="">Online Support </a></li>
                <li><a href="">Call Numbers</a></li>
                <li><a href="">Emails</a></li>
                <li><a href="">Social Support</a></li>
                <li><a href="">Location</a></li>
            </ul>
        </article>
        <article>
            <h4>Blog</h4>
            <ul>
                <li><a href="">Safety</a></li>
                <li><a href="">Repair</a></li>
                <li><a href="">Recent</a></li>
                <li><a href="">Popular</a></li>
                <li><a href="">Categories</a></li>
            </ul>
        </article>
        <article>
            <h4>Permalinks</h4>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">About</a></li>
                <li><a href="">services</a></li>
                <li><a href="">Contacts</a></li>
            </ul>
        </article>
    </div>
    <div class="footer_copyright">
        <small>copyright &copy;2023 Mavine Tech</small>
    </div>
</footer>
<script src="./main.js"></script>
</body>
</html> -->