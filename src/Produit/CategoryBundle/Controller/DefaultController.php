<?php

namespace Produit\CategoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProduitCategoryBundle:Default:index.html.twig', array('name' => $name));
    }
}
