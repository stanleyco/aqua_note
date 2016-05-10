<?php
namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Categories;

class CategoriesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categories1 = new Categories();
        $categories1->setNom('Chats');
        $categories1->setImage($this->getReference('media4'));
        $manager->persist($categories1);


        $categories2 = new Categories();
        $categories2->setNom('Chiens');
        $categories2->setImage($this->getReference('media5'));
        $manager->persist($categories2);

        $this->addReference('categories1', $categories1);
        $this->addReference('categories2', $categories2);

        $manager->flush();

    }
    public function getOrder()
    {
        return 2;
    }
}