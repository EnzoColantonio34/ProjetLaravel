<?php

    $time = \Carbon\Carbon::now();

    return [
        'path' => 'uploads/' . date_format($time, 'Y') . '/' . date_format($time, 'm') . '/' . date_format($time, 'd')
    ];
