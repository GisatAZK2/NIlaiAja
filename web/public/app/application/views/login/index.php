<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NilaiAja Admin - Login</title>
  <link rel="shortcut icon" href="<?= base_url('assets/ikan.png'); ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <style>
    :root {
      --primary-color: #564a5b;
      --ilus         : #3D4F6C;
      --primary-hover:#8d3f38;
      --dark-color: #1e293b;
      --light-color: #f8fafc;
      --sidebar-width: 280px;
    }
    
    body {
      background-color: #f1f5f9;
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      background-image: 
        radial-gradient(at 80% 0%, hsla(189, 100%, 56%, 0.1) 0px, transparent 50%),
        radial-gradient(at 0% 50%, hsla(355, 100%, 93%, 0.1) 0px, transparent 50%);
    }
    
    .login-container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
    }
    
    .login-card {
      border: none;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 
                  0 10px 10px -5px rgba(0, 0, 0, 0.04);
      transition: all 0.3s ease;
    }
    
    .login-card:hover {
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 
                  0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    
    .login-illustration {
      background: linear-gradient(165deg, var(--ilus),#ac3924);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
      color: white;
    }
    
    .login-illustration img {
      max-width: 100%;
      height: auto;
    }
    
    .login-form {
      padding: 3rem;
      background-color: white;
    }
    
    .form-control {
      padding: 0.75rem 1rem;
      border-radius: 8px;
      border: 1px solid #e2e8f0;
      transition: all 0.3s;
    }
    
    .form-control:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
    }
    
    .btn-login {
      background-color: var(--primary-color);
      border: none;
      padding: 0.75rem 1.5rem;
      font-weight: 500;
      transition: all 0.3s;
    }
    
    .btn-login:hover {
      background-color: var(--primary-hover);
      transform: translateY(-2px);
    }
    
    .divider {
      display: flex;
      align-items: center;
      text-align: center;
      color: #94a3b8;
      margin: 1.5rem 0;
    }
    
    .divider::before, .divider::after {
      content: "";
      flex: 1;
      border-bottom: 1px solid #e2e8f0;
    }
    
    .divider::before {
      margin-right: 1rem;
    }
    
    .divider::after {
      margin-left: 1rem;
    }
    
    .social-login .btn {
      border-radius: 8px;
      padding: 0.5rem;
      font-size: 0.9rem;
    }
    
    .login-footer {
      text-align: center;
      margin-top: 2rem;
      color: #64748b;
    }
    
    .brand-logo {
      font-weight: 700;
      font-size: 1.5rem;
      color: var(--dark-color);
      display: flex;
      align-items: center;
      margin-bottom: 2rem;
    }
    
    .brand-logo i {
      color: var(--primary-color);
      margin-right: 0.5rem;
      font-size: 1.8rem;
    }
    
    @media (max-width: 992px) {
      .login-illustration {
        display: none;
      }
    }
  </style>

</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if ($this->session->flashdata('login_error')): ?>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    if (sessionStorage.getItem('firstLogin') !== 'true') {
      sessionStorage.setItem('firstLogin', 'true');
    } else {
      Swal.fire({
        icon: 'error',
        title: 'Login Gagal!',
        text: '<?= $this->session->flashdata("login_error") ?>',
        confirmButtonText: 'Coba Lagi',
        confirmButtonColor: '#d33'
      });
    }
  });
</script>
<?php endif; ?>

<body>
  <div class="login-container">
    <div class="row g-0">
      <div class="col-lg-6 d-none d-lg-block">
        <div class="login-illustration h-100">
          <div class="text-center">
            <img src="<?= base_url('assets/ikan.png'); ?>" alt="Login Illustration" class="rounded-circle" width="250" height="250">
            <h3 class="mt-4 fw-bold">Welcome Back!</h3>
            <p class="opacity-75">Manage your dashboard with powerful tools</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="login-card h-100">
          <div class="login-form">
            <div class="brand-logo">
              <i class="bi bi-shield-lock"></i>
              <span>AdminPanel</span>
            </div>
            <h2 class="mb-1 fw-bold">Sign in</h2>
            <p class="mb-4 text-muted">Enter your credentials to access the dashboard</p>
            
            <form action="<?= base_url('Login/proses_login'); ?>" method="POST">
              <div class="mb-3">
                <label for="username" class="form-label fw-medium">Username</label>
                <div class="input-group">
                  <span class="input-group-text bg-transparent"><i class="bi bi-person"></i></span>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
                </div>
              </div>
              
              <div class="mb-3">
                <label for="password" class="form-label fw-medium">Password</label>
                <div class="input-group">
                  <span class="input-group-text bg-transparent"><i class="bi bi-lock"></i></span>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                  <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                    <i class="bi bi-eye"></i>
                  </button>
                </div>
              </div>
              
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="rememberMe">
                  <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                <a href="#" class="text-decoration-none text-primary">Forgot password?</a>
              </div>
              
              <button type="submit" class="btn btn-login btn-primary w-100 rounded-pill fw-medium py-2">
                Sign In <i class="bi bi-arrow-right-short"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
  <script>
    // Toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function() {
      const passwordInput = document.getElementById('password');
      const icon = this.querySelector('i');
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        icon.classList.remove('bi-eye');
        icon.classList.add('bi-eye-slash');
      } else {
        passwordInput.type = 'password';
        icon.classList.remove('bi-eye-slash');
        icon.classList.add('bi-eye');
      }
    });
    
    // Add animation on load
    document.addEventListener('DOMContentLoaded', function() {
      const loginCard = document.querySelector('.login-card');
      loginCard.style.opacity = '0';
      loginCard.style.transform = 'translateY(20px)';
      
      setTimeout(() => {
        loginCard.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        loginCard.style.opacity = '1';
        loginCard.style.transform = 'translateY(0)';
      }, 100);
    });
  </script>
</body>
</html>
