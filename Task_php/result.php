<?php
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_name = $_POST['first_name_val'];
        $middle_name = $_POST['middle_name_val'];
        $last_name = $_POST['last_name_val'];

       $file_name = '';
        if (isset($_FILES['upload_file'])) {
            $file_name = $_FILES['upload_file']['name'];
            $file_tmp = $_FILES['upload_file']['tmp_name'];
            move_uploaded_file($file_tmp, "assets/uploads/" . $file_name);
        }
    
        $output = [
            'first_name' => $first_name,
            'middle_name' => $middle_name,
            'last_name' => $last_name,
            'file_name' => $file_name
        ];
    
        // Encode as JSON and send the response
        header('Content-Type: application/json');
        echo json_encode($output);
       
    }
?>


