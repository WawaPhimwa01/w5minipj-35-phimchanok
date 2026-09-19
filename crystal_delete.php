<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
     <nav class="navbar">
  <div class="nav-container">
    <a href="index.php" class="nav-logo">LLT Crystal Shop</a>
    <ul class="nav-menu">
      <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="crystal_add.php" class="nav-link">Add</a></li>
      <li class="nav-item"><a href="crystal_delete.php" class="nav-link">Manage</a></li>
      <a href="logout.php">Log out</a>
    </ul>

</nav>

  <div class="page">

    <?php 

    session_start();

    if( !isset($_SESSION["fname"]) ){
        header("location: login.php");
        exit;
    };
    ?>

    
    <?php 
    
    include 'action/connect.php';
    $sql = "SELECT * FROM crystal";
    $result = mysqli_query($con, $sql);
    
    ?>

    <table border=1>
         <thead?>
            <th>รหัสสินค้า</th>
            <th>รายชื่อหิน</th>
            <th>สี</th>
            <th>ไซส์</th>
            <th>ตัวอย่างสินค้า</th>
            <th>ราคา</th>
            <th>หินเสริมโชคประเภทที่</th>
          </thead>
          <?php

            foreach($result as $crystal){
                ?>
                    <tr>
                        <td> <?= $crystal["crystal_id"]?> </td>
                        <td> <?= $crystal["crystal_name"]?> </td>
                        <td> <?= $crystal["crystal_color"]?> </td>
                        <td> <?= $crystal["crystal_size"]?> </td>
                        <td>
                            <img
                            src=" <?= $crystal["crystal_img"]?> "
                            style="width:200px"
                            >
                        </td>

                        <td><?= $crystal["crystal_price"]?></td>
                        <td><?= $crystal["type_id"]?></td>

                        <td>
                          <a href="crystal_edit.php?id=<?= $crystal["crystal_id"] ?>">แก้ไข</a>
                          <a href="action/delete_ct.php?id=<?= $crystal["crystal_id"] ?>">ลบ</a>
                        </td>

                    </tr>
                <?php
              }
            ?>
            

      

    </table>
    

</div>

 <footer>
    <p>2026 crystal shop. all rights reserved.</p>
 </footer>

</body>
</html>