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

<section class="dashboard">
    <div class="container dashboard_container">
        <button id="show_sidebar-btn" class="sidebar_toggle"><i class="fa-solid fa-chevron-right"></i></button>
        <button id="hide_sidebar-btn" class="sidebar_toggle"><i class="fa-solid fa-chevron-left"></i></button>
        <aside>
          <ul>
            <li>
                <a href="Add-post.html"><i class="fa-solid fa-pen-nib"></i><h5>Add Post</h5></a>
            </li>
            <li>
                <a href="dashboard.html"><i class="fa-solid fa-address-card"></i><h5>Manage Posts</h5></a>
            </li>
            <li>
                <a href="Add-user.html"><i class="fa-solid fa-user"></i><h5>Add user</h5></a>
            </li>
            <li>
                <a href="manage-users.html"><i class="fa-solid fa-users"></i><h5>Manage users</h5></a>
            </li>
                <a href="Add-category.html"><i class="fa-solid fa-pen-to-square"></i><h5>Add Category</h5></a>
            </li>
            <li>
                <a href="manage-categories.html" class="active"><i class="fa-solid fa-list"></i><h5>Manage categories</h5></a>
            </li>
          </ul>
        </aside>
        <main>
        <h2>Manage Categories</h2>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Travel</td>
                    <td><a href="edit-category.html" class="btn sm">Edit</a></td>
                    <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
                </tr>
                <tr>
                    <td>Wild life</td>
                    <td><a href="edit-category.html" class="btn sm">Edit</a></td>
                    <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
                </tr>
                <tr>
                    <td>Music</td>
                    <td><a href="edit-category.html" class="btn sm">Edit</a></td>
                    <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
                </tr>
            </tbody>
        </table>
        </main>
    </div>
</section>
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
</html> 