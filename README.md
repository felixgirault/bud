Bud
===

Bud extends the [Pimple](https://github.com/fabpot/Pimple) container with alternative access methods.

Example
-------

Standard Pimple methods:

```php
isset($Container['key']);
$Container['key'];
$Container['key'] = $value;
unset($Container['key']);
```

Magic methods:

```php
isset($Container->key);
$Container->key;
$Container->key = $value;
unset($Container->key);
```

Regular methods:

```php
$Container->has('key');
$Container->get('key');
$Container->set('key', $value);
$Container->del('key');
```
