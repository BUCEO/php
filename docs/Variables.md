<details> <summary> ✅  Variables en PHP </summary>

# 🧠 Clase: Variables y Tipos de Datos en PHP

## 🎯 Objetivo de la clase
Comprender qué son las variables en PHP, cómo se declaran, su tipado dinámico y los diferentes tipos de datos disponibles.

## ⏱ Duración estimada: 45 minutos

---

## 🧩 1. ¿Qué es una variable?

Una **variable** es un espacio en memoria que se utiliza para almacenar un valor. En PHP, todas las variables comienzan con el símbolo **$**.

### 📌 Características:
- Se crean automáticamente cuando se les asigna un valor.
- No se necesita declarar el tipo.
- Los nombres son **case-sensitive** (`$edad` ≠ `$Edad`).
- Deben comenzar con una letra o guion bajo (`_`), no con número.

### ✅ Ejemplo básico:

```php
$nombre = "Ana";
$edad = 25;
$precio = 99.99;
```
## 🔠 2. Tipos de datos en PHP
PHP es un lenguaje de tipado débil y dinámico, lo que significa que no es necesario declarar el tipo de la variable, y este puede cambiar en tiempo de ejecución.

## Tipos escalares:


int (enteros)

float (números con decimales)

string (texto)

bool (booleanos: true o false)

## Tipos compuestos:
array (listas indexadas o asociativas)


##object (objetos, POO)

## Tipos especiales:
null (sin valor)
resource (puntero a recursos externos, como archivos o conexiones)

🧪 3. Ejemplos por tipo
🔢 Integer
``` php
$edad = 30;
```
🔣 Float
```php
$precio = 19.99;
```
✉️ String
```php
$saludo = "Hola Mundo";
```
✅ Boolean
```php
$activo = true;
$registrado = false;
```
📚 Array

```php
$colores = ["rojo", "verde", "azul"];
$persona = ["nombre" => "Luis", "edad" => 28];
```
👤 Object
```php
class Persona {
    public $nombre;
}
$alumno = new Persona();
$alumno->nombre = "Carlos";
```
🚫 Null
``` php
$desconocido = null;
```
🧰 4. Operaciones comunes
📝 Concatenación de strings
```php
$nombre = "Juan";
echo "Hola " . $nombre;
```
➕ Suma de números
```php
$a = 10;
$b = 5;
$suma = $a + $b;
```
🔁 Cambio de tipo automático
```php
$numero = "5"; // string
$resultado = $numero + 2; // PHP lo convierte a int
```
🛑 5. Buenas prácticas

## Usar nombres descriptivos: $total_ventas, $usuario_logueado

## Evitar nombres de variables demasiado cortos: $x, $y

## Comentar bloques importantes

## Agrupar tipos similares

🧪 6. Ejercicios propuestos
a) Declarar una variable con tu nombre y mostrarla por pantalla.

b) Crear dos variables numéricas y mostrar la suma, resta, multiplicación y división.

c) Crear un array con tus tres comidas favoritas y mostrar la segunda.

d) Crear una variable booleana llamada $es_estudiante y mostrar su valor.

📋 7. Evaluación
Preguntas de opción múltiple 
1. ¿Cuál de estas variables está correctamente escrita en PHP?

a) nombre

b) $1nombre

c) $_nombre ✅

d) int edad

2. ¿Qué tipo de dato tiene la variable $x = 10.5;?

a) Integer

b) Float ✅

c) String

d) Boolean

3. ¿Qué hace PHP si sumamos un número con un string numérico?

a) Error de ejecución

b) Concatenación

c) Conversión automática a booleano

d) Convierte el string a número y los suma ✅

4. ¿Cuál es el valor de $a = null;?

a) 0

b) "null"

c) Vacío

d) No tiene valor ✅

Pregunta de desarrollo:
5. Explicá con tus palabras qué es una variable en PHP, cómo se declara, y brindá un ejemplo con una cadena de texto y un número.









