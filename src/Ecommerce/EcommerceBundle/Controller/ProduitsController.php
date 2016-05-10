<?php

namespace Ecommerce\EcommerceBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ProduitsController extends Controller
{
    public function produitsAction()
    {
        $em=$this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->findAll();
        $categories = $em->getRepository('EcommerceBundle:Categories')->findAll();
        return $this->render('EcommerceBundle:produits:layouts/produits.html.twig', array('produits'=>$produits,
                                                                                           'categories'=>$categories));
    }

    public function categorieAction($categorieid)
    {
        $em=$this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->getProduitsbyCategorie($categorieid);

        return $this->render('EcommerceBundle:produits:layouts/produits.html.twig', array('produits'=>$produits));
    }



    public function presentationAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $produit = $em->getRepository('EcommerceBundle:Produits')->find($id);

        return $this->render('EcommerceBundle:produits:layouts/presentation.html.twig', array('produit' => $produit));
    }
}
