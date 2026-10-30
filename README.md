# PHP y fundamentos web

**CS // SOFTWARE LAB — 05 / Prácticas de programación**

Colección educativa para explorar arreglos, clases y herencia en PHP, junto a interfaces HTML, CSS y JavaScript. No se presenta como un sistema de autenticación ni una aplicación completa.

## Contenido y ejemplos

| Archivo | Qué explorar |
| --- | --- |
| [array.php](./array.php) | Recorrido de un arreglo de productos y filtrado por precio. |
| [poo.php](./poo.php) | Clase Automovil, constructor, métodos e instancias. |
| [poo2.php](./poo2.php) | Ejercicio Persona/Alumno y herencia; contiene aspectos por corregir. |
| [index.html](./index.html) | Página de práctica web. |
| [Interfaz de acceso](./SIGN%20UP%20%26%20SIGN%20IN%20PAGE.html) | Composición visual de formularios; no implica backend. |
| main.css / script.js / images | Estilos, interacción y recursos. |

## Ejecutar localmente

Requiere un intérprete PHP instalado; el repositorio no fija una versión ni usa Composer. Desde la raíz:

```bash
php -v
php -S 127.0.0.1:8000
```

Abrí `http://127.0.0.1:8000/array.php` para ver los productos y el filtro, o `http://127.0.0.1:8000/poo.php` para la práctica de objetos. La interfaz HTML puede abrirse directamente; PHP necesita el servidor/intérprete.

## Arquitectura y estado

Scripts independientes con salida HTML, sin framework ni persistencia confirmada. poo2.php es un ejercicio incompleto: tiene constructores privados y referencias de propiedades que requieren revisión antes de instanciarlo. Su presencia no prueba un dominio productivo de POO.

Se conserva el código original. Como próximos pasos: corregir el ejercicio de herencia, agregar ejemplos de instanciación y pruebas, y separar las interfaces de los scripts PHP. No se ejecutó PHP durante esta revisión de documentación.

---

[CS // Software Lab · Cristhian Storm](https://github.com/CristhianStorm)

