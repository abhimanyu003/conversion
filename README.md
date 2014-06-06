## Larvel Conversion

Library help to convert units.

## Units supported

* Acceleration
* Angle
* Area
* Storage
* Current
* Fuel
* Length
* Mass
* Pressure
* Speed
* Temperature
* Time
* Voltage
* Volume


## Installation

* Add below line to `composer.json `

```json
// ...
"abhimanyusharma003/conversion": "dev-master"
 // ...
```

* Run `composer update` or `composer install `

* Open `app/config/app.php` and add the service provider to your `providers` array.
		
```json
// ...
'Abhimanyusharma003\Conversion\ConversionServiceProvider',
 // ...
```

## How to use


```php
Conversion::convert($value,'type')->to('type');
```

Formatting results use

```php
Conversion::convert($value,'type')->to('type')
			->format(int decimal,'decimal modifier','thousand modifer');
```

## Example

* Converting MB to kb

```php

Conversion::convert(1, 'MB')->to('kB'); // output 1,024.00 ( two decimal place )

// Formatting the output
Conversion::convert(1, 'MB')->to('kB')->format(0,'.',','); // output 1,024 ( no decimal place )

```

* Converting mm to cm

```php

Conversion::convert(1000,'mm')->to('cm');

```

* Converting mm to cm

```php

Conversion::convert(1000,'mm')->to('cm');

```

* Converting kg to g

```php

Conversion::convert(1,'kg')->to('g');

```


## Conversion Chart

### Acceleration
    METRE_PER_SECOND_SQUARED = 'm/s^2';

### Angle
    TURN = 'turn';
    RADIAN = 'rad';
    DEGREE = 'deg';
    GRADIAN = 'grad';

### Area
    	// Metric system
    SQUARE_METRE = 'm^2';
    HECTARE = 'ha';
    SQUARE_KILOMETRE = 'km^2';
    	// Imperial system
    SQUARE_INCH = 'in^2';
    SQUARE_FEET = 'ft^2';
    SQUARE_YARD = 'yd^2';
    ACRE = 'ac';
    SQUARE_MILE = 'mi^2';

### Storage
    BIT = 'b';
    BYTE = 'B';
    KILOBIT = 'kb';
    KILOBYTE = 'kB';
    MEGABIT = 'Mb';
    MEGABYTE = 'MB';
    GIGABIT = 'Gb';
    GIGABYTE = 'GB';
    TERABIT = 'Tb';
    TERABYTE = 'TB';
    PETABIT = 'Pb';
    PETABYTE = 'PB';

### Current
    STATAMPERE = 'statA';
    MICROAMPERE = 'uA';
    MILLIAMPERE = 'mA';
    ABAMPERE = 'aA';
    AMPERE = 'A';
    KILOAMPERE = 'kA';

### Fuel
    	// Metric units
    KILOMETRES_PER_LITRE = 'km/L';
    LITRE_PER_100_KILOMETRES = 'L/100 km';
    	// Imperial units
    MILES_PER_GALLON = 'mpg';
    	// US units
    US_MILES_PER_GALLON = 'us mpg';

### Length
    	// Metric system
    MILLIMETRE = 'mm';
    CENTIMETRE = 'cm';
    METRE = 'm';
    KILOMETRE = 'km';
    	// Imperial system
    INCH = 'in';
    FOOT = 'ft';
    YARD = 'yd';
    MILE = 'mi';
    	// Other systems
    NAUTICAL_MILE = 'nmi';

### Mass
    	// Metric system
    MICROGRAM = 'mcg';
    MILLIGRAM = 'mg';
    GRAM = 'g';
    KILOGRAM = 'kg';
    METRIC_TON = 't';
    	// Imperial system
    OUNCE = 'oz';
    POUND = 'lb';
    STONE = 'st';
    SHORT_TON = 's. t.';
    LONG_TON = 'l. t.';
### Pressure
    PASCAL = 'Pa';
    KILOPASCAL = 'kPa';
    MEGAPASCAL = 'MPa';
    BAR = 'bar';
    MILLIMETRES_OF_MERCURY = 'mmHg';
    ATMOSPHERE = 'atm';
    INCHES_OF_MERCURY = 'inHg';
    POUNDS_PER_SQUARE_INCH = 'psi';

### Speed
    	// Metric units
    METRE_PER_SECOND = 'm/s';
    KILOMETRES_PER_HOUR = 'km/h';
    	// Imperial units
    FEET_PER_SECOND = 'ft/s';
    MILES_PER_HOUR = 'mph';
   		// Other units
    KNOT = 'kn';

### Temperature
    CELSIUS = 'C';
    FAHRENHEIT = 'F';
    KELVIN = 'K';

### Time
    NANOSECOND = 'ns';
    MICROSECOND = 'us';
    MILLISECOND = 'ms';
    SECOND = 's';
    MINUTE = 'min';
    HOUR = 'hr';
    DAY = 'd';
    WEEK = 'wk';
    MONTH = 'mo';
    YEAR = 'a';
    DECADE = 'decade';
    CENTURY = 'century';
    MILLENIUM = 'ka';

### Voltage
    VOLT = 'V';
    KILOVOLT = 'KV';

### Volume
    	// Metric system
    MILLILITRE = 'mL';
    LITRE = 'L';
    CUBIC_METRE = 'm^3';
    	// Imperial system
    GALLON = 'gal';
    QUART = 'qt';
    PINT = 'pt';
    CUP = 'c';
    TABLESPOON = 'tbsp';
    TEASPOON = 'tsp';
    	// US system
    US_GALLON = 'us gal';
    US_QUART = 'us qt';
    US_PINT = 'us pt';
    US_CUP = 'us c';
    US_OUNCE = 'us oz';
    US_TABLESPOON = 'us tbsp';
    US_TEASPOON = 'us tsp';
    	// Other units
    CUBIC_INCH = 'in^3';


## Contribute

Feel free to contribute and update the rep.
