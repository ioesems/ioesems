<?php
// Save this file as login.php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="../../images/logo.png">

  <style>
    body {
      font-family: 'Arial', sans-serif;
      background: linear-gradient(135deg, #508bfc, #1e3c72);
      color: #ffffff;
    }

    .card {
      border-radius: 1rem;
      background: rgba(255, 255, 255, 0.9);
      box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }

    .btn-primary {
      background: #508bfc;
      border: none;
    }

    .btn-primary:hover {
      background: #3a6bdb;
    }

    .btn-google {
      background-color: #dd4b39 !important;
      border: none;
    }

    .btn-facebook {
      background-color: #3b5998 !important;
      border: none;
    }

    .form-control {
      background-color: #f7f9fc;
      border: 1px solid #ced4da;
      border-radius: 0.5rem;
    }

    .form-control:focus {
      box-shadow: 0 0 5px rgba(80, 139, 252, 0.8);
      border-color: #508bfc;
    }

    .form-check-label {
      color: #333;
    }

    hr {
      border-top: 2px solid #ddd;
    }

    .password-container {
      position: relative;
    }

    .password-toggle {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      cursor: pointer;
      color: #6c757d;
    }

    @media (max-width: 768px) {
      h3 {
        font-size: 1.5rem;
      }

      .btn {
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong">
            <div class="card-body p-5 text-center">

              <h3 class="mb-5">Sign in</h3>

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="email" class="form-control form-control-lg" placeholder="Enter your email" />
                <label class="form-label" for="email">Email</label>
              </div>

              <div data-mdb-input-init class="form-outline mb-4 password-container">
                <input type="password" id="password" class="form-control form-control-lg" placeholder="Enter your password" />
                <label class="form-label" for="password">Password</label>
                <i class="fas fa-eye password-toggle" id="togglePassword"></i>
              </div>

              <div class="form-check d-flex justify-content-start mb-4">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                <label class="form-check-label" for="form1Example3"> Remember password </label>
              </div>

              <button id="loginButton" class="btn btn-primary btn-lg btn-block" type="button">Login</button>

              <hr class="my-4">

              <button id="googleSignIn" class="btn btn-lg btn-block btn-google" type="button">
                <i class="fab fa-google me-2"></i> Sign in with Google
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/11.2.0/firebase-app.js";
    import { getAuth, signInWithEmailAndPassword, GoogleAuthProvider, signInWithPopup } from "https://www.gstatic.com/firebasejs/11.2.0/firebase-auth.js";

    const firebaseConfig = {
      apiKey: "AIzaSyBHsYpoIlg5qF4tbrjslegESa9VB9tHvEI",
      authDomain: "hellow-e7092.firebaseapp.com",
      projectId: "hellow-e7092",
      storageBucket: "hellow-e7092.appspot.com",
      messagingSenderId: "324883650584",
      appId: "1:324883650584:web:bc230ba90f3e9504fe8b6d",
      measurementId: "G-1P6YQRYR7K"
    };
     
    // const firebaseConfig = {
    //     apiKey: "AIzaSyDyCmJH8PoT3eTtRS52nZ5fyrofwIymMUk",
    //     authDomain: "webapp-e3540.firebaseapp.com",
    //     projectId: "webapp-e3540",
    //     storageBucket: "webapp-e3540.firebasestorage.app",
    //     messagingSenderId: "330320311086",
    //     appId: "1:330320311086:web:56a6cc31dd4daad42d00bf"
    //   };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const auth = getAuth(app);

    // Email and Password Login
    document.getElementById('loginButton').addEventListener('click', async () => {
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      try {
        const userCredential = await signInWithEmailAndPassword(auth, email, password);
        window.location.href = 'index.php';
      } catch (error) {
        alert(error.message);
      }
    });

    // Google Sign-In with Admin Check
    document.getElementById('googleSignIn').addEventListener('click', async () => {
      const provider = new GoogleAuthProvider();
      try {
        const result = await signInWithPopup(auth, provider);
        const userEmail = result.user.email;

        if (userEmail === 'mukeshsingh98121159@gmail.com') {
          alert('Welcome Admin! You are successfully logged in.');
          window.location.href = 'index.php';
          
        } else {
          alert('Welcome! You are successfully logged in.');
          window.location.href = '../../index.php';
          <?php $_SESSION['admin_logged_in'] = true; ?>
        }
      } catch (error) {
        alert(error.message);   
      }
    });

    // Toggle Password Visibility
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', function () {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      this.classList.toggle('fa-eye');
      this.classList.toggle('fa-eye-slash');
    });
  </script>
</body>
</html>
