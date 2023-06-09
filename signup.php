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
<section class="form_section">
   <div class="container form_section-container">
    <h2>Sign up</h2>
    <div class="alert_message error">
        <p>This is an error</p>
    </div>
    <form action="" enctype="multipart/form-data">
        <input type="text" placeholder="First Name">
        <input type="text" placeholder="Last Name">
        <input type="text" placeholder="Username">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Create password">
        <input type="password" placeholder="Confirm password">
        <div class="form_control">
            <label for="avatar">User Avatar</label>
            <input type="file" id="avatar">
        </div>
        <button type="submit" class="btn">Sign up</button>
        <small>Already have an account? <a href ="signin.html">Sign In</a></small>
    </form>
   </div> 
</section>
</body>
</html>