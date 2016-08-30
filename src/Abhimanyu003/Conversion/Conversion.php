<?php namespace Abhimanyu003\Conversion;

class Conversion
{

    /**
     * @var array
     */
    protected static $conversionChart = [
        // Acceleration
        'METRE_PER_SECOND_SQUARED' => 1,

        // Angle
        'TURN'    => 6.28318531,
        'RADIAN'  => 1,
        'DEGREE'  => 0.0174532925,
        'GRADIAN' => 0.015707963267949,

        // Area
        'SQUARE_METRE'     => 1,
        'HECTARE'          => 100,
        'SQUARE_KILOMETRE' => 1000000,
        'SQUARE_INCH'      => 0.00064516,
        'SQUARE_FEET'      => 0.09290304,
        'SQUARE_YARD'      => 0.83612736,
        'ACRE'             => 247.105,
        'SQUARE_MILE'      => 2589988.110336,

        // Storage
        'BIT'      => 0.00012207,
        'BYTE'     => 0.000976563,
        'KILOBIT'  => 0.125,
        'KILOBYTE' => 1,
        'MEGABIT'  => 128,
        'MEGABYTE' => 1024,
        'GIGABIT'  => 131072,
        'GIGABYTE' => 1.049e+6,
        'TERABIT'  => 1.342e+8,
        'TERABYTE' => 1.074e+9,
        'PETABIT'  => 1.374e+11,
        'PETABYTE' => 1.1e+12,

        // Current
        'STATAMPERE'  => 3.33564e-10,
        'MICROAMPERE' => 1e-06,
        'MILLIAMPERE' => 0.001,
        'AMPERE'      => 1,
        'ABAMPERE'    => 10,
        'KILOAMPERE'  => 1000,

        // Fuel
        'KILOMETRES_PER_LITRE'     => 1,
        'LITRE_PER_100_KILOMETRES' => 100,
        'MILES_PER_GALLON'         => 0.354006,
        'US_MILES_PER_GALLON'      => 0.425144,

        // Length
        'MILLIMETRE'    => 0.001,
        'CENTIMETRE'    => 0.01,
        'METRE'         => 1,
        'KILOMETRE'     => 1000,
        'INCH'          => 0.0254,
        'FOOT'          => 0.3048,
        'YARD'          => 0.9144,
        'MILE'          => 1609.34,
        'NAUTICAL_MILE' => 1852,

        // Mass
        'MICROGRAM'  => 1e-7,
        'MILLIGRAM'  => 1e-6,
        'GRAM'       => 0.001,
        'KILOGRAM'   => 1,
        'METRIC_TON' => 100,
        'OUNCE'      => 0.0283495,
        'POUND'      => 0.453592,
        'STONE'      => 6.35029,
        'SHORT_TON'  => 907.185,
        'LONG_TON'   => 1016.0469088,

        // Pressure
        'PASCAL'                 => 1,
        'KILOPASCAL'             => 1000,
        'MEGAPASCAL'             => 1e6,
        'BAR'                    => 1e5,
        'MILLIMETRES_OF_MERCURY' => 133.3224,
        'INCHES_OF_MERCURY'      => 3.386389e3,
        'POUNDS_PER_SQUARE_INCH' => 6.894757e3,
        'ATMOSPHERE'             => 101325,

        // Speed
        'METRE_PER_SECOND'    => 1,
        'KILOMETRES_PER_HOUR' => 0.277778,
        'FEET_PER_SECOND'     => 0.3048,
        'MILES_PER_HOUR'      => 0.44704,
        'KNOT'                => 0.514444,

        // Temperature
        'CELSIUS'    => 273.15,
        'FAHRENHEIT' => 255.372,
        'KELVIN'     => 1,

        // Time
        'NANOSECOND'  => 1e-9,
        'MICROSECOND' => 1e-6,
        'MILLISECOND' => 0.001,
        'SECOND'      => 1,
        'MINUTE'      => 60,
        'HOUR'        => 3600,
        'DAY'         => 86400,
        'WEEK'        => 604800,
        'MONTH'       => 2.62974e6,
        'YEAR'        => 3.15569e7,
        'DECADE'      => 3.15569e8,
        'CENTURY'     => 3.15569e9,
        'MILLENIUM'   => 3.1556926e10,

        // Voltage
        'VOLT'     => 1,
        'KILOVOLT' => 1000,

        // Volume
        'MILLILITRE'    => 1e-6,
        'LITRE'         => 0.001,
        'CUBIC_METRE'   => 1,
        'GALLON'        => 0.00454609,
        'QUART'         => 0.00113652,
        'PINT'          => 0.000568261,
        'TABLESPOON'    => 1.7758e-5,
        'TEASPOON'      => 5.9194e-6,
        'US_GALLON'     => 0.00378541,
        'US_QUART'      => 0.000946353,
        'US_PINT'       => 0.000473176,
        'US_CUP'        => 0.000236588,
        'US_OUNCE'      => 2.9574e-5,
        'US_TABLESPOON' => 1.4787e-5,
        'US_TEASPOON'   => 4.9289e-6,
        'CUBIC_INCH'    => 1.6387e-5,
        'CUBIC_FOOT'    => 0.0283168,
    ];

    /**
     * @var string
     */
    protected $value;


    /**
     * @var string
     */
    protected $unit;


    /**
     * @var
     */
    protected static $native;

    /**
     * @var null
     */
    protected $number = null;
    /**
     * @var
     */
    protected $type;

    /**
     * @param string $quantity
     * @param string $unit
     */
    public function __construct($quantity = '', $unit = '')
    {
        $this->unit = $unit;
        $this->value = $quantity;
    }

    /**
     * @param $quanity
     * @param $unit
     * @return Conversion
     */
    public static function convert($quanity, $unit)
    {
        return new Conversion($quanity, $unit);
    }


    /**
     * @param $unit
     * @return $this
     */
    public function to($unit)
    {
        $this->value = $this->process($this->unit, $unit, $this->value);
        $this->unit = $unit;

        return $this;
    }


    /**
     * @param $from
     * @param $to
     * @param $value
     * @return float
     * @throws \Exception
     */
    protected function process($from, $to, $value)
    {
        return ($value * $this->getConversion($from)) / $this->getConversion($to);
    }


    /**
     * @param $unit
     * @return mixed
     * @throws \Exception
     */
    protected function getConversion($unit)
    {
        if (!isset(static::$conversionChart[strtoupper($unit)])) {
            throw new \Exception(sprintf(
                'No conversion between "%s" and "%s" is defined.',
                static::$native,
                $unit
            ));
        }

        return static::$conversionChart[strtoupper($unit)];
    }


    /**
     * @param int $decimals
     * @param string $decPoint
     * @param string $thousandSep
     * @return string
     */
    public function format($decimals = 2, $decPoint = '.', $thousandSep = ',')
    {
        return number_format($this->value, $decimals, $decPoint, $thousandSep);
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return $this->format();
    }
}
