<?php
    if (isset($_GET["name"])) {
        $keyword = $_GET["name"];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "blueshop";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM member WHERE username = '$keyword'";
    
        $result = $conn->query($sql);
        
        $data = array();
        if ($result || $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data = array(
                    "Username" => $row["username"],
                    "Name" => $row["name"],
                    "Address" => $row["address"],
                    "Mobile" => $row["mobile"],
                    "Email" => $row["email"]
                );
            }
        }

        $conn->close();
    } else {
        echo "missing params";
    }
?>
<table border="1">
    <?php if ($result->num_rows > 0): ?>
    <tr>
        <th>Username</th>    
        <th>Name</th>
        <th>Address</th>
        <th>Mobile</th>
        <th>Email</th>
    </tr>
    <tr>
        <td>
            <?php echo $data["Username"]?>
        </td>
        <td>
            <?php echo $data["Name"]?>
        </td>
        <td>
            <?php echo $data["Address"]?>
        </td>
        <td>
            <?php echo $data["Mobile"]?>
        </td>
        <td>
            <?php echo $data["Email"]?>
        </td>
    </tr>
    <?php else: ?>
        <div>No Data</div>
    <?php endif; ?>  
</table>