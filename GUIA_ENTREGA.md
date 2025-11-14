# Guía Completa de Entrega - Práctica 1: Laravel Route → Controller → View

## 📋 Checklist de Entrega

- [ ] Proyecto clonado desde repositorio
- [ ] Archivos configurados correctamente
- [ ] `.gitignore` excluye `/vendor`
- [ ] `README.md` actualizado
- [ ] `DOCUMENTACION.md` incluido
- [ ] Capturas de pantalla realizadas
- [ ] PDF generado con descripción
- [ ] Repositorio subido a GitHub
- [ ] Enlace compartido

---

## 🚀 Pasos para Preparar el Repositorio

### Paso 1: Inicializar Git (Si no está hecho)

```bash
cd "c:\Semestre 5\ProgramacionWEB\Practica1"
git init
git config user.name "Tu Nombre"
git config user.email "tu.email@ejemplo.com"
```

### Paso 2: Agregar Archivos al Repositorio

```bash
git add .
git status  # Verificar que /vendor NO aparezca
```

### Paso 3: Commit Inicial

```bash
git commit -m "Inicial: Implementación de Ruta → Controlador → Vista en Laravel"
```

### Paso 4: Crear Repositorio en GitHub

1. Ir a [GitHub.com](https://github.com)
2. Hacer clic en **"New"** para crear un nuevo repositorio
3. Nombre: `Practica1-Laravel`
4. Descripción: `Implementación del patrón MVC en Laravel: Rutas, Controladores y Vistas`
5. Seleccionar: **Public** (para que sea visible)
6. NO inicializar con README (ya lo tenemos)
7. Hacer clic en **"Create repository"**

### Paso 5: Conectar y Subir a GitHub

```bash
git branch -M main
git remote add origin https://github.com/TU_USUARIO/Practica1-Laravel.git
git push -u origin main
```

---

## 📸 Instrucciones para Captura de Pantallas

### Requisitos Previos
- Servidor Laravel ejecutándose: `php artisan serve`
- Navegador web abierto

### Captura 1: Página de Inicio

1. Acceder a `http://localhost:8000/`
2. Captura de pantalla mostrando la página de bienvenida predeterminada de Laravel
3. Guardar como: `screenshot_01_inicio.png`

### Captura 2: Ruta Estática /bienvenida

1. Acceder a `http://localhost:8000/bienvenida`
2. Captura de pantalla mostrando:
   - La URL en la barra de direcciones: `/bienvenida`
   - El mensaje: "Bienvenido a mi primera aplicación de Laravel"
3. Guardar como: `screenshot_02_bienvenida.png`

### Captura 3: Ruta Dinámica /saludo/{nombre} - Ejemplo 1

1. Acceder a `http://localhost:8000/saludo/Juan`
2. Captura de pantalla mostrando:
   - La URL en la barra de direcciones: `/saludo/Juan`
   - El mensaje: "Hola, Juan"
3. Guardar como: `screenshot_03_saludo_juan.png`

### Captura 4: Ruta Dinámica /saludo/{nombre} - Ejemplo 2

1. Acceder a `http://localhost:8000/saludo/María`
2. Captura de pantalla mostrando:
   - La URL en la barra de direcciones: `/saludo/María`
   - El mensaje: "Hola, María"
3. Guardar como: `screenshot_04_saludo_maria.png`

### Captura 5: Archivo routes/web.php

1. Abrir el archivo `routes/web.php` en el editor
2. Captura de pantalla mostrando la definición de las rutas
3. Guardar como: `screenshot_05_routes.png`

### Captura 6: Archivo PaginaController.php

1. Abrir el archivo `app/Http/Controllers/PaginaController.php`
2. Captura de pantalla mostrando los métodos `bienvenida()` y `saludo()`
3. Guardar como: `screenshot_06_controller.png`

---

## 📄 Creación del PDF de Descripción

El PDF debe incluir:

### Sección 1: Portada
- Título: "Práctica 1: Implementación del Patrón Route → Controller → View en Laravel"
- Estudiante: [Tu nombre]
- Fecha: [Fecha de entrega]
- Institución: [Nombre de la institución]

### Sección 2: Introducción
- Explicación breve del objetivo
- Descripción del patrón MVC

### Sección 3: Descripción del Proyecto
- Estructura de directorios
- Archivos principales
- Explicación del funcionamiento

### Sección 4: Implementación Técnica
- Código del controlador
- Definición de rutas
- Código de las vistas

### Sección 5: Capturas de Pantalla
- Página de inicio
- Ruta estática /bienvenida
- Ruta dinámica /saludo/Juan
- Ruta dinámica /saludo/María
- Archivos de código fuente

### Sección 6: Reflexión y Análisis
- ¿Por qué es importante separar Rutas, Controladores y Vistas?
- Ventajas del patrón MVC
- Aprendizajes obtenidos
- Posibles mejoras futuras

### Sección 7: Conclusiones
- Resumen del trabajo realizado
- Comandos útiles aprendidos
- Próximos pasos

---

## 📁 Estructura Final del Repositorio

```
Practica1-Laravel/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PaginaController.php
├── resources/
│   └── views/
│       ├── welcome.blade.php
│       ├── bienvenida.blade.php
│       └── saludo.blade.php
├── routes/
│   └── web.php
├── .gitignore                    # ✓ /vendor excluido
├── .env.example
├── README.md                     # ✓ Documentación actualizada
├── DOCUMENTACION.md              # ✓ Descripción detallada
├── composer.json
├── composer.lock
├── package.json
├── phpunit.xml
├── vite.config.js
├── artisan
└── [resto de archivos de Laravel]

ENTREGA:
├── Practica1-Laravel/            # Repositorio en GitHub
├── DOCUMENTACION.pdf             # PDF con descripción y reflexiones
└── CAPTURAS_DE_PANTALLA/         # Carpeta con screenshots (opcional)
    ├── screenshot_01_inicio.png
    ├── screenshot_02_bienvenida.png
    ├── screenshot_03_saludo_juan.png
    ├── screenshot_04_saludo_maria.png
    ├── screenshot_05_routes.png
    └── screenshot_06_controller.png
```

---

## 🎯 Recomendaciones Finales

### Para Generar el PDF
Opciones recomendadas:
- **Google Docs**: Crea el documento, luego Archivo → Descargar → PDF
- **Microsoft Word**: Crea el documento, luego Archivo → Guardar como → PDF
- **LibreOffice**: Crea el documento, luego Archivo → Exportar como PDF
- **Markdown a PDF**: Usa herramientas como Pandoc o VS Code extensions

### Configuración de .gitignore
Verifica que se está excluyendo correctamente:
```bash
git status
# No debe aparecer: /vendor, .env, node_modules
```

### Verificación Final Antes de Entregar

1. **Repositorio en GitHub**:
   - [ ] Es público
   - [ ] Tiene descripción
   - [ ] Tiene README.md
   - [ ] Tiene DOCUMENTACION.md
   - [ ] NO contiene /vendor

2. **PDF de Descripción**:
   - [ ] Incluye todas las secciones
   - [ ] Tiene buena presentación
   - [ ] Contiene capturas de pantalla
   - [ ] Incluye reflexiones personales

3. **Código**:
   - [ ] Funciona correctamente
   - [ ] Rutas accesibles
   - [ ] Vistas renderizadas correctamente
   - [ ] Sin errores en consola

---

## 📞 Contacto y Dudas

Si tienes problemas durante el proceso, verifica:
- Que Git esté instalado: `git --version`
- Que tengas cuenta de GitHub
- Que el servidor Laravel esté ejecutándose
- Que la carpeta `/vendor` esté en `.gitignore`

¡Buena suerte con tu entrega! 🎓