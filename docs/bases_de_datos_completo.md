
# Conexión a Bases de Datos con PHP y PDO

## ¿Qué es PDO?

PDO (PHP Data Objects) es una interfaz uniforme para acceder a diferentes sistemas de bases de datos en PHP. Permite ejecutar consultas SQL y manejar errores de manera segura y orientada a objetos. PDO soporta múltiples motores de base de datos como MySQL, PostgreSQL, SQLite, entre otros.

## Conexión con MySQL usando PDO

Para establecer una conexión utilizando PDO, necesitaremos los siguientes elementos:

- **Host o socket**: la dirección del servidor (ej. `localhost` o `127.0.0.1`).
- **Nombre de la base de datos**.
- **Usuario** y **contraseña**.
- **Opcionalmente el puerto** si no es el predeterminado.

```php
<?php
$host = '127.0.0.1'; // o usar 'localhost'
$db   = 'nombre_base_datos';
$user = 'usuario';
$pass = 'contraseña';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Conexión exitosa.";
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
?>
```

## Ejemplo 1: Consulta básica

```php
<?php
$sql = "SELECT nombre, email FROM usuarios";
$stmt = $pdo->query($sql);

while ($fila = $stmt->fetch()) {
    echo $fila['nombre'] . " - " . $fila['email'] . "<br>";
}
?>
```

## Ejemplo 2: Inserción con parámetros preparados

```php
<?php
$sql = "INSERT INTO productos (nombre, precio) VALUES (:nombre, :precio)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['nombre' => 'Monitor', 'precio' => 15000]);
?>
```

## Ejemplo 3: Uso de try-catch para manejo de errores

```php
<?php
try {
    $sql = "SELECT * FROM productos";
    $stmt = $pdo->query($sql);
    foreach ($stmt as $fila) {
        echo $fila['nombre'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Error al ejecutar consulta: " . $e->getMessage();
}
?>
```

---

# Uso de array_filter y array_map en PHP

## array_filter(): Filtrar valores de un array

```php
<?php
$productos = [
    ["nombre" => "Mouse", "precio" => 500, "stock" => 4],
    ["nombre" => "Teclado", "precio" => 900, "stock" => 20],
    ["nombre" => "Monitor", "precio" => 12000, "stock" => 15],
];

$stock_alto = array_filter($productos, function($producto) {
    return $producto["stock"] > 10;
});

print_r($stock_alto);
?>
```

## array_map(): Aplicar una función a cada elemento del array

```php
<?php
$precios_con_descuento = array_map(function($producto) {
    $producto["precio"] *= 0.90;
    return $producto;
}, $productos);

print_r($precios_con_descuento);
?>
```

## Ejemplo adicional combinando array_filter y array_map

```php
<?php
$productos_filtrados = array_filter($productos, fn($p) => $p["precio"] > 1000);
$actualizados = array_map(fn($p) => ["nombre" => $p["nombre"], "precio" => $p["precio"] * 0.85], $productos_filtrados);

print_r($actualizados);
?>
```

---

Este contenido puede utilizarse como base para una clase práctica sobre conexión a bases de datos y manipulación avanzada de arrays en PHP.
