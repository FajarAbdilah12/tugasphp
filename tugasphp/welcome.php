<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to website</title>
</head>
<body>
     <?php
       $nama = $_POST["first"] . " " . $_POST["last"];
       $gender = $_POST["gender"] ?? "tidak ada";
       $negara = $_POST["negara"] ?? "tidak ada";
       $bahasa =isset( $_POST["bahasa"]) ? implode (", " , $_POST["bahasa"]) : "tidak ada";
       $bio = $_POST["bio"]
     ?>
   
   <h1>SELAMAT DATANG </br> ============================ </br> <?php echo $nama; ?></h1>
    <p>Jenis Kelamin: <?php echo $gender; ?></p>
    <p>Negara: <?php echo $negara; ?></p>
    <p>Bahasa yang dikuasai : <?php echo $bahasa; ?></p>
    <p>Bio: <?php echo $bio; ?></p>
   
   <h2>Terima Kasih telah bergabung di web kami. Media belajar kita bersama</h2>

    
</body>
</html>