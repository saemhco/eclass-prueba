## Descripción

> La prueba consiste en hacer una app con un mantenedor de usuarios, el modelo de datos queda al criterio del postulante.

La app debe contar con:

Login de usuario
Dos perfiles (admin/usuario)
Un mantenedor de usuarios.

> Más detalles: https://github.com/eclass/prueba-tecnica/blob/main/BackendPHP.md

## Detalles

## Tecnologías y requerimientos

| Apps      | Description               | Installs                                                   | Guide |
| --------- | ------------------------- | ---------------------------------------------------------- | ----- |
| CakePHP 3 | web application framework | [Install](https://book.cakephp.org/3/en/installation.html) | -     |
| php       | required version **7.1**  | [Install](https://www.apachefriends.org/download.html)     | -     |
| composer  | required                  | [Install](https://getcomposer.org/download/)               | -     |

## Instalación

1. crear el archivo file app.php
   Ejecute el siguiente comando

```
cp app.php.default app.php
```

2. Instalar dependencias. Ejecute el siguiente comando

```
composer install
```

3. Crear Base de Dato llamada

```
eclass
```

configurar los valores de la base de datos en el archivo app.php
ejemplo:

```
'username' => 'root',
'password' => '',
'database' => 'eclass',
'encoding' => 'utf8',
'timezone' => 'UTC',
```

5. Migraciones y Seeders
   Ejecute el comando

```
en linux
bin/cake migrations migrate

En windows
bin\cake migrations migrate
```

## Demo y Credenciales

https://eclass-prueba.quipu.club/

```
Administrador
Usuario: admin@eclass.com
Contraseña: password
```

```
Visita
Usuario: maria@eclass.com
Contraseña: password
```
