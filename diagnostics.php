<?php

function run_satcom_diagnostics() {

    $input = json_decode(file_get_contents("php://input"), true);

    if (!$input || !isset($input['query'])) {
        return json_encode([
            "error" => "Missing 'query' field."
        ]);
    }

    $query = $input['query'];

    // Load rule engine
    require_once __DIR__ . '/satcom_rules/engine.php';

    // Load alarm parser
    require_once __DIR__ . '/alarm_parser/parser.php';

    // Load subsystem logic
    require_once __DIR__ . '/local/satcom_diagnostics/subsystems.php';

    // Run analysis
    $parsed = satcom_parse_alarm($query);
    $rules  = satcom_rule_engine($parsed);
    $subsys = satcom_subsystem_analysis($parsed);

    return json_encode([
        "input" => $query,
        "parsed" => $parsed,
        "rules" => $rules,
        "subsystems" => $subsys,
        "status" => "backup-engine-ok"
    ]);
}
