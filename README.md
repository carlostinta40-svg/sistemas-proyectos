

Sistema de Gestión de Proyectos - API REST Laravel


UNIVERSIDAD TECNOLOGICA BOLIVIANA - UTB
ESTUDIANTE: Carlos Enrique Tinta Condori
DOCENTE: Miguel Angel Mendoza terrazas
CARRERA:  Ingeniería en Sistemas
MATERIA: Programación III
SEMERSTRE:  4to Semestre 
PARALELO:  A


Este proyecto fue desarrollado utilizando Laravel y tiene como objetivo gestionar proyectos, categorías, etiquetas y comentarios mediante una API REST.

El sistema permite realizar operaciones CRUD completas utilizando rutas API y respuestas en formato JSON.

Tecnologías utilizadas

- Laravel
- PHP
- MySQL
- Composer
- Thunder Client
- Git y GitHub



Instalación del Proyecto

1. Clonar el repositorio

git clone https://github.com/carlostinta40-svg/sistemas-proyectos.git

2. Entrar al proyecto

cd sistemas-proyectos

3. Instalar dependencias

composer install

4. Configurar archivo .env

Copiar el archivo de ejemplo:

cp .env.example .env

5. Generar la clave de Laravel

php artisan key:generate





Base de Datos

Ejecutar migraciones

php artisan migrate

Ejecutar seeders

php artisan db:seed





Ejecutar el servidor

php artisan serve

Abrir en el navegador:

http://127.0.0.1:8000






Endpoints principales

Proyectos

- GET /api/proyectos
- POST /api/proyectos
- PUT /api/proyectos/{id}
- DELETE /api/proyectos/{id}

Categorías

- GET /api/categorias

Etiquetas

- GET /api/etiquetas





Pruebas realizadas

Las pruebas de la API fueron realizadas utilizando Thunder Client desde Visual Studio Code.

Se verificaron correctamente:

- Listado de datos
- Registro de proyectos
- Actualización de proyectos
- Eliminación de proyectos
- Relaciones entre tablas
- Respuestas JSON

---

Autor
CARLOS TINTA 
