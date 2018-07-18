<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Upload Resume</title>
  <link rel="stylesheet" href="./resources/css/style.css">
</head>
<body>
<div class="wrapper">
  <header>
    <div class="brand">
      <p>resume<span>collect</span></p>
    </div>
    <div class="top-links">
      <nav>
        <ul>
          <li><a href="./index.php">home</a></li>
          <li><a class="active" href="./upload.php">upload</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <section id="content-upload">
    <div class="inner">
      <h1>Upload Resume</h1>
      <form action="./upload.php" method="post" enctype="multipart/form-data">
          Select image to upload:
          <input type="file" name="fileToUpload" id="fileToUpload">
          <input type="submit" value="Upload Image" name="submit">
      </form>
    </div>
  </section>
</div>
</body>
</html>
