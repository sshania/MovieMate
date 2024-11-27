
document.querySelector('form').addEventListener('submit', function (e) {
    const password = document.getElementById('password').value;
    const confirmpass = document.getElementById('confirmpass').value;
    const phone = document.getElementById('phone_number').value;

    if (password !== confirmpass) {
        e.preventDefault();
        alert('Passwords do not match.');
        return;
    }

    const phoneRegex = /^[0-9]{10,15}$/;
    if (!phoneRegex.test(phone)) {
        e.preventDefault();
        alert('Phone number must be numeric and contain 10 to 15 digits.');
        return;
    }
});

