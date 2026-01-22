
<h1 class="text-3xl font-bold mb-6">Créer une Catégorie</h1>

<form method="POST" action="/admin/categories/store" class="max-w-md">
    <label class="block mb-2">Nom de la catégorie</label>
    <input type="text" name="titre" required class="w-full px-3 py-2 border rounded mb-4">

    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Ajouter</button>
</form>