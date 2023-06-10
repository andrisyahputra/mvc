<?php 

    class Pemain_model {

        private $tabel = 'mancity';
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getAllPemain()
        {
            $this->db->query("SELECT * FROM " . $this->tabel);
            return $this->db->resultSet();
        }

        public function getPemainById($id){
            $this->db->query('SELECT * FROM ' . $this->tabel .' WHERE id=:id');
            $this->db->bind('id', $id);

            return $this->db->single();
                }
        
        public function tambahGetDataPemain($data)
        {
            $query = "INSERT INTO $this->tabel
            VALUES
            ('', :nama, :posisi, :asal, :no_punggung, 'gambar')
            ";
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('posisi', $data['posisi']);
            $this->db->bind('asal', $data['asal']);
            $this->db->bind('no_punggung', $data['no_punggung']);

            $this->db->execute();

            return $this->db->rowCount();
        // return 0;
        }
        public function hapusDataPemain($id){
            $query = "DELETE FROM $this->tabel WHERE id = :id";
            $this->db->query($query);
            $this->db->bind('id', $id);
            $this->db->execute();

            return $this->db->rowCount();
        }
        public function ubahDataPemain($data)
        {
            $query = "UPDATE $this->tabel SET
            nama = :nama, 
            posisi = :posisi, 
            asal = :asal, 
            no_punggung = :no_punggung, 
            gambar = 'gambar'
            WHERE id = :id 
            ";
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('posisi', $data['posisi']);
            $this->db->bind('asal', $data['asal']);
            $this->db->bind('no_punggung', $data['no_punggung']);
            $this->db->bind('id', $data['id']);

            $this->db->execute();

            return $this->db->rowCount();
        // return 0;
        }
    }

?>