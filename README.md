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

```php
// ...
"abhimanyusharma003/conversion": "dev-master"
 // ...
```

* Run `composer update` or `composer install `

* Open `app/config/app.php` and add the service provider to your `providers` array.
		
```php
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
Conversion::convert(1, 'megabyte')->to('kilobyte'); // output 1,024.00 ( two decimal place )

// Formatting the output
Conversion::convert(1, 'megabyte')->to('kilobyte')->format(0,'.',','); // output 1,024 ( no decimal place )
```

* Converting mm to cm

```php
Conversion::convert(1000,'millimetre')->to('centimetre');
```


* Converting kg to g

```php
Conversion::convert(1,'kilogram')->to('gram');
```


## Conversion Chart

## Acceleration         
       METRE_PER_SECOND_SQUARE
                               
## Angle                
       TURN                  
       RADIAN                
       DEGREE                
       GRADIAN               
                               
## Area                 
       SQUARE_METRE          
       HECTARE               
       SQUARE_KILOMETRE      
       SQUARE_INCH           
       SQUARE_FEET           
       SQUARE_YARD           
       ACRE                  
       SQUARE_MILE           
                               
## Storage              
       BIT                   
       BYTE                  
       KILOBIT               
       KILOBYTE              
       MEGABIT               
       MEGABYTE              
       GIGABIT               
       GIGABYTE              
       TERABIT               
       TERABYTE              
       PETABIT               
       PETABYTE              
                               
## Current              
       STATAMPERE            
       MICROAMPERE           
       MILLIAMPERE           
       AMPERE                
       ABAMPERE              
       KILOAMPERE            
                               
## Fuel                 
       KILOMETRES_PER_LITRE  
       LITRE_PER_100_KILOMETRE
       MILES_PER_GALLON      
       US_MILES_PER_GALLON   
                               
## Length               
       MILLIMETRE            
       CENTIMETRE            
       METRE                 
       KILOMETRE             
       INCH                  
       FOOT                  
       YARD                  
       MILE                  
       NAUTICAL_MILE         
                               
## Mass                 
       MICROGRAM             
       MILLIGRAM             
       GRAM                  
       KILOGRAM              
       METRIC_TON            
       OUNCE                 
       POUND                 
       STONE                 
       SHORT_TON             
       LONG_TON              
                               
## Pressure             
       PASCAL                
       KILOPASCAL            
       MEGAPASCAL            
       BAR                   
       MILLIMETRES_OF_MERCURY
       INCHES_OF_MERCURY     
       POUNDS_PER_SQUARE_INCH
       ATMOSPHERE            
                               
## Speed                
       METRE_PER_SECOND      
       KILOMETRES_PER_HOUR   
       FEET_PER_SECOND       
       MILES_PER_HOUR        
       KNOT                  
                               
## Temperature          
       CELSIUS               
       FAHRENHEIT            
       KELVIN                
                               
## Time                 
       NANOSECOND            
       MICROSECOND           
       MILLISECOND           
       SECOND                
       MINUTE                
       HOUR                  
       DAY                   
       WEEK                  
       MONTH                 
       YEAR                  
       DECADE                
       CENTURY               
       MILLENIUM             
                               
## Voltage              
       VOLT                  
       KILOVOLT              
                               
## Volume               
       MILLILITRE            
       LITRE                 
       CUBIC_METRE           
       GALLON                
       QUART                 
       PINT                  
       TABLESPOON            
       TEASPOON              
       US_GALLON             
       US_QUART              
       US_PINT               
       US_CUP                
       US_OUNCE              
       US_TABLESPOON         
       US_TEASPOON           
       CUBIC_INCH            
       CUBIC_FOOT            


## Contribute

Feel free to contribute and update the rep.
