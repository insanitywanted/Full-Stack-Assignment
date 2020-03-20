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
        echo "Hi! Welcome User";
?>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>
        Insert Record!
        </title>
    </head>

    <body>
        <form name="details" action="detail.php" method="post">
            <table>
                <tr>
                <td>ID</td>
                <td><input type="text" class="form-control" name="id" value=""></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" class="form-control" name="name" value=""></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="text" class="form-control" name="age" value=""></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><input type="text" class="form-control" name="contact" value=""></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" class="form-control" name="email" value=""></td>
                </tr>
                <tr>
                    <td><br><input type="submit" class="btn btn-primary" value="Submit" name='btn'></td>
                </tr>
            </table>
        </form> 
    </body> 
</html>