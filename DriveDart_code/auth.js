const AUTH_USERS_KEY = 'drivedart_users';
const AUTH_SESSION_KEY = 'drivedart_session';

function hashPassword(password) {
    let hash = 0;
    for (let i = 0; i < password.length; i++) {
        hash = ((hash << 5) - hash) + password.charCodeAt(i);
        hash |= 0;
    }
    return String(hash);
}

function getUsers() {
    const data = localStorage.getItem(AUTH_USERS_KEY);
    return data ? JSON.parse(data) : [];
}

function saveUsers(users) {
    localStorage.setItem(AUTH_USERS_KEY, JSON.stringify(users));
}

function signUp(firstName, lastName, email, password) {
    const users = getUsers();
    const normalizedEmail = email.trim().toLowerCase();

    if (users.some((user) => user.email === normalizedEmail)) {
        return { success: false, message: 'Email Address Already Exists !' };
    }

    users.push({
        firstName: firstName.trim(),
        lastName: lastName.trim(),
        email: normalizedEmail,
        password: hashPassword(password)
    });
    saveUsers(users);
    return { success: true };
}

function signIn(email, password) {
    const users = getUsers();
    const normalizedEmail = email.trim().toLowerCase();
    const hashedPassword = hashPassword(password);
    const user = users.find(
        (entry) => entry.email === normalizedEmail && entry.password === hashedPassword
    );

    if (!user) {
        return { success: false, message: 'Not Found, Incorrect Email or Password' };
    }

    sessionStorage.setItem(AUTH_SESSION_KEY, user.email);
    return { success: true, user };
}

function signOut() {
    sessionStorage.removeItem(AUTH_SESSION_KEY);
}

function getCurrentUser() {
    const email = sessionStorage.getItem(AUTH_SESSION_KEY);
    if (!email) {
        return null;
    }

    const users = getUsers();
    return users.find((user) => user.email === email) || null;
}

function requireAuth(redirectTo = 'login.html') {
    if (!getCurrentUser()) {
        window.location.href = redirectTo;
        return false;
    }
    return true;
}

function displayUserName(elementId) {
    const user = getCurrentUser();
    const element = document.getElementById(elementId);
    if (element && user) {
        element.textContent = `${user.firstName} ${user.lastName}`;
    }
}
