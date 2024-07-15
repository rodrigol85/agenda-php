<?php

require_once ('config.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];

  $sql = "DELETE FROM clienti WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);

  if ($stmt->execute()) {
    $response = ['success' => true];
    
  } else {
    $response = ['success' => false, 'error' => $stmt->error];
  }

 
  header('Content-Type: application/json; charset=utf-8'); 
  echo json_encode($response);
  exit;
} else {
  
  http_response_code(405); 
  echo json_encode(['error' => 'Metodo non consentito']); 
}

$stmt->close(); 