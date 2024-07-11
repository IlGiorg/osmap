<?php
$data = json_decode(file_get_contents('php://input'), true);
$studentid = $data['studentid'];
$level = $data['level'];

if ($studentid && $level) {
    $file = 'conduct_levels.json';
    $json = json_decode(file_get_contents($file), true);
    $json[$studentid] = $level;
    file_put_contents($file, json_encode($json));
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>
