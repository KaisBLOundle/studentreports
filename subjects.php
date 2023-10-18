<!DOCTYPE html>
<html>
    <title>Subjects</title>
    <body>
        <form action="addsubjects.php" method="post">
            Subjects <input type="text" name="Subject-Name"><br>
            Teacher <input type="text" name="Teacher-Name"><br>
            <input type="submit" value="Add subject"><br>
        </form>
    </body>
    <?php
        include_once('connection.php');
        $stmt = $conn->prepare("SELECT * FROM TblUsers");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
        echo($row["Subject-name"].' '.$row["Teacher-name"]."<br>");
        }
    
    ?>
    
</html>