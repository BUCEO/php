# Introducción a programación PHP 

<details> <summary> ✅  Estructuras de Control en PHP </summary>

# 🧠 Teórico: Estructuras de Control en PHP

## 🎯 Objetivo de la clase
Comprender y aplicar las principales estructuras de control en PHP para modificar el flujo de ejecución de los programas, incluyendo condicionales y bucles.

## ⏱ Duración estimada: 45 minutos

---

## 🧩 1. ¿Qué son las estructuras de control?

Las **estructuras de control** permiten tomar decisiones y repetir acciones en un programa. Son esenciales para controlar el flujo de ejecución.

**Tipos:**
- Condicionales: `if`, `else`, `elseif`, `switch`
- Bucles: `while`, `do...while`, `for`, `foreach`
- Control de flujo: `break`, `continue`, `exit`, `return`

---

## 🔀 2. Estructuras Condicionales

### ✅ if / else / elseif

```php
$edad = 20;

if ($edad >= 18) {
    echo "Es mayor de edad";
} elseif ($edad >= 13) {
    echo "Es adolescente";
} else {
    echo "Es menor de edad";
}
```
🔁 switch
``` php
$dia = "martes";

switch ($dia) {
    case "lunes":
        echo "Inicio de semana";
        break;
    case "martes":
        echo "Segundo día";
        break;
    default:
        echo "Otro día";
}
```
🔄 3. Bucles o estructuras de repetición
⏳ while
```php
$contador = 1;
while ($contador <= 5) {
    echo "Número: $contador <br>";
    $contador++;
}
```
🔂 do...while
```
$numero = 1;
do {
    echo "Número: $numero <br>";
    $numero++;
} while ($numero <= 3);
```
🔃 for
```php

for ($i = 1; $i <= 5; $i++) {
    echo "Iteración: $i <br>";
}
```
🧠 foreach
```php

$nombres = ["Ana", "Luis", "Carlos"];

foreach ($nombres as $nombre) {
    echo "Hola, $nombre <br>";
}
```
🚦 4. Control de flujo
⛔ break

```php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) break;
    echo $i . "<br>";
}
```
🔄 continue
```php

for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) continue;
    echo $i . "<br>";
}
```
🚪 exit / die
```php
if (!$usuario_autenticado) {
    die("Acceso denegado");
}
```

# 🧪 5. Ejercicios Prácticos: 
   ##  a) Usá un if para verificar si una variable $nota es mayor o igual a 6 y mostrar "Aprobado", si no, "Reprobado".

   ## b) Creá un bucle for que imprima los números del 10 al 1.

   ## c) Recorre un array con foreach y mostrale el nombre a cada elemento: ["Pedro", "María", "Sofía"].

   ## d) Usá switch para responder a los días: "lunes", "viernes" o "otro día".

📋 6. Evaluación
Preguntas de opción múltiple:
1. ¿Qué estructura se ejecuta al menos una vez, sin importar si la condición es verdadera o falsa?

a) while

b) do...while 

c) for

d) foreach

2. ¿Cuál estructura es más adecuada para recorrer un array indexado?

a) switch

b) if

c) foreach 

d) exit

3. ¿Qué hace el comando break?

a) Salta a la siguiente iteración

b) Sale del bucle actual 

c) Finaliza todo el script

d) Repite el bucle indefinidamente

4. ¿Cuál es el error en este fragmento?

php
Copy
Edit
for ($i = 0; $i < 5; $i++) {
    echo $i;
}
a) Falta el punto y coma en echo

b) El bucle está mal escrito

c) No hay error 

d) Falta cerrar el for con endfor

Pregunta de desarrollo:
5. Describí las diferencias entre if y switch y explicá en qué situación preferirías usar cada uno.


