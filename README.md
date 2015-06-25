# Seq

## Introduction

Seq is a library for list handling based on [Prelude LS](http://www.preludels.com/). It is a functionally oriented
utility library, powerful and flexible.

### Example

```php
Seq::each("println",
  Seq::map("sqrt",
    Seq::filter("even",
      range(1, 10)
  )
);
```

With PHP 7 proposed syntax for pipeline operator:
```php
function even(int $x): int { return $x % 2 === 0; }
function println($x) { echo $x, PHP_EOL; }

range(1, 10)
|> Seq::filter ("even")
|> Seq::map ("sqrt")
|> Seq::each ("println");
```
