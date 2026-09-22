<?php

// Simple router for AMC Diagnostics Backup Engine
require_once __DIR__ . '/diagnostics.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    echo run_satcom_diagnostics();
    exit;
}

echo json_encode([
    "status" => "ok",
    "message" => "AMC Diagnostics Backup Engine is running."
]);
