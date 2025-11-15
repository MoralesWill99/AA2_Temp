<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0;
                padding: 20px;
            }
            
            .auth-container {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                border-radius: 20px;
                padding: 60px 40px;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
                text-align: center;
                max-width: 500px;
                width: 100%;
                animation: fadeIn 0.6s ease-out;
            }
            
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            h1 {
                color: #333;
                font-size: 28px;
                margin-bottom: 20px;
                font-weight: 600;
            }
            
            p {
                color: #666;
                font-size: 16px;
                margin-bottom: 40px;
                line-height: 1.6;
            }
            
            .button-group {
                display: flex;
                gap: 20px;
                justify-content: center;
                flex-wrap: wrap;
            }
            
            .btn {
                padding: 14px 32px;
                border-radius: 50px;
                text-decoration: none;
                font-weight: 500;
                font-size: 16px;
                transition: all 0.3s ease;
                display: inline-block;
                min-width: 120px;
            }
            
            .btn-primary {
                background: #667eea;
                color: white;
                box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
            }
            
            .btn-primary:hover {
                background: #5a67d8;
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(102, 126, 234, 0.5);
            }
            
            .btn-secondary {
                background: transparent;
                color: #667eea;
                border: 2px solid #667eea;
            }
            
            .btn-secondary:hover {
                background: #667eea;
                color: white;
                transform: translateY(-2px);
            }
            
            @media (max-width: 480px) {
                .auth-container {
                    padding: 40px 20px;
                }
                
                h1 {
                    font-size: 24px;
                }
                
                .button-group {
                    flex-direction: column;
                    align-items: center;
                }
                
                .btn {
                    width: 100%;
                    max-width: 200px;
                }
            }
        </style>
    </head>
    <body>
        <div class="auth-container">
            <h1>Bienvenido a Multiservicios Morales!

            </h1>
            <p>Necesitamos que te logees para ver los detalles de nuestros servicios, por favor inicia sesión o regístrate.</p>
            
            <div class="button-group">
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="btn btn-primary">
                        Iniciar Sesión
                    </a>
                @endif
                
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-secondary">
                        Registrarse
                    </a>
                @endif
            </div>
        </div>
    </body>
</html>