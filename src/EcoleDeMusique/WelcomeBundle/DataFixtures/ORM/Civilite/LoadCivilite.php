<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadCategory.php

namespace EcoleDeMusique\DataFixtures\ORM\Civilite;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EcoleDeMusique\WelcomeBundle\Entity\Civilite;

class LoadCivilite implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
    $civilite = array(
      'Monsieur' => 'M.',
      'Madame' => 'Mme',
      'Mademoiselle' => 'Mlle',
      'Veuve' => 'Vve',
      'Veuf' => 'Vfr'
    );

    foreach ($names as $titre => $abreviation) {
      // On crée la civilité
      $civilite = new Civilite();
      $civilite->setTitre($titre);
      $civilite->setAbreviation($civilite);

      // On la persiste
      $manager->persist($category);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}