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
            p.nama_pasien,
            p.keluhan,
            p.diagnosa,
            p.tanggal_perawatan,
            p.obat,
            d.nama_dokter,
            d.spesialisasi
            FROM 
            Pasien p
            JOIN 
            Dokter d ON p.dokter_id = d.dokter_id;
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
