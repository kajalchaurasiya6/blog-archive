<?php
    // $server_name="localhost";
    // $server_username="root";
    // $server_password="";
    // $db_name="blog_project";
    // $conn = mysqli_connect($server_name, $server_username, $server_password, $db_name) or die("Connection failed: " . mysqli_connect_error());
    class Database {
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $db_name = "blog_project";
        private $conn;

        public function connect() {
            $this->conn = null;

            try {
                $this->conn = new PDO(
                    'mysql:host='.$this->host.
                    ';dbname='.$this->db_name,
                    $this->username,
                    $this->password
                );
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $err) {
                if ($err->getCode() == 2002){
                    echo "Host not found!";
                } elseif ($err->getCode() == 1049) {
                    echo "Database Not Found!";
                } elseif ($err->getCode() == 1045) {
                    echo "Access Denied!";
                } else {
                    echo 'Connection Error: '.$err->getMessage();
                }
            }
            return $this->conn;
        }
    }
?>