<!DOCTYPE html>
<html lang="es" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedSys Cloud</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        // Habilitar clases personalizadas para dark mode
        tailwind.config = {
            darkMode: "class",
        }
    </script>

    <style>
        body {
            background-color: #d8f0e8;
        }
        .dark body {
            background-color: #0f172a; /* azul oscuro elegante */
        }
    </style>
</head>
<body class="relative transition-colors duration-300">

    <!-- NAVBAR -->
    <header id="mainHeader" class="w-full py-6 bg-transparent fixed top-0 left-0 z-50 transition-all duration-300 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-6">

            <!-- Logo -->
            <div class="text-3xl font-bold text-cyan-700 dark:text-cyan-300 transition-all">
                <span class="font-normal">MedSys</span><span class="font-bold">Cloud</span>
            </div>

            <!-- Menú Desktop -->
            <nav class="hidden md:flex space-x-8 text-gray-700 dark:text-gray-200 text-lg items-center">

                <a href="#" class="hover:text-cyan-700 dark:hover:text-cyan-300">Inicio</a>
                <a href="#" class="hover:text-cyan-700 dark:hover:text-cyan-300">Buscar un médico</a>
                <a href="#" class="hover:text-cyan-700 dark:hover:text-cyan-300">¿Qué es MedSysCloud?</a>

                <!-- DROPDOWN CREAR CUENTA -->
                <div class="relative group">
                    <button class="hover:text-cyan-700 dark:hover:text-cyan-300">Crear Cuenta ▾</button>

                    <div class="absolute hidden group-hover:block bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-100 shadow-md rounded-md mt-2 w-48 transition-all">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">
                            Registrarse como médico
                        </a>
                    </div>
                </div>

                <!-- DROPDOWN INICIAR SESIÓN -->
                <div class="relative group">
                    <button class="hover:text-cyan-700 dark:hover:text-cyan-300">Iniciar Sesión ▾</button>

                    <div class="absolute hidden group-hover:block bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-100 shadow-md rounded-md mt-2 w-48">
                        <a href="app\views\content\login.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Iniciar Sesión Como Médico</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Iniciar Sesión Como Asistente</a>
                    </div>
                </div>

                <!-- Botón Dark Mode -->
                <button id="darkToggle" 
                    class="ml-4 px-3 py-1 rounded-md bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-gray-100 hover:bg-gray-300 dark:hover:bg-gray-600 transition-all">
                    🌙
                </button>

            </nav>

            <!-- Botón hamburguesa -->
            <button id="menuBtn" class="md:hidden text-gray-800 dark:text-white text-3xl focus:outline-none">
                ☰
            </button>
        </div>

        <!-- MENÚ MOBILE -->
        <div id="mobileMenu"
            class="hidden md:hidden flex flex-col bg-white dark:bg-gray-900 shadow-lg py-4 px-6 space-y-4 text-lg text-gray-800 dark:text-gray-100 transition-all">

            <a href="#" class="hover:text-cyan-700 dark:hover:text-cyan-300">Inicio</a>
            <a href="#" class="hover:text-cyan-700 dark:hover:text-cyan-300">Buscar un médico</a>
            <a href="#" class="hover:text-cyan-700 dark:hover:text-cyan-300">¿Qué es?</a>

            <!-- Dropdown móvil crear cuenta -->
            <div>
                <button id="mobileDropdownBtn" class="w-full text-left hover:text-cyan-700 dark:hover:text-cyan-300">
                    Crear Cuenta ▾
                </button>

                <div id="mobileDropdown" class="hidden ml-4 mt-2 flex flex-col">
                    <a href="#" class="hover:text-cyan-700 dark:hover:text-cyan-300">Registrarse como médico</a>
                </div>
            </div>

            <!-- Dropdown móvil iniciar sesión -->
            <div>
                <button id="mobileLoginBtn" class="w-full text-left hover:text-cyan-700 dark:hover:text-cyan-300">
                    Iniciar Sesión ▾
                </button>

                <div id="mobileLoginDropdown" class="hidden ml-4 mt-2 flex flex-col">
                    <a href="#" class="hover:text-cyan-700 dark:hover:text-cyan-300">Iniciar Sesión Como Médico</a>
                    <a href="#" class="hover:text-cyan-700 dark:hover:text-cyan-300">Iniciar Sesión Como Asistente</a>
                </div>
            </div>

            <!-- Botón dark mode en mobile -->
            <button id="darkToggleMobile" 
                class="w-full px-3 py-2 rounded-md bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-gray-100 hover:bg-gray-300 dark:hover:bg-gray-600 transition-all">
                🌙 Modo oscuro
            </button>

        </div>
    </header>


    <!-- CONTENIDO PRINCIPAL -->
    <section class="max-w-7xl mx-auto px-10 md:px-20 pt-32 pb-20 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

        <!-- Imagen -->
        <div class="order-1 md:order-2 flex justify-center">
            <img src="app\views\img\InicioMedSys.svg" 
                 alt="Ilustración"
                 class="w-3/4 md:w-full max-w-md drop-shadow-lg">
        </div>

        <!-- Tarjeta -->
        <div class="order-2 md:order-1 bg-white dark:bg-gray-800 dark:text-gray-100 shadow-xl rounded-xl p-10 transition-all">

            <h2 class="text-3xl font-bold mb-4">¿Eres un Profesional de la Salud?</h2>

            <a href="#" class="inline-block bg-blue-700 dark:bg-blue-900 text-white px-4 py-2 rounded-md text-sm hover:bg-blue-800 dark:hover:bg-blue-950">
                Regístrate aquí
            </a>

            <p class="text-gray-600 dark:text-gray-300 mt-4">
                Obtén 30 días gratis para probar nuestras herramientas profesionales.
            </p>

            <ul class="mt-6 space-y-3 text-gray-700 dark:text-gray-200">
                <li class="flex items-start"><span class="text-green-600 dark:text-green-400 mr-2">✔</span> Historias clinicas personalizadas (adaptadas para cualquier especialidad médica)</li>
                <li class="flex items-start"><span class="text-green-600 dark:text-green-400 mr-2">✔</span>Compartir historias clínicas o resultados de estudios (imágenes, tomografías, ecografias, resonancia, laboratorios) hacia otros médicos o profesionales de la salud.</li>
                <li class="flex items-start"><span class="text-green-600 dark:text-green-400 mr-2">✔</span>Agenda digital para citas.</li>
                <li class="flex items-start"><span class="text-green-600 dark:text-green-400 mr-2">✔</span>Recordatorios por WhatsApp.</li>
                <li class="flex items-start"><span class="text-green-600 dark:text-green-400 mr-2">✔</span>Reportes PDF personalizados.</li>
                <li class="flex items-start"><span class="text-green-600 dark:text-green-400 mr-2">✔</span>Acceso desde cualquier dispositivo (teléfono, tablet y computadores)</li>
            </ul>

        </div>

    </section>
        <script src="app\views\js\Inicioscript.js"></script>

</body>
</html>

