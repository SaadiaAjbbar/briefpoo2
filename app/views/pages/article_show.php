<?php if ($article): ?>
    <h2><?= htmlspecialchars($article['titre']) ?></h2>
    <p><?= htmlspecialchars($article['contenu']) ?></p>
<?php else: ?>
    <p>article not found.</p>
<?php endif; ?>
