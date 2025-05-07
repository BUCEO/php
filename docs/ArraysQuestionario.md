📋 Cuestionario Práctico – Arrays en PHP
🧠 Parte 1: Preguntas de opción múltiple
1. ¿Qué función se utiliza para aplicar una operación a todos los elementos de un array y devolver un nuevo array?

a) array_filter
b) foreach
c) array_map
d) array_merge

2. ¿Qué hace array_filter?

a) Ordena un array.
b) Recorre el array y lo imprime.
c) Aplica una operación a todos los elementos.
d) Filtra los elementos que cumplen una condición.

3. Dado este código:

```php
$valores = [5, 15, 20];
$mayores = array_filter($valores, function($v) {
    return $v > 10;
});

```
¿Cuál será el contenido de $mayores?

a) [5, 15, 20]
b) [15, 20]
c) [10, 15, 20]
d) []

4. ¿Qué hace la función array_push()?

a) Agrega un elemento al principio del array.
b) Elimina el último elemento del array.
c) Agrega uno o más elementos al final del array.
d) Mezcla los elementos del array aleatoriamente.

5. ¿Qué hace la función array_pop()?

a) Agrega un elemento al final del array.
b) Elimina y devuelve el último elemento del array.
c) Divide un array en porciones.
d) Devuelve la cantidad de elementos en un array.

6. ¿Qué función se usa para combinar dos arrays?

a) array_merge()
b) array_combine()
c) array_map()
d) array_join()

7. ¿Qué devuelve array_slice($array, 1, 2)?

a) Devuelve los dos primeros elementos del array.
b) Devuelve un nuevo array desde la posición 1 con 2 elementos.
c) Elimina dos elementos del array original.
d) Divide el array en 2 partes.

8. ¿Para qué sirve array_reverse()?

a) Ordena un array alfabéticamente.
b) Invierte el orden de los elementos del array.
c) Elimina valores duplicados.
d) Muestra el último valor del array.

9. ¿Qué hace array_unique()?

a) Elimina elementos vacíos.
b) Devuelve un array con claves únicas.
c) Devuelve un array sin elementos duplicados.
d) Combina dos arrays diferentes.

10. ¿Qué hace array_search("PHP", $lenguajes)?

a) Devuelve el valor "PHP".
b) Devuelve la clave donde se encuentra el valor "PHP".
c) Busca claves duplicadas.
d) Ordena el array por nombre.

11. ¿Cuál es la función de sort() en PHP?

a) Ordena un array en orden descendente.
b) Ordena un array en orden aleatorio.
c) Ordena un array en orden ascendente.
d) Elimina elementos duplicados y los ordena.

🔧 Parte 2: Desarrollo práctico
Dado el siguiente array multidimensional:
```php

$productos = [
    ['nombre' => 'USB', 'precio' => 500, 'stock' => 5],
    ['nombre' => 'Cargador', 'precio' => 1200, 'stock' => 15],
    ['nombre' => 'Auriculares', 'precio' => 2000, 'stock' => 0]
];

```

Recorré el array con foreach y mostrales al usuario el nombre, el precio y el stock de cada producto.

Usá array_filter() para devolver solo los productos con stock mayor a 10.

Usá array_map() para aplicar un 10% de descuento a todos los precios (modificá solo el precio).

Mostrá los resultados usando print_r() o un foreach.
