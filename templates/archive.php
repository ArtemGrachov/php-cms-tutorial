<?php include 'templates/include/header.php'; ?>

<ul>
<?php foreach($results['articles'] as $article) { ?>
    <li>
        <h2>
            <?php echo date('j F Y', $article->publicationDate);?>
        </h2>
        <p>
            <?php echo htmlspecialchars($article->summary); ?>
        </p>
    </li>
<?php } ?>
</ul>

<p>
    <a href="./">
        Return to Homepage
    </a>
</p>

<?php include 'templates/include/footer.php'; ?>