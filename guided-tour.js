

/*----------------------------

GUIDED TOUR


----------------------------*/

function closeTour() {
  // Get the modal and set its display to "block" to show it
  var modal = document.getElementById("guided-tour");
  modal.style.display = "none";
  document.getElementById("page-content").classList.remove("blur");
  // Reset the tour to the first window (index 0)
  document.getElementById("registration-footer").style.display = "block";
  // Allow scrolling on the body again
  document.body.style.overflow = '';
  document.body.style.maxHeight = '';
  tourTaken();
}


  function guidedTour() {
    // Prevent scrolling on the body
    document.body.style.overflow = 'hidden';
    document.body.style.maxHeight = '100vh';
    document.getElementById("registration-footer").style.display = "none";

    var modal = document.getElementById("guided-tour");
    modal.style.display = "flex";
    document.getElementById("page-content").classList.add("blur");
  
  
  
    // Get all the "information" elements (which contain the tour content) and set the currentInfo variable to 0 (the first element)
  var information = document.querySelectorAll(".information");
  var currentInfo = 0;

  // Define a function to show the nth "information" element and hide the current one
  function showInfo(infoIndex) {
    // Check that the requested index is within the bounds of the array before attempting to show the information panel
    if (infoIndex >= 0 && infoIndex < information.length) {
      information[currentInfo].style.display = "none";
      information[infoIndex].style.display = "block";
      currentInfo = infoIndex;
    }
  }

  // Set the onclick function for the first "Next" button to show the second "information" element
  document.querySelector(".next:first-of-type").onclick = function() {
    showInfo(1);
  };

  // Set the onclick function for the second "Next" button to show the third "information" element
  document.querySelector("#information-two .next").onclick = function() {
    showInfo(2);
  };

  // Set the onclick function for the third "Next" button to show the fourth "information" element
  document.querySelector("#information-three .next").onclick = function() {
    showInfo(3);
  };

  // Set the onclick function for the fourth "Next" button to show the fifth "information" element
  document.querySelector("#information-four .next").onclick = function() {
    showInfo(4);
  };

    // Set the onclick function for the fith "Next" button to show the six "information" element
    document.querySelector("#information-five .next").onclick = function() {
      showInfo(5);
    };

  // Set the onclick function for the fifth "Next" button to hide the modal and remove the "blur" class from the page content
  // document.querySelector("#information-six .next").onclick = function() {
  //   modal.style.display = "none";
  //   document.getElementById("page-content").classList.remove("blur");
  //   showInfo(0);
  //   tourTaken();
  // };

// Set the onclick function for the "Back" button in the third "information" element to show the second "information" element
document.querySelector("#information-two .back").onclick = function() {
showInfo(0);
};
// Set the onclick function for the "Back" button in the third "information" element to show the second "information" element
document.querySelector("#information-three .back").onclick = function() {
showInfo(1);
};

// Set the onclick function for the "Back" button in the fourth "information" element to show the third "information" element
document.querySelector("#information-four .back").onclick = function() {
showInfo(2);
};

// Set the onclick function for the "Back" button in the fifth "information" element to show the fourth "information" element
document.querySelector("#information-five .back").onclick = function() {
showInfo(3);
};

// Set the onclick function for the "Back" button in the fifth "information" element to show the fourth "information" element
document.querySelector("#information-six .back").onclick = function() {
  showInfo(4);
  };

}

function tourTaken() {
  // Save the token in localStorage to indicate that the tour has been seen
  localStorage.setItem('tourToken', 'seen');
  
}

