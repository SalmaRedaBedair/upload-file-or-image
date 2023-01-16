<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?="UTF-8";?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="My First PHP Page";?></title>
  </head>
  <body>
    <form action="upload.php" method="POST" enctype="multipart/form-data"><!--enctype: define how data will be encoded when sent to sever-->
    <input type="file" name="file">
    <button type="submit" name="submit">upload</button>

    </form>
    
    
  </body>
</html>