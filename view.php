<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
</head>
<body>
    <table><tr><th>id</th>
    <th>name</th>
    <th>pasword</th>


</tr>
<?php
    include('connected.php');
    $query="select * from login";
    $result=mysqli_query($con,$query);

    while($r=mysqli_fetch_array($result))
    {
        ?>
        
        <tr>
            <td><?php echo $r['id']; ?></td>
            <td><?php echo $r['NAME']; ?></td>
            <td><?php echo $r['PASWORD']; ?></td>
            <td><button><a href="delete.php?id=<?php echo $r['id'];?>">DELETE</a></button></td>
            <td><button><a href="update.php?id=<?php echo $r['id'];?>">UPDATE</a></button></td>
        </tr>
    
        <?php
    }
    

?>
 </table>
</body>
</html>





