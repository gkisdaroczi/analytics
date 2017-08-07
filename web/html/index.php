<?php

define('APP', dirname(__DIR__) . '/app');

$view_id = -1;

require_once APP . '/bootstrap.php';

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="google-signin-client_id" content="<?= CLIENT_ID ?>">
    <meta name="google-signin-scope" content="https://www.googleapis.com/auth/analytics.readonly">
</head>
<body>
    <div>
        <?php echo 'Hello'; ?>

        <div class="g-signin2" data-onsuccess="queryReports"></div>

        <?php if (!file_exists(APP . '/client_secrets.json')) : ?>
            Missing "client_secrets.json" file. Read about this in README.
        <?php endif; ?>

        <form id="form" action="analytics.php" method="post">
            <select id="library-select">
                <option value="analytics.php" selected>Google API PHP</option>
                <option value="analytics-js.php">Google API Javascript</option>
            </select>
            <label>View ID</label>
            <input type="text" name="view_id" value="<?= VIEW_ID ?>">
            <button>OK</button>
        </form>
    </div>
    <script src="https://apis.google.com/js/client:platform.js"></script>
    <script src="app.js"></script>
</body>
</html>
