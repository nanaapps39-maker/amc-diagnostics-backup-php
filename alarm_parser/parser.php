<?php

function satcom_parse_alarm($query) {

    // Minimal alarm parser for backup engine
    $clean = trim($query);

    // Example parsing logic
    $clean = str_replace(["\n", "\r"], " ", $clean);

    return $clean;
}
