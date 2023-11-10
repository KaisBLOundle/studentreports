<!DOCTYPE html>
<html>
    <head><title>pupildoessubject</title></head>
    
    
    
        
    <body>
    <?php
        session_start(); 
        if (!isset($_SESSION['name']))
        {   
            $_SESSION['backURL'] = $_SERVER['REQUEST_URI'];
            header("Location:login.php");
        }
    ?>

    <form action="addtoclass.php" method="post">
        <select name = "Student">
            <?php
            
            include_once('connection.php');
            $stmt = $conn->prepare("SELECT * FROM TblUsers WHERE Role = 0 ORDER BY Surname ASC");
            $stmt->execute();


            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                echo('<option value='.$row["UserID"].'>'.$row["Surname"].', '.$row["Forename"].'</option>');
            }
            ?>
        </select>
        <select name = "Subjects">
            <?php
            include_once('connection.php');
            $stmt = $conn->prepare("SELECT * FROM TblSubjects ORDER BY Subjectname ASC");
            $stmt->execute();


            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                echo('<option value='.$row["SubjectID"].'>'.$row["Subjectname"].'</option>');
            }
            ?>
            
            <input type="submit">

        </select>
        
</form>



    
</body>
</html>