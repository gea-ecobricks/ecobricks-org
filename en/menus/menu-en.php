 <!--ENGLISH-->

 <!--START OF MENU BAR-->       

 <div id="header">
    <!--<a href="index.html"><object type="image/svg+xml" data="logos/gea-prototype-logo-animated.svg" width="250" height="56"></object></a>-->
    <a href="https://ecobricks.org/en/welcome.php"><img src="https://www.ecobricks.org/logos/gea-horizontal.svg" alt="Global Ecobrick Alliance Logo" width="308" height="50"></a>
</div>

<!-- be great to add an if statement here to set $name to blank if its 'welcome' or 'index'-->

<div id="desktop-menu">
    <div class="topnav-lang" id="myTopnav-lang">
        <div class="dropdown-lang">
            <button type="button" aria-label="Language Selector" class="dropbtn-lang">EN</button>
            <div class="dropdown-content-language">
              
            <!-- This loads the universal laguage list-->

            <?php require_once ("../../languages.php");?>
                 
            </div>
        </div> 
    </div>

    <div class="topnav" id="myTopnav">
        <div class="dropdown">
                  <button type="button" aria-label="GEA service menu" class="dropbtn" id="menu-circle"><img src="svgs/grey-emblem.svg" width="30" height="30" alt="Open site menu"><!--<span class="menu-text">GEA Servers</span>-->
                </button>
                  <div class="dropdown-content-app">
                    <a href="https://gobrik.com" target="_blank" rel="noopener">
                        <div id="gobrik-menu">
                            <div class="icon-menu">
                            <img src="icons/gobrik.svg" width="65" height="65" loading="lazy" alt="GoBrik logo">
                            </div>
                            <div class="apptext-menu">
                                <div class="apptext-header">GoBrik </div>
                                <div class="apptext-sub">Ecobricking Webapp<br>Manage your ecobricks<br>Connect to the Brikcoin blockchain</div>
                            </div>
                        </div>
                    </a>

                    <a href="https://circles.ecobricks.org/signup_user_complete/?id=ek8ks6frxfbbpj3sujkdo8xsqr" target="_blank" rel="noopener">
                        <div id="mattermost-menu">
                            <div class="icon-menu"><img src="icons/mattermost.svg" width="65" height="65" alt="Our Ecoobricker Social Server"></div>
                                
                            <div class="apptext-menu">
                                <div class="apptext-header">Circles </div>
                                <div class="apptext-sub">Join our free mattermost ecobricker community<br>Share your ecobricking<br>Learn from others</div>
                            </div>
                        </div>
                    
                    </a>

                    <a href="https://gobrik.com/#offset" target="_blank" rel="noopener">
                        <div id="offset-menu">
                            <div class="icon-menu"><img src="icons/offset.svg" width="65" height="65" loading="lazy" alt="Offset your plastic consumption"></div>
                            <div class="apptext-menu">
                                <div class="apptext-header">AES Plastic Offsetting </div>
                                <div class="apptext-sub">Offset your plastic footprint<br>on our GoBrik AES Platform</div>
                            </div>
                        </div>
                    </a>
                </div>
        </div> 
        
        <a href="faqs.php">FAQs</a>
     
        <a href="transition.php">Plastic Transition</a>
   

        <div class="dropdown">
            <button class="dropbtn">
            <span class="drop-text">About us
                  <i class="fa fa-caret-down"></i></span>
                </button>
                <div class="dropdown-content-normal">
                    <a href="about.php">Global Ecobrick Alliance</a>
                    <a href="principles.php">Principles</a>
                    <a href="brikchain.php">Brikchain Explorer</a>
                    <a href="open-books.php">Our Open Books</a>
                    <a href="ayyew">Ayyew Ethos</a>
                    <a href="ayyew">Mandalic Collaboration</a>
                    <a href="movement">The Movement</a>
                </div>
            </div>


        <div class="dropdown">
            <button class="dropbtn">
            <span class="drop-text">Building
                  <i class="fa fa-caret-down"></i></span>
                </button>
                <div class="dropdown-content-normal">
                    <a href="build.php">Building Methods</a>
                    <a href="/modules">Lego Modules</a>
                    <a href="/earth">Earth & Ecobricks</a>
                    <a href="/openspaces">Open Spaces</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn"><span class="drop-text">About Ecobricks
                  <i class="fa fa-caret-down"></i></span>
                </button>
                <div class="dropdown-content-normal">
                    <a href="what.php">What are Ecobricks</a>
                    <a href="/how">How to Make?</a>
                    <a href="/why">Why Ecobricks?</a>
                    <a href="sequest.php">Sequestration</a>
                    <a href="/plastic">Plastic's Story</a>
                    <a href="brickable.php">Brickable Design</a>
                    <a href="/fire">Fire Safety</a>

                </div>
            </div>
        
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="appMenu()"><img src="svgs/grey-emblem.svg" width="30" height="30" loading="lazy" alt="Open Site menu"></a>
            
        </div>
    </div>
</div>
<!--END OF MENU-->