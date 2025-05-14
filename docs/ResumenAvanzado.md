
# Resumen de Introducción a PHP

Este documento resume los contenidos principales vistos hasta ahora en la unidad curricular de Introducción a PHP, enfocándose en la sintaxis básica del lenguaje, estructuras de control, tipos de datos, operadores y arrays.

## 📌 Tipos de datos en PHP

- **Entero (`int`)**
- **Flotante (`float`)**
- **Cadena de texto (`string`)**
- **Booleano (`bool`)**
- **Array (`array`)**
- **NULL**
- **Objeto (`object`)** *(solo mencionado)*
- **Recurso (`resource`)* (avanzado – no abordado aún)*

```php
$edad = 25;         // int
$precio = 10.5;     // float
$nombre = "Juan";   // string
$activo = true;     // bool
$colores = ["rojo", "azul"]; // array
$vacio = null;      // NULL
```

## 🔧 Operadores

### Aritméticos

| Operador | Significado     | Ejemplo          |
|----------|------------------|------------------|
| `+`      | Suma             | `$a + $b`        |
| `-`      | Resta            | `$a - $b`        |
| `*`      | Multiplicación   | `$a * $b`        |
| `/`      | División         | `$a / $b`        |
| `%`      | Módulo           | `$a % $b`        |
| `**`     | Potenciación     | `$a ** $b`       |

### Comparación

| Operador | Significado              | Ejemplo           | Resultado |
|----------|--------------------------|-------------------|-----------|
| `==`     | Igualdad de valor        | `5 == "5"`        | `true`    |
| `===`    | Igualdad estricta (valor y tipo) | `5 === "5"`  | `false`   |
| `!=`     | Distinto                 | `5 != 3`          | `true`    |
| `!==`    | Distinto estricto        | `5 !== "5"`       | `true`    |
| `>`      | Mayor que                | `5 > 3`           | `true`    |
| `<`      | Menor que                | `5 < 3`           | `false`   |
| `>=`     | Mayor o igual            | `5 >= 5`          | `true`    |
| `<=`     | Menor o igual            | `3 <= 2`          | `false`   |

### Asignación

```php
$a = 5;
$a += 2; // equivale a $a = $a + 2;
```

### Lógicos

| Operador | Significado   | Ejemplo             |
|----------|---------------|---------------------|
| `&&`     | AND lógico     | `$a > 0 && $b > 0`  |
| `||`     | OR lógico      | `$a > 0 || $b > 0`  |
| `!`      | NOT lógico     | `!$a`               |

## 🧠 Estructuras de Control

### Condicionales

```php
if ($edad >= 18) {
    echo "Mayor de edad";
} elseif ($edad >= 13) {
    echo "Adolescente";
} else {
    echo "Menor";
}
```

```php
switch ($opcion) {
    case 1:
        echo "Opción 1";
        break;
    case 2:
        echo "Opción 2";
        break;
    default:
        echo "Otra opción";
}
```

### Iterativas

```php
for ($i = 0; $i < 5; $i++) {
    echo $i;
}

while ($x < 5) {
    echo $x;
    $x++;
}

do {
    echo $x;
    $x++;
} while ($x < 5);
```

## 📚 Arrays

```php
$producto = [
    "nombre" => "Mouse",
    "precio" => 500,
    "stock" => 15
];

$productos = [
    ["nombre" => "Teclado", "precio" => 700, "stock" => 5],
    ["nombre" => "Monitor", "precio" => 10000, "stock" => 12],
    ["nombre" => "Mouse", "precio" => 500, "stock" => 20]
];
```

### Recorrer con `foreach`

```php
foreach ($productos as $producto) {
    echo $producto["nombre"] . " - $" . $producto["precio"] . "\n";
}
```

## 🧩 Funciones con Arrays

### `array_filter()`

Filtra elementos según una condición.

```php
$disponibles = array_filter($productos, function($p) {
    return $p["stock"] > 10;
});
```

### `array_map()`

Aplica una función a todos los elementos.

```php
$descuentos = array_map(function($p) {
    $p["precio"] *= 0.9; // 10% descuento
    return $p;
}, $productos);
```

## ✅ Buenas prácticas

- Nombrar variables con sentido.
- Usar indentación y comentarios.
- Validar tipos de datos antes de operar.
- No repetir código innecesario (DRY).
- Separar lógica de presentación (MVC más adelante).
