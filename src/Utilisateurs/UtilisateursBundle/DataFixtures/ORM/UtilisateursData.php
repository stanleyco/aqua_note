<?php
namespace Utilisateurs\UtilisateursBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;

class UtilisateursData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
     /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {

        $utilisateur1 = new Utilisateurs();
        $utilisateur1->setUsername('test');
        $utilisateur1->setEmail('test@test.com');
        $utilisateur1->setEnabled(1);
        $utilisateur1->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur1)->EncodePassword('test', $utilisateur1->getSalt()));

        $manager->persist($utilisateur1);

        $utilisateur2 = new Utilisateurs();
        $utilisateur2->setUsername('stan');
        $utilisateur2->setEmail('stan@stan.com');
        $utilisateur2->setEnabled(1);
        $utilisateur2->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur2)->EncodePassword('stan', $utilisateur2->getSalt()));
        $manager->persist($utilisateur2);

        $utilisateur3 = new Utilisateurs();
        $utilisateur3->setUsername('nina');
        $utilisateur3->setEmail('nina@test.com');
        $utilisateur3->setEnabled(1);
        $utilisateur3->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur3)->EncodePassword('nina', $utilisateur3->getSalt()));
        $manager->persist($utilisateur3);

        $utilisateur4 = new Utilisateurs();
        $utilisateur4->setUsername('fanny');
        $utilisateur4->setEmail('fanny@test.com');
        $utilisateur4->setEnabled(1);
        $utilisateur4->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur4)->EncodePassword('fanny', $utilisateur4->getSalt()));
        $manager->persist($utilisateur4);


        $manager->flush();

      $this->addReference('utilisateur1', $utilisateur1);
      $this->addReference('utilisateur2', $utilisateur2);
    }

    public function getOrder()
    {

        return 5;
    }
}