
<?php
    session_start();
    if(!isset($_SESSION['aid'])) {
        header('location: ../login.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
  include '../config.php';

  $res = mysqli_query($conn, "SELECT * FROM `reslist`;");

  while($reslist = mysqli_fetch_assoc($res)){
    
    ?>
    <p>Restaurant Name: <?php echo $reslist['rname']?></p>
    <p>Restaurant Address: <?php echo $reslist['rloca']?></p>
    <p>Restaurant Email: <?php echo $reslist['remail']?></p>
    <p>Restaurant Phone: <?php echo $reslist['rphone']?></p>
    <form action="includes/deleteRes.include.php" method="post">
        <button type = "submit" label="rid" name="rid" value="<?php echo $reslist['rid']?>">Delete</button>
    </form>
    <?php
  }
?>

<a href="../includes/logout.include.php">
    <button type = "submit">Log Out</button>
</a>
    
</body>
</html>