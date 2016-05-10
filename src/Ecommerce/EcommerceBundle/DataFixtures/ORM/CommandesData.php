<?php
namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Commandes;

class CommandesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $commande1 = new Commandes();
        $commande1->setUtilisateur($this->getReference('utilisateur2'));
        $commande1->setReference('1');
        $commande1->setDate(new \DateTime("now"));
        $commande1->setValider('1');
        $commande1->setProduits(array('0'=>array('1'=>'5'),
                                      '1'=>array('2'=>'2'),
                                      '2'=>array('5'=>'1')
                                        ));
        $manager->persist($commande1);

        $commande2 = new Commandes();
        $commande2->setUtilisateur($this->getReference('utilisateur1'));
        $commande2->setReference('1');
        $commande2->setDate(new \DateTime("now"));
        $commande2->setValider('1');
        $commande2->setProduits(array('0'=>array('7'=>'1'),
                                      '1'=>array('5'=>'1'),
                                      '2'=>array('2'=>'2')
                                       ));

        $manager->persist($commande2);




        $manager->flush();




    }
    public function getOrder()
    {

        return 7;
    }
}