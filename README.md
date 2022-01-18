# Laravel helper for CASH
[![workflow](https://github.com/webparking/laravel-cash/actions/workflows/php.yml/badge.svg)](https://github.com/webparking/laravel-cash)
[![Latest Stable Version](http://poser.pugx.org/webparking/laravel-cash/v)](https://packagist.org/packages/webparking/laravel-cash)

Attempt to connect the past and the future in a stable and manageable way. The wrapper is developed using the v3 API with credentials (and not using the generated token). I only worked out the mapping for the endpoints that I needed.   

## Installation
```shell
composer require webparking/laravel-cash
```

## Usage 
```php
use Webparking\LaravelCash\Entities\Item;

/** @var Item $item */
$item = app()->make(Item::class);

// Get collection of items   
$items = $item->index(); 

// Fetch item 'foo'
$item = $item->get('foo'); 
```
Note: the CASH API accepts a maximum of 100 requests per minute

### Advanced usage
It's possible to add parameters to an index request. E.g.:
```php
use Webparking\LaravelCash\Entities\Item;

app()->make(Item::class)->index('X'); // Creates request for endpoint "2260X"

app()->make(Item::class)->index('W|7'); // Creates request for endpoint "2260W|7"
```
Note: Parameter "X" is universal to all endpoints and causes the CASH response to include field names instead of only the codes.\
Useful for testing.
    
## Relations and customers
`Customers` (2220) are a subset of `relations` (0101). The customer entity connects you through to the `customerGroup` and `customerGroupTwo`.  

## CASH field definition reference
The notation is the letter + a number which indicated (in most cases) the max length. So L4 is a lowercase word of max 4 characters.

- S = Uppercase text
- L = Lowercase and uppercase text
- N = Numeric
- Y4 = Year (2 chars) & month (2 chars)
- Y2 = Year (2chars)
- I = Decimal (not sure how this notation works)

## Development

This repository comes with a handy Docker Compose setup to aid in development.

To get started simply run the following and you're off to the races:

```shell
$ make start
```

## Licence and Postcardware
This software is open source and licensed under the [MIT license](LICENSE.md).

If you use this software in your daily development we would appreciate to receive a postcard of your hometown.

Please send it to: Webparking BV, Cypresbaan 31a, 2908 LT Capelle aan den IJssel, The Netherlands
