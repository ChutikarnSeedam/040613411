<?php include "connect.php"; ?>
<html>
<body>
    <table width='100%' border='1'>
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>รายละเอียดสินค้า</th>
            <th>ราคา</th>
        <tr>
<?php
    $stmt = $pdo->prepare("SELECT * FROM product");
    $stmt->execute();
    while ($row = $stmt->fetch()) : 
?>
    <tr>
        <td><?=$row ["pid"]?> </td>
        <td><?=$row ["pname"]?> </td>
        <td><?=$row ["pdetail"]?> </td>
        <td><?=$row ["price"]?> บาท </td>
    </tr>
    <?php endwhile; ?>
</body>
</html>