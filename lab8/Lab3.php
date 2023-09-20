<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>
    <div>
        <?php
            $stmt = $pdo->prepare("SELECT * FROM member");
            $stmt->execute();
        ?>
        <?php while ($row = $stmt->fetch()) : ?>
            <div >
            <?=$row ["username"]?><br>
            <?=$row ["password"]?><br>
            <?=$row ["name"]?><br>
            <?=$row ["address"]?><br>
            <?=$row ["mobile"]?><br>
            <img src='member/<?=$row["username"]?>.jpg' width='100'><hr>
        </div>
        <?php endwhile; ?>
    </div>
</body></html>