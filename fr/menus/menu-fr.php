 <!--FRANCAIS-->

 <!--START OF MENU BAR-->       

 <div id="header">
    <!--<a href="index.html"><object type="image/svg+xml" data="logos/gea-prototype-logo-animated.svg" width="250" height="56"></object></a>-->
    <a href="https://ecobricks.org/fr/"><img src="https://www.ecobricks.org/logos/gea-horizontal.svg" alt="Global Ecobrick Alliance Logo" width="308" height="50"></a>
</div>

<!-- be great to add an if statement here to set $name to blank if its 'welcome' or 'index'-->

<div id="desktop-menu">
    <div class="topnav-lang" id="myTopnav-lang">
        <div class="dropdown-lang">
            <button class="dropbtn-lang">FR</button>
            <div class="dropdown-content-language">
              
            <!-- This loads the universal laguage list-->

            <?php require_once ("../languages.php");?>
                
            </div>
        </div> 
    </div>

    <div class="topnav" id="myTopnav">
        <div class="dropdown">
                  <button type="button" aria-label="GEA service menu" class="dropbtn" id="menu-circle"><img src="../svgs/grey-emblem.svg" width="30" height="30" alt="Open site menu"><!--<span class="menu-text">GEA Servers</span>-->
                </button>
                  <div class="dropdown-content-app">
                    <a href="https://gobrik.com" target="_blank" rel="noopener">
                        <div id="gobrik-menu">
                            <div class="icon-menu">
                            <img src="../icons/gobrik.svg" width="65" height="65" loading="lazy" alt="GoBrik logo">
                            </div>
                            <div class="apptext-menu">
                                <div class="apptext-header">GoBrik </div>
                                <div class="apptext-sub">Ecobricking Webapp<br>Manage your ecobricks<br>Connect to the Brikcoin blockchain</div>
                            </div>
                        </div>
                    </a>

                    <a href="https://circles.ecobricks.org/signup_user_complete/?id=ek8ks6frxfbbpj3sujkdo8xsqr" target="_blank" rel="noopener">
                        <div id="mattermost-menu">
                            <div class="icon-menu"><img src="../icons/mattermost.svg" width="65" height="65" alt="Our Ecoobricker Social Server"></div>
                                
                            <div class="apptext-menu">
                                <div class="apptext-header">Circles </div>
                                <div class="apptext-sub">Join our free mattermost ecobricker community<br>Share your ecobricking<br>Learn from others</div>
                            </div>
                        </div>
                    
                    </a>

                    <a href="https://gobrik.com/go.php#offset" target="_blank" rel="noopener">
                        <div id="offset-menu">
                            <div class="icon-menu"><img src="../icons/offset.svg" width="65" height="65" loading="lazy" alt="Offset your plastic consumption"></div>
                            <div class="apptext-menu">
                                <div class="apptext-header">AES Plastic Offsetting </div>
                                <div class="apptext-sub">Offset your plastic footprint<br>on our GoBrik AES Platform</div>
                            </div>
                        </div>
                    </a>
                </div>
        </div> 
        
        <a href="faqs.php">FAQ</a>
        <a href="sequest.php">Séquestration</a>
        <a href="about.php">Nous</a>
        <div class="dropdown">
        
            <button class="dropbtn">
            <div id="drop-text">Construction
                  <i class="fa fa-caret-down"></i></div>
                </button>
                <div class="dropdown-content-normal">
                    <a href="build.php">Méthodes de construction</a>
                    <a href="/modules">Lego Modules</a>
                    <a href="/earth">Terre & Ecobricks</a>
                    <a href="/openspaces">Open Spaces</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn"><div id="drop-text">Les Ecobricks
                  <i class="fa fa-caret-down"></i></div>
                </button>
                <div class="dropdown-content-normal">
                    <a href="what.php">Que sont les Ecobricks</a>
                    <a href="/how">Comment faire?</a>
                    <a href="/why">Pourquoi les Ecobricks?</a>
                    <a href="plastic.php">L'histoire du plastique</a>
                    <a href="principles.php">Des principes</a>
                </div>
            </div> 
        
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="appMenu()"><img src="../svgs/grey-emblem.svg"width="30px" height="30px" loading="lazy"></a>
            
        </div>
    </div>
</div>
<!--END OF MENU-->