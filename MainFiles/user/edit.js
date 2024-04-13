function enableEditing() {
    var inputs = document.querySelectorAll('input[type="text"]');
    inputs.forEach(function(input) {
        input.removeAttribute('readonly');
    });
}


document.getElementById('editBtn').addEventListener('click', function() {
    enableEditing();
    
});


function disableEditing() {
    var inputs = document.querySelectorAll('input[type="text"]');
    inputs.forEach(function(input) {
        input.setAttribute('readonly', true);
    });
}


document.getElementById('cancelBtn').addEventListener('click', function() {
    disableEditing();

});

