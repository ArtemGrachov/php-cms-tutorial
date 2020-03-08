<?php include 'templates/include/header.php'; ?>

<form action="admin.php?action=login" method="post">
    <input type="hidden" name="login" value="true" />

    <?php if (isset($results['errorMessage'])) { ?>
        <p>
            <?php echo $results['errorMessage']; ?>
        </p>
    <?php } ?>

    <ul>
        <li>
            <div>
                <label for="username">Username</label>
            </div>
            <div>
                <input type="text" name="username" id="username" placeholder="Your admin username" required autofocus maxlength="20" />
            </div>
        </li>
        <li>
            <div>
                <label for="password">Password</label>
            </div>
            <div>
                <input type="password" name="password" id="password" placeholder="Your admin password" required maxlength="20" />
            </div>
        </li>
    </ul>
    <div>
        <input type="submit" name="login" value="Login" />
    </div>
</form>

<?php include 'templates/include/footer.php'; ?>