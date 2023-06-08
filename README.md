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
- **[php artisan key:generate](#)**r
- [Asignar credenciales de conexion a la DB, usuario y contraseña, en archivo .env ](#).
- **[DB_DATABASE=Database name](#)**
- **[DB_USERNAME=user database name](#)**
- **[DB_PASSWORD=password database name](#)**
- [Ejecutar migraciones de la base de datos para que se ejecuten las tabla del proyecto ](#).
- **[php artisan migrate](#)**
- [opcional ejecutar este comando si se cuenta con datos de prueba iniciales en la base de datos](#).
- **[php artisan migrate --seed](#)**

## Propietarios de la plataforma

Desde el área de Desarrollo Profesional y Egresados, realizan la solicitud de esta plataforma para la generación de los certificados
para los diferentes cursos que realizan en esta área, siendo principal responsable la compañera Lucero Ruega Garcia y su equipo.

## Documentación del proyecto

El proyecto será realizado y escrito con el framework laravel, esta es su documentación: [Laravel documentation](https://laravel.com/docs/).

## Licencia

La plataforma cuenta con la licencia de código abierto [MIT license](https://opensource.org/licenses/MIT).

## Migrar versión de laravel 8 a laravel 9

Asegurarse de estar usando una versión de php mayor o igual a 8.

1. **"require"** dependencies

   - Modificar la versión de **"php"** a **"^8.0"**
   - Modificar la versión de **"laravel/framework"** a **"^9.0"**
   - Adecuar las versiones de las librerías a **php 8**. (Opcional)

   Para este proyecto:

   - Modificar la versión de **"maatwebsite/excel"** a **"^3.1.48"** (Opcional)
   - Modificar la versión de **"simplesoftwareio/simple-qrcode"** a **"^4.2"** (Opcional)

2. **"require-dev"** dependencies

   - Reemplazamos **"facade/ignition": "^2.5",** por **"spatie/laravel-ignition": "^1.0",**
   - Modificar la versión de **"nunomaduro/collision"** a **"^6.1"**

3. Activar extensiones en **C:\xamp\php\php.ini**

   - Borramos el **;** de **extension=zip**
   - Borramos el **;** de **extension=gd**

4. Ejecutar **composer update**

## Migrar versión de laravel 9 a laravel 10

Asegurarse de estar usando una versión de php mayor o igual a 8.1.0

1. **"require"** dependencies

   - Modificar la versión de **"php"** a **"^8.1.0"**
   - Modificar la versión de **"laravel/framework"** a **"^10.0"**
   - Modificar la versión de **"laravel/sanctum"** a **"^3.2"**
   - Modificar la versión de **"doctrine/dbal"** a **"^3.0"**

2. Eliminamos de **"require"** dependencies **"fruitcake/laravel-cors": "^2.0"**

   - En el archivo _"app\Http\Kernel.php"_ reemplazamos _\Fruitcake\Cors\HandleCors::class_ por _\Illuminate\Http\Middleware\HandleCors::class_

3. **"require-dev"** dependencies

   - Modificar la versión de **"spatie/laravel-ignition": "^1.0"** a **"spatie/laravel-ignition": "^2.0"**
   - Modificar la versión de **"nunomaduro/collision"** a **"^7.0"**
   - Modificar la versión de **"phpunit/phpunit"** a **"^10.0"**

4. En el archivo _"phpunit.xml"_ eliminamos el atributo **processUncoveredFiles="true"** de la etiqueta **coverage**

5. Modificamos la estabilidad **"minimum-stability": "dev"** a **"stable"**

5. Ejecutar **composer update**
