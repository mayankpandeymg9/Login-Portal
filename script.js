const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signup');

// Toggle between sign in and sign up forms
document.getElementById('signInButton').addEventListener('click', function() {
    document.getElementById('signup').style.display = 'none';
    document.getElementById('signIn').style.display = 'block';
});

document.getElementById('signUpButton').addEventListener('click', function() {
    document.getElementById('signIn').style.display = 'none';
    document.getElementById('signup').style.display = 'block';
});

// Handle signup
function handleSignup(event) {
    event.preventDefault();
    
    const firstName = document.getElementById('fName').value;
    const lastName = document.getElementById('lName').value;
    const email = document.getElementById('signupEmail').value;
    const password = document.getElementById('signupPassword').value;

    // Get existing users or initialize empty array
    const users = JSON.parse(localStorage.getItem('users') || '[]');

    // Check if user already exists
    if (users.some(user => user.email === email)) {
        alert('User already exists!');
        return false;
    }

    // Add new user
    users.push({
        firstName,
        lastName,
        email,
        password // Note: In a real application, you should never store passwords in plain text
    });

    // Save to localStorage
    localStorage.setItem('users', JSON.stringify(users));
    
    alert('Registration successful! Please sign in.');
    
    // Switch to sign in form
    document.getElementById('signup').style.display = 'none';
    document.getElementById('signIn').style.display = 'block';
    
    return false;
}

// Handle signin
function handleSignin(event) {
    event.preventDefault();
    
    const email = document.getElementById('signinEmail').value;
    const password = document.getElementById('signinPassword').value;

    // Get users from localStorage
    const users = JSON.parse(localStorage.getItem('users') || '[]');

    // Find user
    const user = users.find(u => u.email === email && u.password === password);

    if (user) {
        // Store logged in user
        localStorage.setItem('currentUser', JSON.stringify(user));
        alert('Login successful!');
        window.location.href = 'home.html'; // Redirect to home page
    } else {
        alert('Invalid email or password!');
    }

    return false;
}