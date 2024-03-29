

<?php require_once ("../meta/submit-project-en.php");?>

  
<STYLE>

#main-background {
  background-size: cover;
}


#form-submission-box {
  font-family: "Mulish", sans-serif;
  /* background-color: var(--main-background); */
}

/* h2 {
  font-family: "Arvo", serif;
  color: var(--h1);
} */

.form-item {
    margin-top: 10px;
    margin-bottom: 10px;
}
.form-caption {
  font-family: "Mulish", sans-serif;
  font-weight: 300;
  color: grey;
  font-size: small;
  margin-top: -5px;
}



label {
  font-family: "Mulish", sans-serif;
  font-weight: 500;
  color: var(--text-color);
}


.form-item input {
  background: var(--input-background);
  font-size: 1.3em;
}

.form-item textarea {
  background: var(--input-background);
  font-size: 1.3em;
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
  margin-top: 8px;
}

input[type="submit"] {
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  background-color: gray; /* Initial background color */
  background-size: 0% 100%; /* Initial background size (progress bar) */
  transition: background-size 0.5s ease; /* Transition effect for smooth progress */
  font-size: 1.3em
}
/* Specify the progress bar color */
input[type="submit"].progress-bar {
  background: url(../svgs/background-upload-progress.svg) left;
  background-size: contain;
}
/* 
input[type="submit"]:hover {
  background-color: var(--emblem-green-over);
} */

.form-container {
  width: 80%;
  background-color: var(--form-background);
  border: 1px solid var(--divider-line);
  border-radius: 15px;
  margin: 0 auto;
  max-width: 1000px;
  z-index: 20;

}

/* Media Query for screens under 700px */
@media screen and (max-width: 700px) {
  .form-container {
    width: calc(100% - 40px);
    margin: 0;
    border: none;
    padding: 20px 20px 0 20px;
    max-width: 600px;
    padding: 20px;


  }
}

#featured_image {
  margin-bottom: 8px;
  margin-top: 8px;
  padding: 5px;
  font-size: 1em;
}

#tmb_featured_image {
  margin-bottom: 8px;
  margin-top: 8px;
  padding: 5px;
  font-size: 1em;
}

/* Centering the form vertically on larger screens */
@media screen and (min-width: 701px) {
  #form-submission-box {
    display: flex;
    align-items: center;
    justify-content: center;
    /* height: 100vh; */
  }

  .form-container {
    margin-top: auto;
    margin-bottom: auto;
    padding: 30px;

  }
}


	
</style>	

<?php require_once ("../header-2024.php");?>
