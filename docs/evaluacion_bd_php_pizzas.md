# Evaluación: Conexión a Base de Datos con PHP (PDO)

## Parte 1: Preguntas de Opción Múltiple

**1. ¿Qué significa PDO en PHP?**  
a) PHP Database Object  
b) PHP Data Operation  
c) PHP Data Objects  
d) Programmed Data Output  

**2. ¿Qué función se utiliza para conectarse a una base de datos con PDO?**  
a) connect()  
b) new mysqli()  
c) new PDO()  
d) mysqli_connect()  


**3. ¿Qué estructura se recomienda para manejar errores de conexión en PDO?**  
a) if-else  
b) try-catch  
c) switch-case  
d) do-while  


**4. ¿Qué método de PDO ejecuta una consulta preparada?**  
a) run()  
b) query()  
c) exec()  
d) prepare()  


**5. ¿Qué método se usa para obtener resultados de una consulta preparada?**  
a) get()  
b) fetch()  
c) grab()  
d) collect()  


**6. ¿Cuál de estas opciones activa el manejo de errores con excepciones en PDO?**  
a) setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT)  
b) setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING)  
c) setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)  
d) setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_LOG)  

**7. ¿Qué contiene el DSN (Data Source Name) en PDO?**  
a) Usuario y contraseña  
b) Nombre del servidor y base de datos  
c) Versión del motor  
d) Tipo de servidor y dominio  


**8. ¿Qué operador se usa para concatenar en SQL dentro de PHP?**  
a) +  
b) &  
c) .  
d) ::  


**9. ¿Qué comando SQL se utiliza para insertar datos en una tabla?**  
a) SELECT  
b) UPDATE  
c) INSERT INTO  
d) ADD TO  


**10. ¿Qué es un socket en la conexión a base de datos en entornos locales?**  
a) Una función para enviar datos  
b) Una API de red  
c) Un archivo especial que representa la conexión local  
d) Un driver de PHP  


---

## Parte 2: Ejercicio Práctico - Venta de Pizzas

### Enunciado:

Crear un script en PHP que permita registrar ventas de pizzas conectándose a una base de datos `pizzeria`. El usuario podrá elegir una pizza y se almacenará la venta.

### Requisitos:

1. Mostrar las pizzas disponibles desde la base de datos.
2. Permitir seleccionar una pizza (por ID).
3. Insertar la venta en una tabla `ventas` con fecha actual.

### Base de datos (SQL):

```sql
CREATE DATABASE IF NOT EXISTS pizzeria;
USE pizzeria;

CREATE TABLE pizzas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    precio DECIMAL(5,2)
);

INSERT INTO pizzas (nombre, precio) VALUES
('Muzzarella', 350.00),
('Napolitana', 420.00),
('Fugazzeta', 390.00);

CREATE TABLE ventas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pizza_id INT,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (pizza_id) REFERENCES pizzas(id)
);
```

### Ejemplo de conexión y registro:

```php
<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=pizzeria", "usuario", "contraseña");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT * FROM pizzas");
    foreach ($stmt as $row) {
        echo "{$row['id']}: {$row['nombre']} - \${$row['precio']}<br>";
    }

    $pizza_id = 1; // Simulado, reemplazar por formulario o input real
    $insert = $pdo->prepare("INSERT INTO ventas (pizza_id) VALUES (:pizza_id)");
    $insert->execute([':pizza_id' => $pizza_id]);

    echo "Venta registrada con éxito.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
```

---

