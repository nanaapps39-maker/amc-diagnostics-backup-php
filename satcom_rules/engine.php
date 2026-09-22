<?php

function satcom_rule_engine($parsed) {

    // Example rule logic — replace with your real SATCOM rules
    $rules = [];

    if (strpos($parsed, "BUC") !== false) {
        $rules[] = [
            "component" => "BUC",
            "severity" => "High",
            "action" => "Check RF chain, verify DC power, inspect waveguide."
        ];
    }

    if (strpos($parsed, "LNB") !== false) {
        $rules[] = [
            "component" => "LNB",
            "severity" => "Medium",
            "action" => "Verify receive chain, check coax, inspect connectors."
        ];
    }

    return $rules;
}
