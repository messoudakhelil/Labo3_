داخل models
ملف BmiModel.php
<?php
class BmiModel {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function saveBmiRecord($user_id, $name, $weight, $height, $bmi, $status) {
        $query = "INSERT INTO bmi_records (user_id, name, weight, height, bmi, status) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$user_id, $name, $weight, $height, $bmi, $status]);
    }

    public function getBmiHistory($user_id) {
        $query = "SELECT * FROM bmi_records WHERE user_id = ? ORDER BY timestamp DESC";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
