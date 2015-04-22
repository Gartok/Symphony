<?php
namespace Gart\TestBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Gart\TestBundle\Entity\Vehicule;

class LoadVehiculeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $vehicule = new Vehicule();
        $vehicule->setBrand('Mercedes');
        $vehicule-> setModel('XXXXXXX');
        $vehicule-> setDateCreated(new \DateTime("2012-10-10"));
  
        $em->persist($vehicule);
        
        $em->flush();
        
        $this->addReference('vehicule-nico', $vehicule);
    }
    
    public function getOrder()
    {
        return 1;
    }
}
?>