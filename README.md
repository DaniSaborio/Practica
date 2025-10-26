
# Mini-inventario Laravel - ITI-621

## Descripción

Proyecto web desarrollado en Laravel para gestionar productos de una tienda. Permite listar, agregar y marcar productos como adquiridos, siguiendo requisitos académicos y técnicos para ITI-621 Tecnologías y Sistemas Web III.

---

## Tabla de Contenidos

- [Descripción](#descripción)
- [Tecnologías utilizadas](#tecnologías-utilizadas)
- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Configuración](#configuración)
- [Uso](#uso)
- [Créditos y licencia](#créditos-y-licencia)

---

## Tecnologías utilizadas

- Arch Linux
- Apache 2.4
- MariaDB/MySQL
- PHP >= 8.4
- Laravel 12.x
- Composer 2.x
- Node.js y npm (opcional para frontend)

---

## Requisitos

- Sistema Arch Linux actualizado
- Apache y MariaDB/MySQL instalados
- PHP y Composer instalados
- Acceso de administrador a la base de datos
- Node.js y npm (solo si usarás frontend avanzado)

---

## Instalación

1. **Clona el repositorio:**
   ```
   git clone https://github.com/DaniSaborio/Practica.git
   cd Practica
   ```

2. **Instala dependencias PHP con Composer:**
   ```
   composer install
   ```

3. **Prepara tu entorno:**
   ```
   cp .env.example .env
   php artisan key:generate
   ```

4. **Edita `.env` con los datos de tu base:**
   ```
   DB_DATABASE=tienda
   DB_USERNAME=sabo
   DB_PASSWORD=tu_contraseña
   ```

5. **Crea la base de datos y el usuario (en MariaDB/MySQL):**
   ```
   CREATE DATABASE tienda CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   GRANT ALL PRIVILEGES ON tienda.* TO 'sabo'@'localhost';
   FLUSH PRIVILEGES;
   ```

6. **Ejecuta las migraciones:**
   ```
   php artisan migrate
   ```

7. **Inicia el servidor para desarrollo:**
   ```
   php artisan serve
   ```

---

## Configuración adicional

- Verifica los permisos sobre `/srv/http` o el directorio de tu proyecto si usas Apache.
- Si usas el driver de sesiones en base de datos, ejecuta:
  ```
  php artisan session:table
  php artisan migrate
  ```

---

## Uso

Accede desde el navegador a [http://localhost:8000](http://localhost:8000). Desde la pantalla principal puedes listar productos, agregarlos y marcarlos como adquiridos.

---

## Créditos y licencia

MIT License.

Proyecto realizado por Daniel Saborio para ITI-621 Tecnologías y Sistemas Web III.

---

## Evidencias

Incluye capturas de pantalla sobre:
- Instalación y migración exitosa
- Acceso y funcionamiento del sistema
- Ejecución del servidor con `php artisan serve`


---

```
