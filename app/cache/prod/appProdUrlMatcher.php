<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/materia')) {
            if (0 === strpos($pathinfo, '/materiasql')) {
                // materia_sql_homepage
                if (rtrim($pathinfo, '/') === '/materiasql') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'materia_sql_homepage');
                    }

                    return array (  '_controller' => 'Materia\\SqlBundle\\Controller\\DefaultController::indexAction',  '_route' => 'materia_sql_homepage',);
                }

                // materia_sql_new_company
                if ($pathinfo === '/materiasql/new-company') {
                    return array (  '_controller' => 'Materia\\SqlBundle\\Controller\\DefaultController::newCompanyAction',  '_route' => 'materia_sql_new_company',);
                }

                // materia_sql_logout
                if ($pathinfo === '/materiasql/logout') {
                    return array (  '_controller' => 'Materia\\SqlBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'materia_sql_logout',);
                }

                // materia_sql_prueba
                if ($pathinfo === '/materiasql/prueba') {
                    return array (  '_controller' => 'Materia\\SqlBundle\\Controller\\DefaultController::pruebaAction',  '_route' => 'materia_sql_prueba',);
                }

                // materia_sql_signup
                if ($pathinfo === '/materiasql/signup') {
                    return array (  '_controller' => 'Materia\\SqlBundle\\Controller\\UserController::signupAction',  '_route' => 'materia_sql_signup',);
                }

                // materia_sql_editMyCompany
                if ($pathinfo === '/materiasql/edit-company') {
                    return array (  '_controller' => 'Materia\\SqlBundle\\Controller\\UserController::editMyCompanyAction',  '_route' => 'materia_sql_editMyCompany',);
                }

                // materia_sql_listCompanyUser
                if ($pathinfo === '/materiasql/listCompanyUser') {
                    return array (  '_controller' => 'Materia\\SqlBundle\\Controller\\UserController::listCompanyUserAction',  '_route' => 'materia_sql_listCompanyUser',);
                }

                // materia_sql_editCompanyUser
                if (0 === strpos($pathinfo, '/materiasql/editCompanyUser') && preg_match('#^/materiasql/editCompanyUser/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'materia_sql_editCompanyUser')), array (  '_controller' => 'Materia\\SqlBundle\\Controller\\UserController::editCompanyUserAction',));
                }

                // materia_sql_deleteCompanyUser
                if ($pathinfo === '/materiasql/deleteCompanyUser') {
                    return array (  '_controller' => 'Materia\\SqlBundle\\Controller\\UserController::deleteCompanyUserAction',  '_route' => 'materia_sql_deleteCompanyUser',);
                }

                // materia_sql_admin_listCompany
                if ($pathinfo === '/materiasql/listCompany') {
                    return array (  '_controller' => 'MateriaSqlBundle:Admin:listCompany',  '_route' => 'materia_sql_admin_listCompany',);
                }

                // materia_sql_admin_editCompany
                if (0 === strpos($pathinfo, '/materiasql/edit-company') && preg_match('#^/materiasql/edit\\-company/(?P<companyId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'materia_sql_admin_editCompany')), array (  '_controller' => 'MateriaSqlBundle:Admin:editCompany',));
                }

                // materia_sql_admin_listUser
                if ($pathinfo === '/materiasql/listUser') {
                    return array (  '_controller' => 'MateriaSqlBundle:Admin:listUser',  '_route' => 'materia_sql_admin_listUser',);
                }

                // materia_sql_admin_editUser
                if (0 === strpos($pathinfo, '/materiasql/edit-user') && preg_match('#^/materiasql/edit\\-user/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'materia_sql_admin_editUser')), array (  '_controller' => 'MateriaSqlBundle:Admin:editUser',));
                }

                // materia_sql_admin_deleteUser
                if ($pathinfo === '/materiasql/deleteUser') {
                    return array (  '_controller' => 'MateriaSqlBundle:Admin:deleteUser',  '_route' => 'materia_sql_admin_deleteUser',);
                }

            }

            if (0 === strpos($pathinfo, '/materiaweb')) {
                // materiaweb_materia_homepage
                if (rtrim($pathinfo, '/') === '/materiaweb') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'materiaweb_materia_homepage');
                    }

                    return array (  '_controller' => 'Materiaweb\\MateriaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'materiaweb_materia_homepage',);
                }

                // materiaweb_materia_new_company
                if ($pathinfo === '/materiaweb/new-company') {
                    return array (  '_controller' => 'Materiaweb\\MateriaBundle\\Controller\\DefaultController::newCompanyAction',  '_route' => 'materiaweb_materia_new_company',);
                }

                // materiaweb_materia_logout
                if ($pathinfo === '/materiaweb/logout') {
                    return array (  '_controller' => 'Materiaweb\\MateriaBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'materiaweb_materia_logout',);
                }

                // materiaweb_materia_prueba
                if ($pathinfo === '/materiaweb/prueba') {
                    return array (  '_controller' => 'Materiaweb\\MateriaBundle\\Controller\\DefaultController::pruebaAction',  '_route' => 'materiaweb_materia_prueba',);
                }

                // materiaweb_materia_signup
                if ($pathinfo === '/materiaweb/signup') {
                    return array (  '_controller' => 'Materiaweb\\MateriaBundle\\Controller\\UserController::signupAction',  '_route' => 'materiaweb_materia_signup',);
                }

                // materiaweb_materia_editMyCompany
                if ($pathinfo === '/materiaweb/edit-company') {
                    return array (  '_controller' => 'Materiaweb\\MateriaBundle\\Controller\\UserController::editMyCompanyAction',  '_route' => 'materiaweb_materia_editMyCompany',);
                }

                // materiaweb_materia_listCompanyUser
                if ($pathinfo === '/materiaweb/listCompanyUser') {
                    return array (  '_controller' => 'Materiaweb\\MateriaBundle\\Controller\\UserController::listCompanyUserAction',  '_route' => 'materiaweb_materia_listCompanyUser',);
                }

                // materiaweb_materia_editCompanyUser
                if (0 === strpos($pathinfo, '/materiaweb/editCompanyUser') && preg_match('#^/materiaweb/editCompanyUser/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'materiaweb_materia_editCompanyUser')), array (  '_controller' => 'Materiaweb\\MateriaBundle\\Controller\\UserController::editCompanyUserAction',));
                }

                // materiaweb_materia_deleteCompanyUser
                if ($pathinfo === '/materiaweb/deleteCompanyUser') {
                    return array (  '_controller' => 'Materiaweb\\MateriaBundle\\Controller\\UserController::deleteCompanyUserAction',  '_route' => 'materiaweb_materia_deleteCompanyUser',);
                }

                // materiaweb_materia_admin_listCompany
                if ($pathinfo === '/materiaweb/listCompany') {
                    return array (  '_controller' => 'Materiaweb\\MateriaBundle\\Controller\\AdminController::listCompanyAction',  '_route' => 'materiaweb_materia_admin_listCompany',);
                }

                // materiaweb_materia_admin_editCompany
                if (0 === strpos($pathinfo, '/materiaweb/edit-company') && preg_match('#^/materiaweb/edit\\-company/(?P<companyId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'materiaweb_materia_admin_editCompany')), array (  '_controller' => 'Materiaweb\\MateriaBundle\\Controller\\AdminController::editCompanyAction',));
                }

                // materiaweb_materia_admin_listUser
                if ($pathinfo === '/materiaweb/listUser') {
                    return array (  '_controller' => 'Materiaweb\\MateriaBundle\\Controller\\AdminController::listUserAction',  '_route' => 'materiaweb_materia_admin_listUser',);
                }

                // materiaweb_materia_admin_editUser
                if (0 === strpos($pathinfo, '/materiaweb/edit-user') && preg_match('#^/materiaweb/edit\\-user/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'materiaweb_materia_admin_editUser')), array (  '_controller' => 'Materiaweb\\MateriaBundle\\Controller\\AdminController::editUserAction',));
                }

                // materiaweb_materia_admin_deleteUser
                if ($pathinfo === '/materiaweb/deleteUser') {
                    return array (  '_controller' => 'Materiaweb\\MateriaBundle\\Controller\\AdminController::deleteUserAction',  '_route' => 'materiaweb_materia_admin_deleteUser',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/newstore')) {
            if (0 === strpos($pathinfo, '/newstore/s')) {
                // acme_newstore_newstore_index
                if (0 === strpos($pathinfo, '/newstore/store') && preg_match('#^/newstore/store(?:/(?P<categoria>[^/]++)(?:/(?P<producto>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_newstore_newstore_index')), array (  'categoria' => 'Libros',  'producto' => 'Libro de JavaScript',  '_controller' => 'Acme\\NewStoreBundle\\Controller\\NewStoreController::indexAction',));
                }

                // acme_newstore_newstore_shop
                if (0 === strpos($pathinfo, '/newstore/shop') && preg_match('#^/newstore/shop(?:/(?P<categoria>[^/]++)(?:/(?P<producto>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_newstore_newstore_shop')), array (  'categoria' => 'Libros',  'producto' => 'Libro de JavaScript',  '_controller' => 'Acme\\NewStoreBundle\\Controller\\NewStoreController::shopAction',));
                }

                // acme_newstore_newstore_storenumber
                if ($pathinfo === '/newstore/store/pruebaRedirect') {
                    return array (  '_controller' => 'Acme\\NewStoreBundle\\Controller\\NewStoreController::storeNumberAction',  '_route' => 'acme_newstore_newstore_storenumber',);
                }

            }

            // _badrequest
            if ($pathinfo === '/newstore/badrequest') {
                return array (  '_controller' => 'Acme\\NewStoreBundle\\Controller\\NewStoreController::badrequestAction',  '_route' => '_badrequest',);
            }

        }

        if (0 === strpos($pathinfo, '/alimentos')) {
            // JazzywebAulasMentorAlimentosBundle_homepage
            if (rtrim($pathinfo, '/') === '/alimentos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'JazzywebAulasMentorAlimentosBundle_homepage');
                }

                return array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::indexAction',  '_route' => 'JazzywebAulasMentorAlimentosBundle_homepage',);
            }

            // JazzywebAulasMentorAlimentosBundle_listar
            if ($pathinfo === '/alimentos/listar') {
                return array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::listarAction',  '_route' => 'JazzywebAulasMentorAlimentosBundle_listar',);
            }

            // JazzywebAulasMentorAlimentosBundle_insertar
            if ($pathinfo === '/alimentos/insertar') {
                return array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::insertarAction',  '_route' => 'JazzywebAulasMentorAlimentosBundle_insertar',);
            }

            // JazzywebAulasMentorAlimentosBundle_buscar
            if ($pathinfo === '/alimentos/buscar') {
                return array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::buscarPorNombreAction',  '_route' => 'JazzywebAulasMentorAlimentosBundle_buscar',);
            }

            // JazzywebAulasMentorAlimentosBundle_ver
            if (0 === strpos($pathinfo, '/alimentos/ver') && preg_match('#^/alimentos/ver/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'JazzywebAulasMentorAlimentosBundle_ver')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::verAction',));
            }

            if (0 === strpos($pathinfo, '/alimentos/modifica')) {
                // JazzywebAulasMentorAlimentosBundle_modificar
                if (0 === strpos($pathinfo, '/alimentos/modificar') && preg_match('#^/alimentos/modificar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'JazzywebAulasMentorAlimentosBundle_modificar')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::modificarAction',));
                }

                // JazzywebAulasMentorAlimentosBundle_modificado
                if ($pathinfo === '/alimentos/modificado') {
                    return array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::modificadoAction',  '_route' => 'JazzywebAulasMentorAlimentosBundle_modificado',);
                }

            }

            if (0 === strpos($pathinfo, '/alimentos/elimina')) {
                // JazzywebAulasMentorAlimentosBundle_eliminar
                if (0 === strpos($pathinfo, '/alimentos/eliminar') && preg_match('#^/alimentos/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'JazzywebAulasMentorAlimentosBundle_eliminar')), array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::eliminarAction',));
                }

                // JazzywebAulasMentorAlimentosBundle_elimina
                if ($pathinfo === '/alimentos/eliminado') {
                    return array (  '_controller' => 'Jazzyweb\\AulasMentor\\AlimentosBundle\\Controller\\DefaultController::eliminaAction',  '_route' => 'JazzywebAulasMentorAlimentosBundle_elimina',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
