

 /* -------------------------------------------------------------------------- */
 
 /*	SITE SEARCH

 /* -------------------------------------------------------------------------- */
 

 /* RIGHT SEARCH CURTAIN OVERLAY 
 
 Triggers the right search panel*/
 
 function openSearch() {
   document.body.style.overflow = 'hidden';
   document.body.style.maxHeight = '100vh';
   document.getElementById("right-search-overlay").style.width = "100%";
   document.body.style.overflowY = "clip";

   var modal = document.getElementById('right-search-overlay');

   function modalShow() {
       modal.setAttribute('tabindex', '0');
       modal.focus();
   }

   function focusRestrict(event) {
       document.addEventListener('focus', function(event) {
           if (modalOpen && !modal.contains(event.target)) {
               event.stopPropagation();
               modal.focus();
           }
       }, true);
   }

   // Define placeholders for different languages
   var placeholders = {
       'en': 'Enter search term...',
       'es': 'Introduzca el término de búsqueda...',
       'fr': 'Entrez le terme de recherche...',
       'id': 'Masukkan istilah pencarian...'
   };

   // Update checkbox states based on currentLanguage
   var currentLanguage = window.currentLanguage || 'en';  // Default to English if undefined
   var checkboxes = document.querySelectorAll('.search-row input[type="checkbox"]');
   checkboxes.forEach(function(checkbox) {
       checkbox.checked = false; // Reset all checkboxes
   });

   ['en', 'es', 'fr', 'id'].forEach(function(lang) {
       var isChecked = (currentLanguage === lang);
       document.querySelectorAll(`input[name='searchIndex'][value='${lang}_site']`).forEach(function(checkbox) {
           checkbox.checked = isChecked;
       });
       document.querySelectorAll(`input[name='searchIndex'][value='${lang}_glossary']`).forEach(function(checkbox) {
           checkbox.checked = isChecked;
       });
   });

   // Update placeholder text based on currentLanguage
   var searchInput = document.getElementById('search_input');
   searchInput.placeholder = placeholders[currentLanguage];

   modalShow(); // Ensure the modal is shown correctly
}


 
 /* Close when someone clicks on the "x" symbol inside the overlay */
 function closeSearch() {
   document.getElementById("right-search-overlay").style.width = "0%";

        // Allow scrolling on the body again
        document.body.style.overflow = '';
        document.body.style.maxHeight = '';
 } 



 /* MAIN SITE SEARCH FUNCTION */



 function siteSearch() {
    var query = document.getElementById("search_input").value.toLowerCase();
    var checkboxes = document.querySelectorAll('input[name="searchIndex"]:checked');
    var jsonFiles = [];
 
    checkboxes.forEach(function(checkbox) {
       switch (checkbox.value) {

          case 'en_glossary':
             jsonFiles.push('../en/indexes/glossary-ecobricks.json');
             break;
         case 'en_site':
         jsonFiles.push('../en/indexes/pages.json?v=2');
         break;
          case 'fr_site':
             jsonFiles.push('../fr/indexes/pages.json');
             break;
          case 'fr_glossary':
             jsonFiles.push('../fr/indexes/glossary-ecobricks.json');
             break;
          case 'es_site':
             jsonFiles.push('../es/indexes/pages.json');
             break;
          case 'es_glossary':
             jsonFiles.push('../es/indexes/glossary-ecobricks.json');
             break;
          case 'id_site':
             jsonFiles.push('../id/indexes/pages.json');
             break;
          case 'id_glossary':
             jsonFiles.push('../id/indexes/glossary-ecobricks.json');
             break;
       }
    });
 
    var overlayContent = document.querySelector('.search-overlay-content');
    overlayContent.style.height = 'fit-content';
    overlayContent.style.marginTop = '8%';
 
    var posts = [];
    var numFilesLoaded = 0;
    for (var i = 0; i < jsonFiles.length; i++) {
       var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
             var data = JSON.parse(this.responseText);
             posts = posts.concat(data);
             numFilesLoaded++;
 
             if (numFilesLoaded == jsonFiles.length) {
                presentSearchResults(posts, query);
             }
          }
       };
       xmlhttp.open("GET", jsonFiles[i], true);
       xmlhttp.send();
    }
 }
 
 function presentSearchResults(posts, query) {
    // Implementation of presentSearchResults remains the same as previously provided
 }

 
 
function presentSearchResults(posts, query) {
   const noResultsTranslations = {
      'en': '😕 Sorry, no results were found for ',
      'es': '😕 Lo siento, no se encontraron resultados para ',
      'fr': '😕 Désolé, aucun résultat trouvé pour ',
      'id': '😕 Maaf, tidak ada hasil yang ditemukan untuk '
   };
   var isDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
   var outputPosts = [];
   for (var j = 0; j < posts.length; j++) {
       var post = posts[j];
       if ((post.keywords && post.keywords.toLowerCase().includes(query)) || (post.description && post.description.toLowerCase().includes(query))) {
           outputPosts.push(post);
       }
   }

   var resultsContainer = document.getElementById("search_results");
   resultsContainer.innerHTML = "";

   if (outputPosts.length == 0) {
       // Use the global currentLanguage to select the appropriate translation
       var noResultsMessage = noResultsTranslations[currentLanguage] + "\"" + query + "\".</p>";
       resultsContainer.innerHTML = "<p>" + noResultsMessage + "</p>";
   } else {
       for (var k = 0; k < outputPosts.length; k++) {
           var currentPost = outputPosts[k];
           var imageUrl = isDarkMode && currentPost.image_url_night ? currentPost.image_url_night : currentPost.image_url;
           resultsContainer.innerHTML += "<div class=\"tc-item\"><div id='result_" + k + "' style=\"display:flex; text-align:left; padding: 15px;\"><div class=\"search_chapter_pic\" ><img src=\"" + imageUrl + "\"></div><div class=\"chapter-name-search\"><a href='" + currentPost.url + "'><div class=\"chapter-title-search\">" + currentPost.title + "</div><div class=\"description_search\">" + currentPost.description + "</div><div class=\"chapter-info-search\">" + currentPost.section + "  |  " + currentPost.language + "<br> ↳ ../" + currentPost.lang_key + "/" + currentPost.url + "</div></a></div>";
       }
   }
   console.log('Is Dark Mode:', isDarkMode);
console.log('Night Image URL:', currentPost.image_url_night);
console.log('Day Image URL:', currentPost.image_url);
}
 
 

 function handleKeyPress(event) {
    if (event.keyCode === 13) { // 13 is the key code for the enter key
       event.preventDefault(); // Prevent the default action to stop form submission
       siteSearch(); // Call your search function without arguments
    }
 }
 



function clearResults() {
  var searchInput = document.getElementById('search_input');
  var resultsContainer = document.getElementById('search_results');
  var overlayContent = document.querySelector('.search-overlay-content');
  searchInput.value = '';
  resultsContainer.innerHTML = '';
  overlayContent.style.height = '';
  overlayContent.style.marginTop = '';

}