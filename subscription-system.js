
/* ---------------------------

 
EARTHEN SUBSCRIPTION SYSTEM
Version 1.1  | March 17, 2024
https://api.earthen.io

-----------------------------*/

 
function checkRegistrationStatus() {
    const earthenRegistration = localStorage.getItem('earthenRegistration');
  
    // Check if the token exists
    if (earthenRegistration) {
        // Hide .reg-top-section
        const regTopSection = document.querySelector('.reg-top-section');
        if (regTopSection) {
            regTopSection.style.display = 'none';
        }
        console.log('User is registered');
    } else {
        // If the user is not registered
        console.log('User not yet registered, embarking on subscription sequence');
    }
}

  
  let submissionPhase = 1;

  function handleSubscriptionSubmit(event) {
    // Prevent the default form submission behavior
    if (event) event.preventDefault();
    const form = document.getElementById("emailForm");
    const emailInput = form.elements["email"];
    const nameInput = form.elements["name"];
    console.log("The sub source is: " + window.subSource);
    console.log("The language: " + window.currentLanguage);



    switch (submissionPhase) {
        case 1:
            handlePhase1(emailInput, nameInput);
            break;
        case 2:
            animateEmailInput(emailInput, nameInput);
            break;
        case 3:
            checkNameInput(nameInput);
            break;
        case 4:
            saveRegData2Cache(emailInput, nameInput, form);
            break;
        case 5:
            // Ensure some delay if needed or directly call
            sendData2WebHook(emailInput, nameInput, form);
            break;
        case 6:
            sendDownRegistration();
            checkRegistrationStatus();
            break;
        default:
            console.error("Invalid submission phase");
    }
}


  
  
  function handlePhase1(emailInput, nameInput) {
    // Validate email address
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailInput.value)) {
        // If invalid, clear the input and display error message with red placeholder
        emailInput.value = ''; // Clear the input
        emailInput.setAttribute('style', 'color: red;'); // Change text color to red for placeholder
        emailInput.placeholder = "Please enter a proper e-mail address"; // Display error message
  
        // Reset placeholder color after 1 second
        setTimeout(() => {
            emailInput.setAttribute('style', 'color: inherit;'); // Reset to default color
            emailInput.placeholder = "Your e-mail..."; // Reset placeholder text
        }, 1000);
  
        return; // Do not proceed further
    }
  
      // Update submission phase to 2.1 for email animation
      submissionPhase = 2;
      handleSubscriptionSubmit(new Event('submit')); // Proceed to animate email input
  
  }
  
  
  function animateEmailInput(emailInput, nameInput) {
    emailInput.style.transition = 'width 0.3s';
    emailInput.style.width = '0%';
  
    setTimeout(() => {
        emailInput.style.display = 'none'; // Hide the email input after transition
  
        nameInput.style.display = 'block';
        nameInput.style.width = '0';
        nameInput.style.transition = 'width 0.3s';
  
        // After the email input animation completes, update the phase to check the name input
        setTimeout(() => {
            nameInput.style.width = '70%';
            submissionPhase = 3;
            // handleSubscriptionSubmit(new Event('submit')); // Proceed to check name input
        }, 10);
    }, 300);
  }
  
  function checkNameInput(nameInput) {
    if (nameInput.value.length < 2) {
        // If invalid, clear the input and display error message with red placeholder
        nameInput.value = ''; // Clear the input
        nameInput.style.color = 'red'; // Change text color to red for placeholder
        nameInput.style.display = 'block'; // Ensure it's displayed
        nameInput.style.width = '70%'; // Set width
        nameInput.style.transition = 'width 0.3s ease 0s'; // Set transition
        nameInput.placeholder = "Please enter a valid name"; // Display error message
  
        // Reset placeholder and styles after 1 second
        setTimeout(() => {
            nameInput.style.color = 'inherit'; // Reset text color to default
            nameInput.placeholder = "Your name..."; // Reset placeholder text
            // Note: No need to reset 'display', 'width', and 'transition' as they should remain
        }, 1000);
  
        return false; // Do not proceed further
    }
  
    // If name input is valid, proceed to the next phase
    submissionPhase = 4;
    handleSubscriptionSubmit(new Event('submit')); // Proceed to the next phase
  }
  

  
  
  
  
  
  function saveRegData2Cache(emailInput, nameInput, form) {
    console.log("subSource in saveRegData2Cache:", window.subSource);

    const earthenRegistration = {
        email: emailInput.value,
        name: nameInput.value,
        dateTimeSubmitted: new Date().toISOString(),
        source: window.subSource, // Use the passed notes value
        language: window.currentLanguage
    };
    localStorage.setItem('earthenRegistration', JSON.stringify(earthenRegistration));
    console.log(earthenRegistration);
  
      // Animate name input to shrink to 0% width
      nameInput.style.transition = 'width 0.3s';
      nameInput.style.width = '0%';
  
      // Wait for the name input shrink animation to complete
      setTimeout(() => {
          nameInput.style.display = 'none'; // Hide the name input after transition
  
          // Get the reg-complete-text div and prepare it for animation
          const regCompleteText = document.querySelector('.reg-complete-text');
          regCompleteText.innerHTML = "Processing registration..."; // Set the text
          regCompleteText.style.display = 'block';
          regCompleteText.style.width = '0';
          regCompleteText.style.transition = 'width 0.3s';
  
          // Animate reg-complete-text div to increase to 70% width
          setTimeout(() => {
              regCompleteText.style.width = '70%';
          }, 10); // A short delay to ensure the transition is applied
  
      }, 300); // Delay corresponds to the duration of the name input shrink animation
  
      // Update button text
      const submitButton = document.querySelector('.register-button');
      submitButton.value = '⌛';
  
     // Automatically move to the next phase after the UI updates
     setTimeout(() => {
      sendData2WebHook(emailInput, nameInput, form);
  }, 300 + 10); // Adjust the timeout to match the total animation duration
  
  }
  
  function sendData2WebHook(emailInput, nameInput, form) {
    // Use the notes parameter to set the value of 'notes'
    const data = {
        email: emailInput.value,
        name: nameInput.value,
        source: window.subSource, // Use the global value
        language: window.currentLanguage

    };
    console.log('subSource before sending:', window.subSource);
      // Log the data to be sent
      console.log('Sending data to webhook:', JSON.stringify(data));
  
      // Send data to the webhook
      fetch('https://hook.eu1.make.com/ou5swqynssfg1o64sjwjgywpcoymg4m1', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json',
          },
          body: JSON.stringify(data),
      })
      .then(response => {
          // Check if the response status is 200
          if (response.status === 200) {
              // Handle successful response (text response)
              return response.text();
          } else {
              // Handle non-200 responses as errors
              return response.text().then(text => {
                  throw new Error(`HTTP error! status: ${response.status}, response: ${text}`);
              });
          }
      })
      .then(text => {
          // Log the successful text response
          console.log('Success:', text);
          submissionPhase = 6;
          updateUIOnSuccess(); // Update UI for success
      })
      .catch((error) => {
          // Log and handle errors
          console.error('Error:', error);
          updateUIOnError(); // Update UI for error
      });
  }
  
  
  
  function updateUIOnSuccess() {
      // Get the elements by their IDs
      const regStatus = document.getElementById('reg-status');
      const regStatusIcon = document.getElementById('reg-status-icon');
  
      // Update reg-status text and color
      regStatus.innerHTML = "You're successfully signed up!";
      regStatus.style.color = '#06f806';
  
      // Update reg-status-icon to a check mark
      regStatusIcon.value = '✔️';
  
  }
  
  
  
  function updateUIOnError() {
      // Get the elements by their IDs
      const regStatus = document.getElementById('reg-status');
      const regStatusIcon = document.getElementById('reg-status-icon');
  
      // Update reg-status text and color
      regStatus.innerHTML = "Registration failed.";
      regStatus.style.color = 'red';
  
      // Update reg-status-icon to a cross mark
      regStatusIcon.value = '❌';
  }
  

  
  /* content javascript */




function invite2Register() {
    const earthenRegistrationData = localStorage.getItem('earthenRegistration');
    
    if (!earthenRegistrationData) {
        // updateShowCounter();
  
        let showCounter = parseInt(localStorage.getItem('showCounter'));
        let delayDuration;
  
        // Determine the delay duration based on showCounter value
        switch (showCounter) {
            case 1:
            case 2:
                delayDuration = 300000; // 5 minutes
                break;
            case 3:
                delayDuration = 500000; // 6 minutes
                displayCheckBoxToHideSubscription();
                break;
            case 4:
                delayDuration = 420000; // 7 minutes
                break;
            case 5:
                delayDuration = 480000; // 8 minutes
                break;
            default:
                delayDuration = 240000; // 4 minutes (default for new or > 5)
        }
  
        // Wait for the determined duration before triggering sendUpRegistration
        setTimeout(() => {
            sendUpRegistration();
        }, delayDuration);
    }
  }
  

  function updateShowCounter() {
    let showCounter = localStorage.getItem('showCounter');
    showCounter = showCounter ? parseInt(showCounter) + 1 : 1;
    localStorage.setItem('showCounter', showCounter);

    // Post the value of showCounter to the console
    console.log("showCounter: " + showCounter);

    // Check if showCounter is higher than 3 and trigger the function
    if (showCounter > 4) {
        displayCheckBoxToHideSubscription();
    }
}

function displayCheckBoxToHideSubscription() {
    const regSubChecker = document.getElementById('reg-sub-checker');
    if (regSubChecker) {
        regSubChecker.style.display = 'block';
    }
}
  

  
  // ... (Any other function definitions)
  
  // Run invite2Register on page load
  document.addEventListener('DOMContentLoaded', invite2Register);
  
  
  
  
  
  
  function sendUpRegistration() {
    var guidedTour = document.getElementById("guided-tour");

    // Select the .modal element within the #guided-tour element
var guidedTourModal = document.querySelector('#guided-tour .modal');

// Check if the guidedTourModal is defined and visible
if (guidedTourModal && guidedTourModal.style.display !== "none") {
    // If it's visible, show an alert and exit the function
    // alert('nope');
    return;
}


    var footer = document.getElementById("registration-footer");
    var emailRegistration = document.getElementById("email-registration");
    var upArrow = document.getElementById("reg-up-button");
    var downArrow = document.getElementById("reg-down-button");

    // Adjust the height of the registration footer
    footer.style.height = "70vh";

    // Make the email registration section visible
    emailRegistration.style.display = "block";
    upArrow.style.display = "none";
    downArrow.style.display = "block";
    updateShowCounter();
}

  

  
  function sendDownRegistration() {
    var footer = document.getElementById("registration-footer");
    var emailRegistration = document.getElementById("email-registration");
    var upArrow = document.getElementById("reg-up-button");
    var downArrow = document.getElementById("reg-down-button");
  
  
    // Adjust the height of the registration footer
    footer.style.height = "77px";
  
    // Make the email registration section visible
    emailRegistration.style.display = "none";
    upArrow.style.display = "block";
    downArrow.style.display = "none";
  
  }
  
  function checkBoxActivated() {
    if (document.getElementById('reg-sub-checkbox').checked) {
      var checkerDiv = document.getElementById('reg-sub-checker');
      var explaDiv = document.getElementById('reg-explanation');

  
      // Change the text of the checkbox div
      checkerDiv.innerText = "Ok! You won't see the subscription box again. However, you can always find it again in the main menu.";
  
      // Update styles
      checkerDiv.style.backgroundColor = 'var(--emblem-blue)';
      checkerDiv.style.color = 'var(--h1)';
      checkerDiv.style.fontSize = 'large';
      explaDiv.style.display = 'none';
  
      // Show this text for 2 seconds, then call sendDownRegistration
      setTimeout(function() {
        sendDownRegistration();
        checkerDiv.style.backgroundColor = '';
        checkerDiv.style.color = 'var(--text-color)';
        checkerDiv.style.fontSize = 'small';
        explaDiv.style.display = 'block';
      }, 4000);
  
      // Check for earthenRegistration in browser cache
      if (localStorage.getItem('earthenRegistration')) {
      } else {
        // Store new JSON in browser cache
        const earthenRegistration = {
          email: 'none',
          name: 'none',
          dateTimeSubmitted: new Date().toISOString(),
          notes: 'requested no signup box'
        };
        localStorage.setItem('earthenRegistration', JSON.stringify(earthenRegistration));
  
        // Log the JSON to the console
        console.log(earthenRegistration);
      }
    }
  }
  
  
  function previewPrivacy() {
    var regTexts = document.getElementById('reg-registration-texts');
    var privacyTexts = document.getElementById('reg-privacy-texts');

    // Check the current display state and toggle it
    if (regTexts.style.display === 'none') {
        // If the registration texts are hidden, show them and hide the privacy texts
        regTexts.style.display = 'flex';
        privacyTexts.style.display = 'none';
    } else {
        // If the registration texts are shown, hide them and show the privacy texts
        regTexts.style.display = 'none';
        privacyTexts.style.display = 'flex';
    }
}
