<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | PESO Manolo Fortich</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 1rem;
        }
        
        .login-card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            padding: 2.5rem;
            width: 100%;
            max-width: 400px;
        }
        
        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.25rem;
        }
        
        .form-input {
            width: 100%;
            padding: 0.625rem 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }
        
        .btn-login {
            width: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 0.625rem;
            border-radius: 0.5rem;
            font-weight: 500;
            font-size: 0.875rem;
            border: none;
            cursor: pointer;
            transition: opacity 0.3s ease;
        }
        
        .btn-login:hover {
            opacity: 0.9;
        }
        
        .back-link {
            color: #6b7280;
            font-size: 0.875rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
        }
        
        .back-link:hover {
            color: #667eea;
        }
        
        .register-link {
            color: #667eea;
            font-weight: 500;
            text-decoration: none;
        }
        
        .register-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <!-- Logo -->
        <div class="text-center mb-6">
            <img src="/images/peso-logo.jpg" alt="PESO Logo" class="h-16 w-16 mx-auto rounded-lg shadow-lg mb-3">
            <h1 class="text-2xl font-bold text-gray-800">Welcome Back</h1>
            <p class="text-sm text-gray-500">Sign in to your PESO account</p>
        </div>
        
        <!-- Login Form -->
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <div class="mb-4">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-input" placeholder="juan@example.com">
            </div>
            
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" class="form-input" placeholder="••••••••">
            </div>
            
            <div class="flex items-center justify-between mb-4">
                <label class="flex items-center gap-2">
                    <input type="checkbox" class="rounded border-gray-300">
                    <span class="text-sm text-gray-600">Remember me</span>
                </label>
                <a href="#" class="text-sm text-gray-500 hover:text-gray-700">Forgot password?</a>
            </div>
            
            <button type="submit" class="btn-login mb-4">
                Sign In
            </button>
            
            <p class="text-center text-sm text-gray-600">
                Don't have an account? 
                <a href="{{ route('register') }}" class="register-link">Register here</a>
            </p>
            
            <div class="text-center mt-4">
                <a href="{{ route('home') }}" class="back-link">
                    ← Back to Home
                </a>
            </div>
        </form>
    </div>
</body>
</html>