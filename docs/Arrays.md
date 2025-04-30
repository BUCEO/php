# 🧠 Clase Avanzada: Arrays en PHP

## 🎯 Objetivo de la clase

Comprender y aplicar estructuras de arrays avanzadas en PHP, incluyendo arrays multidimensionales, asociativos, manipulación con funciones nativas, y buenas prácticas para trabajar con datos complejos.

---

## 📌 Contenidos

### 1. Tipos de Arrays en PHP

#### 🔹 Arrays indexados
```php
$colores = ["rojo", "verde", "azul"];
echo $colores[1]; // verde

```
🔹 Arrays asociativos

```php

$persona = [
  "nombre" => "Ana",
  "edad" => 30,
  "email" => "ana@example.com"
];
echo $persona["email"]; // ana@example.com

```
🔹 Arrays multidimensionales

```php

$usuarios = [
  ["nombre" => "Carlos", "email" => "carlos@mail.com"],
  ["nombre" => "Lucía", "email" => "lucia@mail.com"]
];
echo $usuarios[1]["nombre"]; // Lucía

```
2. Funciones útiles para trabajar con arrays

Función	Uso
count()	Cantidad de elementos
array_push()	Agrega elementos al final
array_pop()	Elimina el último elemento
array_shift()	Elimina el primer elemento
array_unshift()	Agrega al inicio
in_array()	Verifica si un valor existe
array_keys() / array_values()	Obtiene claves o valores
array_merge()	Combina arrays
array_map()	Aplica una función a cada elemento
array_filter()	Filtra valores según condición
array_reduce()	Reduce el array a un solo valor
🧪 Ejemplo de array_map

```php

$numeros = [1, 2, 3, 4];
$cuadrados = array_map(fn($n) => $n * $n, $numeros);
print_r($cuadrados); // [1, 4, 9, 16]

```
3. Recorrido y manejo de arrays complejos
🔁 foreach para arrays asociativos

```php

$producto = ["nombre" => "Laptop", "precio" => 950];
foreach ($producto as $clave => $valor) {
    echo "$clave: $valor\n";
}
```

🔁 foreach para arrays multidimensionales

```php

$clientes = [
  ["nombre" => "Juan", "activo" => true],
  ["nombre" => "Marta", "activo" => false]
];

foreach ($clientes as $cliente) {
    echo $cliente["nombre"] . ": " . ($cliente["activo"] ? "Activo" : "Inactivo") . "\n";
}

```
🛠️ Ejercicios prácticos
Crear un array multidimensional de 3 productos con nombre, precio y stock, recorrerlo con foreach y mostrar los datos.

Usar array_filter para devolver solo productos cuyo stock sea mayor a 10.

Usar array_map para aplicar un 10% de descuento a todos los precios.

⚠️ Buenas prácticas
Nombrar arrays con plural ($usuarios, $productos)

Verificar la existencia de claves con isset()

Usar funciones como array_column() para obtener campos específicos

Evitar modificar arrays dentro de un foreach directamente si afecta la estructura

✅ Evaluación rápida (4 preguntas)
¿Qué diferencia hay entre un array indexado y uno asociativo?

¿Qué hace la función array_map()? Da un ejemplo simple.

¿Cómo recorrerías un array multidimensional?

¿Para qué sirve array_filter() y qué retorna?

🧩 Extra: Arrays con funciones anónimas

```php

$frutas = ["manzana", "banana", "pera"];
$f = function($f) { return strtoupper($f); };
print_r(array_map($f, $frutas)); // [MANZANA, BANANA, PERA]
📚 Recursos recomendados
Doc
umentación oficial de arrays en PHP

PHP: Funciones de arrays
https://www.php.net/manual/es/ref.array.php
W3Schools PHP Arrays
https://www.w3schools.com/php/php_arrays.asp
