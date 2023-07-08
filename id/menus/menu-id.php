  <!--INDONESIAN-->
  
  <!--START OF MENU BAR-->       

 <div id="header">
    <!--<a href="index.html"><object type="image/svg+xml" data="logos/gea-prototype-logo-animated.svg" width="250" height="56"></object></a>-->
    <a href="https://ecobricks.org/id/welcome.php"><img src="https://www.ecobricks.org/logos/gea-horizontal.svg" alt="Global Ecobrick Alliance Logo Vector" width="308" height="50"></a>
</div>

<!-- be great to add an if statement here to set $name to blank if its 'welcome' or 'index'-->

<div id="desktop-menu">
    <div class="topnav-lang" id="myTopnav-lang">
        <div class="dropdown-lang">
            <button class="dropbtn-lang">ID</button>
            <div class="dropdown-content-language">
              
            <!-- This loads the universal laguage list-->

            <?php require_once ("../languages.php");?>
                
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

                    <a href="https://gobrik.com/go.php#offset" target="_blank" rel="noopener">
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
     
        <a href="transition.php">Transisi Plastik</a>
   
   

        <div class="dropdown">
            <button class="dropbtn">
            <div id="drop-text">Tentang Kami
                  <i class="fa fa-caret-down"></i></div>
                </button>
                <div class="dropdown-content-normal">
                    <a href="about.php">Global Ecobrick Alliance</a>
                    <a href="principles.php">Princip Bumi</a>
                    <a href="brikchain.php">Brikchain Explorer</a>
                    <a href="open-books.php">Open Books</a>
                    <a href="ayyew">Ayyew Ethos</a>
                    <a href="ayyew">Mandalic Collaboration</a>
                    <a href="movement">The Movement</a>
                </div>
            </div>


        <div class="dropdown">
            <button class="dropbtn">
            <div id="drop-text">Banguan
                  <i class="fa fa-caret-down"></i></div>
                </button>
                <div class="dropdown-content-normal">
                    <a href="build.php">Metode</a>
                    <a href="/modules">Genis Modul</a>
                    <a href="/earth">Tanah dan Ecobrick</a>
                    <a href="/openspaces">Open Spaces</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn"><div id="drop-text">Tentang Ecobricks
                  <i class="fa fa-caret-down"></i></div>
                </button>
                <div class="dropdown-content-normal">
                    <a href="what.php">Apa itu Ecobricks</a>
                    <a href="/how">Bagaimana membuat?</a>
                    <a href="/why">Mangapa Ecobricks?</a>
                    <a href="/plastic">Cerita Plastik</a>
                    <a href="principles.php">Princip</a>    
                    <a href="brickable.php">Brickable Design</a>
                    <a href="/fire">Awas Api</a>

                </div>
            </div>

        
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="appMenu()"><img src="svgs/grey-emblem.svg"width="30px" height="30px" loading="lazy"></a>
            
        </div>
    </div>
</div>
<!--END OF MENU-->