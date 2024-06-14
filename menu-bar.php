 <!--START OF MENU BAR-->       

 <div id="header">
    <!--<a href="index.html"><object type="image/svg+xml" data="logos/gea-prototype-logo-animated.svg" width="250" height="56"></object></a>-->
    <a href="<?php include 'lang.php';?>/welcome.php"><img src="logos/gea-horizontal.svg" alt="The Global Ecobrick Alliance's Logo" width="308" height="50"></a>
</div>

<!-- be great to add an if statement here to set $name to blank if its 'welcome' or 'index'-->

<div id="desktop-menu">
    <div class="topnav-lang" id="myTopnav-lang">
        <div class="dropdown-lang">
            <button class="dropbtn-lang">ENG</button>
            <div class="dropdown-content-language">
               <a href='https://ecobricks.org/en/<?php echo ($name); ;?>' onclick='javascript:Localize.setLanguage("en")'>🇬🇧 ENG</a>
                <a href='https://ecobricks.org/id/<?php echo ($name); ;?>' onclick='javascript:Localize.setLanguage("id")'>🇮🇩 IND</a>
                <a href='https://ecobricks.org/es/<?php echo ($name); ;?>' onclick='javascript:Localize.setLanguage("es")'>🇪🇸 ESP</a>
            
<!--
                <a href='https://www.ecobricks.org/en/<?php echo ($name); ;?>' >🇬🇧 ENG</a>
                <a href='https://www.ecobricks.org/id/<?php echo ($name); ;?>'>🇮🇩 IND</a>
                <a href='https://www.ecobricks.org/es/<?php echo ($name); ;?>'>🇪🇸 ESP</a>-->
                
<a href="javascript:void(0);" style="font-size:15px;" class="icon-lang" onclick="languageMenu()"></a>
                
            
                
                
            </div>
        </div> 
    </div>

    <div class="topnav" id="myTopnav">
        <div class="dropdown">
                  <button class="dropbtn">
                    <div id="menu-circle"><img src="../svgs/grey-emblem.svg" width="30px" height="30px" alt="Global Ecobrick Alliance Emblem"></div><div id="menu-text">GEA Servers</div>
                </button>
                  <div class="dropdown-content-app">
                    <a href="https://gobrik.com" target="_blank" rel="noopener">
                        <div id="gobrik-menu">
                            <div id="icon-menu">
                            <img src="../icons/gobrik.svg" width="65" height="65" loading="lazy" alt="GoBrik logo">
                            </div>
                            <div id="apptext-menu">
                                <div class="apptext-header">GoBrik </div>
                                <div class="apptext-sub">Ecobricking Webapp<br>Manage your ecobricks<br>Connect to the Brikcoin blockchain</div>
                            </div>
                        </div>
                    </a>

                    <a href="https://circles.ecobricks.org/signup_user_complete/?id=ek8ks6frxfbbpj3sujkdo8xsqr" target="_blank" rel="noopener">
                        <div id="mattermost-menu">
                            <div id="icon-menu"><img src="../icons/mattermost.svg" width="65px" height="65px"></div>
                                
                            <div id="apptext-menu">
                                <div class="apptext-header">Circles </div>
                                <div class="apptext-sub">Join our free mattermost ecobricker community<br>Share your ecobricking<br>Learn from others</div>
                            </div>
                        </div>
                    
                    </a>

                    <a href="https://gobrik.com/#offset" target="_blank" rel="noopener">
                        <div id="offset-menu">
                            <div id="icon-menu"><img src="../icons/offset.svg" width="65px" height="65px" loading="lazy"></div>
                            <div id="apptext-menu">
                                <div class="apptext-header">AES Plastic Offsetting </div>
                                <div class="apptext-sub">Offset your plastic footprint<br>on our GoBrik AES Platform</div>
                            </div>
                        </div>
                    </a>
                </div>
        </div> 
        
        <a href="faqs.php">FAQs</a>
        <a href="sequest.php">Sequestration</a>
        <a href="about.php">About Us</a>
        <div class="dropdown">
        
            <button class="dropbtn">
            <div id="drop-text">Building
                  <i class="fa fa-caret-down"></i></div>
                </button>
                <div class="dropdown-content-normal">
                    <a href="build.php">Building Methods</a>
                    <a href="/modules">Lego Modules</a>
                    <a href="/earth">Earth & Ecobricks</a>
                    <a href="/openspaces">Open Spaces</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn"><div id="drop-text">About Ecobricks
                  <i class="fa fa-caret-down"></i></div>
                </button>
                <div class="dropdown-content-normal">
                    <a href="what.php">What are Ecobricks</a>
                    <a href="/how">How to Make?</a>
                    <a href="/why">Why Ecobricks?</a>
                    <a href="plastic.php">Plastic's Story</a>
                </div>
            </div> 
        
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="appMenu()" aria-label="Open site menu"><img src="../svgs/grey-emblem.svg"width="30px" height="30px" loading="lazy" alt="open site menu"></a>
            
        </div>
    </div>
</div>
<!--END OF MENU-->