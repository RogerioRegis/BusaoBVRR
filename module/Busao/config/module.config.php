<?php

namespace Busao;

return array(
    'router' => array(
        'routes' => array(
            'busao-home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        'controller' => 'Busao\Controller\Index',
                        'action' => 'index',
                    ),
                ),
            ),
            'busao-admin-interna' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/linha/[:controller[/:action]][/:id]',
                    'constraints' => array(
                        'id' => '[0-9]+'
                    )
                ),
            ),
            'busao-admin' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/linha/[:controller[/:action][/page/:page]]',
                    'defaults' => array(
                        'action' => 'index',
                        'page' => 1
                    ),
                ),
            ),
            'busao-admin-auth' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/linha/auth',
                    'defaults' => array(
                        'action' => 'index',
                        'controller' => 'busao-admin/auth'
                    ),
                ),
            ),
            'busao-admin-logout' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/linha/auth/logout',
                    'defaults' => array(
                        'action' => 'logout',
                        'controller' => 'busao-admin/auth'
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Busao\Controller\Index' => 'Busao\Controller\IndexController',
            'categorias' => 'BusaoAdmin\Controller\CategoriasController',
            'livros' => 'BusaoAdmin\Controller\LivrosController',
            'users' => 'BusaoAdmin\Controller\UsersController',
            'busao-admin/auth' => 'BusaoAdmin\Controller\AuthController',
            'araceli' => 'Busao\Controller\AraceliController',
            'ataide-teive' => 'Busao\Controller\AtaideTeiveController',
        ),
    ),
    'module_layouts' => array(
//        'Busao' => 'layout/layout',
        'Busao' => 'layout/layout-admin',
        'BusaoAdmin' => 'layout/layout-admin'
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'busao/index/index' => __DIR__ . '/../view/busao/index/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                ),
            ),
        ),
    ),
);
