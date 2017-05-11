<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\product_details;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Product_details controller.
 *
 * @Route("/basket")
 */
class Product_detailBasketController extends Controller
{
    /**
     * @Route("/", name="product_details_basket_index")
     */
    public function indexAction()
    {
        $templateName = 'basket/index';
        return $this->render($templateName . '.html.twig');
    }


    /**
     * @Route("/add/{id}", name="product_details_basket_add")
     */
    public function addToProduct_detailsCart(Product_details $product_details)
    {
        // default - new empty array
        $product_detailss = [];

        // if no 'product_detailss' array in the session, add an empty array
        $session = new Session();
        if($session->has('basket')){
            $product_detailss = $session->get('basket');
        }

        // get ID of elective
        $id = $product_details->getId();

        // only try to add to array if not already in the array
        if(!array_key_exists($id, $product_detailss)){
            // append $elective to our list
            $product_detailss[$id] = $product_details;

            // store updated array back into the session
            $session->set('basket', $product_detailss);
        }

        return $this->redirectToRoute('product_details_basket_index');
    }
    /**
     * @Route("/clear", name="product_details_basket_clear")
     */
    public function clearAction()
    {
        $session = new Session();
//        $session->clear();
        $session->remove('basket');

        return $this->redirectToRoute('product_details_basket_index');
    }


    /**
     * @Route("/delete/{id}", name="product_details_basket_delete")
     */
    public function deleteAction($id)
    {
        // default - new empty array
        $product_details = [];

        // if no 'Product_details' array in the session, add an empty array
        $session = new Session();
        if($session->has('basket')){
            $product_details = $session->get('basket');
        }

        // only try to remove if it's in the array
        if(array_key_exists($id, $product_details)){
            // remove entry with $id
            unset($product_details[$id]);

            if(sizeof($product_details) < 1){
                return $this->redirectToRoute('product_details_basket_clear');
            }

            // store updated array back into the session
            $session->set('basket', $product_details);
        }

        return $this->redirectToRoute('product_details_basket_index');
    }


}