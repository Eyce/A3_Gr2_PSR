# StringGenerator  

This library can generate strings like passwords or replacement text.

## Password  

This library generates passwords.

```php
require __DIR__.'/vendor/autoload.php';

echo \OKLM\StringGenerator\PasswordGenerator::generate(10,\OKLM\StringGenerator\PasswordGenerator::PASSWORD_MEDIUM);
```

##Lorem Ipsum  

This library generates replacement text.

```php
require __DIR__.'/vendor/autoload.php';

echo \OKLM\StringGenerator\TextGenerator::generate(120,5);
```