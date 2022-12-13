<?php include("./header.php") ?>
<body>
    <div class="ec-main-wrapper">
        <!-- Header -->
        <header id="ec-header">
            <div class="ec-main-navsection">
                <div class="container">
                <a href="#" class="ec-logo"><img src="./images/logo.png" alt="img" width="200px"/></a>
                <div class="ec-right-section">
                <nav class="ec-navigation">
                <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="grounds.php">Grounds</a>
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
                <form class="ec-search-popup" action="POST">
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
        <!-- Starting of Slider -->
    <div class="ec-mainbanner">
        <div class="flexslider">
        <ul class="slides">
        <li>
        <img src="extra-images/banner-1.jpg" alt="">
        <span class="ec-transparent-color"></span>
        <div class="ec-caption">
        <div class="container">
        <div class="caption-inner-wrap">
        <div class="clearfix"></div>
        <h1>Welcome to Soccer Club</h1>
        <p>A soccer club is a community oriented organization whose purpose is to develop individual and team soccer excellence in order to compete at the highest level each individual and team is capable.</p>
        </div>
        <div class="ec-caption-image"> <img src="extra-images/banner-static.png" alt=""> </div>
        </div>
        </div>
        </li>
        <li>
        <img src="extra-images/banner-2.jpg" alt="">
        <span class="ec-transparent-color"></span>
        <div class="ec-caption">
        <div class="container">
        <div class="caption-inner-wrap">
        <div class="clearfix"></div>
        <h1>Welcome to Soccer Club</h1>
        <p>A soccer club is a community oriented organization whose purpose is to develop individual and team soccer excellence in order to compete at the highest level each individual and team is capable</p>
        </div>
        <div class="ec-caption-image"> <img src="extra-images/banner-static.png" alt=""> </div>
        </div>
        </div>
        </li>
        </ul>
        </div>
        </div>
    <!-- Ending of Slider -->

    <div class="ec-main-section" style="margin-top: 20px">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="ec-fancy-title">
                <h2>Next Match Details</h2>
                </div>
                <div class="ec-nextmatch">
                     <div class="item">
                     <ul class="ec-team-matches">
                        <li>
                        <a href="#"><img src="extra-images/next-match-1.png" alt=""> <span>Sahiwal</span></a>
                        </li>
                        <li><small>Thurseday</small>
                        <time class="ec-color" datetime="2008-02-14 20:00">28 October</time> <small>2:00pm</small>
                        </li>
                        <li>
                        <a href="#"><img src="extra-images/next-match-2.png" alt=""> <span>Lahore</span></a>
                        </li>
                      </ul>
                    <div id="ec-Countdown" class="ec-match-countdown"></div>
                     <a href="#" class="ec-ticket-button">600 Tickets Left</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>  
    <div class="container">
        <div class="row" style="display:flex; flex-direction:row;justify-content:center">
                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        </div>
        
    </div>      
    <div class="ec-main-section blog-grid-full">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="ec-simple-title">
        <h2>Meet Our Top Rated Players</h2>
        <p>Effective team players are accountable to themselves and to others. They take responsibility for their actions or mistakes and understand how their choices impact the team. Flexibility. Adapting to change is a critical part of a team's success</p>
        </div>
        </div>
        <div class="col-md-12">
        <div class="ec-team ec-team-grid">
        <ul class="row">
        <li class="col-md-3" style="list-style: none;">
        <div class="ec-team-wrap">
        <figure>
        <a href="./player-Details.php"><img src="extra-images/ply1.jpg" alt=""></a>
        </figure>
        <div class="ec-team-info">
        <div class="ec-forinfo">
        <h3><a href="#">KELVIN DAVIS</a></h3>
        <small>GOALKEEPER</small>
        </div>
        <span class="ec-goal-counter ec-bgcolor">06</span>
        <span class="ec-plyer-info">Born May 31, 1988 <br> Sahiwal, Pakistan</span>
        <span class="ec-plyer-info"><br> <a href="./player-Details.php">See Details</a></span>
        </div>
        </div>
        </li>
        <li class="col-md-3" style="list-style: none;">
        <div class="ec-team-wrap">
        <figure>
        <a href="./player-Details.php"><img src="extra-images/ply2.jpg" height="250px" width="200px" alt=""></a>
        </figure>
        <div class="ec-team-info">
        <div class="ec-forinfo">
        <h3><a href="./player-Details.php">Debuchy Profile</a></h3>
        <small>Defender</small>
        </div>
        <span class="ec-goal-counter ec-bgcolor">12</span>
        <span class="ec-plyer-info">Born August 20 , 1999 <br> Lahore, Pakistan</span>
        <span class="ec-plyer-info"><br> <a href="./player-Details.php">See Details</a></span>
        </div>
        </div>
        </li>
        <li class="col-md-3" style="list-style: none;">
        <div class="ec-team-wrap">
        <figure>
        <a href="./player-Details.php"><img src="extra-images/ply3.jpg" height="250px" width="200px" alt=""></a>
        </figure>
        <div class="ec-team-info">
        <div class="ec-forinfo">
        <h3><a href="./player-Details.php">Laurent Koscielny</a></h3>
        <small>Midfielder</small>
        </div>
        <span class="ec-goal-counter ec-bgcolor">10</span>
        <span class="ec-plyer-info">Born september 3, 1995 <br> Karachi, Pakistan</span>
        <span class="ec-plyer-info"><br> <a href="./player-Details.php">See Details</a></span>
        </div>
        </div>
        </li>
        <li class="col-md-3" style="list-style: none;">
        <div class="ec-team-wrap">
        <figure>
        <a href="./player-Details.php"><img src="extra-images/ply4.jpg" height="250px" width="200px" alt=""></a>
        </figure>
        <div class="ec-team-info">
        <div class="ec-forinfo">
        <h3><a href="./player-Details.php">Tomas Rosicky</a></h3>
        <small>Safi dk</small>
        </div>
        <span class="ec-goal-counter ec-bgcolor">08</span>
        <span class="ec-plyer-info">Born July 10, 1980 <br>Okara Pakistan</span>
        <span class="ec-plyer-info"><br> <a href="./player-Details.php">See Details</a></span>
        </div>
        </div>
        </li>
        </ul>
        </div>
        </div>
        </div>
        </div>
    </div>
    <div class="ec-main-section blog-grid-full" style="padding-top: 50px;">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="ec-simple-title">
        <h2>Meet Our Top Rated Coaches</h2>
        <p>A good coach is positive, enthusiastic, supportive, trusting, focused, goal-oriented, knowledgeable, observant, respectful, patient and a clear communicator</p>
        </div>
        </div>
        <div class="col-md-12">
        <div class="ec-team ec-team-grid">
        <ul class="row">
        <li class="col-md-3" style="list-style: none;">
        <div class="ec-team-wrap">
        <figure>
        <a href="./coachDetail.php"><img src="extra-images/ply1.jpg" height="250px" width="200px" alt=""></a>
        </figure>
        <div class="ec-team-info">
        <div class="ec-forinfo">
        <h3><a href="#">KELVIN DAVIS</a></h3>
        <small>gOALKEEPER</small>
        </div>
        <span class="ec-goal-counter ec-bgcolor">06</span>
        <span class="ec-plyer-info">Born August 31, 1988 <br> Medellin, Colombia</span>
        </div>
        </div>
        </li>
        <li class="col-md-3" style="list-style: none;">
        <div class="ec-team-wrap">
        <figure>
        <a href="./coachDetail.php"><img src="extra-images/ply2.jpg" height="250px" width="200px" alt=""></a>
        </figure>
        <div class="ec-team-info">
        <div class="ec-forinfo">
        <h3><a href="./coachDetail.php">Debuchy Profile</a></h3>
        <small>Defender</small>
        </div>
        <span class="ec-goal-counter ec-bgcolor">12</span>
        <span class="ec-plyer-info">Born August 31, 1988 <br> Medellin, Colombia</span>
        </div>
        </div>
        </li>
        <li class="col-md-3" style="list-style: none;">
        <div class="ec-team-wrap">
        <figure>
        <a href="./coachDetail.php"><img src="extra-images/ply3.jpg" height="250px" width="200px" alt=""></a>
        </figure>
        <div class="ec-team-info">
        <div class="ec-forinfo">
        <h3><a href="./coachDetail.php">Laurent Koscielny</a></h3>
        <small>Midfielder</small>
        </div>
        <span class="ec-goal-counter ec-bgcolor">10</span>
        <span class="ec-plyer-info">Born August 31, 1988 <br> Medellin, Colombia</span>
        </div>
        </div>
        </li>
        <li class="col-md-3" style="list-style: none;">
        <div class="ec-team-wrap">
        <figure>
        <a href="./coachDetail.php"><img src="extra-images/ply4.jpg" height="250px" width="200px" alt=""></a>
        </figure>
        <div class="ec-team-info">
        <div class="ec-forinfo">
        <h3><a href="./coachDetail.php">Tomas Rosicky</a></h3>
        <small>Safi dk</small>
        </div>
        <span class="ec-goal-counter ec-bgcolor">08</span>
        <span class="ec-plyer-info">Born August 31, 2005 <br>sahiwal</span>
        </div>
        </div>
        </li>
        </ul>
        </div>
        </div>
        </div>
        </div>
    </div>
<?php include("./footer.php") ?>