<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Parent-1 Name</th>
            <th>Parent-2 Name</th>
            <th>Phone no</th>
        </tr>
        <?php 
//error_reporting(0);
include("connection.php");
$query="SELECT * FROM details ";
$data = mysqli_query($conn, $query);
$total=mysqli_num_rows($data);



if($total!=0){
    
    while(($result=mysqli_fetch_assoc($data))){
        echo "
        <tr>
        <td>".$result['id']."</td>
        <td>".$result['firstname']."</td>
        <td>".$result['lastname']."</td>
        <td>".$result['email']."</td>
        <td>".$result['parent1name']."</td>
        <td>".$result['parent2name']."</td>
        <td>".$result['phoneno']."</td>
        </tr>
        ";
    }
    //echo "table has records";
}else{
    echo "no records found";
}

?>
    </table>
</body>
</html>