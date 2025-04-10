
داخل controllers
ملف BmiController.php 
<?php
class BmiController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function calculateBmi($user_id, $name, $weight, $height) {
        $bmi = $weight / ($height * $height);
        $status = $this->getBmiStatus($bmi);
        $this->model->saveBmiRecord($user_id, $name, $weight, $height, $bmi, $status);
        return ["bmi" => $bmi, "status" => $status];
    }

    private function getBmiStatus($bmi) {
        if ($bmi < 18.5) return "Underweight";
        if ($bmi >= 18.5 && $bmi < 24.9) return "Normal weight";
        if ($bmi >= 25 && $bmi < 29.9) return "Overweight";
        return "Obese";
    }
}
?>
