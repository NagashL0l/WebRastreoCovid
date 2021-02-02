# Aplicación web para el seguimiento de casos COVID-19
### Práctica final Tecnologías Web - Juan Blanco Martín

---

## Despliegue sobre un servidor local

En mi caso, he realizado la práctica sobre un servidor local, por lo que explicaré como instalar la aplicación en uno.

1. El primer paso es tener descargado un servidor local. En mi caso he usado **XAMPP**.
2. Hay que introducir todos los ficheros fuente en la carpeta que maneja el servidor. En caso de XAMPP, la carpeta es **htdocs**, encontrada en el directorio de instalación del propio XAMPP. Es recomendable agrupar todos los archivos bajo una misma carpeta.
3. Lo siguiente será abrir XAMPP y arrancar los módulos *Apache* y *MySQL*, para poder hacer uso del servidor y del administrador de bases de datos.
4. Por último, hay que importar el fichero de la carpeta *sql*, que contiene la estructura de la base de datos y algunos datos que introduciremos en esta memoria.

La aplicación ya está instalada y se puede abrir en la dirección ***localhost/WebRastreoCovid/index.php***.

## Disposición de ficheros
La estructura de la aplicación es la siguiente:

- En la carpeta principal se encuentran los archivos .php principales.
    - **index.php** es la página principal.
    - **paginaAdministrador.php** permite registrar un nuevo caso y acceder al resto de opciones de la web.
    - **nuevoEvento** permite registrar un nuevo evento y acceder al resto de opciones de la web.
    - **login.php** gestiona el inicio de sesión.
    - **cerrar_sesion.php** gestiona el cierre de sesión.


## Observaciones técnicas


