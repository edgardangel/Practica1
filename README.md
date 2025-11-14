<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Práctica 1: Flujo Ruta → Controlador → Vista en Laravel

## 📋 Descripción del Proyecto

Este es un proyecto educativo de Laravel 12 que implementa el patrón fundamental de desarrollo web: **Ruta → Controlador → Vista**. 

El objetivo es demostrar cómo funciona el flujo completo de una solicitud HTTP en Laravel, desde la definición de rutas hasta la presentación de datos en vistas.

## 🎯 Características Principales

### Ruta Estática: `/bienvenida`
- **Descripción**: Muestra un mensaje de bienvenida estático
- **Controlador**: `PaginaController@bienvenida()`
- **Vista**: `resources/views/bienvenida.blade.php`
- **Mensaje**: "Bienvenido a mi primera aplicación de Laravel"

### Ruta Dinámica: `/saludo/{nombre}`
- **Descripción**: Muestra un saludo personalizado basado en un parámetro dinámico
- **Controlador**: `PaginaController@saludo($nombre)`
- **Vista**: `resources/views/saludo.blade.php`
- **Parámetro**: `{nombre}` - El nombre se extrae de la URL
- **Ejemplo**: `/saludo/Juan` → "Hola, Juan"

## 📁 Estructura del Proyecto

```
Practica1/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PaginaController.php          # Controlador principal
├── routes/
│   └── web.php                               # Definición de rutas
├── resources/
│   └── views/
│       ├── welcome.blade.php                 # Página de inicio
│       ├── bienvenida.blade.php             # Vista estática
│       └── saludo.blade.php                 # Vista dinámica
├── .gitignore                                # Configuración de Git
├── composer.json                             # Dependencias PHP
└── README.md                                 # Este archivo
```

## 🚀 Instalación y Configuración

### Requisitos
- PHP 8.2 o superior
- Composer
- MySQL 5.7 o superior

### Pasos de Instalación

1. **Clonar el repositorio**
   ```bash
   git clone <URL-del-repositorio>
   cd Practica1
   ```

2. **Instalar dependencias**
   ```bash
   composer install
   ```

3. **Configurar archivo .env**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Iniciar el servidor de desarrollo**
   ```bash
   php artisan serve
   ```

El servidor estará disponible en: `http://localhost:8000`

## 🧪 Pruebas de las Rutas

### Acceder a la página de inicio
```
http://localhost:8000/
```

### Acceder a la ruta estática de bienvenida
```
http://localhost:8000/bienvenida
```

### Acceder a la ruta dinámica de saludo
```
http://localhost:8000/saludo/Juan
http://localhost:8000/saludo/María
http://localhost:8000/saludo/Carlos
```

Cambia el nombre en la URL para ver cómo el controlador pasa dinámicamente el parámetro a la vista.

## 💻 Detalles Técnicos

### Controlador (PaginaController.php)
```php
public function bienvenida(): View
{
    return view('bienvenida');
}

public function saludo(string $nombre): View
{
    return view('saludo', ['nombre' => $nombre]);
}
```

### Rutas (web.php)
```php
Route::get('/bienvenida', [PaginaController::class, 'bienvenida']);
Route::get('/saludo/{nombre}', [PaginaController::class, 'saludo']);
```

### Vista Dinámica (saludo.blade.php)
```blade
<h1>Hola, {{ $nombre }}</h1>
```

## 📸 Capturas de Pantalla

### Página de Inicio
![Página de Inicio](https://via.placeholder.com/800x400?text=Página+de+Inicio)

### Ruta Estática: /bienvenida
![Ruta Bienvenida](https://via.placeholder.com/800x400?text=Ruta+Bienvenida)

### Ruta Dinámica: /saludo/Juan
![Ruta Saludo Juan](https://via.placeholder.com/800x400?text=Ruta+Saludo+Juan)

### Ruta Dinámica: /saludo/María
![Ruta Saludo María](https://via.placeholder.com/800x400?text=Ruta+Saludo+María)

---

## 📚 Conceptos Aprendidos

1. **Routing**: Definición de rutas GET con parámetros dinámicos
2. **Controllers**: Métodos que procesan la solicitud y retornan vistas
3. **Views**: Templates Blade para renderizar HTML con datos dinámicos
4. **Dependency Injection**: Laravel inyecta automáticamente los parámetros de la URL
5. **Blade Templating**: Sintaxis `{{ }}` para mostrar variables en HTML

## 🔧 Configuración de Git

El archivo `.gitignore` está configurado para excluir:
- `/vendor` - Directorio de dependencias Composer
- `.env` - Variables de entorno
- `/node_modules` - Dependencias npm
- Archivos de caché y logs
- Directorios de IDE (.vscode, .idea, etc.)

## 📝 Notas

- El proyecto utiliza **Blade**, el motor de plantillas de Laravel
- Las vistas están en `resources/views/` con extensión `.blade.php`
- Los controladores se ubican en `app/Http/Controllers/`
- Las rutas se definen en `routes/web.php`
- Para más información, consulta la [Documentación oficial de Laravel](https://laravel.com/docs)


