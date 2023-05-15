## Comandos para clonar plataforma de Cursos Certificados 

Para clonar el repositorio e instalarlo en produccion o pruebas se deben tener en cuenta los siguientes comando:

- [Clonar el repositorio](#).
- **[https://github.com/MORJAN-CUN/CursosCertificados.git](#)**
- [Intalar dependencias del proyecto composer](#).
- **[composer install](#)**
- [Intalar dependencias del proyecto npm](#).
- **[npm install](#)**
- [crear archivo .env a partir del archivo de ejemplo](#).
- **[cp .env.example .env](#)**
- [Generar llave de aplicacion para que no de error](#).
- **[php artisan key:generate](#)**
- [Asignar credenciales de conexion a la DB, usuario y contraseña, en archivo .env ](#).
- **[DB_DATABASE=Database name](#)**
- **[DB_USERNAME=user database name](#)**
- **[DB_PASSWORD=password database name](#)**
- [Ejecutar migraciones de la base de datos para que se ejecuten las tabla del proyecto ](#).
- **[php artisan migrate](#)**
- [opcional ejecutar este comando si se cuenta con datos de prueba iniciales en la base de datos](#).
- **[php artisan migrate --seed](#)**

## Propietarios de la plataforma

Desde el área de Desarrollo Profesional y Egresados, generan la solicitud de esta plataforma para la generacion de los certificados
para los diferentes cursos que realizan en esta area, siendo principal responsable la compañera Lucero Ruega Garcia y su equipo.

## Documentación del proyecto

El proyecto sera realizado y escrito con el framework laravel aca su documentación: [Laravel documentation](https://laravel.com/docs/).

## Licensia

La lataforma cuenta cn la licencia de codigo abierto [MIT license](https://opensource.org/licenses/MIT).
