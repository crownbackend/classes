<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $title ?? 'Gestion Scolaire' }}
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Assurez-vous d'inclure Tailwind CSS -->
</head>
<body class="flex flex-col min-h-screen">
<!-- Header -->
<header class="bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-lg">
    <div class="container mx-auto px-4 py-4 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
        <!-- Logo et titre -->
        <a href="{{ route('home') }}" wire:navigate>
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2">
                    <!-- Icône du livre -->
                    <div class="relative w-10 h-10">
                        <div class="absolute w-full h-full bg-blue-600 rounded-lg transform rotate-12"></div>
                        <div class="absolute w-full h-full bg-purple-600 rounded-lg transform -rotate-12"></div>
                    </div>
                    <!-- Texte du logo -->
                    <span class="text-2xl font-bold text-white">EduTrack</span>
                </div>
            </div>
        </a>

        <!-- Navigation -->
        @auth
        <nav class="flex flex-wrap justify-center space-x-4 space-y-2 md:space-y-0">
            <a href="#" class="hover:text-blue-200 transition duration-300">Tableau de bord</a>
            <a href="#" class="hover:text-blue-200 transition duration-300">Élèves</a>
            <a href="#" class="hover:text-blue-200 transition duration-300">Notes</a>
            <a href="#" class="hover:text-blue-200 transition duration-300">Absences</a>
        </nav>
        @else
            <h1 class="text-lg">Gestion eleves</h1>
        @endauth
        <!-- Boutons Connexion/Inscription ou Déconnexion -->
        <div class="flex items-center space-x-4">
            @auth
                <span class="text-sm">Bienvenue, {{ auth()->user()->name }}</span>
                <a href="#" class="bg-gradient-to-r from-blue-700 to-purple-700 px-4 py-2 rounded-lg hover:from-blue-800 hover:to-purple-800 transition duration-300 shadow-md">Déconnexion</a>
            @else
                <a href="#" class="bg-gradient-to-r from-blue-700 to-purple-700 px-4 py-2 rounded-lg hover:from-blue-800 hover:to-purple-800 transition duration-300 shadow-md">Connexion</a>
                <a href="{{ route('register') }}" wire:navigate class="bg-gradient-to-r from-blue-700 to-purple-700 px-4 py-2 rounded-lg hover:from-blue-800 hover:to-purple-800 transition duration-300 shadow-md">Inscription</a>
            @endauth
        </div>
    </div>
</header>

<!-- Contenu principal -->
<main class="flex-grow container mx-auto px-4 py-6">
    {{ $slot }} <!-- Ou utilisez @yield('content') si vous utilisez Blade -->
</main>

<!-- Footer -->
<footer class="bg-gray-900 text-white mt-8">
    <div class="container mx-auto px-4 py-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Section Liens utiles -->
            <div>
                <h3 class="text-lg font-bold mb-4">Liens utiles</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-blue-400 transition duration-300">À propos</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition duration-300">Contact</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition duration-300">Politique de confidentialité</a></li>
                </ul>
            </div>

            <!-- Section Contact -->
            <div>
                <h3 class="text-lg font-bold mb-4">Contact</h3>
                <p>Email: <a href="mailto:contact@ecole.com" class="hover:text-blue-400 transition duration-300">contact@ecole.com</a></p>
                <p>Téléphone: +33 1 23 45 67 89</p>
                <p>Adresse: 123 Rue de l'École, 75000 Paris</p>
            </div>

            <!-- Section Réseaux sociaux -->
            <div>
                <h3 class="text-lg font-bold mb-4">Suivez-nous</h3>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-blue-400 transition duration-300">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="hover:text-blue-400 transition duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="hover:text-blue-400 transition duration-300">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-700 mt-6 pt-6 text-center">
            <p>&copy; {{ date('Y') }} Gestion Scolaire. Tous droits réservés.</p>
        </div>
    </div>
</footer>
</body>
</html>
