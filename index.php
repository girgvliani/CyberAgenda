<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="gamogedot.png" type="image/icon type">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Cyber Agenda</title>
</head>

<body>
    <?php 
        if(!empty($_POST["send"])){
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $toEmail = "nicklaki2003@gmai.com";

            $mailHeaders = "Name: " . $fname .
            "\r\nSurname: " .$lname .;

            if(mail($toEmail, $fname, $mailHeaders)){
                $message = "Welcome"
            }

        }
    ?>
  <div class="main">
    <p class="sign" align="center">Daily Agenda</p>
    <form class="form1" method="POST">
      <input required minlength="2" id='fname' class="un " type="text" align="center" placeholder="Name">
      <input required class="pass" id="lname" type="text" align="center" placeholder="Surname">
      <a href="https://www.kiu.edu.ge/uploads/CyberSecurityTrainingProgramAgenda.pdf"><input type="submit"
          class="submit" align="center" /></a>
  </div>
  <!-- <script>
    // Requiring fs module in which writeFile function is defined:
    const fs = require('fs');

    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var fullname = fname + lname;

    // data which will write in a file
    let data = fullname;
    console.log(data);
    // Write "data" in "file.txt":
    fs.writeFile('Pain.txt', data, (err) => {
      // In case of an error trhow err:
      console.log(data);
      if (err) throw err;
    })
  </script> -->
</body>

</html>