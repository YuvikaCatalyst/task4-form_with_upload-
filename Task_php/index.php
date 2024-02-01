<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_task1</title>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    

   <script src="assets/js/index.js"></script>
   <script src="assets/uploads"></script>
</head>
<body>
<form id="myForm" method="post" action="#" enctype="multipart/form-data" autocomplete="off">
    <label for=" first_name">First name:</label><br>
    <input type="text" id="first_name" name="first_name"><br>

    <label for="middle_name">Middle name:</label><br>
    <input type="text" id="middle_name" name="middle_name"><br>

    <label for="last_name">Last name:</label><br>
    <input type="text" id="last_name" name="last_name"><br>

   <input type="file" name="upload_file" id="upload_file">
    <input type="submit" value="upload file" id="uploadButton" name="submit">

    <input type="submit" class="form" id="fetchButton" value="submit">
</form>


</body>
</html>