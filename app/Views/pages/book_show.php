<?php if ($book): ?>
    <h2><?= htmlspecialchars($book['title']) ?></h2>
    <p><?= htmlspecialchars($book['description']) ?></p>
<?php else: ?>
    <p>Book not found.</p>
<?php endif; ?>
