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
    
        <form action="action/add_ct.php" method="post">
            <h1>เพิ่มสินค้า</h1>
            
            <label for="">รหัสสินค้า</label>
            <input type="text" name="crystal_id"> <br>

            <label for="">รายชื่อหิน</label>
            <input type="text" name="crystal_name"> <br>

            <label for="">สี</label>
            <input type="text" name="crystal_color"> <br>

            <label for="">ไซส์</label>
            <input type="text" name="crystal_size"> <br>

            <label for="">ตัวอย่างสินค้า</label>
            <input type="text" name="crystal_img"> <br>

            <label for="">ราคา</label>
            <input type="text" name="crystal_price"> <br>

          

            <?php
            include 'action/connect.php';

            $sql = "SELECT * FROM type";
            $result = mysqli_query($con, $sql);
            ?>

            <label for="type_id">หินเสริมโชคประเภทที่</label>
            <select name="type_id" id="type_id">
                <?php
                foreach ($result as $type) {
                    $selected = ($type["type_id"] == $crystal["type_id"]) ? 'selected' : '';
                    ?>
                    <option value="<?= $type["type_id"] ?>" <?= $selected ?>><?= $type["type_name"] ?></option>
                    <?php
                }
                ?>

             </select>

             <br>
            <button>บันทึก</button>

         </form>

 <footer>
    <p>2026 crystal shop. all rights reserved.</p>
 </footer>
        

</body>
</html>