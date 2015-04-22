<?php
namespace Gart\TestBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Gart\TestBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $user = new User();
        $user-> setFirstName('Nicolas');
        $user-> setLastName('Rauflet');
        $user-> setBirthDate(new \DateTime("2012-10-10"));
        $user-> setCity('Rennes');
        $user-> setCountry('France');
            
        $em->persist($user);
        
        $em->flush();
        
        $this->addReference('user-nico', $user);
    }
    
    public function getOrder()
    {
        return 1;
    }
}
?>