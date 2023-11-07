<?php
       
 include('connection.php');
       
       
$name = $_POST['name'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$nik = $_POST['nik'];

switch ($_GET['action'])
{
    case 'add':
        $query = "INSERT INTO people
                                (people_id, name, kelamin, alamat, email, contact, nik)
                                VALUES ('Null','" . $name . "','" . $kelamin . "','" . $alamat . "','" . $email . "','$contact','" . $nik . "')";
        mysqli_query($db, $query) or die('Error in updating Database');

    break;

}
?>
        <script type="text/javascript">
            alert("Successfully added.");
            window.location = "index.php";
    </script>
