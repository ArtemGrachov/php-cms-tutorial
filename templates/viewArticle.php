<?php include 'templates/include/header.php'; ?>
<article>
    <h1>
        <?php echo htmlspecialchars($results['article']->title); ?>
    </h1>
    <p>
        <?php echo $results['article']->content; ?>
    </p>
    <p>
        Published on <?php echo date('j F Y', $results['article']->publicationDate); ?>
    </p>
</article>

<p>
    <a href="./">
        Return to Homepage
    </a>
</p>

<?php include 'templates/include/footer.php'; ?>