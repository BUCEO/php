# 🧮 Clase: Operadores en PHP

## 🎯 Objetivo
Comprender el uso de los diferentes tipos de operadores en PHP y aplicarlos correctamente en expresiones y estructuras de control.

---

## 🧩 ¿Qué es un operador?

Un **operador** es un símbolo que le dice al compilador o intérprete que realice una operación específica, como suma, comparación o lógica. En PHP, los operadores son fundamentales para manipular variables y tomar decisiones.

---

## 🧠 Tipos de operadores en PHP

### 1. Operadores aritméticos
Sirven para realizar operaciones matemáticas:

| Operador | Descripción         | Ejemplo     | Resultado |
|----------|---------------------|-------------|-----------|
| `+`      | Suma                | `$a + $b`   | 15        |
| `-`      | Resta               | `$a - $b`   | 5         |
| `*`      | Multiplicación      | `$a * $b`   | 50        |
| `/`      | División            | `$a / $b`   | 2         |
| `%`      | Módulo (resto)      | `$a % $b`   | 0         |

```php
$a = 10;
$b = 5;
echo $a + $b; // 15
```
2. Operadores de asignación
Asignan valores a variables:

Operador	Ejemplo	Equivalente
=	$a = 10	Asigna 10 a $a
+=	$a += 5	$a = $a + 5
-=	$a -= 3	$a = $a - 3
*=	$a *= 2	$a = $a * 2
/=	$a /= 2	$a = $a / 2
```php

$a = 10;
$a += 5; // $a ahora vale 15
```
3. Operadores de comparación
Usados para comparar valores (devuelven true o false):

Operador	Descripción	Ejemplo
==	Igual	$a == $b
===	Igual y mismo tipo	$a === $b
!=	Distinto	$a != $b
!==	Distinto estricto	$a !== $b
>	Mayor que	$a > $b
<	Menor que	$a < $b
>=	Mayor o igual	$a >= $b
<=	Menor o igual	$a <= $b

```php

$x = 5;
$y = "5";

var_dump($x == $y);   // true
var_dump($x === $y);  // false
```
4. Operadores lógicos
Usados para combinar condiciones (muy comunes en if):

Operador	Nombre	Ejemplo
&&	Y lógico	$a > 5 && $b < 10
`		`
!	Negación	!($a > 5)
```php

$edad = 20;
$habilitado = true;

if ($edad >= 18 && $habilitado) {
    echo "Puede acceder";
}
```
5. Operadores de incremento/decremento
Sirven para aumentar o disminuir en 1:

Operador	Ejemplo	Resultado
++$a	Pre-incremento	suma antes de usar
$a++	Post-incremento	suma después de usar
--$a	Pre-decremento	resta antes
$a--	Post-decremento	resta después
```php

$a = 5;
echo ++$a; // 6
```
6. Operador ternario
Forma abreviada de if...else:

```php

$edad = 18;
$mensaje = ($edad >= 18) ? "Mayor de edad" : "Menor de edad";
echo $mensaje;
```
🧪 Evaluación
Preguntas de opción múltiple
¿Cuál de los siguientes operadores compara valor y tipo?

a) ==

b) !=

c) === 

d) =>

¿Qué valor se imprime si $a = 10; $a += 5; echo $a;?

a) 5

b) 10

c) 15 

d) 0

¿Cuál es el resultado de 5 % 2?

a) 2

b) 1 

c) 0

d) 5

¿Cuál operador se usa para una condición OR?

a) &&

b) || 

c) ==

d) !==

✍️ Actividad de desarrollo
Crear un programa en PHP que:

Solicite dos números.

Muestre:

La suma, resta, multiplicación y división de los números.

Si son iguales o diferentes (usando == y ===).

Un mensaje personalizado si la suma es mayor a 100, usando operador ternario.

📌 Conclusión
Los operadores son esenciales en cualquier lenguaje de programación. En PHP, se usan para realizar cálculos, tomar decisiones y controlar el flujo lógico del código.