<?php
namespace Utilisateurs\UtilisateursBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Utilisateurs\UtilisateursBundle\Entity\UtilisateursAdresses;

class UtilisateursAdressesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $adresse1 = new UtilisateursAdresses();
        $adresse1->setAdresses($this->getReference('utilisateur1'));
        $adresse1->setNom('Mayor');
        $adresse1->setPrenom('Stan');
        $adresse1->setTelephone('0617304798');
        $adresse1->setAdresse("14, rue Dupont de L'eure");
        $adresse1->setVille('Paris');
        $adresse1->setCp('75020');
        $adresse1->setPays('France');
        $adresse1->setComplement('2eme étage à droite');

        $manager->persist($adresse1);

        $adresse2 = new UtilisateursAdresses();
        $adresse2->setAdresses($this->getReference('utilisateur2'));
        $adresse2->setNom('Blanchard');
        $adresse2->setPrenom('Fanny');
        $adresse2->setTelephone('0617304798');
        $adresse2->setAdresse("14, rue Dupont de L'eure");
        $adresse2->setVille('Paris');
        $adresse2->setCp('75020');
        $adresse2->setPays('France');
        $adresse2->setComplement('2eme étage à droite');

        $manager->persist($adresse2);

        $manager->flush();


    }
    public function getOrder()
    {

        return 6;
    }
}