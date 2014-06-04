<?php namespace Abhimanyusharma003\Conversion;

class Conversion {

    // Acceleration
    const METRE_PER_SECOND_SQUARED = 'm/s^2';

    // Angle
    const TURN = 'turn';
    const RADIAN = 'rad';
    const DEGREE = 'deg';
    const GRADIAN = 'grad';

    // Area
    // Metric system
    const SQUARE_METRE = 'm^2';
    const HECTARE = 'ha';
    const SQUARE_KILOMETRE = 'km^2';
    // Imperial system
    const SQUARE_INCH = 'in^2';
    const SQUARE_FEET = 'ft^2';
    const SQUARE_YARD = 'yd^2';
    const ACRE = 'ac';
    const SQUARE_MILE = 'mi^2';

    // Storage
    const BIT = 'b';
    const BYTE = 'B';
    const KILOBIT = 'kb';
    const KILOBYTE = 'kB';
    const MEGABIT = 'Mb';
    const MEGABYTE = 'MB';
    const GIGABIT = 'Gb';
    const GIGABYTE = 'GB';
    const TERABIT = 'Tb';
    const TERABYTE = 'TB';
    const PETABIT = 'Pb';
    const PETABYTE = 'PB';

    // Current
    const STATAMPERE = 'statA';
    const MICROAMPERE = 'uA';
    const MILLIAMPERE = 'mA';
    const ABAMPERE = 'aA';
    const AMPERE = 'A';
    const KILOAMPERE = 'kA';

    // Fuel
    // Metric units
    const KILOMETRES_PER_LITRE = 'km/L';
    const LITRE_PER_100_KILOMETRES = 'L/100 km';
    // Imperial units
    const MILES_PER_GALLON = 'mpg';
    // US units
    const US_MILES_PER_GALLON = 'us mpg';

    // Length
    // Metric system
    const MILLIMETRE = 'mm';
    const CENTIMETRE = 'cm';
    const METRE = 'm';
    const KILOMETRE = 'km';
    // Imperial system
    const INCH = 'in';
    const FOOT = 'ft';
    const YARD = 'yd';
    const MILE = 'mi';
    // Other systems
    const NAUTICAL_MILE = 'nmi';

    // Mass
    // Metric system
    const MICROGRAM = 'mcg';
    const MILLIGRAM = 'mg';
    const GRAM = 'g';
    const KILOGRAM = 'kg';
    const METRIC_TON = 't';
    // Imperial system
    const OUNCE = 'oz';
    const POUND = 'lb';
    const STONE = 'st';
    const SHORT_TON = 's. t.';
    const LONG_TON = 'l. t.';

    // Pressure
    const PASCAL = 'Pa';
    const KILOPASCAL = 'kPa';
    const MEGAPASCAL = 'MPa';
    const BAR = 'bar';
    const MILLIMETRES_OF_MERCURY = 'mmHg';
    const ATMOSPHERE = 'atm';
    const INCHES_OF_MERCURY = 'inHg';
    const POUNDS_PER_SQUARE_INCH = 'psi';

    // Speed
    // Metric units
    const METRE_PER_SECOND = 'm/s';
    const KILOMETRES_PER_HOUR = 'km/h';
    // Imperial units
    const FEET_PER_SECOND = 'ft/s';
    const MILES_PER_HOUR = 'mph';
    // Other units
    const KNOT = 'kn';

    // Temperature
    const CELSIUS = 'C';
    const FAHRENHEIT = 'F';
    const KELVIN = 'K';

    // Time
    const NANOSECOND = 'ns';
    const MICROSECOND = 'us';
    const MILLISECOND = 'ms';
    const SECOND = 's';
    const MINUTE = 'min';
    const HOUR = 'hr';
    const DAY = 'd';
    const WEEK = 'wk';
    const MONTH = 'mo';
    const YEAR = 'a';
    const DECADE = 'decade';
    const CENTURY = 'century';
    const MILLENIUM = 'ka';

    // Voltage
    const VOLT = 'V';
    const KILOVOLT = 'KV';

    // Volume
    // Metric system
    const MILLILITRE = 'mL';
    const LITRE = 'L';
    const CUBIC_METRE = 'm^3';
    // Imperial system
    const GALLON = 'gal';
    const QUART = 'qt';
    const PINT = 'pt';
    const CUP = 'c';
    const TABLESPOON = 'tbsp';
    const TEASPOON = 'tsp';
    // US system
    const US_GALLON = 'us gal';
    const US_QUART = 'us qt';
    const US_PINT = 'us pt';
    const US_CUP = 'us c';
    const US_OUNCE = 'us oz';
    const US_TABLESPOON = 'us tbsp';
    const US_TEASPOON = 'us tsp';
    // Other units
    const CUBIC_INCH = 'in^3';
    const CUBIC_FOOT = 'ft^3';

    /**
     * @var array
     */
    protected static $conversionChart = array(
        // Acceleration
        Conversion::METRE_PER_SECOND_SQUARED => 1,

        // Angle
        Conversion::TURN                     => 6.28318531,
        Conversion::RADIAN                   => 1,
        Conversion::DEGREE                   => 0.0174532925,
        Conversion::GRADIAN                  => 0.015707963267949,

        // Area
        Conversion::SQUARE_METRE             => 1,
        Conversion::HECTARE                  => 100,
        Conversion::SQUARE_KILOMETRE         => 1000000,
        Conversion::SQUARE_INCH              => 0.00064516,
        Conversion::SQUARE_FEET              => 0.09290304,
        Conversion::SQUARE_YARD              => 0.83612736,
        Conversion::ACRE                     => 247.105,
        Conversion::SQUARE_MILE              => 2589988.110336,

        // Storage
        Conversion::BIT                      => 0.00012207,
        Conversion::BYTE                     => 0.000976563,
        Conversion::KILOBIT                  => 0.125,
        Conversion::KILOBYTE                 => 1,
        Conversion::MEGABIT                  => 128,
        Conversion::MEGABYTE                 => 1024,
        Conversion::GIGABIT                  => 131072,
        Conversion::GIGABYTE                 => 1.049e+6,
        Conversion::TERABIT                  => 1.342e+8,
        Conversion::TERABYTE                 => 1.074e+9,
        Conversion::PETABIT                  => 1.374e+11,
        Conversion::PETABYTE                 => 1.1e+12,

        // Current
        Conversion::STATAMPERE               => 3.33564e-10,
        Conversion::MICROAMPERE              => 1e-06,
        Conversion::MILLIAMPERE              => 0.001,
        Conversion::AMPERE                   => 1,
        Conversion::ABAMPERE                 => 10,
        Conversion::KILOAMPERE               => 1000,

        // Fuel
        Conversion::KILOMETRES_PER_LITRE     => 1,
        Conversion::LITRE_PER_100_KILOMETRES => 100,
        Conversion::MILES_PER_GALLON         => 0.354006,
        Conversion::US_MILES_PER_GALLON      => 0.425144,

        // Length
        Conversion::MILLIMETRE               => 0.001,
        Conversion::CENTIMETRE               => 0.01,
        Conversion::METRE                    => 1,
        Conversion::KILOMETRE                => 1000,
        Conversion::INCH                     => 0.0254,
        Conversion::FOOT                     => 0.3048,
        Conversion::YARD                     => 0.9144,
        Conversion::MILE                     => 1609.34,
        Conversion::NAUTICAL_MILE            => 1852,

        // Mass
        Conversion::MICROGRAM                => 1e-7,
        Conversion::MILLIGRAM                => 1e-6,
        Conversion::GRAM                     => 0.001,
        Conversion::KILOGRAM                 => 1,
        Conversion::METRIC_TON               => 100,
        Conversion::OUNCE                    => 0.0283495,
        Conversion::POUND                    => 0.453592,
        Conversion::STONE                    => 6.35029,
        Conversion::SHORT_TON                => 907.185,
        Conversion::LONG_TON                 => 1016.0469088,

        // Pressure
        Conversion::PASCAL                   => 1,
        Conversion::KILOPASCAL               => 1000,
        Conversion::MEGAPASCAL               => 1e6,
        Conversion::BAR                      => 1e5,
        Conversion::MILLIMETRES_OF_MERCURY   => 133.3224,
        Conversion::INCHES_OF_MERCURY        => 3.386389e3,
        Conversion::POUNDS_PER_SQUARE_INCH   => 6.894757e3,
        Conversion::ATMOSPHERE               => 101325,

        // Speed
        Conversion::METRE_PER_SECOND         => 1,
        Conversion::KILOMETRES_PER_HOUR      => 0.277778,
        Conversion::FEET_PER_SECOND          => 0.3048,
        Conversion::MILES_PER_HOUR           => 0.44704,
        Conversion::KNOT                     => 0.514444,

        // Temperature
        Conversion::CELSIUS                  => 273.15,
        Conversion::FAHRENHEIT               => 255.372,
        Conversion::KELVIN                   => 1,

        // Time
        Conversion::NANOSECOND               => 1e-9,
        Conversion::MICROSECOND              => 1e-6,
        Conversion::MILLISECOND              => 0.001,
        Conversion::SECOND                   => 1,
        Conversion::MINUTE                   => 60,
        Conversion::HOUR                     => 3600,
        Conversion::DAY                      => 86400,
        Conversion::WEEK                     => 604800,
        Conversion::MONTH                    => 2.62974e6,
        Conversion::YEAR                     => 3.15569e7,
        Conversion::DECADE                   => 3.15569e8,
        Conversion::CENTURY                  => 3.15569e9,
        Conversion::MILLENIUM                => 3.1556926e10,

        // Voltage
        Conversion::VOLT                     => 1,
        Conversion::KILOVOLT                 => 1000,

        // Volume
        Conversion::MILLILITRE               => 1e-6,
        Conversion::LITRE                    => 0.001,
        Conversion::CUBIC_METRE              => 1,
        Conversion::GALLON                   => 0.00454609,
        Conversion::QUART                    => 0.00113652,
        Conversion::PINT                     => 0.000568261,
        Conversion::TABLESPOON               => 1.7758e-5,
        Conversion::TEASPOON                 => 5.9194e-6,
        Conversion::US_GALLON                => 0.00378541,
        Conversion::US_QUART                 => 0.000946353,
        Conversion::US_PINT                  => 0.000473176,
        Conversion::US_CUP                   => 0.000236588,
        Conversion::US_OUNCE                 => 2.9574e-5,
        Conversion::US_TABLESPOON            => 1.4787e-5,
        Conversion::US_TEASPOON              => 4.9289e-6,
        Conversion::CUBIC_INCH               => 1.6387e-5,
        Conversion::CUBIC_FOOT               => 0.0283168,
    );

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
    public function convert($quanity, $unit)
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
        if ( ! isset(static::$conversionChart[$unit]))
        {
            throw new \Exception(sprintf(
                'No conversation between "%s" and "%s" is defined.',
                static::$native,
                $unit
            ));
        }

        return static::$conversionChart[$unit];
    }


    /**
     * @param int    $decimals
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