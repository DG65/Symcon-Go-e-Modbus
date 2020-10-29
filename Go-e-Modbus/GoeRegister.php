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
            107 => [
                'name' => 'ERROR',
                'count' => 2,
                'type' => 'U16',
                'format' => 'FIX0',
                'mapping' => [
                    1 => 'RCCB',
                    3 => 'PHASE',
                    8 => 'NO_GROUND',
                    10 => 'INTERNAL'
                ]
            ],
            105 => [
                'name' => 'FWV',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM'
            ],
            30231 => [
                'name' => 'Power limit',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
            30837 => [
                'name' => 'Active power target value',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ]
        ],
        'sunnyboy' => [
            30231 => [
                'name' => 'Power limit',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
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
            30201 => [
                'name' => 'Status',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    35 => 'Error',
                    303 => 'Off',
                    307 => 'OK',
                    455 => 'Warning'
                ]
            ],
            30541 => [
                'name' => 'Operating time',
                'count' => 2,
                'type' => 'U32',
                'format' => 'DURATION_S',
                'profile' => 'Hours'
            ],
            30543 => [
                'name' => 'Feed-in time',
                'count' => 2,
                'type' => 'U32',
                'format' => 'DURATION_S',
                'profile' => 'Hours'
            ],
            30535 => [
                'name' => 'Day yield',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3', // convert Wh to kWh
                'profile' => '~Electricity',
                'archive' => 1 // archive: counter
            ],
            30531 => [
                'name' => 'Total yield',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => 'kWh.Fixed',
                'archive' => 1 // archive: counter
            ],
            30769 => [
                'name' => 'DC current input',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX3',
                'profile' => '~Ampere'
            ],
            30771 => [
                'name' => 'DC voltage input',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ],
            30773 => [
                'name' => 'DC power input',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
            30775 => [
                'name' => 'AC active power across all phases',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt',
                'archive' => 0 // archive: default
            ],
            30789 => [
                'name' => 'Grid voltage phase AB',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ],
            30791 => [
                'name' => 'Grid voltage phase BC',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ],
            30793 => [
                'name' => 'Grid voltage phase CA',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ],
            30795 => [
                'name' => 'Grid current',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3',
                'profile' => '~Ampere'
            ],
            30803 => [
                'name' => 'Power frequency',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Hertz'
            ],
            /*
            34109 => [
                'name' => 'Heat sink temperature',
                'count' => 2,
                'type' => 'S32',
                'format' => 'TEMP',
                'profile' => '~Temperature'
            ],
            34113 => [
                'name' => 'Interior temperature',
                'count' => 2,
                'type' => 'S32',
                'format' => 'TEMP',
                'profile' => '~Temperature'
            ],
            34125 => [
                'name' => 'External temperature',
                'count' => 2,
                'type' => 'S32',
                'format' => 'TEMP',
                'profile' => '~Temperature'
            ],
            */
            /**
             * Sunny Tripower
             */
            30777 => [
                'name' => 'Power L1',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
            30779 => [
                'name' => 'Power L2',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
            30781 => [
                'name' => 'Power L3',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
            30783 => [
                'name' => 'Grid Voltage phase L1',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ],
            30785 => [
                'name' => 'Grid Voltage phase L2',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ],
            30787 => [
                'name' => 'Grid Voltage phase L3',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ],
            30797 => [
                'name' => 'Grid current phase L1',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3',
                'profile' => '~Ampere'
            ],
            30799 => [
                'name' => 'Grid current phase L2',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3',
                'profile' => '~Ampere'
            ],
            30801 => [
                'name' => 'Grid current phase L3',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3',
                'profile' => '~Ampere'
            ],

            /**
             * Sunny Island
             */
            30061 => [
                'name' => 'Firmware',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FW',
            ],
            30577 => [
                'name' => 'Grid energy consumption today',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3',
                'profile' => '~Electricity'
            ],
            30579 => [
                'name' => 'Grid energy feed-in today',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3',
                'profile' => '~Electricity'
            ],
            30581 => [
                'name' => 'Grid reference counter reading',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3',
                'profile' => '~Electricity'
            ],
            30583 => [
                'name' => 'Grid feed-in counter reading',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3',
                'profile' => '~Electricity'
            ],
            30845 => [
                'name' => 'Current battery charge status',
                'count' => 2,
                'type' => 'U32',
                'format' => 'RAW',
                'profile' => '~Battery.100'
            ],
            30849 => [
                'name' => 'Battery temperature',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX1',
                'profile' => '~Temperature'
            ],
            30851 => [
                'name' => 'Battery voltage',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ],
            30853 => [
                'name' => 'Active battery charging mode',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    1767 => 'Quick charge',
                    1768 => 'Full charge',
                    1769 => 'Compensation charge',
                    1770 => 'Maintenance charge',
                    2184 => 'Save energy while on mains'
                ]
            ],
            30857 => [
                'name' => 'Number of battery charge throughputs',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
            ],
            30859 => [
                'name' => 'Battery maintenance charge status',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    803 => 'Inactive',
                    1771 => 'Charge with solar power',
                    1772 => 'Charge with solar and mains power',
                ]
            ],
            30861 => [
                'name' => 'Consumer power',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => '~Watt'
            ]
        ],
        'sunnyboy' => [

        ]
    ];

    /**
     * adresses for high frequent values
     */
    const current_addresses = [
        'default' => [
            30775 => [
                'name' => 'AC active power across all phases',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ]
        ],
        'sunnyboy' => [
            30775 => [
                'name' => 'AC active power across all phases',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ]
        ]
    ];
}