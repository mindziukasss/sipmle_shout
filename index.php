<!DOCTYPE html>
<html>
<head>
  <title>Shout It!</title>
  <link rel="stylesheet" href="css/style" type="text/css">
</head>
<body>
  <div id="container">
    <header>
      <h1>Shout it! Shoutbox</h1>
    </header>
    <div id="shouts">
      <ul>
        <li class="shout"><span>10:15Pm - </span>Mike: Hello world! </li>
        <li class="shout"><span>10:15Pm - </span>Mike: Hello world! </li>
        <li class="shout"><span>10:15Pm - </span>Mike: Hello world! </li>
        <li class="shout"><span>10:15Pm - </span>Mike: Hello world! </li>
        <li class="shout"><span>10:15Pm - </span>Mike: Hello world! </li>
        <li class="shout"><span>10:15Pm - </span>Mike: Hello world! </li>
      </ul>
    </div>
    <div id="input">
      <form method="post" action="process.php">
        <input type="text" name="user" placeholder="Enter you Name" />
        <input type="text" name="message" placeholder="You Massage" />
        <br />
        <br />
        <input class="shout-btn"  type="submit" name="submit" value="Shout it out" />


</body>
</html>