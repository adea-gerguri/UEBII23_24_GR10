document.addEventListener('DOMContentLoaded', function() {
    const sidebarLinks = document.querySelectorAll('.sidebar ul li a');
    const sections = document.querySelectorAll('.main-content > div');
    const modals = document.querySelectorAll('.modal');
    const closeButtons = document.querySelectorAll('.close-btn');

    sidebarLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            sidebarLinks.forEach(link => link.classList.remove('active'));
            this.classList.add('active');

            const target = document.querySelector(this.getAttribute('href'));
            target.scrollIntoView({ behavior: 'smooth' });
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const modal = this.closest('.modal');
            modal.style.display = 'none';
        });
    });

    window.addEventListener('click', function(event) {
        modals.forEach(modal => {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });
    });

    window.openModal = function(modalId) {
        document.getElementById(modalId).style.display = 'block';
    };

    window.closeModal = function(modalId) {
        document.getElementById(modalId).style.display = 'none';
    };

    document.getElementById('productForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const productName = document.getElementById('productName').value;
        const productPrice = document.getElementById('productPrice').value;
        const productStock = document.getElementById('productStock').value;

        const table = document.querySelector('#products table tbody');
        const row = table.insertRow();
        row.insertCell(0).innerText = table.rows.length;
        row.insertCell(1).innerText = productName;
        row.insertCell(2).innerText = productPrice;
        row.insertCell(3).innerText = productStock;
        row.insertCell(4).innerHTML = '<button onclick="deleteRow(this)">Delete</button>';

        closeModal('productModal');
        this.reset();
    });
});

function deleteRow(button) {
    const row = button.parentElement.parentElement;
    row.remove();
}

function loadNewContent(url, div_id) {
    console.log('kemi mrri nfunksion');
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var div = document.getElementById(div_id);
            div.innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}