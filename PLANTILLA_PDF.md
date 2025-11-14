# PLANTILLA DE PDF - Práctica 1: Laravel Route → Controller → View

**Esta es una plantilla que puedes usar para crear tu PDF en Google Docs, Word o similar**

---

## PORTADA

```
╔════════════════════════════════════════════════════════════╗
║                                                            ║
║         INSTITUCIÓN EDUCATIVA / UNIVERSIDAD               ║
║                                                            ║
║  Práctica 1: Implementación del Patrón Route →           ║
║              Controller → View en Laravel                 ║
║                                                            ║
║  Asignatura: Programación Web                             ║
║  Nivel/Semestre: [Tu nivel]                              ║
║                                                            ║
║  Estudiante: [Tu nombre completo]                         ║
║  Carné: [Tu número de carné]                              ║
║  Email: [Tu email]                                        ║
║                                                            ║
║  Fecha de Entrega: [Fecha actual]                         ║
║                                                            ║
╚════════════════════════════════════════════════════════════╝
```

---

## ÍNDICE

1. Introducción
2. Descripción del Proyecto
3. Arquitectura Implementada
4. Componentes Principales
5. Flujo de Ejecución
6. Capturas de Pantalla
7. Reflexión y Análisis
8. Conclusiones

---

## 1. INTRODUCCIÓN

[ESCRIBE]: Explica brevemente qué es Laravel y por qué es importante el patrón MVC.

Estructura sugerida:
- ¿Qué es Laravel?
- ¿Qué es el patrón MVC?
- Objetivo de la práctica

---

## 2. DESCRIPCIÓN DEL PROYECTO

[ESCRIBE]: Describe qué hace tu aplicación.

### 2.1 Objetivo General
Implementar una aplicación web básica en Laravel que demuestre el funcionamiento del patrón Route → Controller → View.

### 2.2 Objetivos Específicos
- Crear un controlador que maneje dos acciones
- Implementar una ruta estática que muestre un mensaje fijo
- Implementar una ruta dinámica que acepte parámetros
- Crear vistas Blade que rendericen la información

### 2.3 Requisitos Funcionales
- [RF1] La ruta /bienvenida debe mostrar un mensaje de bienvenida
- [RF2] La ruta /saludo/{nombre} debe mostrar un saludo personalizado
- [RF3] Ambas rutas deben estar funcionales y accesibles

---

## 3. ARQUITECTURA IMPLEMENTADA

### 3.1 Patrón MVC

```
┌─────────────┐
│   USUARIO   │
└──────┬──────┘
       │ (Solicitud HTTP)
       ▼
┌──────────────────────┐
│    ROUTER            │
│  (routes/web.php)    │
└──────┬───────────────┘
       │ (Identifica ruta)
       ▼
┌──────────────────────┐
│   CONTROLLER         │
│ (PaginaController)   │
└──────┬───────────────┘
       │ (Prepara datos)
       ▼
┌──────────────────────┐
│     VIEW             │
│  (Blade Template)    │
└──────┬───────────────┘
       │ (HTML renderizado)
       ▼
┌─────────────┐
│  NAVEGADOR  │
└─────────────┘
```

### 3.2 Componentes

**Router** → Define las URLs y qué método ejecutar
**Controller** → Procesa la lógica de negocio
**View** → Presenta los resultados al usuario

---

## 4. COMPONENTES PRINCIPALES

### 4.1 Archivo: routes/web.php

```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

// Ruta estática para la página de bienvenida
Route::get('/bienvenida', [PaginaController::class, 'bienvenida']);

// Ruta dinámica para el saludo personalizado
Route::get('/saludo/{nombre}', [PaginaController::class, 'saludo']);
```

**Explicación:**
- Route::get() define una ruta que acepta solicitudes GET
- [PaginaController::class, 'bienvenida'] llama al método bienvenida() del controlador
- {nombre} es un parámetro dinámico capturado de la URL

### 4.2 Archivo: PaginaController.php

```php
<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PaginaController extends Controller
{
    public function bienvenida(): View
    {
        return view('bienvenida');
    }

    public function saludo(string $nombre): View
    {
        return view('saludo', ['nombre' => $nombre]);
    }
}
```

**Explicación:**
- El método bienvenida() retorna la vista 'bienvenida'
- El método saludo() recibe el parámetro $nombre y lo pasa a la vista
- Los métodos tienen type hints (View) para mayor seguridad

### 4.3 Vistas

**bienvenida.blade.php:**
```html
<h1>Bienvenido a mi primera aplicación de Laravel</h1>
```

**saludo.blade.php:**
```blade
<h1>Hola, {{ $nombre }}</h1>
```

**Explicación:**
- {{ $nombre }} es la sintaxis de Blade para mostrar una variable
- Los datos se pasan desde el controlador en un array

---

## 5. FLUJO DE EJECUCIÓN

### 5.1 Ejemplo 1: Acceso a /bienvenida

```
1. Usuario escribe: http://localhost:8000/bienvenida
2. Navegador envía solicitud GET a /bienvenida
3. Laravel Router identifica la ruta coincidente
4. Router ejecuta: PaginaController->bienvenida()
5. Controlador ejecuta: return view('bienvenida')
6. Laravel carga: resources/views/bienvenida.blade.php
7. Vista renderiza HTML y lo retorna
8. Navegador muestra: "Bienvenido a mi primera aplicación de Laravel"
```

### 5.2 Ejemplo 2: Acceso a /saludo/Juan

```
1. Usuario escribe: http://localhost:8000/saludo/Juan
2. Navegador envía solicitud GET a /saludo/Juan
3. Laravel Router identifica la ruta: /saludo/{nombre}
4. Router extrae parámetro: nombre = "Juan"
5. Router ejecuta: PaginaController->saludo("Juan")
6. Controlador ejecuta: return view('saludo', ['nombre' => 'Juan'])
7. Laravel carga: resources/views/saludo.blade.php
8. Vista procesa: {{ $nombre }} → "Juan"
9. Vista renderiza: <h1>Hola, Juan</h1>
10. Navegador muestra: "Hola, Juan"
```

---

## 6. CAPTURAS DE PANTALLA

### Captura 1: Página de Inicio
[INSERTA CAPTURA: http://localhost:8000/]

**Descripción:** Página de inicio predeterminada de Laravel mostrando enlaces a la documentación y acceso a la aplicación.

---

### Captura 2: Ruta Estática - /bienvenida
[INSERTA CAPTURA: http://localhost:8000/bienvenida]

**Descripción:** Se muestra el mensaje estático "Bienvenido a mi primera aplicación de Laravel" sin parámetros dinámicos.

---

### Captura 3: Ruta Dinámica - /saludo/Juan
[INSERTA CAPTURA: http://localhost:8000/saludo/Juan]

**Descripción:** Se muestra un saludo personalizado "Hola, Juan". El nombre viene del parámetro de la URL.

---

### Captura 4: Ruta Dinámica - /saludo/María
[INSERTA CAPTURA: http://localhost:8000/saludo/María]

**Descripción:** Se muestra un saludo personalizado "Hola, María". Demuestra que el parámetro dinámico funciona con diferentes valores.

---

### Captura 5: Código de routes/web.php
[INSERTA CAPTURA: Código en editor]

**Descripción:** Archivo de rutas mostrando la definición de ambas rutas (estática y dinámica).

---

### Captura 6: Código de PaginaController.php
[INSERTA CAPTURA: Código en editor]

**Descripción:** Controlador mostrando ambos métodos: bienvenida() y saludo().

---

## 7. REFLEXIÓN Y ANÁLISIS

### Pregunta 1: ¿Por qué es importante separar Rutas, Controladores y Vistas?

[ESCRIBE TU RESPUESTA]

Puntos a considerar:
- Separación de responsabilidades (SRP)
- Reutilización de código
- Mantenibilidad del proyecto
- Facilita testing
- Facilita colaboración en equipo

---

### Pregunta 2: ¿Cuáles son las ventajas del patrón MVC?

[ESCRIBE TU RESPUESTA]

Puntos a considerar:
- Organización clara del código
- Escalabilidad
- Facilita el debugging
- Permite múltiples vistas para el mismo modelo
- Mejora la seguridad

---

### Pregunta 3: ¿Qué aprendiste con esta práctica?

[ESCRIBE TU RESPUESTA]

Puntos a considerar:
- Cómo funciona el routing en Laravel
- Cómo pasar datos entre controlador y vista
- Sintaxis de Blade
- Inyección de dependencias
- Estructura de un proyecto Laravel

---

### Pregunta 4: ¿Cuáles serían posibles mejoras a este proyecto?

[ESCRIBE TU RESPUESTA]

Puntos a considerar:
- Validación de entrada
- Base de datos
- Autenticación
- API REST
- Tests automatizados
- Middleware

---

## 8. CONCLUSIONES

[ESCRIBE TUS CONCLUSIONES]

Puntos a incluir:
- Resumen de lo implementado
- Importancia del patrón MVC
- Capacidad de expandir el proyecto
- Valor educativo
- Próximos pasos sugeridos

---

## REFERENCIAS

- [Laravel Documentation](https://laravel.com/docs)
- [Blade Templates](https://laravel.com/docs/blade)
- [Routing](https://laravel.com/docs/routing)
- [Controllers](https://laravel.com/docs/controllers)

---

**Fin del documento**