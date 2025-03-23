document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent form from submitting the default way

    const formData = new FormData(this);  // Get form data

    fetch(this.action, {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json())  // Parse JSON response
    .then(data => {
        const statusElement = document.getElementById('contact-form-status');
        if (data.status === 'success') {
            statusElement.textContent = 'Message sent successfully!';
        } else {
            statusElement.textContent = 'Error: ' + data.message;
        }
    })
    .catch(error => {
        document.getElementById('contact-form-status').textContent = 'Network error: ' + error.message;
    });
});
