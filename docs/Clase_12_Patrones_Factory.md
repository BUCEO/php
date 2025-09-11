
---

```markdown
# Clase 12 - Patrón Factory en MVC con PHP

## 🎯 Objetivo
Aplicar el patrón **Factory** para crear instancias de usuarios en un entorno **MVC**.

## 🔑 Conceptos Clave
- El patrón **Factory** encapsula la lógica de creación de objetos.  
- Separa la construcción de instancias de su uso.  
- Útil cuando hay **distintos tipos de usuarios** (admin, cliente, invitado, etc.).

## 📄 Ejemplo: `UserFactory.php`
```php
<?php
namespace ONDA\Model;

class User {
    public function __construct(
        public string $username,
        public string $email,
        public string $role
    ) {}
}

class UserFactory {
    public static function create(string $type, string $username, string $email): User {
        return match ($type) {
            'admin' => new User($username, $email, 'ADMIN'),
            'guest' => new User($username, $email, 'GUEST'),
            default => new User($username, $email, 'USER'),
        };
    }
}
📄 Ejemplo en un controlador MVC
<?php
use ONDA\Model\UserFactory;

class UserController {
    public function createUser(string $type, string $username, string $email) {
        $user = UserFactory::create($type, $username, $email);
        // Guardar en BD o devolver a la vista
        return $user;
    }
}

✅ Ventajas

Centraliza la creación de objetos.

Facilita la extensión cuando se agreguen nuevos tipos de usuarios.

Mejora la legibilidad y mantenibilidad del código.