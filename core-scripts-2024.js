
function redirectToWelcome() {
    window.location.href = "welcome.php";
}

function redirectToFAQs() {
    window.location.href = "faqs.php";
}

document.addEventListener("scroll", function() {
    var scrollPosition = window.scrollY || document.documentElement.scrollTop;
  
    // Check if the user has scrolled more than 1000px
    if (scrollPosition > 1000) {
      var footer = document.getElementById('footer-full');
      if (footer) {
        footer.style.display = 'block'; // Show the footer
      }
    }
  });



        let lastScrollTop = 0;

        window.onscroll = function() {
            scrollLessThan40();
            scrollMoreThan40();
            // showHideHeader();
            pageMeasureBar();
        };

        function scrollLessThan40() {
    if (window.pageYOffset <= 40) {
        document.getElementById("header").style.height = "85px";
        document.getElementById("header").style.borderBottom = "none";
        document.getElementById("header").style.boxShadow = "none";
        // document.getElementById("main").style.marginTop = "40px";
        document.getElementById("gea-logo").style.width = "190px";
        document.getElementById("gea-logo").style.height = "40px";
        // document.getElementById("gea-logo").style.height = "56px";
        document.getElementById("logo-global-ecobrick-alliance").style.opacity = "1";
        document.getElementById("header").style.top = "0"; // Set top to 0
        document.getElementById("settings-buttons").style.marginTop = "8px";
        // document.getElementById("settings-buttons").style.marginRight = "0px"; 
        document.getElementById("settings-buttons").style.padding = "16px 43px 16px 12px";
        document.getElementById("main-header-buttons").style.marginTop = "0px";  
        document.getElementById("language-menu-slider").style.top = "-15px";  
        document.getElementById("login-menu-slider").style.top = "-15px";  
        document.getElementById("registration-footer").style.opacity = "0";  



    }
}

function scrollMoreThan40() {
    if (window.pageYOffset >= 40) {
        document.getElementById("header").style.height = "70px";
        document.getElementById("header").style.borderBottom = "var(--header-accent) 0.5px solid";
        document.getElementById("header").style.boxShadow = "0px 0px 15px rgba(0, 0, 10, 0.805)";
        // document.getElementById("main").style.marginTop = "0px";
        document.getElementById("gea-logo").style.width = "170px";
        document.getElementById("gea-logo").style.height = "35px";
        document.getElementById("logo-global-ecobrick-alliance").style.opacity = "0";
        document.getElementById("settings-buttons").style.marginTop = "3px"; 
        document.getElementById("settings-buttons").style.padding = "16px 43px 16px 12px"; 
        document.getElementById("main-header-buttons").style.marginTop = "-5px";  
        document.getElementById("language-menu-slider").style.top = "-35px";  
        document.getElementById("login-menu-slider").style.top = "-35px";  
        document.getElementById("registration-footer").style.opacity = "1";  



    }
}


 

function pageMeasureBar() {
        let scrollPercentage = (window.pageYOffset / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
        document.getElementById("progress-bar").style.width = scrollPercentage + "%";
    }


    
/* RIGHT SETTINGS OVERLAY */

function openSettings() {
  document.getElementById("right-settings-overlay").style.width = "90%";
  document.getElementById("right-settings-overlay").style.display = "block";
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




/*FORM MODALS*/




// Function to show the modal
function showFormModal(message) {
    var modal = document.getElementById('form-modal-message');
    var modalMessage = modal.querySelector('.modal-message');
    modalMessage.innerHTML = message;
    modal.style.display = 'flex';
    
    // Add blur effect and hide overflow on page-content
    document.getElementById('page-content').classList.add('blurred');
    document.body.classList.add('modal-open');

    // Close modal when clicking outside
    window.onclick = function(event) {
        if (event.target == modal) {
            closeInfoModal();
        }
    }
}

// Function to close the modal
function closeInfoModal() {
    var modal = document.getElementById("form-modal-message");
    modal.style.display = "none";

    // Remove blur effect and restore overflow on page-content
    document.getElementById('page-content').classList.remove('blurred');
    document.body.classList.remove('modal-open');
}









/*Updates certain colors to the Dark or Light theme*/
// function updateLogoColor() {
//   const svg = document.querySelector("html");
//   const elementsWithColor = svg.querySelectorAll("[fill='#646464']");

//   for (let element of elementsWithColor) {
//     if (element.getAttribute("fill") === "#646464") {
//       element.setAttribute("fill", "var(--logo-color)");
//     }
//   }
// }


/* ---------- ------------------------------

LANGUAGE SELECTOR  

-------------------------------------------*/



function showLangSelector() {
    hideLoginSelector();

    var slider = document.getElementById('language-menu-slider');
    var currentMarginTop = window.getComputedStyle(slider).marginTop;
    slider.style.display = 'flex';
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



/* ---------- ------------------------------

SERVICE SELECTOR  

-------------------------------------------*/

function showLoginSelector() {
  hideLangSelector();

    var slider = document.getElementById('login-menu-slider');
    var currentMarginTop = window.getComputedStyle(slider).marginTop;
    slider.style.display = 'flex';
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




/*


function switchLanguage(langCode) {
    currentLanguage = langCode; // Update the global language variable
   
    // Save to localStorage
    localStorage.setItem('currentLanguage', langCode);

    // Dynamic selection of the correct translations object
    const languageMappings = {
        'en': {...en_Translations, ...en_Page_Translations},
        'fr': {...fr_Translations, ...fr_Page_Translations},
        'es': {...es_Translations, ...es_Page_Translations},
        'id': {...id_Translations, ...id_Page_Translations}
    };

    const currentTranslations = languageMappings[currentLanguage];

    const elements = document.querySelectorAll('[data-lang-id]');
    elements.forEach(element => {
        const langId = element.getAttribute('data-lang-id');
        const translation = currentTranslations[langId]; // Access the correct translations
        if (translation) {
            if (element.tagName.toLowerCase() === 'input' && element.type === 'text') {
                element.placeholder = translation;
            } else if (element.tagName.toLowerCase() === 'input' && element.type === 'submit') {
                element.value = translation; // Assuming you want to also translate the value of submit buttons
            } else if (element.hasAttribute('aria-label')) {
                element.setAttribute('aria-label', translation);
            } else if (element.tagName.toLowerCase() === 'img') {
                element.alt = translation;
            } else {
                element.innerHTML = translation; // Directly set innerHTML for other elements
            }
        }
    });
}*/