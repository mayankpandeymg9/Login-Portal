// Authentication functions
const auth = {
    // Check if user is authenticated
    isAuthenticated: function() {
        return localStorage.getItem('currentUser') !== null;
    },

    // Get current user
    getCurrentUser: function() {
        return JSON.parse(localStorage.getItem('currentUser'));
    },

    // Login function
    login: function(email, password) {
        const users = JSON.parse(localStorage.getItem('users') || '[]');
        const user = users.find(u => u.email === email && u.password === password);
        
        if (user) {
            // Don't store password in currentUser
            const { password, ...userWithoutPassword } = user;
            localStorage.setItem('currentUser', JSON.stringify(userWithoutPassword));
            return true;
        }
        return false;
    },

    // Register function
    register: function(userData) {
        const users = JSON.parse(localStorage.getItem('users') || '[]');
        
        // Check if email already exists
        if (users.some(u => u.email === userData.email)) {
            return { success: false, message: 'Email already registered' };
        }

        // Add new user
        users.push(userData);
        localStorage.setItem('users', JSON.stringify(users));
        
        // Auto login after registration
        const { password, ...userWithoutPassword } = userData;
        localStorage.setItem('currentUser', JSON.stringify(userWithoutPassword));
        
        return { success: true, message: 'Registration successful' };
    },

    // Logout function
    logout: function() {
        localStorage.removeItem('currentUser');
        window.location.href = 'index.html';
    },

    // Check authentication and redirect if not authenticated
    requireAuth: function() {
        if (!this.isAuthenticated()) {
            window.location.href = 'index.html';
        }
    }
}; 