<!DOCTYPE html>
<HTML lang="fr">
<HEAD>
<META charset="UTF-8">
<title>Bienvenue | Global Ecobrick Alliance</title>


<!-- 
Ecobricks.org site version 3.0
Developed and made open source by the Global Ecobrick Alliance
See our git hub repository for the full code and to help out:
https://github/globalecobrickalliance/ecobricks.org
-->
 
<?php require_once ("../includes/welcome-inc2.php");?>

<?php require_once ("lang.php");?>

<?php $lang='fr';?>

<?php require_once ("../includes/welcome-inc.php");?>


<!--MAIN CONTENT-->
		


<BODY>



 <!-- RIGHT PAGE MENU -->

 <div id="right-settings-overlay" class="overlay-settings">
  <div class="right-close-button">
    <button type="button" style="cursor:pointer" onclick="closeSettings()" aria-label="Click to close settings page" class="x-button">
    </button>
  </div>

  <div class="overlay-content-settings" style="margin-bottom: 20px;">
  
    <div class="earthcycles-logo"></div>

    <div class="menu-page-item" data-lang-id="001-introduction" onclick="sendDownRegistration(); closeSettings(); setTimeout(guidedTour, 500);"><a>Introduction</a></div>
    
    <div class="menu-page-item"><a href="what" data-lang-id="002-what-are-ecobricks">What are ecobricks?</a></div>

    <div class="menu-page-item" ><a href="how" data-lang-id="003-how-to">How to make?</a></div>
    
    <div class="menu-page-item" ><a href="why" data-lang-id="004-why-ecobricks">Why Ecobricks?</a></div>

    <div class="menu-page-item" ><a href="plastic" data-lang-id="005-earth-example">Earth's Example</a></div>

    <div class="menu-page-item" ><a href="principles" data-lang-id="006-our-principles">Our Earthen Principles</a></div>

    <div class="menu-page-item" ><a href="build" data-lang-id="007-construction">Building with Ecobricks</a></div>

    <div class="menu-page-item" ><a href="about" data-lang-id="008-about-us">About us</a></div>

    <div class="menu-page-item" ><a href="sequest.php" data-lang-id="009-plastic-sequestration">Plastique Sequestration</a></div>
</div>

        
<!--   
      <div id="wcb" class="carbonbadge wcb-d"></div> -->

      <br><br>
<!-- 
<br><br><br>
      <p style="font-size:small;">Ecobricking and the GEA are inspired by the <a href="ayyew" >ayyew</a> ethos of the Igorot people of Northern Luzon.</p>
       -->
    </div>
                                                              
</div>


<!-- TOUR SLIDER -->


<div id="guided-tour" class="modal">
    <div class="tour-content">
      <span class="close-tour close" style="padding:10px" onclick="closeTour();">&times;</span>
    
      <div id="information-one" class="information">
        <div class="tour-image tour-slide1"></div>  
        <div class="modal-header" data-lang-id="200-tour-1-header-welcome">Welcome to Ecobricks.org!</div>
        <div class="modal-description" data-lang-id="201-tour-1-description">So what is an ecobrick exactly?  Take our 45 second, five-slide introduction to ecobricks.  We'll cover the basics: what ecobricks are, how you can make one, the Earthen example we're following and what you can make with ecobricks once they're ready.</div>
        <button class="next" data-lang-id="202-tour-start-button">Start ➔</button>
    </div>
    
    <div id="information-two" style="display:none;" class="information">
        <div class="tour-image tour-slide2"></div>  
        <div class="modal-header" data-lang-id="203-tour-2-header">A Low Tech Solution</div>
        <div class="modal-description" data-lang-id="204-tour-2-description">It's pretty simple.  An ecobrick is a plastic bottle densely packed with used plastic to create a reusable building block that achieves <b>plastic sequestration</b>.  To make one, all you need is a stick and a bottle.</div>
        <button class="back" data-lang-id="205-tour-back-button">↩ Back</button>
        <button class="next" data-lang-id="206-tour-next-button">Next ➔</button>
        <div class="reference" data-lang-id="207-tour-2-reference">Definition from <a href="https://en.wikipedia.org/wiki/Ecobricks">wikipedia/wiki/ecobricks</a>  |  Go deeper: <a href="what">ecobricks.org/what</a></div>
    </div>
    
      

      <div id="information-three" style="display:none;" class="information">
      <div class="tour-image"><img src="../webp/ancient-future.webp"   style="margin:auto"  title="Our Neighbourhood" alt="Our Neighbourhood"></div>  
    
        <div class="modal-header" data-lang-id="208-tour-3-header">Plastic Sequestration?</div>
        <div class="modal-description" data-lang-id="209-tour-3-description">Ecobricks follow Earth's example.  Over the last few billion years, Earth has steadily captured loose carbon to concentrate and sequester it under the earth so that life could thrive.  We're doing the same with our loose plastic (which in fact is made from that ancient carbon!) by packing and sequestering it into an ecobrick.</div>
        <button class="back" data-lang-id="205-tour-back-button">↩ Back</button>
        <button class="next" data-lang-id="206-tour-next-button">Next ➔</button>
        <div class="reference" data-lang-id="210-reference-tour-3-description">Plastic's long story: <a href="/plastic/">ecobricks.org/plastic</a></div>
      </div>
    
      
      <div id="information-four" style="display:none;" class="information">
      <div class="tour-image tour-slide4"></div>  
        <div class="modal-header" data-lang-id="211-tour-4-header" >More than Eco</div>
        <div class="modal-description" data-lang-id="212-tour-4-description">Ecobricks do more than just prevent plastic from polluting the biosphere.  Ecobricking also keeps plastic from industrially processing-- which often creates even more problems than it solves.  Best of all, ecobricks can put to use locally to build all sorts of great green things!</div>
        <button class="back" data-lang-id="205-tour-back-button">↩ Back</button>
        <button class="next" data-lang-id="206-tour-next-button">Next ➔</button>
        <div class="reference" data-lang-id="213-tour-4-reference">Why we ecobrick: <a href="build">ecobricks.org/why</a></div>
    </div>

      
      
      <div id="information-five" style="display:none;" class="information" >
      <div class="tour-image tour-slide5"></div>  
      <div class="modal-header" data-lang-id="214-tour-5-header">Build Green and Great</div>
      <div class="modal-description" data-lang-id="215-tour-5-description">Ecobricks are put to use in all sorts of ways by the global community.  In the Philippines we build food forest play parks with them.  In the UK, we build earthen round houses.  In Indonesia, we make modular furniture for homes and cafes.  Be sure to check out the building sections of our site for ideas.</div>
        <button class="back" data-lang-id="205-tour-back-button">↩ Back</button>
        <button class="next" data-lang-id="206-tour-next-button">Next ➔</button>
        <div class="reference" data-lang-id="216-tour-5-reference">Our page on building methods: <a href="build">ecobricks.org/build</a></div>
      </div>
    
      <div id="information-six" style="display:none;" class="information" class="information" >
        <div class="tour-image tour-slide6"></div>  
    
        <div class="modal-header" data-lang-id="217-tour-6-header">Got questions?</div>
        <div class="modal-description" data-lang-id="218-tour-6-description">We're here to help! The Global Ecobrick Alliance is an Earth enterprise that global plastic transition movement by maintaining the philosophical and technological of the movement.  We're not at this for profit. Nor are we sponsored by any governments or corporations.  We're at this for people and planet.</div>
        <button class="back" data-lang-id="205-tour-back-button">↩ Back</button>
        
        <button class="next" onclick="closeTour()" data-lang-id="219-tour-done-button">✓ Done</button>
        <div class="reference" data-lang-id="220-tour-6-reference">Learn more about us <a href="/plastic/">ecobricks.org/about</a></div>
  
      </div>
    </div>
    </div>


<!--SEARCH PAGE-->


<div id="right-search-overlay" class="search-overlay">


<div class="right-close-button">
    <button type="button" style="cursor:pointer" onclick="closeSearch(), clearResults()"  aria-label="Close Search" class="x-button">
    </button>
  </div>

      <div class="search-overlay-content">
            
            <div>
                <h1 style="font-family:'Arvo', serif;text-shadow: none;" data-lang-id="100-search-title">Search</h1> 
                <p style="text-align:center; width:90%;" data-lang-id="101-search-intro">Select the languages and indexes you wish to search.  To search for ecobricks use our <a style="color:var(--emblem-blue)" href="brikchain.php">brikchain search</a>.</p>
            </div>
          
            <div class="search-box">
              <div class="search-section">
                <input id="search_input" type="text" placeholder="Enter search term..." aria-label="Enter search..." onkeypress="handleKeyPress(event)">   
                <button class="btn main-search-button" onclick="siteSearch(['indexes/glossary.json', 'indexes/page-index.json'])" aria-label="Search Button"></button> 
              </div>  
               <!-- Checkbox options -->
               <div class="search-options">
                  <div class="search-row"> <!-- First row -->
                    <label><b data-lang-id="102-search-index1">Pages: </b><input type="checkbox" name="searchIndex" value="en_site">EN  </label>
                    <label><input type="checkbox" name="searchIndex" value="fr_site" checked>FR  </label>
                    <label><input type="checkbox" name="searchIndex" value="es_site">ES  </label>
                    <label><input type="checkbox" name="searchIndex" value="id_site">IN  </label>
                </div>
                <div class="search-row"> <!-- Second row -->
                    <label><b data-lang-id="103-search-index3">Glossaries:</b><input type="checkbox" name="searchIndex" value="en_glossary" >EN  </label>
                    <label><input type="checkbox" name="searchIndex" value="fr_glossary" checked>FR  </label>
                    <label><input type="checkbox" name="searchIndex" value="es_glossary" disabled>ES  </label>
                    <label><input type="checkbox" name="searchIndex" value="id_glossary" disabled>IN</label>
                </div>
              </div>

            <!-- Search results div -->
            <div id="search_results"><h6 style="color:grey;" data-lang-id="104-search-bottom-text" >Dictionary definitions are shown first</h6></div>
          </div>
        </div>
      </div>
    </div>  


    <div id="registration-footer" style="opacity:0;">


      <div class="reg-top-section">
          <button id="reg-up-button"  onclick="sendUpRegistration()" aria-label="Newsletter Registration" data-lang-id="105-subscription-registration"></button>
      </div>
      <div class="registration-footer-holder">
          <div id="progress-bar"></div>
          <button id="reg-down-button" onclick="sendDownRegistration()" aria-label="Hide Newsletter Registration" data-lang-id="106-hide-subscription-registration">
              <img src="../svgs/down-arrow.svg" alt="Hide Earthen Newsletter registration" data-lang-id="107-hide-subscription-image-alt">
          </button>
          
            <div id="email-registration">
                <div class="registration-box">
                    <div class="reg-img">
                        <img src="../svgs/subscription-side-image.svg" data-lang-id="108-subscription-image-alt-desktop" class="desktop" height="200" width="200" alt="Earthen Ecobrick Newsletter subscription">
                      <!-- <img src="../svgs/richard-and-team-night.svg" data-lang-id="109-subscription-image-alt-mobile" class="mobile" height="140" width="200" alt="Earthen Ecobrick Newsletter subscription"> -->
                    </div>

                    <!--REGISTRATION TEXTS-->

                    <div id="reg-registration-texts">
                        <div class="reg-header" data-lang-id="110-subscription-title">Subscribe to Earthen</div>
                        <div class="reg-subtitle" data-lang-id="111-subscription-subtitle">Follow our regenerative work and news by subscribing to our Earthen newsletter.</div>
                      
                        <form id="emailForm" class="reg-field" style="display:flex; flex-flow:row;">
                        <label for="email"></label>
                        <input type="email" name="email" required placeholder="Your e-mail..." class="email-input" data-lang-id="112-subscription-email-placeholder">
                        <input type="text" name="name" required placeholder="Your name..." class="name-input" data-lang-id="113-subscription-name-placeholder">
                        <div class="reg-complete-text" id="reg-status"></div>
                        <input type="submit" value="➔" class="register-button" id="reg-status-icon" onclick="handleFormSubmit(event)">
                        </form>
                        <div class="reg-sub" style="flex-flow: row;">
                            <div class="earthen-icon"></div>
                            <div id="reg-explanation" data-lang-id="114-subscription-caption">We send out a news once every month or so according to <a href="javascript:void(0)" onclick="previewPrivacy()">our strict privacy policy</a>.</div>
                        </div>
                        <div class="reg-sub" style="flex-flow: row;">
                            <div id="reg-sub-checker">
                                <input type="checkbox" id="reg-sub-checkbox" onclick="checkBoxActivated()">
                                <label for="reg-sub-checkbox" data-lang-id="115-subscription-do-not-show-again">I've already signed up or I am not interested - don't show again</label>
                            </div>
                        </div>
                    </div>

                    <!--PRAVACY STATEMENT-->

                    <div id="reg-privacy-texts">
                        <div class="reg-header" data-lang-id="116-privacy-title">Your Data is Safe</div>
                        <div class="reg-privacy-subtitle" data-lang-id="117-privacy-subtitle">As a not-for-profit Earth enterprise on principle we do partake in any 3rd party advertising, nor connect your data to social platforms that do.  Your data will not be sold or exchanged.  We proudly use Ghost.org's for our newsletter-- a not-for-profit open source platform which we host on our own servers.  Our newsletters are sent usually once a month, we commit to not exceeding more than one a week.</div>
                        <div style="display:flex; flex-flow:row;width:fit-content;margin:-10px 10% 0px auto;">
                            <div class="full-privacy-policy-link">
                                <a href="https://earthen.io/privacy/" data-lang-id="118-full-privacy-link">Our Full Privacy Policy</a>
                            </div>
                            <button class="btn" onclick="previewPrivacy()" style="height:fit-content; padding:10px 15px 10px 15px;border-radius:10px;" type="button" aria="Go back to registration">OK</button>                      
                        </div>
                    </div>


                </div>
            </div>
      </div>
  </div>
  
   
    
<div id="page-content">


    <div id="header" class="top-menu" style="display: flex;
    flex-flow: row;">

        
        <svg  version="1.1" viewBox="0 0 130.09 28.997" xmlns="http://www.w3.org/2000/svg" id="gea-logo" href="index.html">

            <g id="logo-full" transform="translate(-36.122 -89.481)" fill="#646464">
                <g id="logo-global-ecobrick-alliance" transform="matrix(.19017 0 0 .19017 210.48 97.699)" stroke-width="1px" aria-label="Global Ecobrick Alliance">
                    <path id="path1071" d="m-731.19 103.96v-5.9375c-1.6961 3.7617-5.7958 5.9267-9.8116 6.0416-3.7576 0.19762-7.6601-1.0879-10.239-3.8992-4.166-4.3772-5.1601-11.163-3.2776-16.79 1.4756-4.5087 5.2472-8.2775 9.9195-9.351 4.0288-0.9404 8.5405-0.1914 11.751 2.5182 0.9361 0.50128 1.4943 1.7727 2.4564 2.0267h1.5644v3.4766h-4.1992c-1.7836-3.1878-5.4842-5.1584-9.13-4.732-4.2421 0.29513-7.6506 3.8014-8.7588 7.763-1.2487 4.291-0.48415 9.3982 2.6684 12.699 2.1908 2.2326 5.4377 3.2277 8.5152 2.7769 2.8964-0.2458 5.6822-1.9442 6.9195-4.6258 0.22469-0.76962 1.4019-2.4886 0.686-2.8069h-7.9511v-3.3594h12.52v14.199h-3.6328z"/>
                    <path id="path1073" d="m-722.14 73.448h6.5625v27.031h3.0469v3.3594h-9.6094v-3.3594h2.9297v-23.672h-2.9297z"/>
                    <path id="path1075" d="m-709.21 93.722c-0.0362-3.3317 1.3105-6.7918 4.0499-8.8028 2.8557-2.1119 6.814-2.4171 10.092-1.1855 2.9515 1.0901 5.0932 3.819 5.7812 6.8491 0.88219 3.7959 0.17234 8.1754-2.6298 11.03-2.269 2.3582-5.75 3.2029-8.9223 2.7031-3.1311-0.42027-5.9739-2.5046-7.256-5.4014-0.76739-1.616-1.1045-3.4101-1.1145-5.1923zm3.8477 0c-0.0691 2.7487 1.165 5.7285 3.7266 7.0003 2.6456 1.3581 6.2028 0.33431 7.7056-2.2386 1.4778-2.4304 1.5742-5.5437 0.69283-8.1998-0.69416-2.1184-2.5847-3.8215-4.8304-4.0713-2.4182-0.40941-5.0385 0.7538-6.2106 2.9391-0.80377 1.3784-1.0896 2.9909-1.084 4.5703z"/>
                    <path id="path1077" d="m-685.87 73.448h6.5625v11.836c2.649-2.1375 6.4624-2.8564 9.6094-1.4258 3.5486 1.5236 5.4079 5.4928 5.388 9.2081 0.17662 3.938-1.6542 8.1541-5.2716 10.007-3.0086 1.5213-6.9447 1.5313-9.7258-0.50468-0.0885 0.38467 0.18438 1.1308-0.15007 1.2695h-3.4828v-27.031h-2.9297v-3.3594zm11.562 12.871c-1.8724-0.01023-3.7074 0.82716-5 2.168v10.879c1.8022 1.6637 4.5536 1.9891 6.8496 1.3312 2.8444-0.85847 4.3756-3.9339 4.3922-6.7487 0.19856-2.8173-1.06-6.0179-3.8199-7.1411-0.76162-0.33037-1.5927-0.49012-2.4219-0.48828z"/>
                    <path id="path1079" d="m-648.69 101.96c-1.6678 1.5836-3.9306 2.654-6.2711 2.4249-2.687-0.0997-5.4136-1.877-6.0549-4.5824-0.56328-2.3466 0.33618-5.0408 2.4085-6.3614 2.611-1.7174 5.8962-1.7261 8.8918-1.392 0.64933 0.15548 1.2476 0.31664 1.0532-0.50914 0.0562-1.4002 0.02-2.959-1.0422-4.0188-1.4713-1.4723-3.7633-1.2626-5.6366-0.92834-1.1675 0.24154-2.3403 0.59308-3.3487 1.246-0.39714-0.83984-0.79427-1.6797-1.1914-2.5195 2.955-1.8423 6.6523-2.67 10.073-1.839 1.9707 0.42094 3.6918 1.8681 4.3076 3.8065 0.68655 1.9849 0.40215 4.103 0.45753 6.1607-5e-3 2.3427-9e-3 4.6854-0.0136 7.0281h2.2461v3.3594h-5.8789v-1.875zm-4.9219-0.60547c1.8396-0.0256 3.6858-0.81483 4.9219-2.1875 6e-3 -1.5234 0.013-3.0469 0.0195-4.5703-1.7428 0.02613-3.4903-0.05968-5.2295 0.05859-1.6358 0.14783-3.4452 1.1096-3.7054 2.879-0.29644 1.3965 0.4349 2.9648 1.8237 3.439 0.68208 0.29249 1.4337 0.37753 2.1698 0.38116z"/>
                    <path id="path1081" d="m-638.86 73.448h6.5625v27.031h3.0469v3.3594h-9.6094v-3.3594h2.9297v-23.672h-2.9297z"/>
                    <path id="path1083" d="m-627.61 103.84z"/>
                    <path id="path1085" d="m-616.07 74.23h21.211v8.3789h-4.0039v-5h-10.566v9.4727h8.8867v3.3594h-8.8867v10.039h10.566v-5h4.0039v8.3594h-21.211v-3.3594h2.8125v-22.871h-2.8125z"/>
                    <path id="path1087" d="m-577.14 88.995c-0.9243-1.8406-2.9718-2.9071-5-2.832-2.4246-0.05336-4.6182 1.6764-5.4498 3.9018-0.89097 2.2711-0.91089 4.9153 6.9e-4 7.1831 0.86365 2.1915 3.035 3.9091 5.4491 3.837 2.098 0.0773 4.155-1.0855 5.1412-2.9446 0.15721-0.66196 0.50516-0.65161 0.98692-0.30424 0.78281 0.38632 1.5656 0.77264 2.3484 1.159-1.2865 2.8887-4.1321 4.9928-7.2809 5.3354-2.9226 0.38788-6.03-0.58579-8.0615-2.7573-2.7711-2.9317-3.4739-7.3796-2.4713-11.198 0.88349-3.381 3.5852-6.2886 7.0146-7.1335 3.1153-0.76585 6.7052 0.01412 8.9437 2.3935h2.0508v3.3594h-3.6719z"/>
                    <path id="path1089" d="m-570.15 93.722c-0.0362-3.3317 1.3105-6.7918 4.0499-8.8028 2.8557-2.1119 6.814-2.4171 10.092-1.1855 2.9515 1.0901 5.0932 3.819 5.7812 6.8491 0.88219 3.7959 0.17234 8.1754-2.6298 11.03-2.269 2.3582-5.75 3.2029-8.9223 2.7031-3.1311-0.42027-5.9739-2.5046-7.256-5.4014-0.76739-1.616-1.1045-3.4101-1.1145-5.1923zm3.8477 0c-0.0691 2.7487 1.165 5.7285 3.7266 7.0003 2.6456 1.3581 6.2028 0.33431 7.7056-2.2386 1.4778-2.4304 1.5742-5.5437 0.69283-8.1998-0.69416-2.1184-2.5847-3.8215-4.8304-4.0713-2.4182-0.40941-5.0385 0.7538-6.2106 2.9391-0.80377 1.3784-1.0896 2.9909-1.084 4.5703z"/>
                    <path id="path1091" d="m-546.81 73.448h6.5625v11.836c2.649-2.1375 6.4624-2.8564 9.6094-1.4258 3.5486 1.5236 5.4079 5.4928 5.388 9.2081 0.17662 3.938-1.6542 8.1541-5.2716 10.007-3.0086 1.5213-6.9447 1.5313-9.7258-0.50468-0.0885 0.38467 0.18438 1.1308-0.15007 1.2695h-3.4828v-27.031h-2.9297v-3.3594zm11.562 12.871c-1.8724-0.01023-3.7074 0.82716-5 2.168v10.879c1.8022 1.6637 4.5536 1.9891 6.8496 1.3312 2.8444-0.85847 4.3756-3.9339 4.3922-6.7487 0.19856-2.8173-1.06-6.0179-3.8199-7.1411-0.76162-0.33037-1.5927-0.49012-2.4219-0.48828z"/>
                    <path id="path1093" d="m-506.97 87.882h-3.7109v-1.25c-2.1155-0.0011-3.8288 1.8219-4.1858 3.8229-0.11328 0.84494-0.0241 1.7102-0.0525 2.5637v7.461h3.4375v3.3594h-10.039v-3.3594h2.793c6e-3 -4.5052 0.013-9.0104 0.0195-13.516h-2.8125v-3.3594h6.4648v2.793c0.8552-1.6342 2.4918-3.0255 4.4251-2.9492 1.2203 0.0044 2.4413-0.01754 3.6608 0.03906 1e-5 1.4648 3e-5 2.9297 4e-5 4.3945z"/>
                    <path id="path1095" d="m-502.92 83.605h6.6016v16.875h3.0469v3.3594h-9.6094v-3.3594h2.8906v-13.516h-2.9297v-3.3594zm2.2461-7.168c-0.0621-1.8131 2.1803-3.1766 3.7414-2.1973 1.385 0.70083 1.7652 2.6801 0.74097 3.8416-0.98412 1.3942-3.3381 1.2077-4.1095-0.31036-0.25069-0.39719-0.37526-0.86537-0.37293-1.3339z"/>
                    <path id="path1097" d="m-475.35 88.995q-0.82031-1.4648-2.0898-2.1484-1.25-0.68359-2.9102-0.68359-1.2695 0-2.3828 0.52734-1.1133 0.52734-1.9531 1.5039-0.82031 0.97656-1.3086 2.3828-0.46875 1.3867-0.46875 3.1055 0 1.6992 0.46875 3.0664 0.48828 1.3672 1.3281 2.3438 0.83985 0.95703 1.9336 1.4844 1.1133 0.50781 2.3828 0.50781 1.875 0 3.2617-0.89843 1.3867-0.91797 2.207-2.6758l3.0078 1.4844q-0.58593 1.25-1.4453 2.2461-0.85937 0.9961-1.9531 1.6992-1.0742 0.70313-2.3828 1.0742-1.2891 0.39063-2.7344 0.39063-2.1094 0-3.9062-0.78125-1.7774-0.80078-3.0859-2.2266-1.2891-1.4258-2.0117-3.3984-0.72265-1.9727-0.72265-4.3164t0.76171-4.3164q0.76172-1.9727 2.0898-3.3789 1.3281-1.4258 3.1055-2.2266 1.7773-0.80078 3.8086-0.80078 1.9141 0 3.6133 0.66406 1.7188 0.66406 3.0078 2.0117h2.0508v3.3594z"/>
                    <path id="path1099" d="m-468.24 73.448h7.1289v3.3594h-0.0391v15.117h3.5156l4.8047-4.9609h-1.2109v-3.3594h7.6758v3.3594h-2.5586l-6.1523 6.3477 6.7188 7.168h2.4414v3.3594h-4.2773l-8.2812-9.043h-2.6758v5.6836h1.6797v3.3594h-8.6524v-3.3594h3.3203v-23.672h-3.4375z"/>
                    <path id="path1101" d="m-444.88 103.84z"/>
                    <path id="path1103" d="m-415.82 100.48h2.4609l-2.3438-6.7188h-11.387l-2.2852 6.7188h3.0469v3.3594h-9.6094v-3.3594h2.5781l9.2188-26.25h5.7617l9.1992 26.25h2.9688v3.3594h-9.6094zm-10.156-9.9609h9.1406l-4.6094-13.242z"/>
                    <path id="path1105" d="m-404.17 73.448h6.5625v27.031h3.0469v3.3594h-9.6094v-3.3594h2.9297v-23.672h-2.9297z"/>
                    <path id="path1107" d="m-391.13 73.448h6.5625v27.031h3.0469v3.3594h-9.6094v-3.3594h2.9297v-23.672h-2.9297z"/>
                    <path id="path1109" d="m-378.08 83.605h6.6016v16.875h3.0469v3.3594h-9.6094v-3.3594h2.8906v-13.516h-2.9297v-3.3594zm2.2461-7.168c-0.0621-1.8131 2.1803-3.1766 3.7414-2.1973 1.385 0.70083 1.7652 2.6801 0.74097 3.8416-0.98412 1.3942-3.3381 1.2077-4.1095-0.31036-0.25069-0.39719-0.37526-0.86537-0.37293-1.3339z"/>
                    <path id="path1111" d="m-353.22 101.96c-1.6678 1.5836-3.9306 2.654-6.2711 2.4249-2.687-0.0997-5.4136-1.877-6.0549-4.5824-0.56328-2.3466 0.33618-5.0408 2.4085-6.3614 2.611-1.7174 5.8962-1.7261 8.8918-1.392 0.64933 0.15548 1.2476 0.31664 1.0532-0.50914 0.0562-1.4002 0.02-2.959-1.0422-4.0188-1.4713-1.4723-3.7633-1.2626-5.6366-0.92834-1.1675 0.24154-2.3403 0.59308-3.3487 1.246-0.39714-0.83984-0.79427-1.6797-1.1914-2.5195 2.955-1.8423 6.6523-2.67 10.073-1.839 1.9707 0.42094 3.6918 1.8681 4.3076 3.8065 0.68655 1.9849 0.40215 4.103 0.45753 6.1607-5e-3 2.3427-9e-3 4.6854-0.0136 7.0281h2.2461v3.3594h-5.8789v-1.875zm-4.9219-0.60547c1.8396-0.0256 3.6858-0.81483 4.9219-2.1875 6e-3 -1.5234 0.013-3.0469 0.0195-4.5703-1.7428 0.02613-3.4903-0.05968-5.2295 0.05859-1.6358 0.14783-3.4452 1.1096-3.7054 2.879-0.29644 1.3965 0.4349 2.9648 1.8237 3.439 0.68208 0.29249 1.4337 0.37753 2.1698 0.38116z"/>
                    <path id="path1113" d="m-329.92 100.48h2.8516c-0.0117-3.2671 0.0239-6.5352-0.0186-9.8016-0.0367-1.7222-1.077-3.484-2.8187-3.9314-1.8954-0.58804-3.9365-0.0198-5.5465 1.0524-0.56449 0.38609-1.4112 0.68331-1.1865 1.5009v11.18h2.8516v3.3594h-9.4531v-3.3594h2.8125v-13.516h-2.8125v-3.3594h6.4453v2.3828c1.8763-1.6189 4.2806-2.9157 6.8457-2.7469 2.2665 0.02138 4.7018 1.0304 5.7355 3.1628 1.2308 2.3212 0.87884 4.9952 0.93445 7.5213v6.5549h2.8125v3.3594h-9.4531c-1e-5 -1.1198-3e-5 -2.2396-4e-5 -3.3594z"/>
                    <path id="path1115" d="m-301.91 88.995c-0.92429-1.8407-2.9718-2.9071-5-2.832-2.4246-0.05335-4.6182 1.6764-5.4498 3.9018-0.89097 2.2711-0.91089 4.9153 6.8e-4 7.1831 0.86365 2.1915 3.035 3.9091 5.4491 3.837 2.098 0.0773 4.155-1.0855 5.1412-2.9446 0.15721-0.66196 0.50516-0.6516 0.98692-0.30424 0.78281 0.38632 1.5656 0.77264 2.3484 1.159-1.2865 2.8887-4.1321 4.9928-7.2809 5.3354-2.9226 0.38788-6.03-0.5858-8.0615-2.7573-2.7711-2.9317-3.4739-7.3796-2.4713-11.198 0.88349-3.3811 3.5852-6.2886 7.0146-7.1335 3.1153-0.76585 6.7052 0.01412 8.9437 2.3935h2.0508v3.3594h-3.6719z"/>
                    <path id="path1117" d="m-291.21 94.191c-0.0689 2.4536 1.054 5.1681 3.408 6.2108 2.4732 1.139 5.4023 0.65545 7.7998-0.44487 0.54846-0.0155 1.3636-1.1839 1.6373-0.3409 0.41231 0.69817 0.82461 1.3963 1.2369 2.0945-3.0992 2.2011-7.1196 3.2922-10.865 2.3722-2.5677-0.59221-4.7516-2.4778-5.7663-4.9028-1.113-2.5411-1.2627-5.4347-0.80801-8.1466 0.47947-2.789 2.0623-5.4855 4.6125-6.8386 2.2512-1.2469 4.9981-1.3757 7.4643-0.78474 2.4912 0.63378 4.445 2.7159 5.1134 5.1715 0.60083 1.8053 0.74049 3.7188 0.73735 5.6094h-14.57zm5.6836-8.0664c-1.7898-0.06463-3.6749 0.74016-4.559 2.3584-0.51196 0.8784-0.75942 1.8819-0.92926 2.876h10.488c-0.11386-1.7429-0.63525-3.7414-2.2962-4.6289-0.81674-0.4689-1.775-0.60612-2.7038-0.60547z"/>
                </g>
                <g id="logo-ecobricks-org" transform="matrix(2.6995 0 0 2.6995 -768.61 -687.29)" aria-label="Ecobricks.org">
                    <g id="flowRoot1613-7" transform="matrix(.14205 0 0 .14205 278.95 191.13)" fill="#646464" aria-label="ecobricks.org">
                    <path id="path698-5" d="m220.69 720.5c0.0605 2.1995 2.1632 3.8166 4.2215 4.0762 2.4547 0.33278 4.9038-0.36081 7.1652-1.2637 0.71615 1.3346 1.4323 2.6693 2.1484 4.0039-1.9928 1.2689-4.1952 2.3419-6.592 2.4848-2.9576 0.29464-6.1237-0.14753-8.5581-1.9659-3.1256-2.213-4.5127-6.2519-4.1578-9.9744 0.26207-3.7407 2.6699-7.2619 6.1394-8.7335 2.6436-1.1371 5.7525-1.2018 8.4446-0.18914 2.8717 1.06 4.9414 3.7069 5.6448 6.6436 0.3981 1.6029 0.49585 3.2728 0.44621 4.9182-4.9675-2e-5 -9.9349-3e-5 -14.902-5e-5zm4.668-7.3828c-1.6706-0.0716-3.4893 0.70303-4.1516 2.3279-0.43805 0.6726-0.38251 1.1143 0.43892 0.93383h7.6775c-0.22117-1.34-1.03-2.6957-2.4225-3.0524-0.49666-0.16146-1.0225-0.20827-1.5424-0.20934z"/>
                    <path id="path700-3" d="m252.42 716.11c-0.99915-1.3263-2.6273-2.2223-4.3164-2.0508-2.2322-0.23714-4.3596 1.4336-4.8694 3.5803-0.6632 2.2898 0.20168 5.0927 2.3938 6.2256 1.3177 0.70954 2.949 0.9189 4.3234 0.23071 1.2864-0.54212 2.2443-1.6604 2.8201-2.9077 1.7904 0.49479 3.5807 0.98959 5.3711 1.4844-1.0987 3.7308-4.5949 6.4353-8.3794 7.0178-3.0425 0.4971-6.3338-0.15786-8.7352-2.1575-2.955-2.3546-4.3391-6.3341-3.826-10.037 0.48689-4.2074 3.8157-7.934 7.9887-8.7662 1.7165-0.3135 3.5078-0.33253 5.2213 4e-3 1.274 0.26573 2.4632 0.86166 3.5717 1.4976h3.8268v5.8789h-5.3906z"/>
                    <path id="path702-5" d="m258.77 719.15c-0.0717-3.9838 2.3029-7.9145 5.9412-9.5853 4.1136-1.9764 9.4827-1.1837 12.663 2.1566 3.4151 3.4941 3.853 9.3406 1.2103 13.405-1.9627 3.126-5.7104 4.8674-9.3562 4.7038-3.6663 6e-3 -7.3136-1.9837-9.0856-5.229-0.94365-1.6493-1.3763-3.5591-1.3727-5.4513zm5.8398 0c-0.0884 2.4369 1.6973 4.8884 4.1766 5.2185 2.0632 0.36374 4.2552-0.78661 5.088-2.7201 1.0292-2.3055 0.58797-5.452-1.5937-6.9466-2.2494-1.5173-5.7688-0.82206-7.0094 1.679-0.46313 0.84426-0.6673 1.8106-0.66147 2.7692z"/>
                    <path id="path704-6" d="m280.85 698.96h8.8281v10.605q1.0547-0.50781 2.168-0.78125t2.2852-0.27344q2.2461 0 4.1602 0.83984 1.9141 0.83985 3.3008 2.2852t2.168 3.3789q0.80078 1.9336 0.80078 4.1016 0 2.1875-0.78125 4.1211-0.76172 1.9336-2.1484 3.3789-1.3867 1.4258-3.3008 2.2656-1.9141 0.82032-4.1992 0.82032-1.2305 0-2.3438-0.23438-1.1133-0.23437-2.1094-0.66406v0.54687h-5.9961v-25.039h-2.832zm12.871 14.941q-1.2891 0-2.3242 0.58593-1.0156 0.58594-1.7188 1.6797v6.0547q0.625 0.9375 1.6602 1.5234 1.0547 0.5664 2.3438 0.5664 0.9961 0 1.8945-0.35156 0.89843-0.37109 1.5625-1.0352 0.68359-0.68359 1.0742-1.6211 0.39063-0.95703 0.39063-2.1484 0-1.2109-0.39063-2.1875-0.39062-0.97656-1.0547-1.6602-0.66407-0.6836-1.5625-1.0352-0.87891-0.37109-1.875-0.37109z"/>
                    <path id="path706-2" d="m324.29 716.48h-5.4883v-2.0898q-0.80078 0-1.4648 0.11718-0.66406 0.0977-1.1719 0.35157-0.48829 0.2539-0.83985 0.70312-0.33203 0.44922-0.46875 1.1133v7.3242h4.1211v5.3516h-13.203v-5.3516h3.0273v-9.5312h-2.9883v-5.3516h9.0039v1.4258q0.85937-0.68359 1.9336-1.0547 1.0742-0.37109 2.3438-0.37109 1.2891 0 2.6562 0.0195 1.3672 0.0195 2.5391 0.0195z"/>
                    <path id="path708-9" d="m326.27 709.11h9.082v14.883h2.8125v5.3516h-11.895v-5.3516h3.0469v-9.5312h-3.0469zm2.7344-6.5234q0-0.72265 0.2539-1.3476 0.27344-0.64454 0.74219-1.1133t1.0938-0.74218q0.64453-0.27344 1.3867-0.27344 0.70313 0 1.3281 0.27344 0.625 0.27343 1.0938 0.74218t0.74218 1.1133q0.27344 0.625 0.27344 1.3476 0 0.72266-0.27344 1.3672-0.27343 0.625-0.74218 1.0938t-1.0938 0.74219q-0.625 0.27343-1.3281 0.27343-0.74219 0-1.3867-0.27343-0.625-0.27344-1.0938-0.74219t-0.74219-1.0938q-0.2539-0.64453-0.2539-1.3672z"/>
                    <path id="path710-1" d="m355.52 716.11q-0.83984-1.0547-1.875-1.582-1.0352-0.54688-2.4414-0.46875-1.1328-0.0781-2.0703 0.3125-0.91797 0.39062-1.6016 1.0938-0.66406 0.70312-1.0352 1.6797-0.37109 0.95703-0.37109 2.168 0 1.0742 0.39062 2.0312 0.39063 0.95703 1.0547 1.6602 0.68359 0.68359 1.6016 1.0742 0.9375 0.39062 2.0312 0.46875 0.91797-0.0781 1.6602-0.3711 0.76172-0.3125 1.3477-0.78125 0.58593-0.48828 0.99609-1.0742 0.42969-0.60546 0.66406-1.1328l5.3711 1.4844q-0.33204 1.1719-1.1524 2.4414-0.80078 1.2695-2.1094 2.3242-1.2891 1.0352-3.0859 1.7188-1.7773 0.6836-4.0625 0.6836-2.3242 0-4.2773-0.83985-1.9531-0.85937-3.3594-2.3242-1.4062-1.4648-2.207-3.4375-0.78125-1.9726-0.78125-4.2383 0-2.2461 0.80078-4.1602 0.82031-1.9336 2.2461-3.3594 1.4258-1.4453 3.3789-2.2461 1.9727-0.80078 4.2773-0.72266 1.6406-0.0781 3.1836 0.37109 1.543 0.44922 2.9297 1.3477h3.8867v5.8789z"/>
                    <path id="path712-2" d="m361.62 698.96h9.1211v17.52h3.418l1.4062-2.0117v-5.3516h10.469v5.3516h-3.6328l-3.7695 4.3555 3.8476 4.6484h3.3594v5.8789h-5.4883l-6.5625-8.6719h-3.0469v3.3203h2.0703v5.3516h-11.191v-5.3516h3.125v-19.688h-3.125z"/>
                    <path id="path714-7" d="m401.92 715.31c-0.0721-1.3188-1.5263-1.9213-2.6367-2.168-1.3245-0.24718-2.8304-0.39221-4.0332 0.32712-1.0781 0.67041-0.45651 2.2983 0.70313 2.4121 2.5641 0.60337 5.239 0.82723 7.6762 1.8855 1.6958 0.70149 3.1871 2.1475 3.4518 4.0276 0.41266 2.1096-0.42425 4.3535-2.0779 5.7173-2.4554 2.0314-5.8482 2.6028-8.9468 2.2094-1.4433-0.19839-2.8913-0.68022-3.9998-1.6572h-3.5352v-5.4297h5.5274c-0.0496 1.3118 1.3312 2.0338 2.4414 2.2656 1.32 0.20431 2.7654 0.25945 4.0039-0.3125 1.0392-0.41962 1.0437-1.9884 0.032-2.4313-1.1129-0.50093-2.3519-0.60356-3.5284-0.89972-2.4797-0.50894-5.1723-1.022-6.9834-2.9428-1.9464-2.0642-1.7929-5.6265 0.23139-7.5883 2.4039-2.4253 6.1026-2.9366 9.3516-2.429 1.4263 0.18873 2.8232 0.69279 3.9632 1.5841h3.3984v5.4297l-5.0391 3e-5z"/>
                    <path id="path716-0" d="m408.99 726.18c-0.031-1.3626 0.75207-2.7068 1.9641-3.335 1.0374-0.576 2.3535-0.64344 3.4199-0.10414 1.2539 0.57085 2.1388 1.8695 2.1895 3.2496 0.0809 1.4951-0.79839 3.0116-2.1735 3.6288-1.2411 0.62627-2.8052 0.43122-3.9084-0.39332-0.91145-0.64497-1.4628-1.7355-1.4874-2.8473-3e-3 -0.0662-4e-3 -0.13243-4e-3 -0.19867z"/>
                    <path id="path718-9" d="m418.24 719.23c-0.0362-3.3317 1.3105-6.7918 4.0499-8.8028 2.8557-2.1119 6.814-2.4171 10.092-1.1855 2.9515 1.0901 5.0932 3.819 5.7812 6.8491 0.88219 3.796 0.17234 8.1754-2.6298 11.03-2.269 2.3582-5.75 3.2029-8.9223 2.7031-3.1311-0.42027-5.9738-2.5046-7.256-5.4014-0.76739-1.616-1.1045-3.4101-1.1145-5.1923zm3.8477 0c-0.0691 2.7486 1.165 5.7284 3.7266 7.0003 2.6456 1.358 6.2028 0.33432 7.7056-2.2386 1.4778-2.4304 1.5742-5.5437 0.69283-8.1998-0.69416-2.1184-2.5847-3.8215-4.8304-4.0714-2.4182-0.40941-5.0386 0.7538-6.2106 2.9392-0.80377 1.3784-1.0896 2.9909-1.084 4.5703z"/>
                    <path id="path720-3" d="m454.6 713.39h-3.7109v-1.25c-2.1155-1e-3 -3.8288 1.8219-4.1858 3.8229-0.11328 0.84493-0.0241 1.7102-0.0525 2.5637v7.461h3.4375v3.3594h-10.039v-3.3594h2.793c7e-3 -4.5052 0.013-9.0104 0.0195-13.516h-2.8125v-3.3594h6.4648v2.793c0.8552-1.6342 2.4918-3.0255 4.4251-2.9492 1.2203 4e-3 2.4413-0.0176 3.6608 0.0391 1e-5 1.4648 3e-5 2.9297 4e-5 4.3945z"/>
                    <path id="path722-6" d="m470.45 727.57c-1.6922 1.8761-4.3733 2.534-6.8121 2.1277-3.2068-0.34994-6.0715-2.5792-7.2321-5.5844-1.1335-2.8692-1.2188-6.1565-0.29877-9.0953 0.97394-3.1895 3.8196-5.6511 7.1018-6.2028 2.4509-0.42727 5.1963-0.21551 7.2412 1.333 0.10419-0.33419-0.25544-1.1322 0.27997-1.0352h3.3528c-9e-3 6.7233 0.0183 13.447-0.0139 20.17-0.0642 2.9231-1.0727 6.1715-3.7465 7.7188-2.7023 1.5048-5.9866 1.4977-8.9495 0.91-1.8983-0.44154-3.783-1.1691-5.2783-2.4512 0.65104-0.98307 1.3021-1.9662 1.9531-2.9492 2.5691 2.1097 6.2403 2.8696 9.4321 1.926 2.0502-0.66991 2.7851-2.9556 2.903-4.9012 0.0584-0.65369 0.0702-1.3102 0.0673-1.9662zm-4.8438-0.9375c1.7948 7e-3 3.7936-0.63507 4.8438-2.1403v-11.004c-1.7529-1.5082-4.2872-1.9494-6.5112-1.4694-2.423 0.55044-4.1469 2.7763-4.5257 5.1672-0.43142 2.794-0.0331 6.0804 2.1802 8.0655 1.0991 0.95366 2.5738 1.3886 4.013 1.3812z"/>
                    </g>
                </g>
                </g>
                <g id="layer2" transform="translate(2.6953 4.339)">
                <g id="logo-emblem" transform="matrix(.17994 0 0 .17228 -8.078 -13.757)">
                    <path id="logo-o-4" d="m57.668 152.74c-9.2502-1.3534-19.061-7.6796-23.502-15.154-6.5207-10.976-5.4798-24.126 2.6902-33.986 9.2459-11.159 25.306-15.484 39.551-10.653 9.6012 3.2563 17.375 10.864 20.455 20.019 1.1812 3.5104 1.6049 9.9045 0.91783 13.85-2.1116 12.125-13.293 22.86-26.693 25.625-3.5314 0.7288-9.5592 0.86258-13.419 0.29783zm13.695-25.066c2.3357-0.87388 4.7269-3.0533 5.6989-5.1942 0.91624-2.018 0.92305-5.7234 0.0142-7.7245-1.4885-3.2774-4.9303-5.5092-9.0254-5.8525-4.9484-0.41486-9.2023 1.9518-10.994 6.1165-1.1678 2.7146-0.95213 6.0936 0.54254 8.5006 1.1398 1.8356 3.8369 3.9445 5.7558 4.5005 2.1055 0.61011 5.8888 0.44646 8.0078-0.34638z" fill="#ff13ff" stop-color="#000000"/>
                    <path id="logo-o-3" d="m91.762 95.146c-6.0323-1.1024-10.817-3.2737-15.614-7.0858-7.7524-6.1606-11.298-14.301-9.5199-21.856 1.2517-5.318 5.7069-9.3332 12.258-11.047 3.2063-0.83895 10.319-0.55709 14.093 0.55846 8.8948 2.6294 15.926 8.0849 19.653 15.248 2.9832 5.734 3.2765 10.438 0.94567 15.164-3.4721 7.0411-12.412 10.737-21.816 9.0184zm5.6098-15.97c0.63114-0.32638 1.4669-1.1171 1.8572-1.7572 2.5888-4.2457-2.9781-10.434-9.3865-10.434-6.3053 0-7.5095 6.8627-1.9249 10.97 2.8698 2.1105 6.7623 2.6133 9.4542 1.2212z" fill="#f00" stop-color="#000000"/>
                    <path id="logo-o-2" d="m139.15 96.05c-4.2746-0.64713-9.8151-3.5489-13.863-7.2609-6.1268-5.6179-9.8162-13.842-8.6497-19.281 0.77912-3.6329 3.0603-6.3678 6.5263-7.8243 1.6997-0.71428 7.3789-0.67347 9.886 0.07104 6.7619 2.0081 13.498 7.3286 17.357 13.709 4.019 6.6458 4.0282 14.149 0.022 17.949-2.4446 2.3187-6.742 3.3234-11.278 2.6368zm0.60256-13.277c4.5516-2.1599 0.19972-10.214-5.9099-10.937-1.7358-0.20558-1.9462-0.14272-2.9786 0.88964-0.84498 0.84499-1.1108 1.4381-1.1108 2.4781 0 2.9325 2.7456 6.4136 5.9565 7.5524 1.9676 0.69783 2.6026 0.70052 4.0429 0.01709z" fill="#fa8d04" stop-color="#000000"/>
                    <path id="logo-o-1" d="m170.19 135.15c-4.4102-0.97864-8.8468-3.8185-13.239-8.4741-5.237-5.5515-8.1182-11.258-9.0238-17.872-0.63718-4.6538 0.26393-8.7691 2.553-11.659 3.4428-4.3469 10.751-4.6111 17.356-0.6276 6.4765 3.9057 11.858 10.522 14.663 18.026 1.03 2.7562 1.1975 3.7032 1.3289 7.5158 0.13263 3.8467 0.0549 4.6166-0.6578 6.5139-1.9902 5.2984-7.0927 7.8838-12.981 6.5772zm1.1456-16.527c0.62187-0.62195 0.75888-1.1868 0.73404-3.0265-0.065-4.8117-4.0474-9.3183-8.2562-9.3426-2.1608-0.0125-3.1653 1.2216-3.1608 3.8834 8e-3 4.9181 4.475 9.8617 8.5018 9.4095 0.78023-0.0876 1.76-0.50259 2.1812-0.92375z" fill="#fddf00" stop-color="#000000"/>
                    <path id="logo-o-6" d="m123.97 141.86c-16.888-4.4227-27.813-25.144-20.849-39.546 1.3901-2.8749 5.0851-6.4801 8.2103-8.0108 10.748-5.2641 25.847 1.4001 32.927 14.533 5.9371 11.012 5.0149 22.261-2.3788 29.018-4.7234 4.317-11.193 5.7638-17.91 4.0049zm6.8666-19.551c0.49984-0.35766 1.2888-1.3768 1.7531-2.2649 2.6479-5.0635-2.3372-12.686-8.2966-12.686-2.564 0-4.6158 1.117-5.4572 2.9708-2.0702 4.5612 0.99593 11.013 6.0025 12.63 1.5268 0.49325 4.9132 0.12619 5.9982-0.65016z" fill="#999" stop-color="#000000"/>
                    <path id="logo-o-5" d="m102.44 222.87c-2.609-0.32932-4.9322-1.1181-8.6623-2.9412-2.469-1.2067-3.8058-2.2089-6.8237-5.1156-5.324-5.1279-8.0643-9.5322-10.438-16.777-1.5794-4.8194-2.1455-8.8583-2.1654-15.45-0.0204-6.7465 0.52093-10.287 2.3776-15.55 4.5461-12.886 13.506-22.079 24.193-24.823 3.1163-0.80007 8.4675-0.97647 11.559-0.38103 5.2672 1.0146 10.884 4.1397 15.071 8.3843 10.747 10.897 14.716 28.945 9.979 45.371-1.0461 3.6272-3.8025 9.6199-5.8293 12.673-4.2391 6.3864-11.812 12.155-18.345 13.973-2.0988 0.58416-8.4105 0.95177-10.915 0.63569zm10.411-33.87c2.3451-1.0921 5.0049-4.0437 5.9713-6.6265 0.83893-2.2422 1.034-7.644 0.36318-10.059-0.61285-2.2068-3.2828-5.7796-5.2096-6.9712-1.5191-0.93941-2.0581-1.0661-4.5185-1.062-3.2363 5e-3 -4.4731 0.51471-6.6186 2.7255-2.8696 2.9569-4.4169 8.1492-3.6782 12.343 0.44409 2.5211 1.8993 5.9232 3.071 7.1796 2.9905 3.2067 7.0243 4.1454 10.619 2.4712z" fill="#00e6ff" stop-color="#000000"/>
                    <path id="path1" d="m166.38 196.37c-7.7042-1.1285-16.521-8.835-21.525-18.815-3.4217-6.8238-5.1304-14.66-4.8084-22.051 0.22139-5.0829 0.82226-7.5612 2.8645-11.815 4.2876-8.9298 12.903-11.833 22.073-7.4389 8.3075 3.9813 15.471 13.219 18.877 24.343 1.6615 5.4267 1.9722 7.9042 1.7934 14.299-0.14458 5.1696-0.26035 5.9838-1.2551 8.8276-3.2123 9.1832-9.8543 13.846-18.019 12.65zm1.5392-24.873c0.58211-0.30102 1.456-1.2416 1.9421-2.0903 1.775-3.0992 1.5491-6.8774-0.68336-11.429-3.441-7.0162-10.559-7.961-12.395-1.6452-2.3484 8.0781 5.1349 18.268 11.136 15.165z" fill="#05f30a" stop-color="#000000"/>
                </g>
                </g>
        </svg>
        
        <div id="function-icons" style="display: flex;flex-flow:row;margin:auto 10px auto auto;">

            <div id="main-header-buttons">
                  <div class="what-are-ecobricks" data-lang-id="1001-what-are-ecobricks" onclick="sendDownRegistration(); closeSettings(); setTimeout(guidedTour, 500);">What are ecobricks?</div>
                  <div class="header-divider">|</div>
                  <div class="faqs-button" data-lang-id="1002-faqs-button" onclick="location.href='faqs.php';">FAQs</div>

                <div class="header-divider">|</div>

                <button type="button" class="top-search-button"  onclick="openSearch()"  aria-label="Login to app">
                </button>
                
                <button type="button" class="top-emblem-button"  onclick="openSettings()" aria-label="Login to app">
                </button>
            </div>
        
            <div id="settings-buttons">

                <button type="button" type="button" id="top-settings-button"  aria-label="Open site settings"></button>

                <button type="button" type="button" class="top-lang-button" onclick="showLangSelector()" aria-label="Switch languages"></button>

                <button type="button" type="button" class="top-login-button" onclick="showLoginSelector()" aria-label="Login options"></button>

                <dark-mode-toggle
                id="dark-mode-toggle-5" style="min-width:82px;margin-top:-5px;margin-bottom:-15px;"
                class="slider"
                appearance="toggle">
                </dark-mode-toggle> 
            </div>
        </div>
    </div>

<!-- 
<div id="language-menu-slider">
  <div class="lang-selector-box">
    <button type="button" class="lang-selector" href='https://ecobricks.org/en/<?php echo ($name); ;?>'>🇮🇩 IN</button>
    <button type="button" class="lang-selector" href='https://ecobricks.org/id/<?php echo ($name); ;?>'>🇪🇸 ES</button>
    <button type="button" class="lang-selector" href='https://ecobricks.org/es/<?php echo ($name); ;?>'>🇫🇷 FR</button>
    <button type="button" class="lang-selector" href='https://ecobricks.org/fr/<?php echo ($name); ;?>'>🇬🇧 EN</button>
  </div>
</div> -->

<div id="language-menu-slider">
    <div class="lang-selector-box">
      <button type="button" class="lang-selector" onclick="switchLanguage('id')">🇮🇩 IN</button>
      <button type="button" class="lang-selector" onclick="switchLanguage('es')">🇪🇸 ES</button>
      <button type="button" class="lang-selector" onclick="switchLanguage('fr')">🇫🇷 FR</button>
      <button type="button" class="lang-selector" onclick="switchLanguage('en')">🇬🇧 EN</button>
    </div>
  </div>
  

<div id="login-menu-slider">
  <div class="login-selector-box">
    <a class="login-selector" target="_blank" href='https://gobrik.com/en/go.php#home'>
      <i style="background: url(../icons/gobrik-icon-white.svg) no-repeat; width:15px; height:15px;display: inline-block;background-size:contain;margin-right:4px;"></i>GoBrik</a>
    <a class="login-selector" target="_blank" href='https://ecobricks.org/email'>✉️ Trainer Email</a>
    <a class="login-selector" target="_blank" href='https://nextcloud.ecobricks.org'><i style="background: url(../icons/next-cloud-white.svg) no-repeat; width:22px; height:11px;display: inline-block;background-size:contain;margin-right:4px;"></i>Trainer NextCloud</a>
    <button type="button" class="login-selector" onclick="clearSiteCache()" data-lang-id="1003-reset-preferences">❌ Reset Preferences</button>
  </div>
</div>


<div id="main">
<!-- FEATURED HEADLINE CONTENT -->
<div class="featured-content-1"  >
  <div class="featured-content-shaded-box">
    <div class="featured-content-text">
      <div class="featured-content-title" data-lang-id="300-featured-content-1-title">2024 Ecobricking Guidelines</div>
      <div class="featured-content-subtitle" data-lang-id="301-featured-content-1-subtitle" >Fully updated 10-Step guide for the new year</div>

      <button class="btn featured-content-button" href="/how.php" data-lang-id="1000-learn-more" >Learn More</button>
    </div>
  </div>
</div>



    <div class="featured-content-2"  >
    
        <div class="feature-content-box">

            <div class="featured-content-img dolphin-pic"></div>
            
            <div class="feature-big-header" data-lang-id="302-featured-2-heading">Keep Your Plastic Safe</div>
            <div class="feature-sub-text" data-lang-id="303-featured-2-subheading">
            When plastic gets loose into the biosphere it contaminates and poisons.  When plastic is processed by industry it generates emissions and encourages more plastic to be consumed and produced.  Ecobricking is a simple, non-capital method of keeping your plastic safe and secure so that it can be put to good, green use.</div>
            <button type="button" href="sequest.php" class="feature-button" data-lang-id="304-featured-2-button">Intro to Ecobricking</button>
            <div class="feature-reference-links">
                    <h6 data-lang-id="305-featured-2-rreferences"><a href="/what">Basics</a> | <a href="/why/">Why?</a> | <a href="/transition">Plastic Transition</a> | <a href="/how">How to Make</a> <!--| <a href="/reports">Reports & Whitepapers</a>--></h6>
            </div>
        </div>
    </div>
    


    <div class="featured-content-3"  >
        <div class="feature-content-box">
            <div class="featured-content-img ecovillage-pic"></div>
            <div class="feature-big-header" data-lang-id="306-featured-3-heading">Awesome Applications</div>
            <div class="feature-sub-text" data-lang-id="307-featured-3-subheading">
            Ecobricks turn problematic plastic into reusable blocks that can be put to use in greener and greener building applications.  From furniture, to gardens to structures our recommended applications embody the principle of spiral design.  Plastic doesn't have to be a problem-- its the start of the solution.</div>
            <button type="button" href="sequest.php" class="feature-button" data-lang-id="308-featured-3-button">Ecobrick Building</button>
            <div class="feature-reference-links"><h6 data-lang-id="309-featured-3-references"><a href="earth.php">Earth Building</a> | <a href="/earth-methods">Earth Methods</a> | <a href="/modules">Furniture Modules</a> | <a href="/spiral">Spiral Design</a> | <a href="/openspaces">Open Spaces</a> | <a href="/fire">Fire Safety</a></h6></div>
        </div>
    </div>





 <!-- closes main -->

  

 

       

 <!--FOURTH CONTENT SECTION-->


    <div class="featured-content-4"  >
        <div class="feature-content-box">
            <div class="featured-content-img earthservice-pic"></div>
            <div class="feature-big-header" data-lang-id="310-featured-4-heading">Following Earth's Example</div>
            <div class="feature-sub-text" data-lang-id="311-featured-4-subheading">
            Regenerative ecobricking arose ten years ago out of the land of the Igorot people in the Northern Philippines.  Inspired by their Ayyew ecological ethos, ecobricking is fundamentally distinct from western concepts of sustainability and zero-waste.  Instead, all our methods and applications are designed from the ground up to follow Earth's example.</div>
            <button type="button" href="principles.php" class="feature-button" data-lang-id="312-featured-4-button">Our Earthen Principles</button>
            <div class="feature-reference-links"><h6 data-lang-id="313-featured-4-references"><a href="spiral.php">Spiral Design</a> | <a href="/ayyew/">Ayyew </a> | <a href="/about">About Us</a> | <a href="/story/">History</a>
        </div>
    </div>
</div>
</div>
    



    
  
<!--FOOTER STARTS-->

    
    <div id="footer-full">
            <!--<div class="vision-clouds"><img src="../svgs/footer-clouds-desktop.webp" width="100%"></div>-->
            <div class="vision-landscape"><img src="../webp/vision-day-2024.webp" style="width:100%" loading="lazy" alt="Our vision of a great green transition!"></div>
            
                
            <div class="footer-vision">
                
            We envision a Transition in our Households, Communities and Enterprises from Plastic to an ever Greener Harmony with Earth's Cycles.
            <br><br>
    
        </div>
        
            <div class="footer-icons-container">
                <div class="footer-icons"><!--WIKIPEDIA-->
                    <a href="https://en.wikipedia.org/wiki/Ecobricks" target="_blank">
                    <img src="../icons/wikipedia.svg" style="width:100%" alt="Check out the official Ecobricks wikipedia page"></a>
                    <div class="icon-name">/ecobricks</div>
                    <div class="server-review">Not for profit<br>No impact disclosure<br>open source</div>
                </div>
        
        
                <div class="footer-icons"><!--ECOBRICKS.oRG-->
                    <a href="https://gobrik.com" target="_blank">
                    <img src="../icons/gobrik-icon-white.svg" style="width:100%" alt="Sign up for our GoBrik app"></a>
                    <div class="icon-name">/gobrik</div>
                    <div class="server-review">Not for profit<br>No impact disclosure<br>open source</div>
                </div>
        
                <div class="footer-icons">
                    <a href="https://medium.com/earthen/" target="_blank"><!--MEDIUM-->
                    <img src="../icons/medium.svg" style="width:100%" alt="Follow our Medium Earthen publication"></a>
                    <div class="icon-name">/ecobricks</div>
                    <div class="server-review">Not for profit<br>No impact disclosure<br>open source</div>
                </div>
        
                <div class="footer-icons"> <!--GITHUB-->
                    <a href="https://github.com/gea-ecobricks/ecobricks-org" target="_blank">
                    <img src="../icons/github.svg" style="width:100%" alt="Contribute to our Ecobricks.org Github repository"></a>
                    <div class="icon-name">/ecobricks</div>
                    <div class="server-review">Not for profit<br>No impact disclosure<br>open source</div>
                </div>
                
                <div class="footer-icons"><!--FACEBOOK-->
                    <a href="https://facebook.com/ecobricks.org" target="_blank">
                    <img src="../icons/facebook.svg" style="width:100%" alt="Follow our Facebook page"></a>
                    <div class="icon-name">/ecobricks</div>
                    <div class="server-review">Not for profit<br>No impact disclosure<br>open source</div>
                </div>
        
                <div class="footer-icons"><!--YOUTUBE-->
                    <a href="https://www.youtube.com/c/Ecobricks" target="_blank">
                    <img src="../icons/youtube.svg" style="width:100%" alt="Subscribe to our Ecobricks YouTube channel"></a>
                    <div class="icon-name">/ecobricks</div>
                    <div class="server-review">Not for profit<br>No impact disclosure<br>open source</div>
                </div>
        
                <div class="footer-icons"><!--INSTAGRAM-->
                    <a href="https://www.instagram.com/ecobricks.plastic.transition/" target="_blank">
                    <img src="../icons/instagram.svg" style="width:100%" alt="Instagram: Ecobricks.Plastic.Transition"></a>
                    <div class="icon-name">/ecobricks</div>
                    <div class="server-review">Not for profit<br>No impact disclosure<br>open source</div>
                </div>
    
                    
            </div>
    
            <div class="footer-content">
    
                <div class="footer-box">
                    <div class="footer-header">Ecobricks on Wikipedia</div>
                    <div class="footer-subtext">Also known as Eco Bricks, Eco-Bricks, Ecolladrillos, and bottle bricks the Global Ecobrick Alliance and Wikipedia endorse the spelling <a href="https://en.wikipedia.org/wiki/Ecobricks" target="_blank">'ecobrick'</a> to refer to the <a href="https://en.wikipedia.org/wiki/Plastic_Sequestration" target="_blank">sequestration of plastic</a> in a PET bottle to make a reusable building block.<br><br>
                    </div>
                    
                </div>
                <div class="footer-box">
                    <div class="footer-header">A GEA Project</div>
                    <div class="footer-subtext">GoBrik is maintained and developed by the Global Ecobrick Alliance, a not-for-profit Earth Enterprise with the mission of supporting the local and global plastic transition and transformation movement. <a href="https://ecobricks.org">Check out ecobricks.org</a> our main site.<br><br></div>
                    
                </div>
                <div class="footer-box">
                    <div class="footer-header">Earth Service</div>
                    <div class="footer-subtext"><a href="https://ecobricks.org/gobrik" target="_blank">GoBrik is operated as a for-Earth, not-for-profit, enterprise based on <a href="https://ecobricks.org/principles" target="_blank">regenerative principles</a>.  On <a href="https://ecobricks.org/principles" target="_blank">principle</a> we have no company or government endorsement and receive no grants or sponsorships. Our revenue is genearated by providing <a href="#offset">ecologial services.</a><br><br>We track and disclose our net-green ecological impact.  See our <a href="https://ecobricks.org/en/regenreports.php" target="_blank">Regen Reporting</a> and our <a href="https://www.gobrik.com/#my-catalyst/enterprise-disclosure/5e1f513586a7fe0015e77628/">dynamic impact accounting for 2024.</a></div>
                </div>
    
                <div class="footer-box">
                <div class="footer-header">Tech Partners</div>
                    <div class="footer-subtext">Plastic transition is a global collaboration!  We are grateful to our partners who have given us full access to their awesome technologies.  Thank you to <a href="https://www.dewaweb.com/" target="_blank" rel="noopener">DewaWeb Hosting</a> whose servers host our sites and to <a href="https://svgator.com" target="_blank" rel="noopener">SVGator</a> whose animation platform gives life to our graphics.</div>
            </div>
            </div>
    
            <div class="footer-bottom">
                <div class="footer-conclusion">	
                    <div class="row">
    
                        <div class="virtue">
                            <a href="https://ecobricks.org/about" target="_blank"><img src="../webp/banners/forearth-dark-350px.webp" style="width:300px" alt="Learn more about our Earth Enterprise structure" loading="lazy" title="Learn more about our Earth Enterprise structure"></a>
                        </div>
                
                        <div class="virtue">
                            <a href="https://ecobricks.org/regenreports" target="_blank"><img src="../webp/banners/762-disclose-dark-350px.webp" style="width:300px" alt="Click through to see a full and live breakdown of our 2022 ecological impacts on the GoBrik.com" loading="lazy" title="Click through to see a full and live breakdown of our 2022 ecological impacts on the GoBrik.com"></a>
                        </div>
                        
                
                        <div class="virtue">
                            <a href="https://ecobricks.org/open-books" target="_blank"><img src="../webp/banners/openbooks-dark-350px.webp" style="width:300px"  alt="Click through to see our live financial tracking" loading="lazy" title="Click through to see our live financial tracking"></a>	
                        </div>
                            
                    </div>
<!--                                 
                    <script src="https://unpkg.com/website-carbon-badges@1.1.3/b.min.js" defer></script>
                    
                    <div id="wcb" class="carbonbadge wcb-d"></div>
                                     -->
                                    <br><br>
                            
                    
                    <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons BY SA 4.0 License" src="../icons/cc-by-sa.svg" style="width:200px;height:45px;border-width:0"></a>
                    <a href="#global"><br><br>Gobrik global ecobricking data</a> is made available by the Ecobrick Alliance under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.<br>Please attribute all usage to "GoBrik.com/#global - Global Ecobrick Alliance" using the same license.
    
                    <div class="footer-conclusion">	
                        GoBrik, AES & Ecobricks.org logos and emblems are copyright 2024 by the Global Ecobrick Alliance.
                    </div>
                
                <div class="footer-invite">
                    GoBrik is open source and 100% volunteer built!<br>Contribute on to this page <a href="https://github.com/gea-ecobricks/gobrik/blob/master/<?php echo ($name); ;?>" target="_blank"><?php echo ($name); ;?> (embed: <?php echo ($dist); ;?>) on Github</a>.<br><br>
                </div>
            
            </div>
                    
    
        </div>
    
    

    
      
<script>


// function clearSiteCache() {
//     // Translations for the confirm message
//     const confirmMessages = {
//         en: 'Do you wish to delete your language and site settings for ecobricks.org?',
//         fr: 'Souhaitez-vous supprimer vos paramètres de langue et de site pour ecobricks.org?',
//         es: '¿Desea eliminar la configuración de idioma y sitio para ecobricks.org?',
//         id: 'Apakah Anda ingin menghapus pengaturan bahasa dan situs untuk ecobricks.org?'
//     };

//     // Translations for the alert message
//     const alertMessages = {
//         en: 'All site cache items are now cleared.',
//         fr: 'Tous les éléments du cache du site sont maintenant effacés.',
//         es: 'Todos los elementos en caché del sitio ahora están borrados.',
//         id: 'Semua item cache situs sekarang dibersihkan.'
//     };

//     // Check the currentLanguage global variable, default to 'en' if undefined
//     const language = window.currentLanguage || 'en';

//     // Use confirm message based on currentLanguage or default to English
//     const confirmMessage = confirmMessages[language] || confirmMessages.en;

//     // Show confirm dialog
//     if (confirm(confirmMessage)) {
//         // Clear local storage if user confirms
//         localStorage.clear();

//         // Use alert message based on currentLanguage or default to English
//         const alertMessage = alertMessages[language] || alertMessages.en;

//         // Show alert dialog
//         alert(alertMessage);
//     }
// }






// // Event listeners for the language selector buttons
// document.querySelectorAll('.lang-selector').forEach(button => {
//     button.addEventListener('click', function() {
//         const langCode = this.textContent.trim().split(' ')[1]; // Extract language code from button text
//         changeLanguage(langCode.toLowerCase());
//     });
// });



        let lastScrollTop = 0;

        window.onscroll = function() {
            scrollLessThan40();
            scrollMoreThan40();
            // showHideHeader();
            pageMeasureBar();
        };

        function scrollLessThan40() {
    if (window.pageYOffset <= 40) {
        document.getElementById("header").style.height = "110px";
        document.getElementById("header").style.borderBottom = "none";
        document.getElementById("header").style.boxShadow = "none";
        document.getElementById("main").style.marginTop = "40px";
        document.getElementById("gea-logo").style.width = "250px";
        document.getElementById("gea-logo").style.height = "56px";
        document.getElementById("logo-global-ecobrick-alliance").style.opacity = "1";
        document.getElementById("header").style.top = "0"; // Set top to 0
        document.getElementById("settings-buttons").style.marginTop = "8px";
        document.getElementById("settings-buttons").style.marginRight = "0px"; 
        document.getElementById("settings-buttons").style.padding = "16px 50px 16px 20px";
        document.getElementById("main-header-buttons").style.marginTop = "0px";  
        document.getElementById("language-menu-slider").style.top = "0px";  
        document.getElementById("login-menu-slider").style.top = "0px";  
        document.getElementById("registration-footer").style.opacity = "0";  



    }
}

function scrollMoreThan40() {
    if (window.pageYOffset >= 40) {
        document.getElementById("header").style.height = "70px";
        document.getElementById("header").style.borderBottom = "var(--header-accent) 0.5px solid";
        document.getElementById("header").style.boxShadow = "0px 0px 15px rgba(0, 0, 10, 0.805)";
        document.getElementById("main").style.marginTop = "0px";
        document.getElementById("gea-logo").style.width = "190px";
        document.getElementById("gea-logo").style.height = "40px";
        document.getElementById("logo-global-ecobrick-alliance").style.opacity = "0";
        document.getElementById("settings-buttons").style.marginTop = "6px"; 
        document.getElementById("settings-buttons").style.padding = "12px 54px 12px 16px"; 
        document.getElementById("main-header-buttons").style.marginTop = "-5px";  
        document.getElementById("language-menu-slider").style.top = "-30px";  
        document.getElementById("login-menu-slider").style.top = "-30px";  
        document.getElementById("registration-footer").style.opacity = "1";  



    }
}


 

function pageMeasureBar() {
        let scrollPercentage = (window.pageYOffset / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
        document.getElementById("progress-bar").style.width = scrollPercentage + "%";
    }


    
/* RIGHT SETTINGS OVERLAY */

function openSettings() {
  document.getElementById("right-settings-overlay").style.width = "100%";
  document.body.style.overflowY = "hidden";
  document.body.style.maxHeight = "101vh";

  var modal = document.getElementById('right-settings-overlay');

function modalShow () {
   modal.setAttribute('tabindex', '0');
   modal.focus();
}

function focusRestrict ( event ) {
  document.addEventListener('focus', function( event ) {
    if ( modalOpen && !modal.contains( event.target ) ) {
      event.stopPropagation();
      modal.focus();
    }
  }, true);
}
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeSettings() {
  document.getElementById("right-settings-overlay").style.width = "0%";
  document.body.style.overflowY = "unset";
document.body.style.maxHeight = "unset";
  //document.body.style.height = "unset";
} 

function modalCloseCurtains ( e ) {
  if ( !e.keyCode || e.keyCode === 27 ) {
    
  document.body.style.overflowY = "unset";
  document.getElementById("right-settings-overlay").style.width = "0%";
  /*document.getElementById("knack-overlay-curtain").style.height = "0%";*/

  }
}

document.addEventListener('keydown', modalCloseCurtains);









/*Updates certain colors to the Dark or Light theme*/
function updateLogoColor() {
  const svg = document.querySelector("html");
  const elementsWithColor = svg.querySelectorAll("[fill='#646464']");

  for (let element of elementsWithColor) {
    if (element.getAttribute("fill") === "#646464") {
      element.setAttribute("fill", "var(--logo-color)");
    }
  }
}

document.getElementById('top-settings-button').addEventListener('touchstart', function(event) {
  if (window.matchMedia("(max-width: 700px)").matches) {
    var settingsButtons = document.getElementById('settings-buttons');
    settingsButtons.classList.toggle('settings-buttons-expanded');
    event.stopPropagation(); // Prevents the event from bubbling up to the document
  }
});

document.addEventListener('touchstart', function(event) {
  var settingsButtons = document.getElementById('settings-buttons');
  if (!settingsButtons.contains(event.target)) {
    settingsButtons.classList.remove('settings-buttons-expanded');
  }
});






/* ---------- ------------------------------

LANGUAGE SELECTOR  

-------------------------------------------*/
function showLangSelector() {
    hideLoginSelector();

    var slider = document.getElementById('language-menu-slider');
    var currentMarginTop = window.getComputedStyle(slider).marginTop;
    slider.style.marginTop = currentMarginTop === '70px' ? '0px' : '70px';

    // Prevent event from bubbling to document
    event.stopPropagation();

    // Add named event listener for click on the document
    document.addEventListener('click', documentClickListener);
}

function hideLangSelector() {
    var slider = document.getElementById('language-menu-slider');
    slider.style.marginTop = '0px'; // Reset margin-top to 0px

    // Remove the named event listener from the document
    document.removeEventListener('click', documentClickListener);
}

// Named function to be used as an event listener
function documentClickListener() {
    hideLangSelector();
}

// Add event listeners to each button inside the language-menu-slider
var langButtons = document.querySelectorAll('#language-menu-slider button');
langButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        // Hide the slider after 1 second when a language button is clicked
        setTimeout(hideLangSelector, 3000);
    });
});

// Prevent hiding when clicking inside the slider
document.getElementById('language-menu-slider').addEventListener('click', function(event) {
    event.stopPropagation();
});




/* ---------- ------------------------------

SERVICE SELECTOR  

-------------------------------------------*/

function showLoginSelector() {
  hideLangSelector();

    var slider = document.getElementById('login-menu-slider');
    var currentMarginTop = window.getComputedStyle(slider).marginTop;
    slider.style.marginTop = currentMarginTop === '70px' ? '0px' : '70px';

    // Prevent event from bubbling to document
    event.stopPropagation();

    // Add named event listener for click on the document
    document.addEventListener('click', documentClickListenerLogin);
}

function hideLoginSelector() {
    var slider = document.getElementById('login-menu-slider');
    slider.style.marginTop = '0px'; // Reset margin-top to 0px

    // Remove the named event listener from the document
    document.removeEventListener('click', documentClickListener);
}

// Named function to be used as an event listener
function documentClickListenerLogin() {
    hideLoginSelector();
}

// Prevent hiding when clicking inside the slider
document.getElementById('login-menu-slider').addEventListener('click', function(event) {
    event.stopPropagation();
});






function switchLanguage(langCode) {
    currentLanguage = langCode; // Update the global language variable
   

    // Dynamic selection of the correct translations object
    const languageMappings = {
        'en': en_Translations,
        'fr': fr_Translations,
        'es': es_Translations,
        'id': id_Translations
    };

    const currentTranslations = languageMappings[currentLanguage];


    const elements = document.querySelectorAll('[data-lang-id]');
    elements.forEach(element => {
        const langId = element.getAttribute('data-lang-id');
        const translation = currentTranslations[langId]; // Access the correct translations
        if (translation) {
            if (element.tagName.toLowerCase() === 'input' && element.type !== 'submit') {
                element.placeholder = translation;
            } else if (element.hasAttribute('aria-label')) {
                element.setAttribute('aria-label', translation);
            } else if (element.tagName.toLowerCase() === 'img') {
                element.alt = translation;
            } else {
                element.innerHTML = translation; // Directly set innerHTML for other elements
            }
        }
    });
}


    </script>

<!-- Enables the nav menu grey circle on mobile by click-->

<script src="translations/en-welcome-translations.js"></script>
<script src="translations/es-welcome-translations.js"></script>
<script src="translations/fr-welcome-translations.js"></script>
<script src="translations/id-welcome-translations.js"></script>


<script src="../guided-tour.js"></script>

<script src="../site-search.js?v=5"></script>




</html>

