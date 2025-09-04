# Segunda Evaluación - Introducción a PHP

**Instrucciones:** Selecciona las 3 opciones correctas en cada pregunta. Podés encontrar fragmentos de código PHP. Leé con atención.

---

## Pregunta 1
¿Cuáles de estas son funciones de PHP para manejar arrays?
- [ ] mysql_connect()
- [ ] array_map()
- [ ] array_filter()
- [ ] array_merge()

## Pregunta 2
¿Cuáles estructuras permiten recorrer un array?
- [ ] foreach
- [ ] for
- [ ] while
- [ ] switch

## Pregunta 3
¿Cuáles afirmaciones son verdaderas sobre arrays asociativos?
- [ ] Usan claves personalizadas
- [ ] Pueden mezclarse con arrays indexados
- [ ] Se accede por clave, no por índice numérico
- [ ] Sólo contienen texto

## Pregunta 4
¿Cuáles funciones de PHP modifican un array existente?
- [ ] array_push()
- [ ] array_pop()
- [ ] sort()
- [ ] array_column()

## Pregunta 5
¿Cuáles funciones permiten filtrar o transformar arrays?
- [ ] array_filter()
- [ ] array_map()
- [ ] array_reduce()
- [ ] array_key_exists()

## Pregunta 6
¿Cuáles afirmaciones sobre formularios HTML son correctas?
- [ ] method="post" oculta los datos en la URL
- [ ] action especifica dónde se envía el formulario
- [ ] El atributo name permite identificar los datos recibidos
- [ ] Los formularios sólo funcionan con JavaScript

## Pregunta 7
¿Cuáles métodos HTTP pueden usarse en formularios HTML?
- [ ] POST
- [ ] GET
- [] PUT (con JS)
- [ ] PATCH (en HTML puro)

## Pregunta 8
¿Cuáles validaciones pueden realizarse en el servidor en un formulario PHP?
- [ ] Verificar campos obligatorios
- [ ] Validar formato de email
- [ ] Filtrar código malicioso (inyecciones)
- [ ] Estilizar los campos

## Pregunta 9
¿Qué elementos son esenciales para conectarse a una base de datos con PDO?
- [ ] Usuario y contraseña
- [ ] Nombre de la base de datos
- [ ] Dirección del host o socket
- [ ] Ruta al archivo HTML

## Pregunta 10
¿Cuáles son ventajas de usar PDO?
- [ ] Permite usar sentencias preparadas
- [ ] Es compatible con varias bases de datos
- [ ] Mejora la seguridad contra inyecciones SQL
- [ ] Es más rápido que mysqli siempre

## Pregunta 11
Dado este código:
```php
$array = [10, 20, 30];
$result = array_map(fn($n) => $n * 2, $array);
```
¿Qué contiene `$result`?
- [ ] [20, 40, 60]
- [ ] Un array con los valores multiplicados por 2
- [ ] Un array con la misma cantidad de elementos que `$array`
- [ ] Una lista de claves del array

## Pregunta 12
¿Cuál es el propósito de `array_filter()`?
- [ ] Eliminar elementos según una condición
- [ ] Retornar un nuevo array con elementos válidos
- [ ] No modifica el array original
- [ ] Ordena el array al filtrar

## Pregunta 13
¿Qué ocurre si no se valida un formulario en el servidor?
- [ ] Puede aceptar datos erróneos o maliciosos
- [ ] Puede comprometer la seguridad del sistema
- [ ] No se puede confiar en los datos del cliente
- [ ] Los formularios fallan siempre

## Pregunta 14
¿Qué errores comunes pueden surgir al conectar con PDO?
- [ ] Error en credenciales
- [ ] Host o puerto incorrecto
- [ ] Base de datos no existente
- [ ] Estilo CSS incorrecto

## Pregunta 15
¿Cuál es la estructura básica de una conexión PDO?
- [ ] `$pdo = new PDO($dsn, $user, $pass);`
- [ ] Utiliza try-catch para manejo de errores
- [ ] Usa DSN (data source name)
- [ ] Requiere una interfaz gráfica

## Pregunta 16
¿Cuáles funciones ayudan a depurar un array?
- [ ] print_r()
- [ ] var_dump()
- [ ] json_encode()
- [ ] array_debug()

## Pregunta 17
¿Qué elementos mínimos deben incluirse en un formulario de login?
- [ ] Campo usuario o email
- [ ] Campo contraseña
- [ ] Botón submit (enviar)
- [ ] Campo para foto

## Pregunta 18
¿Cuál es el método correcto para prevenir inyecciones SQL con PDO?
- [ ] Sentencias preparadas
- [ ] Bindear parámetros con bindParam()
- [ ] Usar placeholders en la consulta
- [ ] Filtrar usando htmlspecialchars()

## Pregunta 19
En esta línea de código:
```php
$_POST["email"]
```
¿Qué representa?
- [ ] El valor del input llamado “email”
- [ ] Un dato recibido por el método POST
- [ ] Una variable superglobal
- [ ] Una constante

## Pregunta 20
Dado este fragmento:
```php
$usuarios = ["Ana", "Luis", "Carlos"];
echo $usuarios[1];
```
¿Qué se imprime?
- [ ] Ana
- [ ] Luis
- [ ] Carlos
- [ ] El segundo elemento del array
- [ ] Un string
- [ ] Un error


**21.** ¿Cuál de las siguientes afirmaciones sobre `array_merge()` es correcta?
- [ ] Une arrays eliminando claves duplicadas sin conservar los valores.
- [ ] Une dos o más arrays y sobrescribe claves con los valores del último array.
- [ ] Convierte un array asociativo en uno indexado automáticamente.

**22.** ¿Cuál es la función de `htmlspecialchars()` en formularios?
- [ ] Permite concatenar campos del formulario.
- [ ] Convierte caracteres especiales en entidades HTML.
- [ ] Limpia los datos de SQL injection automáticamente.

**23.** ¿Qué método HTTP se debe usar si se quiere ocultar los datos del formulario en la URL?
- [ ] GET
- [ ] POST
- [ ] PUT

**24.** ¿Qué se debe hacer siempre antes de usar los datos de `$_POST`?
- [ ] Validar y sanitizar los datos.
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
- [ ] [2, 4, 6]

**26.** ¿Qué función devuelve las claves de un array asociativo?
- [ ] array_values()
- [ ] array_keys()
- [ ] array_columns()

**27.** ¿Qué hace el siguiente código?
```php
$usuarios = array_filter($usuarios, fn($u) => $u['activo'] === true);
```
- [ ] Modifica todos los usuarios activos.
- [ ] Filtra el array y devuelve solo los usuarios activos.
- [ ] Elimina el campo 'activo' del array.

**28.** ¿Qué sentencia es necesaria para capturar errores al intentar conectarse con PDO?
- [ ] while-catch
- [ ] check-try
- [ ] try-catch

**29.** ¿Cuál es la forma correcta de verificar si la conexión PDO fue exitosa?
- [ ] `$conn->status()`
- [ ] `if ($conn != null)`
- [x] En el bloque `catch` detectar excepciones lanzadas al instanciar PDO.

**30.** ¿Cuál es el propósito de usar `password_hash()` en PHP?
- [ ] Cifrar la conexión a la base de datos.
- [ ] Validar formularios.
- [x] Crear un hash seguro para contraseñas.
