izarusBootstrapPlugin
=====================

Plugin Symfony 1.4 con widgets, helpers, generadores y estilos de Bootstrap 3.

## Helpers
### BootstrapHelper

```php
<?php use_helper('Bootstrap') ?>
```
#### Funciones

##### `bs_btn_link($text, $url, $type='default', $size=null, $attributes=array())`

**parámetro** | **tipo** | **valor predeterminado** | descripción
--- | --- | --- | ---
text | string | | Texto del botón
url | string | | Url para el botón (se puede usar ```url_for()```)
type | string | default | (opcional) Tipo del botón para estilo: `default, primary, success, info, danger, warning`
size | string |  | (opcional) Tamaño del botón distinto al estándar: `sm, xs, lg`
attributes | array |  | (opcional) Atributos HTML adicionales


## Widgets
### izarusWidgetFormBootstrapDatetime
```php
$this->widgetSchema['created_at'] = new izarusWidgetFormBootstrapDatetime(<options>);
```

Options:

* type:     string    all     Set type of datepicker.
  Support Type:
  * 'all'       contains date & time picker
  * 'time'      time picker only
  * 'date'      date picker only
  * 'month'     month picker only
  * 'year'      year picker only
* to:   element   null    Attr of Slider Button.
  Set target element value when slider button moves. (Suggest setting to <input> element)
* autoclose:  boolean   false   Enable close picker automatically when user
  selected the year/month/date in yearpicker, monthpicker and datepicker
* container:  string    false   Appends the tooltip to a specific element. Example: container: 'body'
* before:     date      null    Set picker enable date before the before. Example: before: '1990-09-03'
* after:      date      null    Set picker enable date after the after. Example: after: '1989-11-28'
* format:     string    null    Set format for picker display. Example: format: 'dd/MM/yyyy' will convert to 03/09/1990
  * yyyy year
  * MM month
  * dd date
  * HH hours
  * mm minutes
  * ss second