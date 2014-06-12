<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/lineasTelefonicasPolicia')) {
            // lineas_telefonicas_policia_er_homepage
            if (rtrim($pathinfo, '/') === '/lineasTelefonicasPolicia') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'lineas_telefonicas_policia_er_homepage');
                }

                return array (  '_controller' => 'LineasTelefonicas\\Policia\\ERBundle\\Controller\\DefaultController::indexAction',  '_route' => 'lineas_telefonicas_policia_er_homepage',);
            }

            if (0 === strpos($pathinfo, '/lineasTelefonicasPolicia/l')) {
                // lineas_telefonicas_policia_er_logout
                if ($pathinfo === '/lineasTelefonicasPolicia/login') {
                    return array (  '_controller' => 'LineasTelefonicas\\Policia\\ERBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'lineas_telefonicas_policia_er_logout',);
                }

                // lineas_telefonicas_policia_er_listDestinos
                if ($pathinfo === '/lineasTelefonicasPolicia/lista-destinos') {
                    return array (  '_controller' => 'LineasTelefonicas\\Policia\\ERBundle\\Controller\\DestinosController::listDestinosAction',  '_route' => 'lineas_telefonicas_policia_er_listDestinos',);
                }

            }

            // lineas_telefonicas_policia_er_deleteDestinos
            if ($pathinfo === '/lineasTelefonicasPolicia/elimina-destinos') {
                return array (  '_controller' => 'LineasTelefonicas\\Policia\\ERBundle\\Controller\\DestinosController::deleteDestinosAction',  '_route' => 'lineas_telefonicas_policia_er_deleteDestinos',);
            }

            // lineas_telefonicas_policia_er_saveDestinos
            if ($pathinfo === '/lineasTelefonicasPolicia/guarda-destinos') {
                return array (  '_controller' => 'LineasTelefonicas\\Policia\\ERBundle\\Controller\\DestinosController::saveDestinosAction',  '_route' => 'lineas_telefonicas_policia_er_saveDestinos',);
            }

            // lineas_telefonicas_policia_er_listUser
            if ($pathinfo === '/lineasTelefonicasPolicia/lista-usuarios') {
                return array (  '_controller' => 'LineasTelefonicas\\Policia\\ERBundle\\Controller\\UserController::listUserAction',  '_route' => 'lineas_telefonicas_policia_er_listUser',);
            }

            // lineas_telefonicas_policia_er_addUser
            if ($pathinfo === '/lineasTelefonicasPolicia/agrega-usuarios') {
                return array (  '_controller' => 'LineasTelefonicas\\Policia\\ERBundle\\Controller\\UserController::addUserAction',  '_route' => 'lineas_telefonicas_policia_er_addUser',);
            }

            if (0 === strpos($pathinfo, '/lineasTelefonicasPolicia/e')) {
                // lineas_telefonicas_policia_er_editUser
                if ($pathinfo === '/lineasTelefonicasPolicia/edita-usuario') {
                    return array (  '_controller' => 'LineasTelefonicas\\Policia\\ERBundle\\Controller\\UserController::editUserAction',  '_route' => 'lineas_telefonicas_policia_er_editUser',);
                }

                // lineas_telefonicas_policia_er_deleteUser
                if ($pathinfo === '/lineasTelefonicasPolicia/elimina-usuarios') {
                    return array (  '_controller' => 'LineasTelefonicas\\Policia\\ERBundle\\Controller\\UserController::deleteUserAction',  '_route' => 'lineas_telefonicas_policia_er_deleteUser',);
                }

                if (0 === strpos($pathinfo, '/lineasTelefonicasPolicia/empresa')) {
                    // lineas_telefonicas_policia_er_listCompany
                    if ($pathinfo === '/lineasTelefonicasPolicia/empresas') {
                        return array (  '_controller' => 'LineasTelefonicas\\Policia\\ERBundle\\Controller\\EmpresasController::listCompanyAction',  '_route' => 'lineas_telefonicas_policia_er_listCompany',);
                    }

                    // lineas_telefonicas_policia_er_deleteCompany
                    if ($pathinfo === '/lineasTelefonicasPolicia/empresa') {
                        return array (  '_controller' => 'LineasTelefonicas\\Policia\\ERBundle\\Controller\\EmpresasController::deleteCompanyAction',  '_route' => 'lineas_telefonicas_policia_er_deleteCompany',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/lineasTelefonicasPolicia/linea')) {
                // lineas_telefonicas_policia_er_listLineas
                if ($pathinfo === '/lineasTelefonicasPolicia/lineas') {
                    return array (  '_controller' => 'LineasTelefonicas\\Policia\\ERBundle\\Controller\\LineasController::listLineasAction',  '_route' => 'lineas_telefonicas_policia_er_listLineas',);
                }

                if (0 === strpos($pathinfo, '/lineasTelefonicasPolicia/linea-')) {
                    // lineas_telefonicas_policia_er_addLineas
                    if ($pathinfo === '/lineasTelefonicasPolicia/linea-agregada') {
                        return array (  '_controller' => 'LineasTelefonicas\\Policia\\ERBundle\\Controller\\LineasController::addLineasAction',  '_route' => 'lineas_telefonicas_policia_er_addLineas',);
                    }

                    // lineas_telefonicas_policia_er_deleteLineas
                    if ($pathinfo === '/lineasTelefonicasPolicia/linea-borrada') {
                        return array (  '_controller' => 'LineasTelefonicas\\Policia\\ERBundle\\Controller\\LineasController::deleteLineasAction',  '_route' => 'lineas_telefonicas_policia_er_deleteLineas',);
                    }

                }

            }

            // lineas_telefonicas_policia_er_editLineas
            if ($pathinfo === '/lineasTelefonicasPolicia/edita-linea') {
                return array (  '_controller' => 'LineasTelefonicas\\Policia\\ERBundle\\Controller\\LineasController::editLineasAction',  '_route' => 'lineas_telefonicas_policia_er_editLineas',);
            }

            // lineas_telefonicas_policia_er_lineasHistory
            if ($pathinfo === '/lineasTelefonicasPolicia/lineas-historico') {
                return array (  '_controller' => 'LineasTelefonicas\\Policia\\ERBundle\\Controller\\LineasController::listLineasHistoricoAction',  '_route' => 'lineas_telefonicas_policia_er_lineasHistory',);
            }

            if (0 === strpos($pathinfo, '/lineasTelefonicasPolicia/busca-linea')) {
                // lineas_telefonicas_policia_er_buscaLineaNro
                if ($pathinfo === '/lineasTelefonicasPolicia/busca-linea') {
                    return array (  '_controller' => 'LineasTelefonicas\\Policia\\ERBundle\\Controller\\LineasController::buscaLineaNroAction',  '_route' => 'lineas_telefonicas_policia_er_buscaLineaNro',);
                }

                // lineas_telefonicas_policia_er_buscaLineaDestino
                if ($pathinfo === '/lineasTelefonicasPolicia/busca-linea-destino') {
                    return array (  '_controller' => 'LineasTelefonicas\\Policia\\ERBundle\\Controller\\LineasController::buscaLineaDestinoAction',  '_route' => 'lineas_telefonicas_policia_er_buscaLineaDestino',);
                }

            }

        }

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

                // materia_sql_newUser
                if ($pathinfo === '/materiasql/new-user') {
                    return array (  '_controller' => 'Materia\\SqlBundle\\Controller\\UsersController::newUserAction',  '_route' => 'materia_sql_newUser',);
                }

                // materia_sql_saveUser
                if ($pathinfo === '/materiasql/save-user') {
                    return array (  '_controller' => 'Materia\\SqlBundle\\Controller\\UsersController::saveUserAction',  '_route' => 'materia_sql_saveUser',);
                }

                // materia_sql_editUser
                if (0 === strpos($pathinfo, '/materiasql/edit-user') && preg_match('#^/materiasql/edit\\-user/(?P<userid>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'materia_sql_editUser')), array (  '_controller' => 'Materia\\SqlBundle\\Controller\\UsersController::editUserAction',));
                }

                // materia_sql_listCompanyUser
                if ($pathinfo === '/materiasql/listCompanyUser') {
                    return array (  '_controller' => 'Materia\\SqlBundle\\Controller\\UsersController::listCompanyUserAction',  '_route' => 'materia_sql_listCompanyUser',);
                }

                // materia_sql_editCompanyUser
                if (0 === strpos($pathinfo, '/materiasql/editCompanyUser') && preg_match('#^/materiasql/editCompanyUser/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'materia_sql_editCompanyUser')), array (  '_controller' => 'Materia\\SqlBundle\\Controller\\UsersController::editCompanyUserAction',));
                }

                // materia_sql_deleteCompanyUser
                if (0 === strpos($pathinfo, '/materiasql/deleteCompanyUser') && preg_match('#^/materiasql/deleteCompanyUser/(?P<userid>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'materia_sql_deleteCompanyUser')), array (  '_controller' => 'Materia\\SqlBundle\\Controller\\UsersController::deleteCompanyUserAction',));
                }

                // materia_sql_editMyCompany
                if (0 === strpos($pathinfo, '/materiasql/edit-company') && preg_match('#^/materiasql/edit\\-company/(?P<companyId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'materia_sql_editMyCompany')), array (  '_controller' => 'Materia\\SqlBundle\\Controller\\EmpresasController::editMyCompanyAction',));
                }

                if (0 === strpos($pathinfo, '/materiasql/list')) {
                    // materia_sql_admin_listCompany
                    if ($pathinfo === '/materiasql/listCompany') {
                        return array (  '_controller' => 'Materia\\SqlBundle\\Controller\\AdminController::listCompanyAction',  '_route' => 'materia_sql_admin_listCompany',);
                    }

                    // materia_sql_admin_listUser
                    if ($pathinfo === '/materiasql/listUser') {
                        return array (  '_controller' => 'Materia\\SqlBundle\\Controller\\AdminController::listUserAction',  '_route' => 'materia_sql_admin_listUser',);
                    }

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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
