<?php

session_start();

define('VIEW_ID', $_SESSION['view_id']);

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <div>
        <?php echo 'Hello'; ?>

        <?php if (!file_exists(__DIR__ . '/client_secrets.json')) : ?>
            Missing "client_secrets.json" file. Read about this in README.
        <?php endif; ?>

        <form action="analytics.php" method="post">
            <label>View ID</label>
            <input type="text" name="view_id" value="<?= VIEW_ID ?>">
            <button>OK</button>
        </form>
    </div>
</body>
</html>
