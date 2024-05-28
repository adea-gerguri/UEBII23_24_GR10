document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('myForm');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Create a new FormData object
        var formData = new FormData(form);

        // Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Configure it: POST-request to the URL /submit
        xhr.open('POST', 'http://localhost/UEBII23_24_GR10/AdminSide/temporary/submit.php', true);

        // Set up a function to handle the response
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) { // 4 means the request is done
                if (xhr.status === 200) { // 200 means a successful return
                    document.getElementById('result').innerHTML = xhr.responseText; // Show the result
                } else {
                    console.error('An error occurred during the transaction');
                }
            }
        };

        // Send the request with the form data
        xhr.send(formData);
    });
});
