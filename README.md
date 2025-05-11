# Student Portal (Static Web App)

A modern, responsive student portal for student admission, form submission, and automated stream allocation—built as a static website using HTML, CSS, and JavaScript (localStorage). No backend, PHP, or server required!

---

## 📖 Project Overview

**Student Portal** is a fully static web application designed to streamline the student admission process. It allows students to register, log in, submit their academic details, and automatically get allocated to a stream (CSE, ECE, or EEE) based on their marks. The portal features a professional, user-friendly interface and works entirely in the browser using localStorage for data persistence.

---

## ✨ Features

- **User Authentication**: Register and log in with email and password (localStorage-based, no backend).
- **Admission Form**: Submit personal and academic details securely.
- **Automated Stream Allocation**: Students are assigned to CSE, ECE, or EEE based on their marks in Computer Science and Mathematics.
- **Dashboard**: View total forms, active users, and recent submissions (last 24 hours).
- **Stream View**: See all students and their allocated streams, sorted by marks.
- **Responsive Design**: Works beautifully on desktop and mobile devices.
- **Modern UI**: Clean, professional look with Font Awesome icons and background images.

---

## 🚀 Screenshots

### Login Page
![Login Page](/login.png)

### Dashboard / Home
![Dashboard](/home.png)

### Stream Allocation
![Stream Allocation](/stream.png)

### Admission Form
![Admission Form](/form.png)



---

## 🛠️ Getting Started

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/loginstudent.git
   cd loginstudent
   ```

2. **Add your screenshots:**
   - Save your screenshots in a folder named `screenshots` in the project root.
   - Name them as `login.png`, `home.png`, `stream.png`, `form.png` (or update the README paths).

3. **Open the app:**
   - Just open `index.html` in your browser. No server or backend required!

---

## 📋 Stream Allocation Logic

- **CSE**: Computer Science marks ≥ 60
- **EEE**: Mathematics marks < 70
- **ECE**: All other students

The allocation is fully automated when a student submits the admission form.

---

## 📦 Project Structure

```
loginstudent/
├── index.html
├── home.html
├── form.html
├── stream.html
├── auth.js
├── screenshots/
│   ├── login.png
│   ├── home.png
│   ├── stream.png
│   └── form.png
└── README.md
```

---

## 🙌 Credits

- UI Design: [Your Name]
- Background images: [Unsplash/Pexels or your source]
- Icons: [Font Awesome](https://fontawesome.com/)

---

> **Note:** All data is stored in your browser's localStorage. No information is sent to any server.
