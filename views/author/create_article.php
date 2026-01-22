<h1 class="text-3xl font-bold mb-6">Créer un Article</h1>

<form method="POST" action="/author/articles/store" class="max-w-md">
    <label class="block mb-2">Titre</label>
    <input type="text" name="titre" required class="w-full px-3 py-2 border rounded mb-4">

    <label class="block mb-2">Contenu</label>
    <textarea name="content" rows="5" required class="w-full px-3 py-2 border rounded mb-4"></textarea>

    <label class="block mb-2">Catégories</label>
    <select name="categories[]" multiple class="w-full px-3 py-2 border rounded mb-4">
        <?php foreach ($categories as $cat): ?>
            <option value="<?= $cat['id'] ?>"><?= htmlspecialchars($cat['titre']) ?></option>
        <?php endforeach; ?>
    </select>

    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Créer Article</button>
</form>

