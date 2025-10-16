
# Proyecto: CRUD creación de usuariosHOLAS

Este proyecto ha sido desarrollado en **Laravel 12**.  
El sistema permite la creación de un usuario con información personal y firma, la firma se usa para la creación del contrato con los datos de usuario y la foto de la firma.

---

## Librerías usadas
- **PHP 8.4**
- **Laravel 12**
- **MySQL**
- **TailwindCSS**
- [DaisyUI](https://daisyui.com/docs/customize/)
- [Carbon](https://carbon.nesbot.com/docs/)
- [SignaturePad](https://github.com/szimek/signature_pad)
- [Laravel DOM PDF](https://github.com/barryvdh/laravel-dompdf)

---

## Instalación

**1. Clonar el repositorio**

git clone https://github.com/NVega04/****
cd ****

**2. Instalar dependencias**

composer install

**3. Configuración archivo “.env”**

Configurar las variables del archivo.

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=syscom
DB_USERNAME=
DB_PASSWORD=

**4.Ejecutar los siguientes comandos, para migraciones y seeders**

php artisan migrate
php artisan db:seed

**5.Crear la llave de la aplicación**

php artisan key:generate


**6. Para ejecutar la aplicación**

composer run dev

# Funcionalidades principales

- Registro de usuario  
- Tabla con registros (cálculo de días hábiles laborados)  
- Vista del contrato  
- Botón para editar el registro  
- Botón para eliminar el registro  

---

# Notas adicionales

- **Tabla usuarios**: Se creó una tabla diferente a `user` (por defecto entregada por Laravel), a fin de trabajar con la tabla `Usuarios`.  
- **Uso seeders**: Los seeders generan un registro automático del nombre del cargo, para la tabla `Roles`, debido a que no existe registro manual de estos datos.  
- **Signature Pad**: Librería que brinda la herramienta para dibujar la firma y la posibilidad de guardarla como una URL.  
- **Laravel DOM PDF**: Se utilizó para generar el PDF a partir de plantillas de Blade.  
- **Carbon**: Se utilizó para realizar las operaciones con fechas.  
- **DaisyUI y Tailwind**: Se usaron a fin de trabajar el Frontend y darle estilo a los componentes del HTML.  


# Backup

El backup de la base de datos **users** quedo en la raíz del proyecto **proyect_users** en la carpeta llamada **backup.sql**.



