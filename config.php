<?php
class Database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "pedulinegeriku";
    var $koneksi = "";

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if(mysqli_connect_errno()){
            echo "Koneksi database gagal : ".mysqli_connect_error();
        }
    }

    function daftar($nama, $email, $telepon, $password)
    {
        mysqli_query($this->koneksi, "INSERT INTO pengguna (nama, email, telepon, password) 
                    VALUES ('$nama', '$email', '$telepon', '$password')");
    }
    function login($email)
    {
        $data = mysqli_query($this->koneksi, "SELECT * FROM pengguna where email = '$email'");
        if (mysqli_num_rows($data) == 0){
            echo "<b>Data user tidak ada<b>";
            $hasil = [];
            header('location:login.php');
        }else{
            while ($row = mysqli_fetch_array($data)){
                $hasil= $row;
            }
        }
        return $hasil;
    }
    function cekKosong($email)
    {
        $result = mysqli_query($this->koneksi, "SELECT * FROM pengguna
                      WHERE email = '$email' AND ktp is null ");
        $row_count =  mysqli_num_rows($result);
        if($row_count > 0){
            return true;
        }else{
           return false;
        }
    }

    function tambahDataTambahan($email, $nama, $telepon, $ktp, $tanggal_lahir, $jenis_kelamin, $pekerjaan, $alamat, $biodata){
        mysqli_query($this->koneksi, "UPDATE pengguna 
                    SET nama = '$nama', telepon = '$telepon', ktp = '$ktp', tanggal_lahir = '$tanggal_lahir', 
                    pekerjaan = '$pekerjaan', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', biodata = '$biodata'
                    WHERE email = '$email';");
    }

    function tambahGalangDana($email, $judul, $keterangan, $nomor_rekening, $target, $foto, $batas_waktu)
    {
        mysqli_query($this->koneksi, "INSERT INTO galandana (email_pengaju, judul, keterangan, no_rek, target, foto, batas_akhir, status)
                     VALUES ('$email', '$judul','$keterangan','$nomor_rekening','$target','$foto','$batas_waktu','Menunggu')");
    }
    function tampilDataUser($email){
        $hasil = [];
        $data =  mysqli_query($this->koneksi, "SELECT * FROM pengguna
                              WHERE email = '$email'");
        while ($row = mysqli_fetch_array($data)){
            $hasil[] =  $row;
        }
        return $hasil;
    }
    function tampilGalangDanaDiajukan($email){
        $hasil = [];
        $data =  mysqli_query($this->koneksi, "SELECT * FROM galandana
                                  WHERE email_pengaju = '$email' and  status = 'Diajukan'");
        while ($row = mysqli_fetch_array($data)){
            $hasil[] =  $row;
        }
        return $hasil;
    }
    function tampilGalangDanaAktif($email){
        $data =  mysqli_query($this->koneksi, "SELECT * FROM galandana
                              WHERE email_pengaju = '$email' and  status = 'Aktif'");
        while ($row = mysqli_fetch_array($data)){
            $hasil[] =  $row;
        }
        return $hasil;
    }

    function tampilGalangDanaSemua($id){
        $data =  mysqli_query($this->koneksi, "SELECT * FROM galandana
                              WHERE id = '$id' and  status = 'Aktif'");
        while ($row = mysqli_fetch_array($data)){
            $hasil[] =  $row;
        }
        return $hasil;
    }

}