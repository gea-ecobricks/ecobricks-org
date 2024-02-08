


function clearSiteCache() {
    // Translations for the confirm message
    const confirmMessages = {
        en: 'Do you wish to delete your language and site settings for ecobricks.org?',
        fr: 'Souhaitez-vous supprimer vos paramètres de langue et de site pour ecobricks.org?',
        es: '¿Desea eliminar la configuración de idioma y sitio para ecobricks.org?',
        id: 'Apakah Anda ingin menghapus pengaturan bahasa dan situs untuk ecobricks.org?'
    };

    // Translations for the alert message
    const alertMessages = {
        en: 'All site cache items are now cleared.',
        fr: 'Tous les éléments du cache du site sont maintenant effacés.',
        es: 'Todos los elementos en caché del sitio ahora están borrados.',
        id: 'Semua item cache situs sekarang dibersihkan.'
    };

    // Check the currentLanguage global variable, default to 'en' if undefined
    const language = window.currentLanguage || 'en';

    // Use confirm message based on currentLanguage or default to English
    const confirmMessage = confirmMessages[language] || confirmMessages.en;

    // Show confirm dialog
    if (confirm(confirmMessage)) {
        // Clear local storage if user confirms
        localStorage.clear();

        // Use alert message based on currentLanguage or default to English
        const alertMessage = alertMessages[language] || alertMessages.en;

        // Show alert dialog
        alert(alertMessage);
    }
}






// Event listeners for the language selector buttons
document.querySelectorAll('.lang-selector').forEach(button => {
    button.addEventListener('click', function() {
        const langCode = this.textContent.trim().split(' ')[1]; // Extract language code from button text
        changeLanguage(langCode.toLowerCase());
    });
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
        document.getElementById("header").style.height = "90px";
        document.getElementById("header").style.borderBottom = "none";
        document.getElementById("header").style.boxShadow = "none";
        document.getElementById("main").style.marginTop = "40px";
        document.getElementById("gea-logo").style.width = "230px";
        // document.getElementById("gea-logo").style.height = "56px";
        document.getElementById("logo-global-ecobrick-alliance").style.opacity = "1";
        document.getElementById("header").style.top = "0"; // Set top to 0
        document.getElementById("settings-buttons").style.marginTop = "8px";
        document.getElementById("settings-buttons").style.marginRight = "0px"; 
        document.getElementById("settings-buttons").style.padding = "16px 50px 16px 20px";
        document.getElementById("main-header-buttons").style.marginTop = "0px";  
        document.getElementById("language-menu-slider").style.top = "-10px";  
        document.getElementById("login-menu-slider").style.top = "-10px";  
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
  document.getElementById("right-settings-overlay").style.width = "80%";
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
