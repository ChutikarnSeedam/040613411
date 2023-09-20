<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while ($row = $stmt->fetch()) :
    ?>
        <?=$row ["username"]?><br>
        <?=$row ["password"]?><br>
        <?=$row ["name"]?><br>
        <?=$row ["address"]?> บาท<br>
        <?=$row ["mobile"]?><br>
        <?=$row ["email"]?><br>
        <hr>
    <?php endwhile; ?>
</body>
</html>