<?php include("./header.php") ?>
<body>
    <div class="ec-main-wrapper">
    <header id="ec-header">
            <div class="ec-main-navsection">
                <div class="container">
                <a href="#" class="ec-logo"><img src="./images/logo.png" alt="img" width="200px"/></a>
                <div class="ec-right-section">
                <nav class="ec-navigation">
                <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="gallery.php">Grounds</a>
                </li>
                <li><a href="Coaches.php">Coaches</a>
                </li>
                <li><a href="player.php">Players</a>
                </li>
                <li><a href="about-us.php">about us</a></li>
                <li><a href="contact-us.php">contact us</a>
                </li>
                <li><a href="login.php">Login</a>
                </li>
                </ul>
                </nav>
                
                <ul class="ec-user-section">
                <li><a href="#" class="ec-search-popup-btn"><i class="fa fa-search"></i></a>
                <form class="ec-search-popup">
                <input type="text" value="Search Key Word" onblur="if(this.value == '') { this.value ='Search Key Word'; }" onfocus="if(this.value =='Search Key Word') { this.value = ''; }">
                <input type="submit" value="">
                <i class="fa fa-search"></i>
                </form>
                </li>
                </ul>
                </div>
                </div>
                </div>
        </header>
        <div class=" container" style="margin-bottom:30px">
        <div >
        <div class="modal-content">
        <div class="modal-body">
        <div class="ec-modallogin-form ec-login-popup">
        <span class="ec-color">Login to Your Account</span>
        <form method="POST" action="./code.php">
        <ul>
        <li>
        <input type="text" name="username" placeholder="Username"> </li>
        <li>
        <input type="email"  name="email" placeholder="Email" style="width: 100%;"> </li>
        <li>
        <li>
        <input type="text" name="PhoneNumber" placeholder="PhoneNumber"> </li>
        <li>
        <input type="password"  name="password" placeholder="password"> </li>
        <li>
        <li>
        <input type="password" name="cPassword" placeholder="Enter Password Again"> </li>
        <li>
        <li> <a href="#" class="ec-forgot-btn">Forgot Password?</a> </li>
        <li>        
        <input type="submit"name="register_User" value="Sign In"> </li>
        </ul>
        </form>
        <span class="ec-color">or try our socials</span>
        <ul class="ec-login-social-media">
        <li class="ec-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google</a></li>
        </ul>
        <p>Not a member yet? <a href="./signup.php">Sign-up Now!</a></p>
        </div>
        <!-- <div class="ec-modallogin-form ec-register-popup">
        <span class="ec-color">create Your Account today</span>
        <p>Already a member? <a href="./signup.php">Sign-in Here!</a></p>
        </div> -->
        </div>
        </div>       
        </div>
    </div>



<?php include("./footer.php") ?>    
