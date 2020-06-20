<?php
/*
 url('/', 'apps\Test\TestController' ,'loginAction'),

В первом '/',  это путь по которому будет выводится инфа
в втором 'apps\Test\TestController' это путь контролеру в котором есть нужная нам функция
в третих 'loginAction' это функчия которая нам нужна
 */
return array(
    url('/', 'apps\Test\TestController' ,'loginAction'),
);
?>