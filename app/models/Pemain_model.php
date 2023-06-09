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
    }

?>