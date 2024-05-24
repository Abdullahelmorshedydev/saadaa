function validateForm() {
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var feedback = document.getElementById('feedback').value.trim();
    var isValid = true;

    if (name === '') {
        document.getElementById('nameError').innerHTML = 'Please enter your name';
        isValid = false;
    } else {
        document.getElementById('nameError').innerHTML = '';
    }

    if (email === '') {
        document.getElementById('emailError').innerHTML = 'Please enter your email';
        isValid = false;
    } else {
        document.getElementById('emailError').innerHTML = '';
    }

    if (feedback === '') {
        document.getElementById('feedbackError').innerHTML = 'Please enter your feedback';
        isValid = false;
    } else {
        document.getElementById('feedbackError').innerHTML = '';
    }

    return isValid;
}