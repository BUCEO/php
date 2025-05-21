# Inserción y Actualización de Datos con PHP y PDO

PDO también permite insertar nuevos registros y actualizar los existentes usando sentencias `INSERT` y `UPDATE`.

## Ejemplo de inserción
```php
$sql = "INSERT INTO pizzas (nombre, precio) VALUES (:nombre, :precio)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['nombre' => 'Mozzarella', 'precio' => 450]);
```

## Ejemplo de actualización
```php
$sql = "UPDATE pizzas SET precio = :precio WHERE nombre = :nombre";
$stmt = $pdo->prepare($sql);
$stmt->execute(['nombre' => 'Mozzarella', 'precio' => 500]);
```

### Notas importantes:
- Usar `prepare()` con `execute()` mejora la seguridad contra inyecciones SQL.
- Se pueden verificar cuántas filas fueron afectadas usando `$stmt->rowCount()`.

---