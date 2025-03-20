# Interfaz Web para Gestión de Stock de Pinturas

Este proyecto es una **interfaz web para la gestión del stock de pinturas**, creada para mantener un control eficiente sobre las pinturas que tengo disponibles y las que necesito comprar. La aplicación está diseñada para ser fácil de desplegar y gestionar, utilizando **Docker Compose** para orquestar el entorno y permitir una implementación rápida.

## Características del Proyecto

- Gestión de inventario de pinturas.
- Base de datos **MySQL** para almacenar la información de las pinturas.
- Interfaz web interactiva que permite agregar, eliminar y consultar el stock.
- Despliegue fácil y rápido mediante **Docker Compose**.
- Escalable y modular, usando **Docker** para contenedores de Nginx, PHP y MySQL.

## Tecnologías Utilizadas

- **Docker**: Para crear contenedores y hacer el despliegue del proyecto en cualquier entorno.
- **Docker Compose**: Para gestionar múltiples contenedores de manera sencilla.
- **Nginx**: Servidor web para servir la aplicación PHP.
- **PHP**: Lenguaje de programación utilizado para desarrollar la lógica de la aplicación web.
- **MySQL**: Base de datos para almacenar la información del inventario.
- **HTML/CSS**: Para la creación de la interfaz de usuario.

## Instalación

### Requisitos previos

Asegúrate de tener **Git**, **Docker** y **Docker Compose** instalados en tu sistema.

### Clonación del Proyecto

Si tienes **Git** instalado, clona el repositorio con el siguiente comando:

```bash
git clone https://github.com/frapinroi/proyecto.git
cd proyecto
docker-compose up -d

## Acceder a la Aplicación

Una vez que los contenedores estén en funcionamiento, puedes acceder a la aplicación desde tu navegador web usando la IP de la MV utilizada.
