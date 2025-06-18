# Segunda Evaluación - Introducción a PHP

**Instrucciones:** Selecciona las 3 opciones correctas en cada pregunta. Podés encontrar fragmentos de código PHP. Leé con atención.

---

## Pregunta 1
¿Cuáles de estas son funciones de PHP para manejar arrays?
- [ ] mysql_connect()
- [x] array_map()
- [x] array_filter()
- [x] array_merge()

## Pregunta 2
¿Cuáles estructuras permiten recorrer un array?
- [x] foreach
- [x] for
- [x] while
- [ ] switch

## Pregunta 3
¿Cuáles afirmaciones son verdaderas sobre arrays asociativos?
- [x] Usan claves personalizadas
- [x] Pueden mezclarse con arrays indexados
- [x] Se accede por clave, no por índice numérico
- [ ] Sólo contienen texto

## Pregunta 4
¿Cuáles funciones de PHP modifican un array existente?
- [x] array_push()
- [x] array_pop()
- [x] sort()
- [ ] array_column()

## Pregunta 5
¿Cuáles funciones permiten filtrar o transformar arrays?
- [x] array_filter()
- [x] array_map()
- [x] array_reduce()
- [ ] array_key_exists()

## Pregunta 6
¿Cuáles afirmaciones sobre formularios HTML son correctas?
- [x] method="post" oculta los datos en la URL
- [x] action especifica dónde se envía el formulario
- [x] El atributo name permite identificar los datos recibidos
- [ ] Los formularios sólo funcionan con JavaScript

## Pregunta 7
¿Cuáles métodos HTTP pueden usarse en formularios HTML?
- [x] POST
- [x] GET
- [x] PUT (con JS)
- [ ] PATCH (en HTML puro)

## Pregunta 8
¿Cuáles validaciones pueden realizarse en el servidor en un formulario PHP?
- [x] Verificar campos obligatorios
- [x] Validar formato de email
- [x] Filtrar código malicioso (inyecciones)
- [ ] Estilizar los campos

## Pregunta 9
¿Qué elementos son esenciales para conectarse a una base de datos con PDO?
- [x] Usuario y contraseña
- [x] Nombre de la base de datos
- [x] Dirección del host o socket
- [ ] Ruta al archivo HTML

## Pregunta 10
¿Cuáles son ventajas de usar PDO?
- [x] Permite usar sentencias preparadas
- [x] Es compatible con varias bases de datos
- [x] Mejora la seguridad contra inyecciones SQL
- [ ] Es más rápido que mysqli siempre

## Pregunta 11
Dado este código:
```php
$array = [10, 20, 30];
$result = array_map(fn($n) => $n * 2, $array);
```
¿Qué contiene `$result`?
- [x] [20, 40, 60]
- [x] Un array con los valores multiplicados por 2
- [x] Un array con la misma cantidad de elementos que `$array`
- [ ] Una lista de claves del array

## Pregunta 12
¿Cuál es el propósito de `array_filter()`?
- [x] Eliminar elementos según una condición
- [x] Retornar un nuevo array con elementos válidos
- [x] No modifica el array original
- [ ] Ordena el array al filtrar

## Pregunta 13
¿Qué ocurre si no se valida un formulario en el servidor?
- [x] Puede aceptar datos erróneos o maliciosos
- [x] Puede comprometer la seguridad del sistema
- [x] No se puede confiar en los datos del cliente
- [ ] Los formularios fallan siempre

## Pregunta 14
¿Qué errores comunes pueden surgir al conectar con PDO?
- [x] Error en credenciales
- [x] Host o puerto incorrecto
- [x] Base de datos no existente
- [ ] Estilo CSS incorrecto

## Pregunta 15
¿Cuál es la estructura básica de una conexión PDO?
- [x] `$pdo = new PDO($dsn, $user, $pass);`
- [x] Utiliza try-catch para manejo de errores
- [x] Usa DSN (data source name)
- [ ] Requiere una interfaz gráfica

## Pregunta 16
¿Cuáles funciones ayudan a depurar un array?
- [x] print_r()
- [x] var_dump()
- [x] json_encode()
- [ ] echo()

## Pregunta 17
¿Qué elementos deben incluirse en un formulario de login?
- [x] Campo email
- [x] Campo contraseña
- [x] Botón submit
- [ ] Campo para foto

## Pregunta 18
¿Cuál es el método correcto para prevenir inyecciones SQL con PDO?
- [x] Sentencias preparadas
- [x] Bindear parámetros con bindParam()
- [x] Usar placeholders en la consulta
- [ ] Filtrar usando htmlspecialchars()

## Pregunta 19
En esta línea de código:
```php
$_POST["email"]
```
¿Qué representa?
- [x] El valor del input llamado “email”
- [x] Un dato recibido por el método POST
- [x] Una variable superglobal
- [ ] Una constante

## Pregunta 20
Dado este fragmento:
```php
$usuarios = ["Ana", "Luis", "Carlos"];
echo $usuarios[1];
```
¿Qué se imprime?
- [ ] Ana
- [x] Luis
- [ ] Carlos
- [x] El segundo elemento del array
- [x] Un string
- [ ] Un error


**21.** ¿Cuál de las siguientes afirmaciones sobre `array_merge()` es correcta?
- [ ] Une arrays eliminando claves duplicadas sin conservar los valores.
- [x] Une dos o más arrays y sobrescribe claves con los valores del último array.
- [ ] Convierte un array asociativo en uno indexado automáticamente.

**22.** ¿Cuál es la función de `htmlspecialchars()` en formularios?
- [ ] Permite concatenar campos del formulario.
- [x] Convierte caracteres especiales en entidades HTML.
- [ ] Limpia los datos de SQL injection automáticamente.

**23.** ¿Qué método HTTP se debe usar si se quiere ocultar los datos del formulario en la URL?
- [ ] GET
- [x] POST
- [ ] PUT

**24.** ¿Qué se debe hacer siempre antes de usar los datos de `$_POST`?
- [x] Validar y sanitizar los datos.
- [ ] Cifrarlos con base64.
- [ ] Convertirlos a JSON.

**25.** ¿Cuál es el resultado de este código?
```php
$array = [1, 2, 3];
$result = array_map(fn($x) => $x * 2, $array);
print_r($result);
```
- [ ] [1, 2, 3, 6]
- [ ] [2, 4]
- [x] [2, 4, 6]

**26.** ¿Qué función devuelve las claves de un array asociativo?
- [ ] array_values()
- [x] array_keys()
- [ ] array_columns()

**27.** ¿Qué hace el siguiente código?
```php
$usuarios = array_filter($usuarios, fn($u) => $u['activo'] === true);
```
- [ ] Modifica todos los usuarios activos.
- [x] Filtra el array y devuelve solo los usuarios activos.
- [ ] Elimina el campo 'activo' del array.

**28.** ¿Qué sentencia es necesaria para capturar errores al intentar conectarse con PDO?
- [ ] while-catch
- [ ] check-try
- [x] try-catch

**29.** ¿Cuál es la forma correcta de verificar si la conexión PDO fue exitosa?
- [ ] `$conn->status()`
- [ ] `if ($conn != null)`
- [x] En el bloque `catch` detectar excepciones lanzadas al instanciar PDO.

**30.** ¿Cuál es el propósito de usar `password_hash()` en PHP?
- [ ] Cifrar la conexión a la base de datos.
- [ ] Validar formularios.
- [x] Crear un hash seguro para contraseñas.
