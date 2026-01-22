
<h1 class="text-3xl font-bold mb-6">Espace Admin</h1>

<a href="/admin/categories/create" class="bg-indigo-600 text-white px-4 py-2 rounded mb-4 inline-block">Ajouter categorie</a>

<ul class="list-disc pl-6">
    <?php foreach ($categories as $cat): ?>
        <li><?= htmlspecialchars($cat['titre']) ?></li>
    <?php endforeach; ?>
</ul>