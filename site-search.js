

 /* -------------------------------------------------------------------------- */
 
 /*	4. SEARCH
 /* -------------------------------------------------------------------------- */
 
 /* BASIC OPEN CLOSE CURTAIN FUNCTIONS  * /


 
 /* RIGHT SEARCH OVERLAY 
 
 Triggers the right search panel*/
 
 function openSearch() {
   document.getElementById("right-search-overlay").style.width = "100%";
   document.body.style.overflowY = "clip";
  /* document.body.style.maxHeight = "101vh";*/
 
  var modal = document.getElementById('right-search-overlay');
 
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
 function closeSearch() {
   document.getElementById("right-search-overlay").style.width = "0%";
   document.body.style.overflowY = "unset";
  /* document.body.style.maxHeight = "unset";*/
 } 


 /* MAIN SITE SEARCH  */

 function siteSearch() {
    var query = document.getElementById("search_input").value.toLowerCase();
    var checkboxes = document.querySelectorAll('input[name="searchIndex"]:checked');
    var jsonFiles = [];
 
    checkboxes.forEach(function(checkbox) {
       switch (checkbox.value) {
          case 'en_site':
             jsonFiles.push('../en/indexes/pages.json');
             break;
          case 'en_glossary':
             jsonFiles.push('../en/indexes/glossary-ecobricks.json');
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
    var outputPosts = [];
    for (var j = 0; j < posts.length; j++) {
       var post = posts[j];
       if ((post.keywords && post.keywords.toLowerCase().includes(query)) || (post.chap_description && post.chap_description.toLowerCase().includes(query))) {
          outputPosts.push(post);
       }
    }
    console.log(outputPosts.length);
    console.log(outputPosts);
 
    var resultsContainer = document.getElementById("search_results");
    resultsContainer.innerHTML = "";
 
    if (outputPosts.length == 0) {
       resultsContainer.innerHTML = "<p>Sorry, no results were found for \"" + query + "\".</p>";
    } else {
       for (var k = 0; k < outputPosts.length; k++) {
          resultsContainer.innerHTML += "<div class=\"tc-item\"><div id='result_" + k + "' style=\"display:flex; text-align:left; padding: 20px;\"><div class=\"chapter_pic\" style=\"width=100px; margin-right:10px;display:block;\"><img src=\"" + outputPosts[k].image_url + "\" width=\"100px\" height=\"100px\"></div><div class=\"chapter-name-search\"><b style=\"font-size:x-large;font-family:'Arvo';margin-bottom:12px;display:block;\"><a href='" + outputPosts[k].url + "'>" + outputPosts[k].title + "</b><span style=\"font-size:smaller;color:var(--drop-cap)!important;margin-top:10px;display:block;\">" + outputPosts[k].section + "  |  " + outputPosts[k].language + "  |  " + outputPosts[k].id + "  |  " + outputPosts[k].lang_key + "</span><span style=\"font-size:medium;font-family:'Mulish',sans-serif;margin-top:10px;display:block;\">" + outputPosts[k].description + "</span><span style=\"font-size:smaller;color:grey;margin-top:10px;display:block;\">ecobricks.org/" + outputPosts[k].lang_key + "/" + outputPosts[k].url + "</span></a></div>";
       }
    }
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