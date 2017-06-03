<?php
namespace Okvpn\Bundle\MigrationBundle\Tests\Unit\Fixture\TestPackage\Test3Bundle\Migrations\Data\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Okvpn\Bundle\MigrationBundle\Fixture\LoadedFixtureVersionAwareInterface;
use Okvpn\Bundle\MigrationBundle\Fixture\VersionedFixtureInterface;

class LoadTest3BundleData2 extends AbstractFixture implements
    VersionedFixtureInterface,
    LoadedFixtureVersionAwareInterface,
    OrderedFixtureInterface
{
    public $dbVersion;

    /**
     * {@inheritdoc}
     */
    public function getVersion()
    {
        return '1.0';
    }

    /**
     * {@inheritdoc}
     */
    public function setLoadedVersion($version = null)
    {
        $this->dbVersion = $version;
    }

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 2;
    }
}
