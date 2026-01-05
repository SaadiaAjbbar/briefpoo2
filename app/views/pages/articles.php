<h2>Books List</h2>

<?php if (!empty($articles)): ?>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li><?= htmlspecialchars($article['titre']) ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No article found.</p>
<?php endif; ?>
