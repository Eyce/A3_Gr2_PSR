# StringGenerator  

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Eyce/A3_Gr2_PSR/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Eyce/A3_Gr2_PSR/?branch=master)  

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