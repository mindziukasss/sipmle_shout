<?php include 'database.php'; ?>

<?php
  $query = "SELECT * FROM shouts";
  $shouts = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Shout It!</title>
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
  <div id="container">
    <header>
      <h1>Shout it! Shoutbox</h1>
    </header>
    <div id="shouts">
      <ul>
        <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
          <li class="shout"><span><?php echo $row['time'] ?> - </span><strong><?php echo $row['user'] ?>:</strong> <?php echo $row['message'] ?></li>
        <?php endwhile; ?>
      </ul>
    </div>
    <div id="input">
      <form method="post" action="process.php">
        <input type="text" name="user" placeholder="Enter you Name" />
        <input type="text" name="message" placeholder="You Massage" />
        <input class="shout-btn"  type="submit" name="submit" value="Shout it out" />
      </form>
    </div>
    </div>
  </body>
</html>