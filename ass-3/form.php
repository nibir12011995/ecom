<!DOCTYPE html>
<html lang="en">
  <head>
    <title>190104054 Assignment-03</title>
    <link rel="stylesheet" href="main.css"/>
  </head>

  <body>

  <div class="form">
    <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
    <form action="insert.php" method="POST">
      <input type="text" name="name" placeholder="Name"/>
      <input type="number" name="id" placeholder="ID"/>
      <input type="number" name="att" placeholder="Attendance Mark"/>
      <input type="number" name="quiz" placeholder="Quiz Mark"/>
      <input type="number" name="final" placeholder="Final Exam Mark"/>

      <input class="submit_btn" type="submit" name="submit_1" value="Submit"/>
    </form>

  </div>

  </body>
</html>