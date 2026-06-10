<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - Premium Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .input-focus {
            transition: all 0.3s ease;
        }

        .input-focus:focus {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.15);
        }

        .btn-hover {
            transition: all 0.3s ease;
        }

        .btn-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .social-btn {
            transition: all 0.3s ease;
        }

        .social-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .floating-label {
            transition: all 0.3s ease;
        }

        .input-group:focus-within .floating-label {
            transform: translateY(-24px) scale(0.85);
            color: #667eea;
        }

        .input-group input:not(:placeholder-shown) + .floating-label {
            transform: translateY(-24px) scale(0.85);
            color: #6b7280;
        }

        .animate-fade-in {
            animation: fadeIn 0.8s ease-out;
        }

        .animate-slide-up {
            animation: slideUp 0.6s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
        .stagger-3 { animation-delay: 0.3s; }
        .stagger-4 { animation-delay: 0.4s; }
        .stagger-5 { animation-delay: 0.5s; }
    </style>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md animate-fade-in">

        <div class="glass-effect rounded-3xl p-8 shadow-2xl animate-slide-up stagger-1">
                <div class="text-center mb-3 animate-slide-up">
            <div class="w-16 h-16 bg-white rounded-2xl shadow-lg mx-auto mb-4 flex items-center justify-center">
                <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </div>

        </div>
             <h1 class="text-3xl font-bold text-black text-center mb-1">Create Account</h1>
            <form class="space-y-6" method="post" action="/register">
                @csrf
                <div class="input-group relative animate-slide-up stagger-2">
                    <input
                        type="text"
                        id="username"
                        placeholder=" "
                        class="input-focus w-full px-3 py-3 bg-gray-50 border-2 border-gray-200 rounded-xl text-gray-900 placeholder-transparent focus:outline-none focus:border-indigo-500 focus:bg-white"
                        required
                        name="name"
                    >
                    <label for="username" class="floating-label absolute left-4 top-4 text-gray-500 pointer-events-none">
                        Username
                    </label>
                </div>


                <div class="input-group relative animate-slide-up stagger-3">
                    <input
                        type="email"
                        id="email"
                        placeholder=" "
                        class="input-focus w-full px-3 py-3 bg-gray-50 border-2 border-gray-200 rounded-xl text-gray-900 placeholder-transparent focus:outline-none focus:border-indigo-500 focus:bg-white"
                        required
                        name="email"
                    >
                    <label for="email" class="floating-label absolute left-4 top-4 text-gray-500 pointer-events-none">
                        Email address
                    </label>
                </div>


                <div class="input-group relative animate-slide-up stagger-4">
                    <input
                        type="password"
                        id="password"
                        placeholder=" "
                        class="input-focus w-full px-3 py-3 bg-gray-50 border-2 border-gray-200 rounded-xl text-gray-900 placeholder-transparent focus:outline-none focus:border-indigo-500 focus:bg-white pr-12"
                        required
                        name="password"
                    >
                    <label for="password" class="floating-label absolute left-4 top-4 text-gray-500 pointer-events-none">
                        Password
                    </label>
                    <button type="button" class="absolute right-4 top-4 text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </button>
                </div>
                <button
                    type="submit"
                    class="btn-hover w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl animate-slide-up stagger-5"
                >
                    Create Account
                </button>
            </form>

            <div class="relative my-4 animate-slide-up stagger-5">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-200"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-4 bg-white text-gray-500 font-medium">Or continue with</span>
                </div>
            </div>
            <div class=" animate-slide-up stagger-3 flex justify-center gap-3">

                <a href="{{ route('auth.redirect', ['provider' => 'google']) }}" class="p-2 social-btn w-12 h-12 flex items-center justify-center  border-2 border-gray-200 rounded-xl text-gray-700 font-medium hover:bg-gray-50">
                    <svg class="w-full h-full" viewBox="0 0 24 24">
                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                    </svg>

                </a>


                <a href="{{ route('auth.redirect', ['provider' => 'facebook']) }}"  class="p-2 social-btn w-12 h-12 flex items-center justify-center  border-2 border-gray-200 rounded-xl text-gray-700 font-medium hover:bg-gray-50">
                    <svg class="w-full h-full" fill="#1877F2" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
            </div>


            <div class="text-center mt-8 animate-slide-up stagger-5">
                <p class="text-gray-600">
                    Already have an account?
                    <a href="/login" class="text-indigo-600 hover:text-indigo-700 font-semibold ml-1">Sign in</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        // Add interactive functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Password visibility toggle
            const passwordInput = document.getElementById('password');
            const toggleButton = passwordInput.nextElementSibling;

            toggleButton.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                // Toggle eye icon
                const eyeIcon = this.querySelector('svg');
                if (type === 'text') {
                    eyeIcon.innerHTML = `
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"></path>
                    `;
                } else {
                    eyeIcon.innerHTML = `
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    `;
                }
            });



            // Add floating label animation for pre-filled inputs
            const inputs = document.querySelectorAll('input[type="text"], input[type="email"], input[type="password"]');
            inputs.forEach(input => {
                if (input.value) {
                    input.classList.add('has-value');
                }

                input.addEventListener('blur', function() {
                    if (this.value) {
                        this.classList.add('has-value');
                    } else {
                        this.classList.remove('has-value');
                    }
                });
            });
        });
    </script>
</body>
</html>
