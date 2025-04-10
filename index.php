و اخيرا مجلد public
عنده ملف واحد index.php
<?php
require '../config/database.php';
require '../app/models/BmiModel.php';
require '../app/controllers/BmiController.php';

$database = new Database();
$db = $database->getConnection();
$model = new BmiModel($db);
$controller = new BmiController($model);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = $controller->calculateBmi(1, $_POST['name'], $_POST['weight'], $_POST['height']);
    $bmi = $result['bmi'];
    $status = $result['status'];
    require '../app/views/bmi_result.php';
} else {
    require '../app/views/bmi_form.php';
}
?>
