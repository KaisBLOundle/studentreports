<DOCTYPE html>
    <html>
        
    </html>
    <?php
        session_start(); 
        if (!isset($_SESSION['name']))
        {   
            $_SESSION['backURL'] = $_SERVER['REQUEST_URI'];
            header("Location:login.php");
        }
    ?>

    <body>
        <a href="pupildoessubject.php">Add another pupil to class</a>
    </body>

    <?php
        
         array_map("htmlspecialchars", $_POST);
        include_once('connection.php');
        
        echo $_POST["Student"];
        echo $_POST["Subjects"];
        $stmt = $conn->prepare("INSERT INTO Tblpupilstudies(UserID,SubjectID)VALUES(:UserID,:SubjectID)");
        $stmt->bindParam(':UserID', $_POST["Student"]);
        $stmt->bindParam(':SubjectID', $_POST["Subjects"]);
        $stmt->execute();
        ?>
++
