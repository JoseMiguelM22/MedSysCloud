<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in | MedSysCloud</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
</head>

<body class="bg-white dark:bg-gray-900 transition-colors duration-300">

    <!-- BOTÓN MODO OSCURO -->
    <button id="darkModeBtn"
        class="fixed top-4 right-4 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 
               px-4 py-2 rounded-full shadow-md hover:scale-105 transition">
        🌙 / ☀️
    </button>

    <!-- CONTENEDOR PRINCIPAL -->
    <div class="grid grid-cols-1 md:grid-cols-2 min-h-screen">

        <!-- IMAGEN (arriba en móviles) -->
        <div class="md:hidden">
            <img src="../img/login.jpg"
                class="w-full h-64 object-cover"
                alt="Doctora sonriendo">
        </div>

        <!-- FORMULARIO CENTRADO -->
        <div class="flex flex-col justify-center items-center px-10 md:px-20 py-10 text-center">

            <!-- Logo -->
            <h1 class="text-4xl font-bold text-cyan-700 dark:text-cyan-400 mb-8">
                <span class="font-normal">MedSys</span>Cloud
            </h1>

            <!-- Texto principal -->
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white leading-tight">
                Inicia sesión en tu cuenta<br>
                como médico o profesional<br>
                de la salud
            </h2>

            <p class="text-gray-600 dark:text-gray-300 mt-2">
                O 
                <a href="#" class="text-cyan-700 dark:text-cyan-400 font-semibold hover:underline">
                    empieza una prueba gratis de 30 días →
                </a>
            </p>

            <!-- Línea separadora -->
            <div class="flex items-center my-8 w-full max-w-sm">
                <div class="flex-grow border-t border-gray-300 dark:border-gray-700"></div>
                <span class="mx-4 text-gray-500 dark:text-gray-300">MedSysCloud</span>
                <div class="flex-grow border-t border-gray-300 dark:border-gray-700"></div>
            </div>

            <!-- FORM -->
            <form class="space-y-5 w-full max-w-sm">

                <div class="text-left">
                    <label class="block text-gray-700 dark:text-gray-300 font-medium">Correo</label>
                    <input type="email"
                        class="w-full mt-1 px-3 py-2 border border-gray-300 dark:border-gray-700 
                               dark:bg-gray-800 dark:text-gray-200 rounded-md 
                               focus:outline-none focus:ring-2 focus:ring-cyan-600 dark:focus:ring-cyan-400"
                        placeholder="Correo">
                </div>

                <div class="text-left">
                    <label class="block text-gray-700 dark:text-gray-300 font-medium">Contraseña</label>
                    <input type="password"
                        class="w-full mt-1 px-3 py-2 border border-gray-300 dark:border-gray-700 
                               dark:bg-gray-800 dark:text-gray-200 rounded-md 
                               focus:outline-none focus:ring-2 focus:ring-cyan-600 dark:focus:ring-cyan-400"
                        placeholder="••••••••">
                </div>

                <!-- Opciones -->
                <div class="flex justify-between items-center text-sm">
                    <label class="flex items-center space-x-2 text-gray-700 dark:text-gray-300">
                        <input type="checkbox" class="h-4 w-4 text-cyan-600">
                        <span>Recuérdame</span>
                    </label>

                    <a href="#" class="text-cyan-700 dark:text-cyan-400 hover:underline">
                        ¿Olvidaste tu contraseña?
                    </a>
                </div>

                <p class="text-sm text-gray-600 dark:text-gray-300 mt-1">
                    ¿No recibiste el correo de confirmación de cuenta?
                </p>

                <!-- Botón -->
                <button type="submit"
                    class="w-full bg-cyan-700 dark:bg-cyan-600 text-white py-3 rounded-md 
                           font-semibold hover:bg-cyan-800 dark:hover:bg-cyan-700 transition">
                    Iniciar sesión
                </button>

            </form>
        </div>

        <!-- IMAGEN EN PANTALLAS GRANDES -->
        <div class="hidden md:block">
        <img src="../img/login.jpg"
         class="w-full h-full object-cover"
        alt="Doctora sonriendo">
        </div>


    </div>

    <!-- SCRIPT MODO OSCURO -->
    <script>
        const darkBtn = document.getElementById("darkModeBtn");
        darkBtn.addEventListener("click", () => {
            document.documentElement.classList.toggle("dark");
        });
    </script>

</body>
</html>
