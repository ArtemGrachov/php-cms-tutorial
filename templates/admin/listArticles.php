<?php include 'templates/include/header.php'; ?>

<div>
    You are logged in as <strong><?php echo htmlspecialchars($_SESSION['username']) ?></strong>
    <a href="admin.php?action=logout">Log out</a>
</div>

<main>
    <h1>All Articles</h1>
    <?php if (isset($results['errorMessage'])) { ?>
        <p>
            <?php echo $results['errorMessage']; ?>
        </p>
    <?php } ?>
    <?php if (isset($results['statusMessage'])) { ?>
        <p>
            <?php echo $results['statusMessage']; ?>
        </p>
    <?php } ?>
    <table>
        <thead>
            <tr>
                <th>
                    Publication Date
                </th>
                <th>
                    Article
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($results['articles'] as $article) { ?>
                <tr onclick="location='admin.php?action=editArticle&articleId=<?php echo $article->id; ?>">
                    <td>
                        <?php echo date('j M Y', $article->publicationDate); ?>
                    </td>
                    <td>
                        <?php echo $article->title; ?> 
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <p>
        <?php echo $results['totalRows']; ?> artiles total
    </p>
    <p>
        <a href="admin.php?action=newArticle">Add a New article</a>
    </p>
</main>

<?php include 'templates/include/footer.php'; ?>
