<!DOCTYPE html>
<HTML lang="en"> 
<HEAD>
<META charset="UTF-8">
<?php $lang='en';?>
<?php $version='1.66';?>
<?php $page='submit-project';?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Project</title>
    <style>

@font-face {
  font-family: "Mulish";
  src: url("../fonts/Mulish-Light.ttf");
  font-display: swap;
  font-weight: 300;
}

@font-face {
  font-family: "Mulish";
  src: url("../fonts/Mulish-Regular.ttf");
  font-display: swap;
  font-weight: 500;
}

@font-face {
  font-family: "Arvo";
  src: url("../fonts/Arvo-Regular.ttf");
  font-display: swap;
}
:root {
  --main-background: #f0f0f0;
  --h1: #333;
  --emblem-green: #4CAF50;
  --emblem-green-over: #45a049;
  --text-color: #555;
  --divider-line: #ccc;
  --settings-background: #e5e5e5;
}

#form-submission-box {
  font-family: "Mulish", sans-serif;
  background-color: var(--main-background);
}

h2 {
  font-family: "Arvo", serif;
  color: var(--h1);
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


<?php require_once ("../header-2024.php");?>
			  

<div id="form-submission-box">
        <div class="form-container">
            <h2>Submit Project</h2>
            <form method="post" action="submit_project.php">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name"><br>
                
                <label for="description">Description:</label><br>
                <textarea id="description" name="description"></textarea><br>
                
                <label for="start">Start Date:</label><br>
                <input type="date" id="start" name="start"><br>
                
                <label for="briks_required">Bricks Required:</label><br>
                <input type="number" id="briks_required" name="briks_required"><br>
                
                <label for="briks_used">Bricks Used:</label><br>
                <input type="number" id="briks_used" name="briks_used"><br>
                
                <label for="featured_img">Featured Image:</label><br>
                <input type="text" id="featured_img" name="featured_img"><br>
                
                <label for="tmb_featured_img">Thumbnail Featured Image:</label><br>
                <input type="text" id="tmb_featured_img" name="tmb_featured_img"><br>
                
                <label for="location_full">Location:</label><br>
                <input type="text" id="location_full" name="location_full"><br>
                
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
