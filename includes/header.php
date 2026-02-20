<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airatingz - Reputation Management SaaS</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Compiled Tailwind CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Feather Icons Script -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-brand-background text-brand-text font-raleway overflow-x-hidden antialiased selection:bg-brand-primary/20 selection:text-brand-primary">

    <!-- ── Floating Navbar ─────────────────────────────────────── -->
    <div class="fixed top-0 left-0 right-0 z-50 flex justify-center px-4 pt-4">
        <nav id="navbar" class="w-full max-w-7xl flex items-center justify-between px-5 py-2.5 rounded-2xl transition-all duration-300 ease-in-out bg-white/75 backdrop-blur-xl border border-gray-200/50 shadow-[0_4px_24px_rgba(0,0,0,0.06)]" data-aos="fade-down" data-aos-duration="500">
            
            <!-- Logo -->
            <a href="index.php" class="flex items-center gap-2.5 select-none">
                <!-- IMPORTANT: Update this image name if the hash changes, or rename the file to remove the hash -->
                <img src="assets/images/ai-rating-new-logo-final-removebg-preview-TcEMTq65.png" alt="Airatingz" class="h-12 w-auto object-contain" />
            </a>

            <!-- Desktop nav links -->
            <div class="hidden md:flex items-center gap-1">
                <a href="#features" class="relative px-3.5 py-1.5 text-sm font-semibold text-gray-500 hover:text-gray-900 transition-colors duration-200 rounded-lg hover:bg-gray-100/70 group">Features</a>
                <a href="#process" class="relative px-3.5 py-1.5 text-sm font-semibold text-gray-500 hover:text-gray-900 transition-colors duration-200 rounded-lg hover:bg-gray-100/70 group">How it works</a>
                <a href="#pricing" class="relative px-3.5 py-1.5 text-sm font-semibold text-gray-500 hover:text-gray-900 transition-colors duration-200 rounded-lg hover:bg-gray-100/70 group">Pricing</a>
                <a href="#enterprise" class="relative px-3.5 py-1.5 text-sm font-semibold text-gray-500 hover:text-gray-900 transition-colors duration-200 rounded-lg hover:bg-gray-100/70 group">Enterprise</a>
            </div>

            <!-- Desktop CTAs -->
            <div class="hidden md:flex items-center gap-2">
                <a href="#login" class="px-4 py-2 text-sm font-semibold text-gray-500 hover:text-gray-900 transition-colors duration-200 rounded-lg hover:bg-gray-100/70">
                    Log in
                </a>
                <a href="#signup" class="inline-flex items-center gap-1.5 px-4 py-2 rounded-xl bg-gray-900 text-white text-sm font-semibold shadow-md shadow-black/20 hover:bg-gray-800 transition-colors duration-200 hover:scale-105 active:scale-95 transform">
                    Get Started
                    <i data-feather="arrow-right" class="w-3 h-3"></i>
                </a>
            </div>

            <!-- Mobile hamburger -->
            <button id="mobile-menu-btn" class="md:hidden w-9 h-9 flex items-center justify-center rounded-lg text-gray-600 hover:bg-gray-100 transition-colors" aria-label="Toggle menu">
                <i data-feather="menu" id="menu-icon" class="w-5 h-5"></i>
            </button>
        </nav>
    </div>

    <!-- ── Mobile Menu Overlay ──────────────────────────────────── -->
    <div id="mobile-menu-backdrop" class="fixed inset-0 z-40 bg-black/20 backdrop-blur-sm hidden transition-opacity duration-200 opacity-0"></div>
    
    <div id="mobile-menu-drawer" class="fixed top-[72px] left-4 right-4 z-50 rounded-2xl bg-white/95 backdrop-blur-2xl border border-gray-200/70 shadow-[0_16px_48px_rgba(0,0,0,0.12)] overflow-hidden hidden transform -translate-y-4 scale-95 opacity-0 transition-all duration-200 ease-out">
        <div class="p-4 space-y-1">
            <a href="#features" class="mobile-link flex items-center px-4 py-3 rounded-xl text-sm font-semibold text-gray-600 hover:text-gray-900 hover:bg-gray-100/80 transition-colors duration-150">Features</a>
            <a href="#process" class="mobile-link flex items-center px-4 py-3 rounded-xl text-sm font-semibold text-gray-600 hover:text-gray-900 hover:bg-gray-100/80 transition-colors duration-150">How it works</a>
            <a href="#pricing" class="mobile-link flex items-center px-4 py-3 rounded-xl text-sm font-semibold text-gray-600 hover:text-gray-900 hover:bg-gray-100/80 transition-colors duration-150">Pricing</a>
            <a href="#enterprise" class="mobile-link flex items-center px-4 py-3 rounded-xl text-sm font-semibold text-gray-600 hover:text-gray-900 hover:bg-gray-100/80 transition-colors duration-150">Enterprise</a>
        </div>

        <div class="px-4 pb-4 pt-1 border-t border-gray-100 flex flex-col gap-2">
            <a href="#login" class="flex items-center justify-center px-4 py-3 rounded-xl text-sm font-semibold text-gray-600 border border-gray-200 hover:bg-gray-50 transition-colors">
                Log in
            </a>
            <a href="#signup" class="flex items-center justify-center gap-2 px-4 py-3 rounded-xl text-sm font-semibold text-white bg-gray-900 hover:bg-gray-800 transition-colors">
                Get Started <i data-feather="arrow-right" class="w-3 h-3"></i>
            </a>
        </div>
    </div>

    <!-- Vanilla JS for Navbar Interactivity -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navbar = document.getElementById('navbar');
            const menuBtn = document.getElementById('mobile-menu-btn');
            const menuIcon = document.getElementById('menu-icon');
            const backdrop = document.getElementById('mobile-menu-backdrop');
            const drawer = document.getElementById('mobile-menu-drawer');
            const mobileLinks = document.querySelectorAll('.mobile-link');
            let isMenuOpen = false;

            // Scroll effect
            window.addEventListener('scroll', () => {
                if (window.scrollY > 30) {
                    navbar.classList.add('bg-white/92', 'backdrop-blur-2xl', 'shadow-[0_8px_40px_rgba(0,0,0,0.10)]');
                    navbar.classList.remove('bg-white/75', 'backdrop-blur-xl', 'shadow-[0_4px_24px_rgba(0,0,0,0.06)]');
                } else {
                    navbar.classList.remove('bg-white/92', 'backdrop-blur-2xl', 'shadow-[0_8px_40px_rgba(0,0,0,0.10)]');
                    navbar.classList.add('bg-white/75', 'backdrop-blur-xl', 'shadow-[0_4px_24px_rgba(0,0,0,0.06)]');
                }
            });

            // Mobile menu toggle
            function toggleMenu() {
                isMenuOpen = !isMenuOpen;
                if (isMenuOpen) {
                    menuIcon.setAttribute('data-feather', 'x');
                    backdrop.classList.remove('hidden');
                    drawer.classList.remove('hidden');
                    
                    // Trigger reflow for transition
                    void drawer.offsetWidth;
                    
                    backdrop.classList.remove('opacity-0');
                    drawer.classList.remove('-translate-y-4', 'scale-95', 'opacity-0');
                    drawer.classList.add('translate-y-0', 'scale-100', 'opacity-100');
                } else {
                    menuIcon.setAttribute('data-feather', 'menu');
                    backdrop.classList.add('opacity-0');
                    drawer.classList.add('-translate-y-4', 'scale-95', 'opacity-0');
                    drawer.classList.remove('translate-y-0', 'scale-100', 'opacity-100');
                    
                    setTimeout(() => {
                        backdrop.classList.add('hidden');
                        drawer.classList.add('hidden');
                    }, 200); // Wait for transition
                }
                feather.replace(); // Re-render icon
            }

            menuBtn.addEventListener('click', toggleMenu);
            backdrop.addEventListener('click', toggleMenu);
            mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));
            
            // Re-render initial icons
            feather.replace();
        });
    </script>
