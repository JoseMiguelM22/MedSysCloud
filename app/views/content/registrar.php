<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Crea una cuenta | MedSysCloud</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>

    <style>
        .flag { width: 22px; height: 16px; object-fit: cover; }
    </style>
</head>
<body class="bg-[#f7f9fc] dark:bg-gray-900 min-h-screen flex flex-col items-center pt-10 transition-colors">

    <!-- BOTÓN MODO OSCURO -->
    <button id="darkModeBtn"
        class="fixed right-6 top-6 z-50 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200
               px-3 py-2 rounded-full shadow-lg flex items-center gap-2 hover:scale-105 transition">
        <span class="hidden sm:inline">🌙 / ☀️</span>
        <svg id="iconMoon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path d="M17.293 13.293A8 8 0 116.707 2.707a7 7 0 0010.586 10.586z" />
        </svg>
    </button>

    <!-- LOGO / TITULO -->
    <h1 class="text-4xl font-bold mb-2 tracking-wide text-[#0082A0] dark:text-cyan-300">
        MedSys<span class="text-[#00425A] dark:text-cyan-100">Cloud</span>
    </h1>

    <!-- SUBTITULO -->
    <h2 class="text-2xl font-semibold text-center text-gray-800 dark:text-gray-200 mt-2 px-4">
        Crea una cuenta como médico o profesional de la salud en MedSysCloud
    </h2>

    <!-- CONTENEDOR FORM -->
    <div class="mt-10 bg-white dark:bg-gray-800 shadow-lg w-full max-w-3xl p-10 rounded-xl border border-gray-100 dark:border-gray-700 transition-colors">

        <form class="space-y-6">

            <!-- ESPECIALIDADES -->
            <div>
                <label class="text-sm font-semibold text-gray-700 dark:text-gray-200">Selecciona tus especialidades médicas</label>
                <select class="w-full p-3 mt-1 border rounded-lg bg-gray-50 dark:bg-gray-700 dark:text-gray-200 border-gray-300 dark:border-gray-600">
                    <option value="">Selecciona las especialidades médicas</option>
                    <option>Medicina General</option>
                    <option>Cardiología</option>
                    <option>Pediatría</option>
                    <option>Ginecología</option>
                    <option>Dermatología</option>
                    <option>Neurología</option>
                    <option>Cirujano</option>
                    <option>Odontólogo</option>
                    <option>Nutricionista</option>
                    <option>Fisioterapeuta</option>
                </select>
            </div>

            <!-- NOMBRES -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="text-sm font-semibold text-gray-700 dark:text-gray-200">Primer Nombre</label>
                    <input type="text" class="w-full p-3 mt-1 border rounded-lg bg-gray-50 dark:bg-gray-700 dark:text-gray-200 border-gray-300 dark:border-gray-600" placeholder="José Miguel">
                </div>

                <div>
                    <label class="text-sm font-semibold text-gray-700 dark:text-gray-200">Primer Apellido</label>
                    <input type="text" class="w-full p-3 mt-1 border rounded-lg bg-gray-50 dark:bg-gray-700 dark:text-gray-200 border-gray-300 dark:border-gray-600" placeholder="Medina">
                </div>
            </div>

            <!-- IDENTIFICACIÓN + TELÉFONO -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <div>
                    <label class="text-sm font-semibold text-gray-700 dark:text-gray-200">Número de identificación personal</label>
                    <input type="text" class="w-full p-3 mt-1 border rounded-lg bg-gray-50 dark:bg-gray-700 dark:text-gray-200 border-gray-300 dark:border-gray-600" placeholder="Ej: V-9.999.999">
                </div>

                <!-- Teléfono -->
                <div>
                    <label class="text-sm font-semibold text-gray-700 dark:text-gray-200">Teléfono</label>

                    <div class="flex items-center border mt-1 rounded-lg bg-gray-50 dark:bg-gray-700 border-gray-300 dark:border-gray-600">
                        <img id="flag" class="flag ml-3" src="https://flagcdn.com/w20/ve.png" alt="bandera">

                        <select id="countryCode" class="p-3 bg-transparent outline-none text-sm text-gray-700 dark:text-gray-200">
                            <option value="+58" data-flag="ve">+58</option>
                            <option value="+57" data-flag="co">+57</option>
                            <option value="+1"  data-flag="us">+1</option>
                            <option value="+34" data-flag="es">+34</option>
                            <option value="+52" data-flag="mx">+52</option>
                        </select>

                        <input id="phoneNumber" type="text" class="w-full p-3 outline-none bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-200" placeholder="Número de teléfono">
                    </div>

                    <p id="phoneError" class="text-xs text-red-600 mt-1 hidden">Número inválido</p>
                </div>

            </div>

            <!-- CORREO -->
            <div>
                <label class="text-sm font-semibold text-gray-700 dark:text-gray-200">Correo</label>
                <input type="email" class="w-full p-3 mt-1 border rounded-lg bg-gray-50 dark:bg-gray-700 dark:text-gray-200 border-gray-300 dark:border-gray-600" placeholder="correo@ejemplo.com">
            </div>

            <!-- CONTRASEÑAS -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="text-sm font-semibold text-gray-700 dark:text-gray-200">Contraseña</label>
                    <input type="password" class="w-full p-3 mt-1 border rounded-lg bg-gray-50 dark:bg-gray-700 dark:text-gray-200 border-gray-300 dark:border-gray-600">
                    <p class="text-xs mt-1 text-gray-500 dark:text-gray-400">(6 caracteres mínimo)</p>
                </div>

                <div>
                    <label class="text-sm font-semibold text-gray-700 dark:text-gray-200">Confirmar contraseña</label>
                    <input type="password" class="w-full p-3 mt-1 border rounded-lg bg-gray-50 dark:bg-gray-700 dark:text-gray-200 border-gray-300 dark:border-gray-600">
                </div>
            </div>

            <!-- SEXO -->
            <div>
                <label class="text-sm font-semibold text-gray-700 dark:text-gray-200">Sexo</label>
                <select class="w-full p-3 mt-1 border rounded-lg bg-gray-50 dark:bg-gray-700 dark:text-gray-200 border-gray-300 dark:border-gray-600">
                    <option>Masculino</option>
                    <option>Femenino</option>
                    <option>Otro</option>
                </select>
            </div>

            <!-- PAÍS + CIUDAD -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label class="text-sm font-semibold text-gray-700 dark:text-gray-200">Selecciona tu país</label>
                    <select id="country" class="w-full p-3 mt-1 border rounded-lg bg-gray-50 dark:bg-gray-700 dark:text-gray-200 border-gray-300 dark:border-gray-600">
                        <option value="">Seleccione</option>
                        <option value="venezuela">Venezuela</option>
                        <option value="colombia">Colombia</option>
                        <option value="mexico">México</option>
                        <option value="españa">España</option>
                        <option value="usa">Estados Unidos</option>
                    </select>
                </div>

                <div>
                    <label class="text-sm font-semibold text-gray-700 dark:text-gray-200">Selecciona tu ciudad</label>
                    <select id="city" class="w-full p-3 mt-1 border rounded-lg bg-gray-50 dark:bg-gray-700 dark:text-gray-200 border-gray-300 dark:border-gray-600">
                        <option>Seleccione primero un país</option>
                    </select>
                </div>

            </div>

            <!-- BOTÓN -->
            <button class="w-full bg-[#0082A0] dark:bg-[#0b879a] text-white py-3 rounded-lg text-lg font-semibold hover:bg-[#006d87] transition">
                Crear cuenta
            </button>

            <p class="text-center mt-3 text-sm text-gray-600 dark:text-gray-300">
                ¿Ya tienes cuenta?  
                <a href="#" class="text-[#0082A0] dark:text-cyan-200 font-semibold">Iniciar sesión</a>
            </p>

        </form>
    </div>

    <!-- SCRIPTS -->
    <script>
    // ============================
    // MODO OSCURO
    // ============================
    const darkBtn = document.getElementById('darkModeBtn');
    darkBtn.addEventListener('click', () => {
        document.documentElement.classList.toggle('dark');
    });

    // ============================
    // CIUDADES POR PAÍS
    // ============================
    const country = document.getElementById("country");
    const city = document.getElementById("city");

    const cities = {
        venezuela: ["Caracas", "Valencia", "Maracaibo", "Barquisimeto", "Mérida", "Punto Fijo"],
        colombia: ["Bogotá", "Medellín", "Cali", "Barranquilla", "Cartagena"],
        mexico: ["Ciudad de México", "Guadalajara", "Monterrey", "Puebla"],
        españa: ["Madrid", "Barcelona", "Valencia", "Sevilla"],
        usa: ["Miami", "New York", "Los Ángeles", "Chicago"]
    };

    country.addEventListener("change", () => {
        city.innerHTML = "";
        const selected = country.value;
        if (cities[selected]) {
            cities[selected].forEach(c => city.innerHTML += `<option>${c}</option>`);
        } else {
            city.innerHTML = `<option>Seleccione primero un país</option>`;
        }
    });

    // ======================================
    // DETECTAR PAÍS AUTOMÁTICAMENTE
    // ======================================

    const countryCode = document.getElementById("countryCode");
    const flag = document.getElementById("flag");
    const phone = document.getElementById("phoneNumber");

    // Prefijos y países
    const prefixToCountry = {
        "+58": "venezuela",
        "+57": "colombia",
        "+52": "mexico",
        "+34": "españa",
        "+1": "usa"
    };

    const countryToPrefix = {
        venezuela: { prefix: "+58", flag: "ve" },
        colombia: { prefix: "+57", flag: "co" },
        mexico: { prefix: "+52", flag: "mx" },
        españa: { prefix: "+34", flag: "es" },
        usa: { prefix: "+1", flag: "us" }
    };

    // ================
    // 1️⃣ Cambiar país → cambia código + bandera
    // ================
    country.addEventListener("change", () => {
        const selected = country.value;
        if (countryToPrefix[selected]) {
            countryCode.value = countryToPrefix[selected].prefix;
            flag.src = `https://flagcdn.com/w20/${countryToPrefix[selected].flag}.png`;
        }
    });

    // ================
    // 2️⃣ Cambiar CÓDIGO del TELÉFONO → detecta país
    // ================
    phone.addEventListener("input", () => {
        let value = phone.value.replace(/\s+/g, "");

        // buscar prefijo coincidente
        for (let prefix in prefixToCountry) {
            if (value.startsWith(prefix.replace("+", "")) || value.startsWith(prefix)) {

                // país detectado automáticamente
                let detectedCountry = prefixToCountry[prefix];

                // cambiar país en select
                country.value = detectedCountry;

                // aplicar código y bandera
                countryCode.value = prefix;
                flag.src = `https://flagcdn.com/w20/${countryToPrefix[detectedCountry].flag}.png`;

                break;
            }
        }
    });

    // ============================
    // VALIDACIÓN DEL TELÉFONO
    // ============================
    phone.addEventListener("input", () => {
        const digits = phone.value.replace(/\D/g, "");
        const phoneError = document.getElementById("phoneError");

        if (digits.length > 0 && digits.length < 6) {
            phoneError.classList.remove("hidden");
        } else {
            phoneError.classList.add("hidden");
        }
    });
</script>




</body>
</html>
