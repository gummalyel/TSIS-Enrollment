<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="overall style.css">
    <link rel="stylesheet" href="student-authentication.css">
    <title> Registered Module</title>
</head>
<body>
  <header id="header">
    <div class="logo"> </div>
    <nav class="nav-bar">
             <h1>TANDANG SORA INTEGRATED SCHOOL</h1></nav>
  </header>
    <div class="parent">
    <div class="container" style="margin-top: 100px;">
        <h1>STUDENTS STATUS</h1>
        <hr>  
        <p>KINDLY INPUT YOUR LRN TO CHECK YOUR STATUS.</p>
        <form action="student-login" method="post">
            <label for="student-LRN">LRN :</label> <br>
            <input type="text" id="student-LRN" name="student-LRN" placeholder="LRN" required> <br><br>
            <input type="submit" class="btn" onclick="window.location.href='student_access_students.php'" value="Check"></input>

          </form>
          
    </div>
    </div>

  </main>
  <footer id="footer">

  </footer>
</body>
</html>