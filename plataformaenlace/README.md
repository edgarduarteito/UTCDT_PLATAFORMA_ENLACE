SymfonyWebApp
=============

Proyecto base en symfony 2.4

Bundles adicionales implementados:
==================================
sonata-project/core-bundle: ~2.2@dev 

sonata-project/admin-bundle: dev-master 

sonata-project/doctrine-orm-admin-bundle: dev-master

sonata-project/block-bundle: 2.2.*

sonata-project/user-bundle: 2.2.*@dev

friendsofsymfony/user-bundle: 1.3.*

friendsofsymfony/rest-bundle: 1.1.*

nelmio/api-doc-bundle: dev-master

doctrine/doctrine-fixtures-bundle: 2.1.*@dev

doctrine/data-fixtures: 1.0.*@dev

knplabs/knp-menu-bundle: 1.1.x-dev

sonata-project/easy-extends-bundle: 2.1.*

sonata-project/cache-bundle: dev-master

sonata-project/intl-bundle: dev-master

jms/serializer-bundle: 0.12.*

jms/di-extra-bundle: ~1.3


Instalación:
============

  1) Descargue proyecto
  
  2) Crear carpetas cache y logs en el directorio app/
  
  3) Crear archivo "parameters" dentro de la carpeta app/config/ y configurar según documentación de symfony
  
  4) En la consola correr los siguientes comandos
  
      4.1) app/console cache:clear
      
      4.2) app/console doctrine:database:create
      
      4.3) app/console doctrine:schema:create
      
      4.4) app/console doctrine:fixtures:load
      

Ingreso al área administrativa:
===============================

Para ingresar al área administrativa mediante el navegador agregue a la url "/admin" el usuario y contraseña son "admin" y "admin"

