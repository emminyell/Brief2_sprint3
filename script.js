document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        if (!validateForm()) {
            event.preventDefault();
        }
    });

    function validateForm() {
        const fullname = document.getElementById('fullname').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const message = document.getElementById('message').value;
        const date = document.getElementById('date').value;


        if (!/^[a-zA-Z]+$/.test(fullname)) {
            let span = document.getElementById('nameeror');
            span.innerHTML='Name must contain only letters';
            span.style.color='red';
            return false;
        }
        
        if (!/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[A-Za-z]+$/.test(email)) {
            let span = document.getElementById('emaileror');
            span.innerHTML='email invalid';
            span.style.color='red';
            
            return false;
        }

        if (!/^[a-zA-Z0-9]+$/.test(phone)) {
            let span = document.getElementById('phoneeror');
            span.innerHTML='phone must contain only numbers';
            span.style.color='red';
            
            return false;
        }

        if (!/^[a-zA-Z]+$/.test(message)) {
            let span = document.getElementById('messgeror');
            span.innerHTML='description invalid';
            span.style.color='red';
            
            return false;
        }
        return true; 
    }
});



