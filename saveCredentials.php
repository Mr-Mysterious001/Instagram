<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $data = array('email' => $email, 'password' => $password);
    $json_data = json_encode($data, JSON_PRETTY_PRINT);
    
    file_put_contents('credentials.json', $json_data);
    
    echo 'Data saved successfully';
} else {
    echo 'Invalid request method';
}
?>