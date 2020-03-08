<?php include 'templates/include/header.php'; ?>

<ul>
<?php foreach($results['articles'] as $article) { ?>
    <li>
        <h2>
            <a href="./?action=viewArticle&articleId=<?php $article->id; ?>">
                <?php echo date('j F', $article->publicationDate);?>
            </a>
        </h2>
        <p>
            <?php echo htmlspecialchars($article->summary); ?>
        </p>
    </li>
<?php } ?>
</ul>

<p>
    <a href="./?action=archive">
        Article Archive
    </a>
</p>

<?php include 'templates/include/footer.php'; ?>