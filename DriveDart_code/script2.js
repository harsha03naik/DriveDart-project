const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signInForm = document.getElementById('signIn');
const signUpForm = document.getElementById('signup');

signUpButton.addEventListener('click', function () {
    signInForm.style.display = 'none';
    signUpForm.style.display = 'block';
});

signInButton.addEventListener('click', function () {
    signInForm.style.display = 'block';
    signUpForm.style.display = 'none';
});

document.getElementById('signUpForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const firstName = document.getElementById('fName').value;
    const lastName = document.getElementById('lName').value;
    const email = document.getElementById('signup-email').value;
    const password = document.getElementById('signup-password').value;

    const result = signUp(firstName, lastName, email, password);

    if (result.success) {
        alert('Account created successfully! Please sign in.');
        signInForm.style.display = 'block';
        signUpForm.style.display = 'none';
        document.getElementById('signUpForm').reset();
    } else {
        alert(result.message);
    }
});

document.getElementById('signInForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const email = document.getElementById('signin-email').value;
    const password = document.getElementById('signin-password').value;

    const result = signIn(email, password);

    if (result.success) {
        window.location.href = 'homepage.html';
    } else {
        alert(result.message);
    }
});
