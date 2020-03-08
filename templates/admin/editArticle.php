<?php include 'templates/include/header.php'; ?>

<div>
    You are logged in as <strong><?php echo htmlspecialchars($_SESSION['username']) ?></strong>
    <a href="admin.php?action=logout">Log out</a>
</div>

<h1>
    <?php echo $results['pageTitle']; ?>
</h1>

<form action="admin.php?action=<?php echo $results['formAction']; ?>" method="post">
    <input type="hidden" name="articleId" value="<?php echo $results['article']->id; ?>">

    <?php if (isset($results['errorMessage'])) { ?>
        <p>
            <?php echo $results['errorMessage']; ?>
        </p>
    <?php } ?>

    <ul>
        <li>
            <div>
                <label for="title">Article Title</label>
            </div>
            <div>
                <input
                    type="text"
                    name="title"
                    id="title"
                    placeholder="Name of the article"
                    required
                    autofocus
                    maxlength="255"
                    value="<?php echo htmlspecialchars( $results['article']->title )?>"
                />
            </div>
        </li>
        <li>
            <div>
                <label for="summary">Article Summary</label>
            </div>
            <div>
                <textarea
                    name="summary"
                    id="summary"
                    placeholder="Brief description of the article"
                    required
                    maxlength="1000"
                >
                    <?php echo htmlspecialchars( $results['article']->summary )?>
                </textarea>
            </div>
        </li>
        <li>
            <div>
                <label for="content">Article Content</label>
            </div>
            <div>
                <textarea
                    name="content"
                    id="content"
                    placeholder="The HTML content of the article"
                    required
                    maxlength="100000"
                >
                    <?php echo htmlspecialchars( $results['article']->content )?>
                </textarea>
            </div>
        </li>
        <li>
            <div>
                <label for="publicationDate">Publication Date</label>
            </div>
            <div>
                <input
                    type="date"
                    name="publicationDate"
                    id="publicationDate"
                    placeholder="YYYY-MM-DD"
                    required
                    maxlength="10"
                    value="<?php echo $results['article']->publicationDate ? date( "Y-m-d", $results['article']->publicationDate ) : ""; ?>"
                />
            </div>
        </li>
    </ul>
    <div>
        <input type="submit" name="saveChanges" value="Save Changes" />
        <input type="submit" formnovalidate name="cancel" value="Cancel" />
    </div>
</form>

<?php if ( $results['article']->id ) { ?>
      <p>
        <a
            href="admin.php?action=deleteArticle&articleId=<?php echo $results['article']->id ?>"
            onclick="return confirm('Delete This Article?')"
        >
            Delete This Article
        </a>
    </p>
<?php } ?>

<?php include 'templates/include/footer.php'; ?>
