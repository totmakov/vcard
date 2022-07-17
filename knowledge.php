<?php

    $today  = date('Y-m-d');
    $diff = date_diff(date_create($birthdate), date_create($today));
    $age = $diff->format('%y');

    $displayName = $name . " " . $lastname;

?>