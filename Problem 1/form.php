<?php include('config.php'); ?>
<?php
    if (isset($_POST['bttn']))
    {
        echo $_POST['id'].'<br>';
        echo $_POST['name'].'<br>';
        echo $_POST['age'].'<br>';
        echo $_POST['contact'].'<br>';
        echo $_POST['email'].'<br>';
    }
    else
    {
        echo "Hi! Welcome User";
    }
?>
<html>
    <head>
        <title>
        Insert Record
        </title>
    </head>

    <body>
        <form name="details" action="detail.php" method="post">
            <table>
                <tr>
                <td>ID</td>
                <td><input type="text" name="id" value=""></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value=""></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="text" name="age" value=""></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><input type="text" name="contact" value=""></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value=""></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit" name='btn'></td>
                </tr>
            </table>
        </form> 
    </body> 
</html>