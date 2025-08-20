# 📘 Clase 9 – Introducción a la POO en PHP: Clases y Objetos

## 🎯 Objetivos de la clase
- Comprender los fundamentos de la Programación Orientada a Objetos (POO).  
- Diferenciar entre **clase** y **objeto**.  
- Conocer la sintaxis básica de una clase en PHP.  
- Implementar clases con propiedades y métodos.  
- Crear e instanciar objetos aplicados al **proyecto de curso**.  

---

## 📑 Contenidos
1. ¿Qué es la POO y por qué usarla?  
   - Paradigma que organiza el código en **objetos**.  
   - Ventajas:  
     - Reutilización de código.  
     - Mantenimiento más sencillo.  
     - Escalabilidad.  
     - Mejor organización del proyecto.  

2. **Clases en PHP**  
   - Plantillas o moldes.  
   - Contienen **propiedades** (atributos/variables) y **métodos** (funciones).  

3. **Objetos en PHP**  
   - Instancias concretas de una clase.  
   - Creación con `new`.  
   - Uso de `$this` para acceder a propiedades y métodos.  

4. **Constructores y Destructores**  
   - `__construct()` → inicializa el objeto.  
   - `__destruct()` → se ejecuta al destruirlo.  

---

## 🖥 Ejemplos aplicados al proyecto

### Clase y Objeto básico
```php
<?php
// app/models/Usuario.php
class Usuario {
    public $nombre;
    public $email;

    public function mostrarPerfil() {
        return "Usuario: " . $this->nombre . " (" . $this->email . ")";
    }
}

// Crear objeto Usuario en index.php
$u1 = new Usuario();
$u1->nombre = "Ana";
$u1->email = "ana@mail.com";

echo $u1->mostrarPerfil();
// Resultado: Usuario: Ana (ana@mail.com)
```
---

### Constructor
```php
<?php
// app/models/Producto.php
class Producto {
    public $nombre;
    public $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function mostrarInfo() {
        return "Producto: $this->nombre – Precio: $$this->precio";
    }
}

// Uso en index.php
$p1 = new Producto("Notebook", 1200);
$p2 = new Producto("Mouse Gamer", 35);

echo $p1->mostrarInfo();
echo "<br>";
echo $p2->mostrarInfo();
```
