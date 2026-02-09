<?php include 'includes/header.php'; ?>
<?php include 'includes/db.php'; ?>
<section class="container fade-in">
    <h2>Insights</h2>
    <?php
    $stmt = $pdo->query('SELECT * FROM posts ORDER BY date DESC');
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<article class="post">';
        echo '<h3>' . htmlspecialchars($row['title']) . '</h3>';
        echo '<p><small>' . $row['date'] . '</small></p>';
        echo '<p>' . nl2br(htmlspecialchars($row['content'])) . '</p>';
        echo '</article>';
    }
    ?>
</section>
<?php include 'includes/footer.php'; ?>