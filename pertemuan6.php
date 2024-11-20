<?php
$mahasiswa = ["dsii.ca", "043040023", "Teknik informatika", "faussy@gmail.com"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
    
<ul>
   <li><?php echo $mahasiswa[0]; ?></li>
   <li><?php echo $mahasiswa[1]; ?></li>
   <li><?php echo $mahasiswa[2]; ?></li>
   <li><?php echo $mahasiswa[3]; ?></li>
</ul>



</body>
</html>