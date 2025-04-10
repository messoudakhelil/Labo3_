ارجعي للمجلد config
داخله ملف واحد database.php
<?php
class Database {
    private $host = "localhost";
    private $db_name = "bmi_db";
    private $username = "root"; // ضع كلمة المرور إن وجدت
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
