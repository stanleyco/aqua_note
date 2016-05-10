<?php
namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Media;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setPath('/img/chats/norvegien1.jpg');
        $media1->setAlt('Chat Norvegien');
        $manager->persist($media1);


        $media2 = new Media();
        $media2->setPath('/img/chats/siamois1.jpg');
        $media2->setAlt('Chat Siamois');
        $manager->persist($media2);

        $media3 = new Media();
        $media3->setPath('/img/chats/european1.jpg');
        $media3->setAlt('Chat European');
        $manager->persist($media3);

        $media4 = new Media();
        $media4->setPath('/img/chats/persan1.jpg');
        $media4->setAlt('Chat Persan');
        $manager->persist($media4);

        $media5 = new Media();
        $media5->setPath('/img/chiens/shiba1.jpg');
        $media5->setAlt('Chien Shiba');
        $manager->persist($media5);

        $media6 = new Media();
        $media6->setPath('/img/chiens/husky1.jpg');
        $media6->setAlt('Chien Husky');
        $manager->persist($media6);

        $media7 = new Media();
        $media7->setPath('/img/chiens/goldenretriever1.jpg');
        $media7->setAlt('Golden Retrieve');
        $manager->persist($media7);

        $media8 = new Media();
        $media8->setPath('/img/chiens/chihuahua1.jpg');
        $media8->setAlt('Chien Chihuahua');
        $manager->persist($media8);

        $manager->flush();


        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);
        $this->addReference('media8', $media8);
    }
    public function getOrder()
    {

        return 1;
    }
}