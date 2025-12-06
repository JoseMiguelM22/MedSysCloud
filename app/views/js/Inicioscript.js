 const header = document.getElementById("mainHeader");

        // Cambiar navbar al hacer scroll
        window.addEventListener("scroll", () => {
            if (window.scrollY > 10) {
                header.classList.add("bg-white", "dark:bg-gray-900", "shadow-lg");
            } else {
                header.classList.remove("bg-white", "dark:bg-gray-900", "shadow-lg");
            }
        });

        // Menú mobile
        const menuBtn = document.getElementById("menuBtn");
        const mobileMenu = document.getElementById("mobileMenu");

        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });

        // Dropdown crear cuenta
        document.getElementById("mobileDropdownBtn").addEventListener("click", () => {
            document.getElementById("mobileDropdown").classList.toggle("hidden");
        });

        // Dropdown iniciar sesión
        document.getElementById("mobileLoginBtn").addEventListener("click", () => {
            document.getElementById("mobileLoginDropdown").classList.toggle("hidden");
        });

        // Dark mode
        const html = document.documentElement;
        const darkToggle = document.getElementById("darkToggle");
        const darkToggleMobile = document.getElementById("darkToggleMobile");

        // Cargar modo desde localStorage
        if (localStorage.getItem("theme") === "dark") {
            html.classList.add("dark");
        }

        function toggleDark() {
            html.classList.toggle("dark");

            // Guardar preferencia
            localStorage.setItem("theme",
                html.classList.contains("dark") ? "dark" : "light"
            );
        }

        darkToggle.addEventListener("click", toggleDark);
        darkToggleMobile.addEventListener("click", toggleDark);