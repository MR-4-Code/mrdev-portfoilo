"use strict";
require('./bootstrap');

import '../sass/app.scss';
import * as bootstrap from 'bootstrap';


document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('contact-form').addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        const csrfToken = document.querySelector('meta[name="csrf-token"]');

        const token = csrfToken.getAttribute('content');

    
        var submitText = document.getElementById('send-text');
        var loadingSpinner = document.getElementById('loading-spinner');
    
        submitText.classList.add('d-none');
        loadingSpinner.classList.remove('d-none');

        fetch('/contact/send', { 
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': token
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById('success-message').textContent = data.message;
                document.getElementById('success-message').classList.remove('d-none');
                document.getElementById('error-message').classList.add('d-none');
                document.getElementById('contact-form').reset();
            } else {
                document.getElementById('error-message').textContent = data.message;
                document.getElementById('error-message').classList.remove('d-none');
                document.getElementById('success-message').classList.add('d-none');
            }
        })
        .catch(error => {
            document.getElementById('error-message').textContent = 'Something went wrong. Please try again.';
            document.getElementById('error-message').classList.remove('d-none');
            document.getElementById('success-message').classList.add('d-none');
        })
        .finally(data => {
            submitText.classList.remove('d-none');
            loadingSpinner.classList.add('d-none');
        });
    });
});
