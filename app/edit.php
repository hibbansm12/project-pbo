<?php
require_once '../class/rute.php';
$id = $_GET['id'];
$bus2 = new Rute();
$bus2->detailRute($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Form</title>
  <link rel="stylesheet" href="../css/edit.css" />
</head>

<body>
  <!-- di isi php -->
  <div class="edit-form-wrapper">
    <form action="action.php?action=edit&id=<?= $id ?>" method="POST">
      <div class="title">Edit Data</div>
      <!-- isi database -->
      <div class="group-input-wrapper">
        <?php
        foreach ($bus2->detailRute($id) as $edit) {
        ?>
          <div class="input-wrapper">
            <label for="Asal">Asal</label>
            <input type="text" id="asal" name="asal" value="<?php echo $edit['asal'] ?>" />
          </div>
          <div class="input-wrapper">
            <label for="tujuan">Tujuan</label>
            <input type="text" id="tujuan" name="tujuan" value="<?php echo $edit['tujuan'] ?>" />
          </div>
          <div class="input-wrapper">
            <label for="kelas-armada">Kelas Armada</label>
            <input type="text" id="kelas-armada" name="kelas-armada" value="<?php echo $edit['kelas'] ?>" />
          </div>
          <div class="input-wrapper">
            <label for="harga">Harga</label>
            <input type="text" id="harga" name="harga" value="<?php echo $edit['harga'] ?>" />
          </div>
      </div>
      <div class="group-btn-wrapper">
        <button type="button" class="js-exit-btn" onclick="document.location.href = 'dashboard.php';">
          Batal
        </button>
        <button type="submit" name="simpan" class="js-save-btn">
          Simpan
        </button>
      </div>
    <?php } ?>
    </form>
    <!-- akhir -->
  </div>
</body>

</html>