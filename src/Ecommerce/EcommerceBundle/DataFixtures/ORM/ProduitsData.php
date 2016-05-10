<?php
namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Produits;

class ProduitsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $produit1 = new Produits();
        $produit1->setNom('Chat Norvegien');
        $produit1->setDescription("Idéal pour ceux qui aiment la nature, ce chat des bois, grand chasseur, préfère vivre à l'air libre, même s'il s'adapte bien à la vie à la maison ; comme il adore grimper et dominer d'en haut, les bibelots précieux, les vases et le contenu des étagères de bibliothèque courent avec lui de sérieux risques. Sa maison idéale comprend un jardin, ou au moins une grande terrasse, où il pourra se défouler dans ses jeux de chasseur.");
        $produit1->setDisponible('1');
        $produit1->setPrix('100.45');
        $produit1->setCategorie($this->getReference('categories1'));
        $produit1->setImage($this->getReference('media1'));
        $produit1->setTva($this->getReference('tva1'));
        $manager->persist($produit1);

        $produit2 = new Produits();
        $produit2->setNom('Chat Siamois');
        $produit2->setDescription("Le maître idéal d''un chat Siamois est celui qui aime les chats qui n''acceptent pas de compromis et qui apprécie la forte personnalité de cette race ; il ne s''en séparera jamais et lui consacrera beaucoup de temps et beaucoup de patience. Ses nobles origines le rendent moins vagabond que les autres chats, tandis que sa robe, qui s estompe sur les points les plus foncés, le rend mystérieux et intrigant au premier regard. Voilà pourquoi celui qui choisit un Siamois ne se contente pas d'un chat quelconque, d''un chat populaire recueilli dans les rues ; il veut au contraire voir en son ami quelqu''un de vraiment unique, un animal dont la beauté et l''élégance n'aient pas d''égal ni de rival.");
        $produit2->setDisponible('1');
        $produit2->setPrix('58.98');
        $produit2->setCategorie($this->getReference('categories1'));
        $produit2->setImage($this->getReference('media2'));
        $produit2->setTva($this->getReference('tva1'));
        $manager->persist($produit2);


        $produit3 = new Produits();
        $produit3->setNom('Chat European');
        $produit3->setDescription("La race Européenne est la plus « originale » : sa beauté s'est créée avec le temps sans que l'homme n'intervienne pour « construire » son caractère et sa physionomie. L'histoire et les origines du chat Européen sont parmi les plus antiques : il semble être le descendant du Felis silvestris libyca, le petit félin sauvage de l'Afrique du Nord.");
        $produit3->setDisponible('1');
        $produit3->setPrix('78.05');
        $produit3->setCategorie($this->getReference('categories1'));
        $produit3->setImage($this->getReference('media3'));
        $produit3->setTva($this->getReference('tva1'));
        $manager->persist($produit3);


        $produit4 = new Produits();
        $produit4->setNom('Chat Persan');
        $produit4->setDescription("Le chat Persan est l'un des chats les plus connus et les plus appréciés car il a un aspect royal et superbe. De caractère doux et réservé, il s'adapte à tous ceux qui cherchent un ami fidèle à câliner au bon moment : étant donné sa paresse, il n'aime pas être dérangé durant ses longues heures de « sieste ». Il faut absolument, lorsqu'on choisit un chat de race persane, ne pas oublier qu'il nécessite des soins quotidiens et qu'il ne pourrait pas survivre sans son maître.");
        $produit4->setDisponible('1');
        $produit4->setPrix('156.95');
        $produit4->setCategorie($this->getReference('categories1'));
        $produit4->setImage($this->getReference('media4'));
        $produit4->setTva($this->getReference('tva1'));
        $manager->persist($produit4);


    /*
     * chiens
     */

        $produit5 = new Produits();
        $produit5->setNom('Chien Shiba');
        $produit5->setDescription("Le Shiba Inu est un chien de petite taille, bien proportionné, d'une structure robuste, d'une bonne ossature et bien musclé. Il ressemble beaucoup à un Akita Inu en miniature. La tête présente un front large, des joues bien développées, un stop assez accentué, un chanfrein droit, une truffe noire ; la truffe couleur chair est admise chez les sujets blancs. Le museau est modérément épais, pas trop long, en pointe. Les yeux sont assez petits, légèrement triangulaires, bien écartés et de couleur brun foncé. Les oreilles sont petites, triangulaires, bien droites et légèrement inclinées vers l'avant. Le garrot est élevé, le dos droit et court. Les membres sont bien droits et bien développés. La queue est attachée haut, grosse et portée audessus du dos, fortement enroulée en forme de faucille.");
        $produit5->setDisponible('1');
        $produit5->setPrix('300.45');
        $produit5->setCategorie($this->getReference('categories2'));
        $produit5->setImage($this->getReference('media5'));
        $produit5->setTva($this->getReference('tva2'));
        $manager->persist($produit5);


        $produit6 = new Produits();
        $produit6->setNom('Chien Husky');
        $produit6->setDescription("Le Husky sibérien est un chien de taille moyenne, bien proportionné, à l'allure souple et élégante. Le crâne est légèrement arrondi ; le museau, d'une largeur moyenne, va en s'amincissant vers la truffe. Le rapport crâne-museau est de 1. Les yeux sont en forme d'amande, légèrement obliques. Ils peuvent être bleus, marron, vairons ou hétérochromes. Les oreilles sont petites, triangulaires, portées dressées, attachées haut et rapprochées ; elles sont légèrement arrondies en pointe, bien fournies en poils, même à l'intérieur. Les membres sont droits, musclés. La queue est portée en faucille : elle ne doit pas retomber sur le dos ni s'enrouler sur le côté.");
        $produit6->setDisponible('1');
        $produit6->setPrix('254.91');
        $produit6->setCategorie($this->getReference('categories2'));
        $produit6->setImage($this->getReference('media6'));
        $produit6->setTva($this->getReference('tva2'));
        $manager->persist($produit6);


        $produit7 = new Produits();
        $produit7->setNom('Golden Retriever');
        $produit7->setDescription("Un chien génial");
        $produit7->setDisponible('1');
        $produit7->setPrix('521.45');
        $produit7->setCategorie($this->getReference('categories2'));
        $produit7->setImage($this->getReference('media7'));
        $produit7->setTva($this->getReference('tva2'));
        $manager->persist($produit7);


        $produit8 = new Produits();
        $produit8->setNom('Chien Chihuahua');
        $produit8->setDescription("Le RAT");
        $produit8->setDisponible('1');
        $produit8->setPrix('422421.45');
        $produit8->setCategorie($this->getReference('categories2'));
        $produit8->setImage($this->getReference('media8'));
        $produit8->setTva($this->getReference('tva2'));
        $manager->persist($produit8);




        $manager->flush();


        $this->addReference('produit1', $produit1);
        $this->addReference('produit2', $produit2);
        $this->addReference('produit3', $produit3);
        $this->addReference('produit4', $produit4);
        $this->addReference('produit5', $produit5);
        $this->addReference('produit6', $produit6);
        $this->addReference('produit7', $produit7);
        $this->addReference('produit8', $produit8);

  }
    public function getOrder()
    {

        return 4;
    }
}