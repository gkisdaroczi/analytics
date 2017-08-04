<?php session_start(); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <div>
        <?php echo 'Hello'; ?>

        <form action="analytics.php" method="post">
            <label>View ID</label>
            <input type="text" name="view_id" value="">
            <button>OK</button>
        </form>
    </div>
</body>
</html>
