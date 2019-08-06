<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        // pour chaque tour de boucle, on insère un produit en BDD
        for ($i=0; $i<20; $i++) {
            // instanciation du nouveau produit
            $product = new Product();
            $product->setName($faker->name);
            $product->setDescription($faker->realText);
            $product->setCreationDate($faker->dateTimeBetween('-2 years'));
            $product->setImage($faker->imageUrl());
            // on indique à ORM le nouveau produit à insérer, qui est comme mis en mémoire
            $manager->persist($product);

        }
        // la méthode 'flush' exécute l'insertion en BDD de tous les produits sur lesquels a été effectuée la méthode 'persist'
        $manager->flush();
    }
}
