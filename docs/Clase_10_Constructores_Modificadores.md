# 📘 Clase 10 – Clases en Profundidad: Constructores, Destructores y Modificadores de Acceso

## 🎯 Objetivos de la clase
- Comprender el uso de **constructores y destructores** en PHP.  
- Conocer y aplicar los **modificadores de acceso** (`public`, `private`, `protected`).  
- Modelar entidades del proyecto con **clases concretas** (Ómnibus, Trayecto, Agencia).  
- Integrar estas clases en el código base del proyecto (estructura MVC).  

---

## 📑 Contenidos
1. **Constructores** (`__construct`)  
   - Método especial que se ejecuta al instanciar un objeto.  
   - Permite inicializar valores automáticamente.  

2. **Destructores** (`__destruct`)  
   - Método que se ejecuta al destruir un objeto.  
   - Se utiliza para liberar recursos (ej. cerrar conexión DB).  

3. **Modificadores de acceso**  
   - `public` → accesible desde cualquier parte.  
   - `private` → accesible solo dentro de la clase.  
   - `protected` → accesible dentro de la clase y sus hijas.  

---

## 🚌 Ejemplo aplicado al proyecto: Ómnibus
```php
<?php
// app/models/Omnibus.php
class Omnibus {
    private $matricula;
    private $capacidad;

    public function __construct($matricula, $capacidad) {
        $this->matricula = $matricula;
        $this->capacidad = $capacidad;
    }

    public function mostrarInfo() {
        return "Ómnibus: " . $this->matricula . " | Capacidad: " . $this->capacidad . " pasajeros";
    }
}
```
---

## 🚏 Ejemplo aplicado al proyecto: Trayecto
```php
<?php
// app/models/Trayecto.php
class Trayecto {
    public $origen;
    public $destino;
    public $duracion;

    public function __construct($origen, $destino, $duracion) {
        $this->origen = $origen;
        $this->destino = $destino;
        $this->duracion = $duracion;
    }

    public function mostrarTrayecto() {
        return "Trayecto: $this->origen → $this->destino | Duración: $this->duracion horas";
    }
}
```
---

## 🏢 Ejemplo aplicado al proyecto: Agencia
```php
<?php
// app/models/Agencia.php
require_once "Omnibus.php";
require_once "Trayecto.php";

class Agencia {
    public $nombre;
    private $omnibus = [];
    private $trayectos = [];

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function agregarOmnibus(Omnibus $o) {
        $this->omnibus[] = $o;
    }

    public function agregarTrayecto(Trayecto $t) {
        $this->trayectos[] = $t;
    }

    public function mostrarAgencia() {
        echo "Agencia: " . $this->nombre . "<br>";
        echo "Ómnibus disponibles:<br>";
        foreach ($this->omnibus as $o) {
            echo "- " . $o->mostrarInfo() . "<br>";
        }
        echo "Trayectos:<br>";
        foreach ($this->trayectos as $t) {
            echo "- " . $t->mostrarTrayecto() . "<br>";
        }
    }
}
```
