<?php 

    class Pemain_model {

        private $dbh;
        private $stmt;

        public function __construct()
        {
            // data source nya
            $dsn = 'mysql:host=localhost;dbname=tes_pemain';

            try {
                $this->dbh = new PDO($dsn, 'root', '');
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        // private $pemain = [
        //     [
        //         "nama"=> "Andri Syahputra",
        //         "posisi"=> "Striker",
        //         "asal"=>"Indonesia",
        //         "no_punggung" => "31",
        //         "gambar" => "andri.jpg"
        //     ],
        //     [
        //         "nama"=> "Andri Syahputra 2",
        //         "posisi"=> "Striker 2",
        //         "asal"=>"Indonesia 2",
        //         "no_punggung" => "31",
        //         "gambar" => "andri2.jpg"
        //     ]
        // ];

        public function getAllPemain()
        {
            // return $this->pemain;
            $this->stmt = $this->dbh->prepare('SELECT * FROM mancity');
            $this->stmt->execute();
            return  $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>