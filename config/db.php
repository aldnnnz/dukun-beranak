<?php
class database 
{
    private $conn;

    function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "db_klinik");
    }

    function getAllPerawatan()
    {
        $data = $this->conn->query("
            SELECT
              P.nama_pasien,
              Perawatan.perawatan_id,
              Perawatan.keluhan,
              Perawatan.diagnosa,
              Perawatan.tindakan,
              Perawatan.obat,
              D.nama_dokter
            FROM Perawatan
            JOIN Pasien P ON Perawatan.pasien_id = P.pasien_id
            JOIN Dokter D ON Perawatan.dokter_id = D.dokter_id;
            ");
        $hasil = array();
        while ($d = $data->fetch_assoc()) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function getAllPasien(){
         $data = $this->conn->query("
            SELECT * from Pasien
            ");
        $hasil = array();
        while ($d = $data->fetch_assoc()) {
            $hasil[] = $d;
        }
        return $hasil;
    }
    function createPasien($data){
        
    }
}

?>
