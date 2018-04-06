<!DOCTYPE html>
<html>
  <head>
    <title>New php file</title>
  </head>
  <body>

    <?php
    $name;$email;$website;$comment;$gender;$range;
    $name_err=$email_err=$website_err=$gender_err="";
    if ($_SERVER['REQUEST_METHOD']=='POST') {
      if (empty($_POST['name'])) {
      $name_err="Enter the name";
      } else {
        $name=trimit($_POST['name']);
      }
      if (empty($_POST['email'])) {
        $email_err="Enter the email";
      } else {
        $email= trimit($_POST['email']);
      }
      if (empty($_POST['website'])) {
        $website_err="Enter the website";
      } else {
        $website=trimit($_POST['website']);
      }
      if (empty($_POST['gender'])) {
        $gender_err="Please select a gender";
      } else {
          $gender= trimit($_POST['gender']);
      }
    $comment=trimit($_POST['comment']);
    $range=trimit($_POST['range']);
    }
    function trimit($value='')
    {
      $value=trim($value);
      $value=stripslashes($value);
      $value=htmlspecialchars($value);
      return $value;
    }
    ?>
     <form class="" action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" target="_self" >
     Name:<input type="text" name="name" value=""> *Required <br> <?php echo $name_err."<br>";?>
     Email:<input type="text" name="email" value="">*Required <br> <?php echo $email_err."<br>";?>
     Website:<input type="text" name="website" value="">*Required <br> <?php echo $website_err."<br>";?>
     Comment:<textarea name="comment" rows="8" cols="80"></textarea><br>
     Range:<input type="range" name="range" value="" ><br>
     Gender:  Male:<input type="radio" name="gender" value="Male">Female:<input type="radio" name="gender" value="Female">
     *Required <br> <?php echo $gender_err."<br>";?>
     <input type="submit" name="" value="Submit">
     </form>
    <?php
    echo "<h1>YOUR INPUT IS:- </h1>";
    if (!empty($name)) {
      echo "Name: ".$name."<br>";
    }
    if (!empty($email)) {
    echo "Email: ".$email."<br>";
    }
    if (!empty($website)) {
    echo "Website: ".$website."<br>";
    }
    if (!empty($comment)) {
    echo "comment: ".$comment."<br>";
    }
    if (!empty($gender)) {
    echo "gender: ".$gender."<br>";
    }
    if (!empty($range)) {
    echo "range: ".$range."<br>";
    }
     ?>
  </body>
</html>
