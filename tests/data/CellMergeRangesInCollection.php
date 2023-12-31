<?php

declare(strict_types=1);

return [
    [
        [
            'A1:A3' => 'x',
            'A4' => 'y',
        ],
        [
            'A1' => 'x',
            'A2' => 'x',
            'A3' => 'x',
            'A4' => 'y',
        ],
    ],
    [
        [
            'A1:A4' => 'x',
            'A6:A7' => 'x',
            'A9' => 'x',
        ],
        [
            'A7' => 'x',
            'A1' => 'x',
            'A4' => 'x',
            'A6' => 'x',
            'A2' => 'x',
            'A9' => 'x',
            'A3' => 'x',
        ],
    ],
    [
        [
            'A1:A3' => 'x',
            'B1:B3' => 'x',
        ],
        [
            'A1' => 'x',
            'B3' => 'x',
            'A2' => 'x',
            'B2' => 'x',
            'A3' => 'x',
            'B1' => 'x',
        ],
    ],
    [
        [
            'A1' => 'x',
            'A2' => 'y',
            'A3' => 'z',
        ],
        [
            'A1' => 'x',
            'A2' => 'y',
            'A3' => 'z',
        ],
    ],
    [
        [
            'C1' => 'x',
            'A1:A3' => 'x',
            'A1:A3,C1:C3' => 'y',
        ],
        [
            'C1' => 'x',
            'A1:A3' => 'x',
            'A1:A3,C1:C3' => 'y',
        ],
    ],
];
