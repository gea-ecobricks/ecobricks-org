  
  
  
  
  function slowScrollLeft(element, distance, duration) {
        const start = element.scrollLeft;
        const galleryWidth = element.scrollWidth; // Get the total width of the gallery
        let startTime = performance.now();

        function scroll(timestamp) {
            const elapsed = timestamp - startTime;
            const progress = Math.min(elapsed / duration, 1);
            element.scrollLeft = start + distance * progress;

            if (progress < 1) {
                requestAnimationFrame(scroll);
            } else {
                // Reset scroll position to the beginning when it reaches the end
                element.scrollLeft = 0;
                startTime = performance.now();
                requestAnimationFrame(scroll);
            }
        }

        requestAnimationFrame(scroll);
    }

    window.addEventListener('load', () => {
        const galleryBlock = document.querySelector('.gallery10-content-block');
        if (galleryBlock) {
            const galleryWidth = galleryBlock.scrollWidth; // Get the total width of the gallery
            slowScrollLeft(galleryBlock, galleryWidth, 45000); // Scroll the full width over 45 seconds
        }
    });




/*  To be fixed:  IMAGE URL NEEDS TO BE INPUTED DIRECTLY AS A VARIABLE and needs to be based on GoBrik url*/
function ecobrickPreview(brik_serial, weight, owner, location) {
    // Construct the image source URL FIX:
    var imageUrl = 'https://gobrik.com/briks/ecobrick-' + brik_serial + '-file.webp';

    const modal = document.getElementById('form-modal-message');
    const contentBox = modal.querySelector('.modal-content-box'); // This is the part we want to hide
    const photoBox = modal.querySelector('.modal-photo-box'); // This is where we'll show the image
    const photoContainer = modal.querySelector('.modal-photo'); // The container for the image

    // Hide the content box and show the photo box
    contentBox.style.display = 'none'; // Hide the content box
    photoBox.style.display = 'block'; // Make sure the photo box is visible

    // Clear previous images from the photo container
    photoContainer.innerHTML = '';

    // Create and append the ecobrick image to the photo container
    var img = document.createElement('img');
    img.src = imageUrl;
    img.alt = "Ecobrick " + brik_serial;
    img.style.maxWidth = '90%';
    img.style.maxHeight = '75vh';
    img.style.minHeight ="400px";
    img.style.minWidth ="400px";
    img.style.margin = 'auto';
    // img.style.backgroundColor ='#8080802e';
    photoContainer.appendChild(img);

    // Add ecobrick details and view details button inside photo container
    var details = document.createElement('div');
    details.className = 'ecobrick-details';
    details.innerHTML = '<p>Ecobrick ' + brik_serial + ' | ' + weight + 'g of plastic sequestered by ' + owner + ' in ' + location + '.</p>' +
                        '<a href="details-ecobrick-page.php?serial_no=' + brik_serial + '" class="preview-btn" style="margin-bottom: 50px;height: 25px;padding: 5px;border: none;padding: 5px 12px;">ℹ️ View Full Details</a>';
    photoContainer.appendChild(details);

    // Hide other parts of the modal that are not used for this preview
    modal.querySelector('.modal-content-box').style.display = 'none'; // Assuming this contains elements not needed for this preview

    // Show the modal
    modal.style.display = 'flex';

    //Blur out background
    document.getElementById('page-content')?.classList.add('blurred');
    document.getElementById('footer-full')?.classList.add('blurred');
    document.body.classList.add('modal-open');

}



function projectPreview(project_id, name, description, location_full, ecobricks_used, start) {
    // Construct the image source URL
    var imageUrl = 'https://ecobricks.org/projects/photos/project-' + project_id + '-1.webp';

    // Fetch the existing modal elements
    var modal = document.getElementById('form-modal-message');
    var photoContainer = modal.querySelector('.modal-photo');

    // Clear any existing content in the photo container
    photoContainer.innerHTML = '';

    // Create and append the project image to the photo container with specified styling
    const img = document.createElement('img');
    img.src = imageUrl;
    img.alt = "Ecobrick Project: " + name;
    img.title = "Project " + project_id + ": " + name;
    img.style.maxWidth = '90%';
    img.style.maxHeight = '80vh';
    img.style.minHeight ="400px";
    img.style.minWidth ="400px";
    // img.style.backgroundColor ='#8080802e';
    img.style.margin = 'auto';
    photoContainer.appendChild(img);

    // Add project details inside photo container
    var details = document.createElement('div');
    details.className = 'ecobrick-details';
    details.style.margin = '20px 10% auto 10%'; // Adjust the margin as per your design
    details.innerHTML = `<p style="font-size:small">${description} | ${ecobricks_used} ecobricks | ${location_full}</p><a style="margin-bottom: 50px;height: 25px;padding: 5px;border: none;padding: 5px 12px;" class="preview-btn" href="project.php?project_id=${project_id}">ℹ️ View Project</a>';    `;
    photoContainer.appendChild(details);

    // Show the modal
    modal.style.display = 'flex';

    // Hide other parts of the modal not used for this preview
    modal.querySelector('.modal-content-box').style.display = 'none';

   //Blur out background
   document.getElementById('page-content')?.classList.add('blurred');
    document.getElementById('footer-full')?.classList.add('blurred');
    document.body.classList.add('modal-open');
}




    function closeEcobrickModal() {
        // Close the modal by removing it from the DOM
        var modal = document.querySelector('.ecobrick-modal');
        if (modal) {
            modal.parentNode.removeChild(modal);
        }
    }


 