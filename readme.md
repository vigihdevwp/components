### Exemple OwlCarousel

```php

use VigihdevWP\Components\OwlCarousel\Dtos\OptionsOwlDto;
use VigihdevWP\Components\OwlCarousel\Dtos\ResponsiveOwlDto;

$owlOptions = new OptionsOwlDto(
    items: 2,
    margin: 0,
    nav: true,
);

$owlResponsive = ResponsiveOwlDto::create()
    ->xs(new OptionsOwlDto(items: 1.05, nav: true, dots: false))
    ->sm(new OptionsOwlDto(items: 1.4, nav: true, dots: false,))
    ->md(new OptionsOwlDto(items: 1.4, nav: true, dots: false))
    ->lg(new OptionsOwlDto(items: 1.4, nav: true, dots: false));

$owlOption = json_encode(
    array_merge($owlOptions->toArray(), [
        'responsive' => $owlResponsive->toArray()
    ]),
    JSON_FORCE_OBJECT
);

```
