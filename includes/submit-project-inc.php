

<!--Image files to preload that are unique to this page-->
 
<!-- <link rel="preload" as="image" href="../logos/gea-horizontal.svg"> -->
<!-- <link rel="preload" as="image" href="../webp/eb-sky-400px.webp">
<link rel="preload" as="image" href="../webp/build-banner-1400px.webp"> -->

<!-- <link rel="stylesheet" type="text/css" href="../stylesheet-content-2024.css?v=2.3">  -->

<!-- This loads the page's meta tags:  Be sure the page name is in place in English-->

<?php require_once ("../meta/submit-project-en.php");?>

  
<STYLE>


#form-submission-box {
  font-family: "Mulish", sans-serif;
  /* background-color: var(--main-background); */
}

/* h2 {
  font-family: "Arvo", serif;
  color: var(--h1);
} */


.form-caption {
  font-family: "Mulish", sans-serif;
  font-weight: 300;
  color: grey;
  font-size: small;
}



label {
  font-family: "Mulish", sans-serif;
  font-weight: 500;
  color: var(--text-color);
}

input[type="text"],
input[type="number"],
textarea,
input[type="date"] {
  font-family: "Mulish", sans-serif;
  font-weight: 300;
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid var(--divider-line);
  border-radius: 4px;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: var(--emblem-green);
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: var(--emblem-green-over);
}

.form-container {
  width: 60%;
  max-width: 600px;
  background-color: var(--settings-background);
  padding: 20px;
  border: 1px solid var(--divider-line);
  border-radius: 5px;
  margin: 0 auto;
}

/* Media Query for screens under 700px */
@media screen and (max-width: 700px) {
  .form-container {
    width: calc(100% - 40px);
    margin: 0;
    border: none;
    padding: 20px 20px 0 20px;
  }
}

/* Centering the form vertically on larger screens */
@media screen and (min-width: 701px) {
  #form-submission-box {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  .form-container {
    margin-top: auto;
    margin-bottom: auto;
  }
}


	
</style>	

<?php require_once ("../header-2024.php");?>
