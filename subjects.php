<!DOCTYPE html>
<html>
    <title>Subjects</title>
    <body>
        <form action="addsubjects.php" method="post">
            Subjects <input type="text" name="Subjectname"><br>
            Teacher <input type="text" name="Teacher"><br>
            <input type="submit" value="Add subject"><br>
        </form>
    </body>
    <?php
        include_once('connection.php');
        $stmt = $conn->prepare("SELECT * FROM Tblsubjects");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
        echo($row["Subjectname"].' '.$row["Teacher"]."<br>");
        }
    
    ?>
    
</html>