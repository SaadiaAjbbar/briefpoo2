
<div class="max-w-md mx-auto bg-white p-96 rounded-xl shadow">
    <h2 class="text-2xl font-bold mb-6 text-center">Inscription</h2>

    <form method="POST" action="/register">
        <input type="text" name="nom" placeholder="Nom"
               class="w-full border p-3 rounded mb-4" required>

        <input type="email" name="email" placeholder="Email"
               class="w-full border p-3 rounded mb-4" required>

        <input type="password" name="password" placeholder="Mot de passe"
               class="w-full border p-3 rounded mb-6" required>

        <button class="w-full bg-indigo-600 text-white py-3 rounded">
            Register
        </button>
    </form>
</div>



