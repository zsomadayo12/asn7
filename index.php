<?php include 'koneksi.php'; ?>
<h2>SISTEM DATA KARYAWAN</h2>

<table border ="1" cellpadding="10">
    <tr>
        <th>NIP</th>
        <th>NAMA</th>
        <th>JABATAN</th>
        <th>DEPARTEMEN</th>
        <th>EMAIL</th>
        <th>NO TELP</th>
        <th>AKSI</th>
    </tr>
    <?php 
    $result = mysqli_query($conn, "SELECT * FROM karyawan");
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>".$row['nip']."</td>
        <td>".$row['nama']."</td>
        <td>".$row['jabatan']."</td>
        <td>".$row['departemen']."</td>
        <td>".$row['email']."</td>
        <td>".$row['no_telpon']." </td>
        <td>
        <a href ='edit.php? nip=".$row['nip']."'>Edit </a> | 
         <a href ='delete.php? nip=".$row['nip']."' onclick=\return confirm('Yakin ingin Menghapus?');\"> Hapus</a>
         </td>
        </tr> ";
    }
    ?>
</table> <br>
<a href="create.php"><button type="button">TAMBAH DATA</button></a>