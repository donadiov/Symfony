cd D:\Victor-WEB\local\wamp\apps\symfony

echo "Genero base de datos"

echo off
php app/console doctrine:database:create

echo "GENERA GETTERS Y SETTERS"

echo off
php app/console doctrine:generate:entities Materia/Web/MateriawebBundle/Entity

echo "CREA TABLAS EN LA BASE SEGUN ENTIDADES"

echo off
php app/console doctrine:schema:update --force

echo "CARGA ACCESOSRIOS o DATOS DE PRUEBA"

echo off
php app/console doctrine:fixtures:load

pause