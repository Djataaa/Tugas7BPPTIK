<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php 
	if(isset($_POST['hitung'])){
		$bilanganPertama = $_POST['bilanganPertama'];
		$bilanganKedua = $_POST['bilanganKedua'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bilanganPertama+$bilanganKedua;
			break;
			case 'kurang':
				$hasil = $bilanganPertama-$bilanganKedua;
			break;
			case 'kali':
				$hasil = $bilanganPertama*$bilanganKedua;
			break;
			case 'bagi':
				$hasil = $bilanganPertama/$bilanganKedua;
			break;			
		}
	}
	?>
    <div class="kalkulator">
        <h2 class="judul">KALKULATOR</h2>
        <form method="post" action="index.php">
            <input type="text" name="bilanganPertama" class="bil" placeholder="Masukkan Bilangan Pertama">
            <input type="text" name="bilanganKedua" class="bil" placeholder="Masukkan Bilangan Kedua">
            <select class="opt" name="operasi">
                <option value="tambah">+ Tambah</option>
                <option value="kurang">- Kurang</option>
                <option value="kali">x Kali</option>
                <option value="bagi">/ Bagi</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol">
        </form>
        <?php if(isset($_POST['hitung'])){ ?>
        <input type="text" value="<?php echo $hasil; ?>" class="bil">
        <?php }else{ ?>
        <input type="text" value="0" class="bil">
        <?php } ?>
    </div>
</body>

</html>