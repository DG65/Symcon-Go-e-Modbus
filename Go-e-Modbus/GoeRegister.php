<?php

/**
 * Class GoeRegister
 * Constants with Goe register and value translations
 *
 * @version     1.0
 * @category    Symcon
 * @package     Symcon-Go-e-Modbus
 * @author      Dietmar Gureth <dietmar.gureth@me.com>
 * @link        
 * @link        https://github.com/DG65/Symcon-Go-e-Modbus
 *
 */
class GoeRegister
{
    /**
     * device addresses
     * addresses with fixed values
     */
    const device_addresses = [
        'default' => [
            /**
             * Global
             */
            105 => [
                'name' => 'FWV',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0'
            ],
            107 => [
                'name' => 'ERROR',
                'count' => 2,
                'type' => 'U16',
                'format' => 'ENUM',
                'mapping' => [
                    1 => 'RCCB',
                    3 => 'PHASE',
                    8 => 'NO_GROUND',
                    10 => 'INTERNAL'
                ]
            ],
            120 => [
                'name' => 'POWER_TOTAL',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => 'kWh.Fixed'
            ],
            128 => [
                'name' => 'ENERGY_TOTAL',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX1',
                'profile' => 'kWh.Fixed',
                'archive' => 1 // archive: counter
                ]
            ],
        'sunnyboy' => [

        ]
    ];

    /**
     * value addresses
     * addresses with updated values
     */
    const value_addresses = [
        'default' => [
            /**
             * Global
             */
            100 => [
                'name' => 'CAR_STATE',
                'count' => 2,
                'type' => 'U16',
                'format' => 'ENUM',
                'mapping' => [
                    0 => 'unbekannt, Ladestation defekt',
                    1 => 'Ladestation bereit, kein Fahrzeug',
                    2 => 'Fahrzeug lädt',
                    3 => 'Warte auf Fahrzeug',
                    4 => 'Ladung beendet, Fahrzeug noch verbunden',
                ]
            ],
            101 => [
                'name' => 'PP_CABLE',
                'count' => 2,
                'type' => 'U16',
                'format' => 'ENUM',
                'mapping' => [
                    0 => 'kein Kabel',
                    13 => '13 A',
                    14 => '14 A',
                    15 => '15 A',
                    16 => '16 A',
                    17 => '17 A',
                    18 => '18 A',
                    19 => '19 A',
                    20 => '20 A',
                    21 => '21 A',
                    22 => '22 A',
                    23 => '23 A',
                    24 => '24 A',
                    25 => '25 A',
                    26 => '26 A',
                    27 => '27 A',
                    28 => '28 A',
                    29 => '29 A',
                    30 => '30 A',
                    31 => '31 A',
                    32 => '32 A'
                ]
            ],
            120 => [
                'name' => 'POWER_TOTAL',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => 'kWh.Fixed'
            ],
            128 => [
                'name' => 'ENERGY_TOTAL',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX1',
                'profile' => 'kWh.Fixed',
                'archive' => 1 // archive: counter
            ],
        'sunnyboy' => [

        ]
    ];

    /**
     * adresses for high frequent values
     */
    const current_addresses = [
        'default' => [
            108 => [
                'name' => 'VOLT_L1',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => '~Volt'
            ],
            110 => [
                'name' => 'VOLT_L2',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => '~Volt'
            ],
            112 => [
                'name' => 'VOLT_L3',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => '~Volt'
            ],
            114 => [
                'name' => 'AMP_L1',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX1',
                'profile' => '~Ampere'
            ],
            116 => [
                'name' => 'AMP_L2',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX1',
                'profile' => '~Ampere'
            ],
            118 => [
                'name' => 'AMP_L3',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX1',
                'profile' => '~Ampere'
        ],
        'sunnyboy' => [

        ]
    ];
}