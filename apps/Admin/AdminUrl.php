<?php
/*
url('/admin/', 'apps\Admin\AdminController' ,'Articles'),

В первом '/admin/' это путь по которому будет выводится инфа
в втором 'apps\Admin\AdminController' это путь контролеру в котором есть нужная нам функция
в третих это функчия которая нам нужна
 */
return array(
    url('/admin/', 'apps\Admin\AdminController' ,'Articles'),
);
?>