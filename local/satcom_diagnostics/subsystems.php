<?php

function satcom_subsystem_analysis($parsed) {

    $result = [];

    if (strpos($parsed, "TX") !== false) {
        $result[] = [
            "subsystem" => "Transmit Chain",
            "status" => "Investigate",
            "notes" => "Possible RF chain degradation."
        ];
    }

    if (strpos($parsed, "RX") !== false) {
        $result[] = [
            "subsystem" => "Receive Chain",
            "status" => "Investigate",
            "notes" => "Check LNB and coax integrity."
        ];
    }

    return $result;
}
