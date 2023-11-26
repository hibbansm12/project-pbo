<?php
// require_once '../class/rute.php';
// require_once 'verifikasi_login.php';

// $data = new Rute();
// $data->tampilRute();

// $nama = $k1['nama'];
// $jabatan = $k1['jabatan'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
  
<!-- php database -->
  <header class="navbar">
		<div class="left-section">
			<img src="../images/user.png" alt="user-logo" class="user-logo">
			<div class="user-info">
				<div class="username">
					wawan03
				</div>
				<div class="tipe-user">
					Petugas
				</div>
			</div>
		</div>
		<!-- akhir -->
		<ul>
		
		</ul>
		<div class="right-section">
			<a href="login.php" class="logout"><span>Logout</span></a>
		</div>
	</header>
  <main class="container">
    <div class="table-wrapper">
    <table cellspacing="0">
      <tr class="head">
        <th>Nomor</th>
        <th>Asal</th>
        <th>Tujuan</th>
        <th>Kelas Armada</th>
        <th>Harga</th>
        <th colspan="2">Aksi</th>
      </tr>

      <!-- DIISI PHP DATABASE -->
      <?php
          //$no = 1;
          //foreach ($data->tampilRute() as $bus){
        ?>
      <tr>
        <td><?php // echo $no++ ?></td>
        <td><?php // echo $bus['asal'] ?></td>
        <td><?php // echo $bus['tujuan'] ?></td>
        <td><?php // echo $bus['kelas'] ?></td>
        <td><?php // echo $bus['harga']?></td>
        <td colspan="2" class="aksi-group">
          <button type="button" class="edit-btn">edit</button>
          <button type="button" class="hapus-btn">hapus</button>
        </td>
        <?php // }; ?>
      </tr>
      <tr>
        <td><?php // echo $no++ ?></td>
        <td><?php // echo $bus['asal'] ?></td>
        <td><?php // echo $bus['tujuan'] ?></td>
        <td><?php // echo $bus['kelas'] ?></td>
        <td><?php // echo $bus['harga']?></td>
        <td colspan="2" class="aksi-group">
          <button type="button" class="edit-btn">edit</button>
          <button type="button" class="hapus-btn">hapus</button>
        </td>
        <?php // }; ?>
      </tr>
      <tr>
        <td><?php // echo $no++ ?></td>
        <td><?php // echo $bus['asal'] ?></td>
        <td><?php // echo $bus['tujuan'] ?></td>
        <td><?php // echo $bus['kelas'] ?></td>
        <td><?php // echo $bus['harga']?></td>
        <td colspan="2" class="aksi-group">
          <button type="button" class="edit-btn">edit</button>
          <button type="button" class="hapus-btn">hapus</button>
        </td>
        <?php // }; ?>
      </tr>
    </table>
    </div>
    <!-- akhir diisi php -->
    <br>
   
    <div class="button-wrapper">
      <button type="button" class="js-add-btn">Tambah Data</button>
    </div>

    
  </main>

  <!-- php isi -->
    <div  div class="overlay" id="edit-overlay">
			<div class="edit-form-wrapper">
				<form action="" method="POST">
					<div class="title">Edit Data</div>
					<!-- isi database -->
					<div class="group-input-wrapper">
						<div class="input-wrapper">
							<label for="Asal">Asal</label>
							<input type="text" id="asal" name="asal" placeholder="$" />
						</div>
						<div class="input-wrapper">
							<label for="tujuan">Tujuan</label>
							<input type="text" id="tujuan" name="tujuan" placeholder="$" />
						</div>
						<div class="input-wrapper">
							<label for="kelas-armada">Kelas Armada</label>
							<input
								type="text"
								id="kelas-armada"
								name="kelas-armada"
								placeholder="$"
							/>
						</div>
						<div class="input-wrapper">
							<label for="harga">Harga</label>
							<input type="text" id="harga" name="harga" placeholder="$" />
						</div>
					</div>
					<div class="group-btn-wrapper">
						<button type="button" class="js-exit-btn">Batal</button>
						<button type="submit" name="simpan" class="js-save-btn">
							Simpan
						</button>
					</div>
				</form>
			</div>
			
			<!-- akhir -->
		</div>


    <div class="overlay" id="add-overlay">
      <div class="add-form-wrapper">
				<form action="" method="POST">
					<div class="title">Tambah Data</div>
					<!-- isi database -->
					<div class="group-input-wrapper">
						<div class="input-wrapper">
							<label for="Asal">Asal</label>
							<input type="text" id="asal" name="asal" placeholder="$" />
						</div>
						<div class="input-wrapper">
							<label for="tujuan">Tujuan</label>
							<input type="text" id="tujuan" name="tujuan" placeholder="$" />
						</div>
						<div class="input-wrapper">
							<label for="kelas-armada">Kelas Armada</label>
							<input
								type="text"
								id="kelas-armada"
								name="kelas-armada"
								placeholder="$"
							/>
						</div>
						<div class="input-wrapper">
							<label for="harga">Harga</label>
							<input type="text" id="harga" name="harga" placeholder="$" />
						</div>
					</div>
					<div class="group-btn-wrapper">
						<button type="button" class="js-exit-btn">Batal</button>
						<button type="submit" name="simpan" class="js-save-btn">
							Tambah
						</button>
					</div>
				</form>
			</div>
			
			<!-- akhir -->
		</div>

    <div class="overlay" id="hapus-overlay">
			<div class="pop-up-hapus">
				<div class="logo"><span>X</span></div>
				<div class="title">Kamu akan melakukan penghapusan data</div>
				<div class="info">Apakah kamu yakin akan menghapus data ini?</div>
				<!-- di isi database -->
				<div class="group-btn-wrapper">
					<button type="button" class="js-btn-cancel">Batal</button>
					<button type="button" name="hapus" class="js-btn-hapus">Hapus</button>
				</div>
			</div>
		</div>
		<div class="pop-up-berhasil">
			<div class="text-info">
				Data berhasil di hapus
			</div>
		</div>
  <script>

    
    const btnsEdit = document.querySelectorAll(".edit-btn");
    const btnAdd = document.querySelector(".js-add-btn")
      const form1 = document.querySelector(".edit-form-wrapper");
      const btnSave1 = document.querySelectorAll(".js-save-btn")[0];
      const overlay1 = document.querySelector("#edit-overlay");
      const exitBtn1 = document.querySelectorAll(".js-exit-btn")[0];
      const form2 = document.querySelector(".add-form-wrapper");
      const btnSave2 = document.querySelectorAll(".js-save-btn")[1];
      const exitBtn2 = document.querySelectorAll(".js-exit-btn")[1];
      const overlay2 = document.querySelector("#add-overlay");
      
      const btnsHapus = document.querySelectorAll(".hapus-btn");
      const jsBtnBatal = document.querySelector(".js-btn-cancel");
			const jsBtnHapus = document.querySelector(".js-btn-hapus");
      const overlay3 = document.querySelector("#hapus-overlay");
			const viewPopUp = document.querySelector(".pop-up-hapus");
			const succeedPopUp = document.querySelector(".pop-up-berhasil");


      btnsEdit.forEach((btnEdit) => {
        btnEdit.addEventListener("click", () => {
          form1.style.display = "block";
          overlay1.style.display = "block";
        })
      })

     
      btnSave1.addEventListener("click", () => {
            form1.style.display = "none";
            overlay1.style.display = "none";
          });

          exitBtn1.addEventListener("click", () => {
            form1.style.display = "none";
            overlay1.style.display = "none";
          });

       btnAdd.addEventListener("click", () => {
         form2.style.display = "block";
         overlay2.style.display = "block";
       });
      
			
			btnSave2.addEventListener("click", () => {
				form2.style.display = "none";
				overlay2.style.display = "none";
			});

			exitBtn2.addEventListener("click", () => {
				form2.style.display = "none";
				overlay2.style.display = "none";
			});

      btnsHapus.forEach((btnHapus) => {
        btnHapus.addEventListener("click", () => {
          viewPopUp.style.display = "block";
				  overlay3.style.display = "block"
        })
      } )

      jsBtnBatal.addEventListener("click", () => {
				viewPopUp.style.display = "none";
				overlay3.style.display = "none"
			});
			
			jsBtnHapus.addEventListener("click", () => {
				viewPopUp.style.display = "none";
				overlay3.style.display = "none"
				setTimeout(() => {
					succeedPopUp.style.visibility = "visible";
					
				}, 300);
				setTimeout(() => {
					succeedPopUp.style.visibility = "hidden";
				}, 3500)
			});
      
		</script>
</body>
</html>