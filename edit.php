<?php include 'koneksi.php'; ?>
<?php 
$nip = $_GET['nip'];
$data = mysqli_query($conn, "SELECT * FROM karyawan WHERE nip=$nip");
$row = mysqli_fetch_assoc($data);
?>
<h2>EDIT DATA</h2>
<form method="POST" action="">
    NIP : <input type="text" name="nip" value="<?php echo $row['nip']; ?>" required> <br>
    NAMA : <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required> <br>
    JABATAN : <input type="text" name="jabatan" value="<?php echo $row['jabatan']; ?>" required> <br>
    DEPARTEMEN : <input type="text" name="departemen" value="<?php echo $row['departemen']; ?>" required> <br>
    EMAIL : <input type="email" name="email" value="<?php echo $row['email']; ?>" required> <br>
    NO TELPON: <input type="text" name="no_telpon" value="<?php echo $row['no_telpon']; ?>" required> <br>
<button type="submit" name="edit">Edit</button>
</form>
<?php 
if(isset($_POST['simpan'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $departemen = $_POST['departemen'];
    $email = $_POST['email'];
    $no_telpon = $_POST['no_telpon'];

    $query ="UPDATE karyawan SET  nip= '$nip', nama='$nama', jabatan='$jabatan', departemen='$departemen',
     email= '$email', no_telpon='$no_telpon') WHERE nip=$nip";
    if (mysqli_query($conn, $query)) {
        echo "Data Berhasil Diedit! <a href ='index.php'>Kembali</a>";
    } else {
        echo "Error" . $query . "<br>" . mysqli_error($conn);
    }
}
?>