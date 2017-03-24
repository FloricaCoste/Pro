<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/orders')) {
            // orders_index
            if (rtrim($pathinfo, '/') === '/orders') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orders_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'orders_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OrdersController::indexAction',  '_route' => 'orders_index',);
            }
            not_orders_index:

            // orders_new
            if ($pathinfo === '/orders/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_orders_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OrdersController::newAction',  '_route' => 'orders_new',);
            }
            not_orders_new:

            // orders_show
            if (preg_match('#^/orders/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orders_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orders_show')), array (  '_controller' => 'AppBundle\\Controller\\OrdersController::showAction',));
            }
            not_orders_show:

            // orders_edit
            if (preg_match('#^/orders/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_orders_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orders_edit')), array (  '_controller' => 'AppBundle\\Controller\\OrdersController::editAction',));
            }
            not_orders_edit:

            // orders_delete
            if (preg_match('#^/orders/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_orders_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orders_delete')), array (  '_controller' => 'AppBundle\\Controller\\OrdersController::deleteAction',));
            }
            not_orders_delete:

        }

        if (0 === strpos($pathinfo, '/po')) {
            // po_index
            if (rtrim($pathinfo, '/') === '/po') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_po_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'po_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\POController::indexAction',  '_route' => 'po_index',);
            }
            not_po_index:

            // po_new
            if ($pathinfo === '/po/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_po_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\POController::newAction',  '_route' => 'po_new',);
            }
            not_po_new:

            // po_show
            if (preg_match('#^/po/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_po_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'po_show')), array (  '_controller' => 'AppBundle\\Controller\\POController::showAction',));
            }
            not_po_show:

            // po_edit
            if (preg_match('#^/po/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_po_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'po_edit')), array (  '_controller' => 'AppBundle\\Controller\\POController::editAction',));
            }
            not_po_edit:

            // po_delete
            if (preg_match('#^/po/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_po_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'po_delete')), array (  '_controller' => 'AppBundle\\Controller\\POController::deleteAction',));
            }
            not_po_delete:

        }

        if (0 === strpos($pathinfo, '/orders_detail')) {
            // orders_detail_index
            if (rtrim($pathinfo, '/') === '/orders_detail') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orders_detail_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'orders_detail_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\orders_detailController::indexAction',  '_route' => 'orders_detail_index',);
            }
            not_orders_detail_index:

            // orders_detail_new
            if ($pathinfo === '/orders_detail/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_orders_detail_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\orders_detailController::newAction',  '_route' => 'orders_detail_new',);
            }
            not_orders_detail_new:

            // orders_detail_show
            if (preg_match('#^/orders_detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_orders_detail_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orders_detail_show')), array (  '_controller' => 'AppBundle\\Controller\\orders_detailController::showAction',));
            }
            not_orders_detail_show:

            // orders_detail_edit
            if (preg_match('#^/orders_detail/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_orders_detail_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orders_detail_edit')), array (  '_controller' => 'AppBundle\\Controller\\orders_detailController::editAction',));
            }
            not_orders_detail_edit:

            // orders_detail_delete
            if (preg_match('#^/orders_detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_orders_detail_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'orders_detail_delete')), array (  '_controller' => 'AppBundle\\Controller\\orders_detailController::deleteAction',));
            }
            not_orders_detail_delete:

        }

        if (0 === strpos($pathinfo, '/product_')) {
            if (0 === strpos($pathinfo, '/product_details')) {
                // product_details_index
                if (rtrim($pathinfo, '/') === '/product_details') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_product_details_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'product_details_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\product_detailsController::indexAction',  '_route' => 'product_details_index',);
                }
                not_product_details_index:

                // product_details_new
                if ($pathinfo === '/product_details/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_product_details_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\product_detailsController::newAction',  '_route' => 'product_details_new',);
                }
                not_product_details_new:

                // product_details_show
                if (preg_match('#^/product_details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_product_details_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_details_show')), array (  '_controller' => 'AppBundle\\Controller\\product_detailsController::showAction',));
                }
                not_product_details_show:

                // product_details_edit
                if (preg_match('#^/product_details/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_product_details_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_details_edit')), array (  '_controller' => 'AppBundle\\Controller\\product_detailsController::editAction',));
                }
                not_product_details_edit:

                // product_details_delete
                if (preg_match('#^/product_details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_product_details_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_details_delete')), array (  '_controller' => 'AppBundle\\Controller\\product_detailsController::deleteAction',));
                }
                not_product_details_delete:

            }

            if (0 === strpos($pathinfo, '/product_invetory')) {
                // product_invetory_index
                if (rtrim($pathinfo, '/') === '/product_invetory') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_product_invetory_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'product_invetory_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\product_invetoryController::indexAction',  '_route' => 'product_invetory_index',);
                }
                not_product_invetory_index:

                // product_invetory_new
                if ($pathinfo === '/product_invetory/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_product_invetory_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\product_invetoryController::newAction',  '_route' => 'product_invetory_new',);
                }
                not_product_invetory_new:

                // product_invetory_show
                if (preg_match('#^/product_invetory/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_product_invetory_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_invetory_show')), array (  '_controller' => 'AppBundle\\Controller\\product_invetoryController::showAction',));
                }
                not_product_invetory_show:

                // product_invetory_edit
                if (preg_match('#^/product_invetory/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_product_invetory_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_invetory_edit')), array (  '_controller' => 'AppBundle\\Controller\\product_invetoryController::editAction',));
                }
                not_product_invetory_edit:

                // product_invetory_delete
                if (preg_match('#^/product_invetory/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_product_invetory_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_invetory_delete')), array (  '_controller' => 'AppBundle\\Controller\\product_invetoryController::deleteAction',));
                }
                not_product_invetory_delete:

            }

        }

        if (0 === strpos($pathinfo, '/quotation')) {
            // quotation_index
            if (rtrim($pathinfo, '/') === '/quotation') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_quotation_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'quotation_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\quotationController::indexAction',  '_route' => 'quotation_index',);
            }
            not_quotation_index:

            // quotation_new
            if ($pathinfo === '/quotation/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_quotation_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\quotationController::newAction',  '_route' => 'quotation_new',);
            }
            not_quotation_new:

            // quotation_show
            if (preg_match('#^/quotation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_quotation_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'quotation_show')), array (  '_controller' => 'AppBundle\\Controller\\quotationController::showAction',));
            }
            not_quotation_show:

            // quotation_edit
            if (preg_match('#^/quotation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_quotation_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'quotation_edit')), array (  '_controller' => 'AppBundle\\Controller\\quotationController::editAction',));
            }
            not_quotation_edit:

            // quotation_delete
            if (preg_match('#^/quotation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_quotation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'quotation_delete')), array (  '_controller' => 'AppBundle\\Controller\\quotationController::deleteAction',));
            }
            not_quotation_delete:

        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/stock')) {
                // stock_index
                if (rtrim($pathinfo, '/') === '/stock') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_stock_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'stock_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\stockController::indexAction',  '_route' => 'stock_index',);
                }
                not_stock_index:

                // stock_new
                if ($pathinfo === '/stock/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_stock_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\stockController::newAction',  '_route' => 'stock_new',);
                }
                not_stock_new:

                // stock_show
                if (preg_match('#^/stock/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_stock_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_show')), array (  '_controller' => 'AppBundle\\Controller\\stockController::showAction',));
                }
                not_stock_show:

                // stock_edit
                if (preg_match('#^/stock/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_stock_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_edit')), array (  '_controller' => 'AppBundle\\Controller\\stockController::editAction',));
                }
                not_stock_edit:

                // stock_delete
                if (preg_match('#^/stock/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_stock_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_delete')), array (  '_controller' => 'AppBundle\\Controller\\stockController::deleteAction',));
                }
                not_stock_delete:

            }

            if (0 === strpos($pathinfo, '/suppliers_')) {
                if (0 === strpos($pathinfo, '/suppliers_address')) {
                    // suppliers_address_index
                    if (rtrim($pathinfo, '/') === '/suppliers_address') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_suppliers_address_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'suppliers_address_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\suppliers_addressController::indexAction',  '_route' => 'suppliers_address_index',);
                    }
                    not_suppliers_address_index:

                    // suppliers_address_new
                    if ($pathinfo === '/suppliers_address/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_suppliers_address_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\suppliers_addressController::newAction',  '_route' => 'suppliers_address_new',);
                    }
                    not_suppliers_address_new:

                    // suppliers_address_show
                    if (preg_match('#^/suppliers_address/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_suppliers_address_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppliers_address_show')), array (  '_controller' => 'AppBundle\\Controller\\suppliers_addressController::showAction',));
                    }
                    not_suppliers_address_show:

                    // suppliers_address_edit
                    if (preg_match('#^/suppliers_address/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_suppliers_address_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppliers_address_edit')), array (  '_controller' => 'AppBundle\\Controller\\suppliers_addressController::editAction',));
                    }
                    not_suppliers_address_edit:

                    // suppliers_address_delete
                    if (preg_match('#^/suppliers_address/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_suppliers_address_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppliers_address_delete')), array (  '_controller' => 'AppBundle\\Controller\\suppliers_addressController::deleteAction',));
                    }
                    not_suppliers_address_delete:

                }

                if (0 === strpos($pathinfo, '/suppliers_bank')) {
                    // suppliers_bank_index
                    if (rtrim($pathinfo, '/') === '/suppliers_bank') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_suppliers_bank_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'suppliers_bank_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\suppliers_bankController::indexAction',  '_route' => 'suppliers_bank_index',);
                    }
                    not_suppliers_bank_index:

                    // suppliers_bank_new
                    if ($pathinfo === '/suppliers_bank/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_suppliers_bank_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\suppliers_bankController::newAction',  '_route' => 'suppliers_bank_new',);
                    }
                    not_suppliers_bank_new:

                    // suppliers_bank_show
                    if (preg_match('#^/suppliers_bank/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_suppliers_bank_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppliers_bank_show')), array (  '_controller' => 'AppBundle\\Controller\\suppliers_bankController::showAction',));
                    }
                    not_suppliers_bank_show:

                    // suppliers_bank_edit
                    if (preg_match('#^/suppliers_bank/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_suppliers_bank_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppliers_bank_edit')), array (  '_controller' => 'AppBundle\\Controller\\suppliers_bankController::editAction',));
                    }
                    not_suppliers_bank_edit:

                    // suppliers_bank_delete
                    if (preg_match('#^/suppliers_bank/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_suppliers_bank_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppliers_bank_delete')), array (  '_controller' => 'AppBundle\\Controller\\suppliers_bankController::deleteAction',));
                    }
                    not_suppliers_bank_delete:

                }

                if (0 === strpos($pathinfo, '/suppliers_contact')) {
                    // suppliers_contact_index
                    if (rtrim($pathinfo, '/') === '/suppliers_contact') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_suppliers_contact_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'suppliers_contact_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\suppliers_contactController::indexAction',  '_route' => 'suppliers_contact_index',);
                    }
                    not_suppliers_contact_index:

                    // suppliers_contact_new
                    if ($pathinfo === '/suppliers_contact/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_suppliers_contact_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\suppliers_contactController::newAction',  '_route' => 'suppliers_contact_new',);
                    }
                    not_suppliers_contact_new:

                    // suppliers_contact_show
                    if (preg_match('#^/suppliers_contact/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_suppliers_contact_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppliers_contact_show')), array (  '_controller' => 'AppBundle\\Controller\\suppliers_contactController::showAction',));
                    }
                    not_suppliers_contact_show:

                    // suppliers_contact_edit
                    if (preg_match('#^/suppliers_contact/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_suppliers_contact_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppliers_contact_edit')), array (  '_controller' => 'AppBundle\\Controller\\suppliers_contactController::editAction',));
                    }
                    not_suppliers_contact_edit:

                    // suppliers_contact_delete
                    if (preg_match('#^/suppliers_contact/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_suppliers_contact_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppliers_contact_delete')), array (  '_controller' => 'AppBundle\\Controller\\suppliers_contactController::deleteAction',));
                    }
                    not_suppliers_contact_delete:

                }

                if (0 === strpos($pathinfo, '/suppliers_details')) {
                    // suppliers_details_index
                    if (rtrim($pathinfo, '/') === '/suppliers_details') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_suppliers_details_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'suppliers_details_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\suppliers_detailsController::indexAction',  '_route' => 'suppliers_details_index',);
                    }
                    not_suppliers_details_index:

                    // suppliers_details_new
                    if ($pathinfo === '/suppliers_details/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_suppliers_details_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\suppliers_detailsController::newAction',  '_route' => 'suppliers_details_new',);
                    }
                    not_suppliers_details_new:

                    // suppliers_details_show
                    if (preg_match('#^/suppliers_details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_suppliers_details_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppliers_details_show')), array (  '_controller' => 'AppBundle\\Controller\\suppliers_detailsController::showAction',));
                    }
                    not_suppliers_details_show:

                    // suppliers_details_edit
                    if (preg_match('#^/suppliers_details/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_suppliers_details_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppliers_details_edit')), array (  '_controller' => 'AppBundle\\Controller\\suppliers_detailsController::editAction',));
                    }
                    not_suppliers_details_edit:

                    // suppliers_details_delete
                    if (preg_match('#^/suppliers_details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_suppliers_details_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppliers_details_delete')), array (  '_controller' => 'AppBundle\\Controller\\suppliers_detailsController::deleteAction',));
                    }
                    not_suppliers_details_delete:

                }

                if (0 === strpos($pathinfo, '/suppliers_quotation')) {
                    // suppliers_quotation_index
                    if (rtrim($pathinfo, '/') === '/suppliers_quotation') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_suppliers_quotation_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'suppliers_quotation_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\suppliers_quotationController::indexAction',  '_route' => 'suppliers_quotation_index',);
                    }
                    not_suppliers_quotation_index:

                    // suppliers_quotation_new
                    if ($pathinfo === '/suppliers_quotation/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_suppliers_quotation_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\suppliers_quotationController::newAction',  '_route' => 'suppliers_quotation_new',);
                    }
                    not_suppliers_quotation_new:

                    // suppliers_quotation_show
                    if (preg_match('#^/suppliers_quotation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_suppliers_quotation_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppliers_quotation_show')), array (  '_controller' => 'AppBundle\\Controller\\suppliers_quotationController::showAction',));
                    }
                    not_suppliers_quotation_show:

                    // suppliers_quotation_edit
                    if (preg_match('#^/suppliers_quotation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_suppliers_quotation_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppliers_quotation_edit')), array (  '_controller' => 'AppBundle\\Controller\\suppliers_quotationController::editAction',));
                    }
                    not_suppliers_quotation_edit:

                    // suppliers_quotation_delete
                    if (preg_match('#^/suppliers_quotation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_suppliers_quotation_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppliers_quotation_delete')), array (  '_controller' => 'AppBundle\\Controller\\suppliers_quotationController::deleteAction',));
                    }
                    not_suppliers_quotation_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\userController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\userController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'AppBundle\\Controller\\userController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'AppBundle\\Controller\\userController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'AppBundle\\Controller\\userController::deleteAction',));
            }
            not_user_delete:

            if (0 === strpos($pathinfo, '/user_details')) {
                // user_details_index
                if (rtrim($pathinfo, '/') === '/user_details') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_details_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_details_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\user_detailsController::indexAction',  '_route' => 'user_details_index',);
                }
                not_user_details_index:

                // user_details_new
                if ($pathinfo === '/user_details/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_details_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\user_detailsController::newAction',  '_route' => 'user_details_new',);
                }
                not_user_details_new:

                // user_details_show
                if (preg_match('#^/user_details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_details_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_details_show')), array (  '_controller' => 'AppBundle\\Controller\\user_detailsController::showAction',));
                }
                not_user_details_show:

                // user_details_edit
                if (preg_match('#^/user_details/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_details_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_details_edit')), array (  '_controller' => 'AppBundle\\Controller\\user_detailsController::editAction',));
                }
                not_user_details_edit:

                // user_details_delete
                if (preg_match('#^/user_details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_user_details_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_details_delete')), array (  '_controller' => 'AppBundle\\Controller\\user_detailsController::deleteAction',));
                }
                not_user_details_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
