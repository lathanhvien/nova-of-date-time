<?php

namespace Pifpif\NovaOfDateTime;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;
use DateTimeInterface;
use Exception;

class OfDateTime extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-of-date-time';

    /**
     * Create a new field.
     *
     * @param  string  $name
     * @param  string|null  $attribute
     * @param  mixed|null  $resolveCallback
     * @return void
     */
    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback ?? function ($value) {
            if (! $value instanceof DateTimeInterface) {
                throw new Exception("DateTime field must cast to 'datetime' in Eloquent model.");
            }

            return $value->format('Y-m-d H:i:s');
        });
    }

    /**
     * Set the first day of the week.
     *
     * @param  int  $day
     * @return $this
     */
    public function firstDayOfWeek($day)
    {
        return $this->withMeta([__FUNCTION__ => $day]);
    }

    /**
     * Set the date format (Moment.js) that should be used to display the date.
     *
     * @param  string  $format
     * @return $this
     */
    public function format($format)
    {
        return $this->withMeta([__FUNCTION__ => $format]);
    }

    /**
     * Set the date format (flatpickr.js) that should be used to display the date in the input field (picker).
     *
     * @param  string  $format
     * @return $this
     */
    public function pickerFormat($format)
    {
        return $this->withMeta([__FUNCTION__ => $format]);
    }

    /**
     * Option function to convert from pickerFormat to MomentFormat
     * Example: from pickerFormat('d_m_Y H:i:S') to moment(value,'DD_MM_YYYY HH:mm:ss');
     * 
     * @param string $convertOption
     * @return $this
     */
    public function pickerConvert($convertOption)
    {
        return $this->withMeta(['pickerConvert' => $convertOption]);
    }
}
