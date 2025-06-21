<?php include 'koneksi.php'; ?>
<h2>TAMBAH DATA</h2>
<form method="post" action="">
    NIP: <input type="text" name="nip" required> <br>
    NAMA: <input type="text" name="nama" required> <br>
    JABATAN: <input type="text" name="jabatan" required> <br>
    DEPARTEMEN: <input type="text" name="departemen" required> <br>
    EMAIL: <input type="email" name="email" required> <br>
    NO TELP: <input type="text" name="no_telpon" required> <br>
    <button type="submit" name="simpan">SIMPAN</button>
    <a href="index.php"><button type="button">KEMBALI</button>
    </a>
</form> 
<?php 
if(isset($_POST['simpan'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $departemen = $_POST['departemen'];
    $email = $_POST['email'];
    $no_telpon = $_POST['no_telpon'];

    $query ="INSERT INTO karyawan (nip, nama, jabatan, departemen, email, no_telpon)
    VALUES ('$nip', '$nama', '$jabatan', '$departemen', '$email', '$no_telpon') ";
    if (mysqli_query($conn, $query)) {
        echo "Data Berhasil Ditambahkan!";
    } else {
        echo "Error" . $query . "<br>" . mysqli_error($conn);
    }
}
?>