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
- 

## Instalación

### Requisitos previos

Asegúrate de tener **Git**, **Docker** y **Docker Compose** instalados en tu sistema.

#### 1. Clonar el Repositorio

Primero, clona el repositorio en tu máquina local utilizando **Git**. Abre una terminal y ejecuta:

```bash
git clone https://github.com/frapinroi/proyecto.git
cd proyecto
```

#### 2.Configuración de Docker y Docker Compose
Una vez que tengas el proyecto clonado, no necesitas hacer ninguna configuración adicional, ya que el archivo docker-compose.yml ya incluye toda la configuración necesaria para los contenedores de Nginx, PHP y MySQL.

#### 3. Levantar los Contenedores con Docker Compose
Para levantar los contenedores y poner en marcha la aplicación, ejecuta el siguiente comando en la terminal desde la carpeta del proyecto:

```bash
docker-compose up -d
```
#### 4. Acceder a la Aplicación

Una vez que los contenedores estén en funcionamiento, puedes acceder a la aplicación desde tu navegador web usando la IP de la MV utilizada.
