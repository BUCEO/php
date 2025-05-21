# Consulta de Datos con PHP y PDO

Una vez establecida la conexión, se pueden ejecutar consultas SELECT para obtener información de la base de datos.

## Ejemplo de consulta simple
```php
$stmt = $pdo->query("SELECT nombre, precio FROM pizzas");
while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $fila['nombre'] . " - $" . $fila['precio'] . "<br>";
}
```
### Métodos comunes:
- `query()`: ejecuta una consulta simple.
- `prepare()` y `execute()`: permiten usar consultas con parámetros seguros.

## Consulta con parámetros
```php
$stmt = $pdo->prepare("SELECT * FROM pizzas WHERE precio > :precio");
$stmt->execute(['precio' => 500]);
$resultado = $stmt->fetchAll();
```

---