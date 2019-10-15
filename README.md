# nova-of-date-time 1.0.0
### Installation
```sh
$ composer require lathanhvien/novaofdatetime
```
### Usage
```sh
use Pifpif\NovaOfDateTime\OfDateTime;

OfDateTime::make('Foobar')
    ->format('DD-MM-YYYY HH:mm:ss') 
    // ->pickerFormat('d_m_Y H:i:S') 
    // ->pickerConvert('DD_MM_YYYY HH:mm:ss')
    ->pickerFormat('d-m-Y H:i:S') 
    ->pickerConvert('DD-MM-YYYY HH:mm:ss')
    ->rules('required', 'date_format:Y-m-d H:i:s')
    ->firstDayOfWeek(1)
```
### Configuration
This package is an improvement of DateTime Nova package.  
It add option function pickerConvert to make a convert from pickerFormat (for Display) to momentFormat (for Vuejs).  
Check pickerFormat conventions on this page:  
https://flatpickr.js.org/formatting/  
Check momentFormat conventions on this page:  
https://momentjs.com/docs/#/parsing/string-format/  
### Support
If you have any ideas about this package, feel free to contact me at gmail: b.thanhdung@gmail.com or skype: xprotoprotox
### License
This package is available under the [MIT](https://opensource.org/licenses/mit-license.php) license. 