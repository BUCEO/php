
# 🧩 Clase: Funciones en PHP

## 🎯 Objetivo de la clase
Comprender qué son las funciones en programación, cómo se definen y utilizan en PHP, y su importancia para escribir código reutilizable, organizado y eficiente.

## ⏱ Duración estimada: 45 minutos

---

## 🛠 1. ¿Qué es una función?

Una **función** es un bloque de código que se puede reutilizar para realizar una tarea específica. Se puede **invocar** (llamar) cada vez que sea necesario.

### 🎯 Beneficios:
- Reutilización de código.
- División del programa en partes lógicas.
- Mayor legibilidad y mantenimiento.
- Evita la repetición.

---

## 📐 2. Sintaxis básica de una función en PHP

```php
function saludar() {
    echo "¡Hola mundo!";
}

saludar(); // Llama a la función
```
## 🧾 3. Funciones con parámetros
Las funciones pueden recibir datos de entrada llamados parámetros.

```php
function saludar($nombre) {
    echo "¡Hola, $nombre!";
}

saludar("Ana"); // Imprime: ¡Hola, Ana!
```
## 🔁 4. Funciones con valor de retorno
Las funciones también pueden devolver un resultado usando return.

```php
function sumar($a, $b) {
    return $a + $b;
}

$resultado = sumar(3, 5); // $resultado = 8
echo $resultado;
```
## 🧠 5. Funciones nativas vs funciones definidas por el usuario
Funciones nativas: vienen incluidas en PHP (ej: strlen(), array_push(), strtoupper()).

Funciones definidas por el usuario: las crea el programador según su necesidad.

## 🎨 6. Buenas prácticas al crear funciones
Elegir nombres descriptivos (usar inglés si es posible, ej: calculateTotal()).

Una función debe realizar una sola tarea específica.

Evitar modificar variables globales dentro de funciones.

## 📚 7. Ejercicios propuestos
Crear una función que reciba una edad y devuelva si es mayor o menor de edad.

Crear una función que convierta grados Celsius a Fahrenheit.

Crear una función que calcule el área de un triángulo.

## 📋 8. Evaluación
Preguntas de opción múltiple 
### 1. ¿Qué es una función en programación?

  a) Una variable que almacena un número

b) Un bloque de código que realiza una tarea específica ✅

c) Un error del programa

d) Una base de datos

### 2. ¿Cuál de estas funciones es una función nativa de PHP?

a) miFuncion()

b) saludar()

c) strlen() ✅

d) sumarNumeros()

### 3. ¿Qué hace la palabra clave return en una función?

a) Ejecuta otra función

b) Detiene el programa

c) Devuelve un valor al lugar donde fue llamada ✅

d) Muestra un mensaje

### 4. ¿Cuál es la forma correcta de declarar una función en PHP?

a) crear funcion {}

b) funcion() {}

c) function miFuncion() {} ✅

d) define miFuncion()


### ✍️ Pregunta de desarrollo 
Escribí una función en PHP que reciba un número y devuelva si es par o impar. Explicá brevemente qué hace el código.

```php

function esPar($numero) {
    if ($numero % 2 == 0) {
        return "El número es par.";
    } else {
        return "El número es impar.";
    }
}
```





