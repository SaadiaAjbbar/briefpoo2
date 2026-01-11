
<section class="max-h-screen flex items-center justify-center bg-gray-50 p-96">
    <div class="max-w-md w-full bg-white rounded-2xl shadow-sm border border-gray-100 p-8">

        <h1 class="text-3xl font-bold text-center text-gray-900 mb-2">
            Connexion
        </h1>
        <p class="text-center text-gray-600 mb-6">
            Connectez-vous à votre compte
        </p>

        <form method="POST" action="/login">
            <!-- Email -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Email
                </label>
                <input type="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Mot de passe
                </label>
                <input type="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
            </div>

            <!-- Button -->
            <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-lg font-semibold hover:bg-indigo-700 transition">
                Se connecter
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-6">
            Vous navez pas de compte ?
            <a href="/register" class="text-indigo-600 font-semibold hover:underline">
                CREER COMPTE
            </a>
        </p>

    </div>
</section>