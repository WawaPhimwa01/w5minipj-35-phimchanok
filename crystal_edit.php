<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Crystal</title>
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
    </div>
  </nav>

  <?php
  include 'action/connect.php';

 
  $id = isset($_GET['id']) ? $_GET['id'] : '';

  $sql = "SELECT * FROM crystal WHERE crystal_id = '$id'";
  $result = mysqli_query($con, $sql);
  $crystal = mysqli_fetch_assoc($result);
  ?>

  <form action="action/update_ct.php" method="post">
      
      <h1>แก้ไข</h1>
      <label>รหัสสินค้า</label>
      <input type="text" name="crystal_id" value="<?= $crystal['crystal_id'] ?? '' ?>" readonly> <br>

      <label>รายชื่อหิน</label>
      <input type="text" name="crystal_name" value="<?= $crystal['crystal_name'] ?? '' ?>"> <br>

      <label>สี</label>
      <input type="text" name="crystal_color" value="<?= $crystal['crystal_color'] ?? '' ?>"> <br>

      <label>ไซส์</label>
      <input type="text" name="crystal_size" value="<?= $crystal['crystal_size'] ?? '' ?>"> <br>

      <label>ตัวอย่างสินค้า</label>
      <input type="text" name="crystal_img" value="<?= $crystal['crystal_img'] ?? '' ?>"> <br>

      <label>ราคา</label>
      <input type="text" name="crystal_price" value="<?= $crystal['crystal_price'] ?? '' ?>"> <br>

      <?php
      $sql_type = "SELECT * FROM type";
      $result_type = mysqli_query($con, $sql_type);
      ?>

      <label for="type_id">ประเภท</label>
      <select name="type_id" id="type_id">
          <?php
          foreach ($result_type as $type) {
              
              $selected = (isset($crystal['type_id']) && $type["type_id"] == $crystal["type_id"]) ? 'selected' : '';
              ?>
              <option value="<?= $type["type_id"] ?>" <?= $selected ?>><?= $type["type_name"] ?></option>
              <?php
          }
          ?>
      </select>

      <br>
      <button type="submit">บันทึกการเปลี่ยนแปลง</button>
      <a href="index.php" class="nav-link">กลับหน้าแรก</a>

  </form>

  <footer>
      <p>2026 crystal shop. all rights reserved.</p>
  </footer>
      
</body>
</html>