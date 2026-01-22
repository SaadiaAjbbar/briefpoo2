<h1 class="text-3xl font-bold mb-6">Dashboard Auteur</h1>

<a href="/author/articles/create" class="bg-indigo-600 text-white px-4 py-2 rounded mb-4 inline-block">Créer Article</a>

<table class="w-full border-collapse border border-gray-200">
    <thead>
        <tr class="bg-gray-100">
            <th class="p-2 border">Titre</th>
            <th class="p-2 border">Catégories</th>
            <th class="p-2 border">Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($articles as $article): ?>
        <tr>
            <td class="p-2 border"><?= htmlspecialchars($article['titre']) ?></td>
            <td class="p-2 border"><?= htmlspecialchars($article['categories']) ?></td>
            <td class="p-2 border"><?= $article['date_creation'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
