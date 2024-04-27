<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('submit-form');
    form.onsubmit = function(event) {
        // Prevent the form from submitting if validations fail
        event.preventDefault();

        // Clear previous error messages
        clearErrorMessages();

        // Validate the required photo1_main field if exists
        var photo1Input = document.getElementById('photo1_main');
        if (photo1Input && !photo1Input.files.length) {
            showError('photo1_main', 'The main photo (Photo 1) is required.');
            return;
        }

        // Optional: Validate file sizes here before sending to the server
        var valid = true;
        for (var i = 1; i <= 6; i++) {
            var input = document.getElementById('photo' + i + '_main');
            if (input && input.files.length > 0) {
                var file = input.files[0];
                if (file.size > 8388608) { // 8 MB limit
                    showError('photo' + i + '_main', 'File size should not exceed 8 MB.');
                    valid = false;
                }
            }
        }

        if (!valid) {
            return; // Stop the form submission if there are errors
        }

        // If everything is valid, proceed to submit the form
        form.submit();
    };

    function showError(inputId, message) {
        var element = document.getElementById(inputId);
        if (element) {
            var errorSpan = document.createElement('span');
            errorSpan.textContent = message;
            errorSpan.style.color = 'red';
            errorSpan.className = 'error-message';
            element.parentNode.appendChild(errorSpan);
        }
    }

    function clearErrorMessages() {
        var errors = document.querySelectorAll('.error-message');
        errors.forEach(function(error) {
            error.parentNode.removeChild(error);
        });
    }

    // DELETE FUNCTION
    var deleteButton = document.getElementById('deleteButton');
    if (deleteButton) {
        deleteButton.addEventListener('click', function() {
            if (confirm('Are you sure you want to delete this project? This action cannot be undone.')) {
                var input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'action';
                input.value = 'delete_project';
                form.appendChild(input);
                form.submit();
            }
        });
    }
});
</script>





<br><br>
</div> <!--closes main-->
       
	<!--FOOTER STARTS HERE-->

	<?php require_once ("../footer-2024.php");?>

</div>


</body>
</html>