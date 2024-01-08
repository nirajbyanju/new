function checkEmailExistence() {
    const emailInput = document.getElementById('email-input').value;
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            const response = JSON.parse(this.responseText);
            const errorMessageElement = document.querySelector('#email-error-messages p');
            if (response.exists) {
                errorMessageElement.textContent = 'Email already exists.';
            } else {
                errorMessageElement.textContent = '';
            }
        }
    };
    xhttp.open('POST', 'backend/check_email.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send(`email=${encodeURIComponent(emailInput)}`);
}

// Call this function whenever the email input changes
const emailInput = document.getElementById('email-input');
emailInput.addEventListener('input', checkEmailExistence);