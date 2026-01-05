<h2>Books List</h2>

<?php if (!empty($books)): ?>
    <ul>
        <?php foreach ($books as $book): ?>
            <li><?= htmlspecialchars($book['title']) ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No books found.</p>
<?php endif; ?>
