## Calculadora

En el presente proyecto se ha creado un servicio que simula una calculadora con la funcionalidad de realizar operaciones matemáticas, devolviendo un error en el caso de que se desee una operación no implementada. Dicho servicio se podrá utilizar tanto a través de una API como de un comando artisan. En la actualidad están implementados los comandos **add**, **substract**, **multiply** y **division**, devolviendo un mensaje de error en otro caso.

## API

El servicio se podrá utilizar de la forma:

**/{operación}/{operatorA}/{operatorB}**

Por ejemplo:

**http://localhost/add/5/6**

Se devolverá:

**{"result:11"}**



## Comando artisan

Por consola se utilizará en comando **operations** seguido de los operandos y la operación a realizar.

Por ejemplo:

**$ php artisan operations 5 6 add**

Se devolverá:

**11**


## Requisitos

- PHP 8.0.2 o superior

## Instrucciones de instalación

Se trata de un Laravel 9, por lo que el proceso para utilizarlo será: 

- Clonar el repo en tu pc.
- Crear archivo .env.
- Ejecutar los siguientes comandos en la raíz del proyecto:
    - composer install
    - php artisan key:generate
    - php artisan serve
