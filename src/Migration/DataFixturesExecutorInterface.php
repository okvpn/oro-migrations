<?php

namespace Okvpn\Bundle\MigrationBundle\Migration;

use Doctrine\Common\DataFixtures\FixtureInterface;

/**
 * Provides an interface of data fixtures executor.
 * @deprecated since 1.2 and will be removed in 2.0. Fixtures package will be moved to another separate repository,
 *             it step needed to reduces the count of not necessary dependencies
 */
interface DataFixturesExecutorInterface
{
    /** Data fixtures contain the main data for an application */
    const MAIN_FIXTURES = 'main';

    /** Data fixtures contain the demo data for an application */
    const DEMO_FIXTURES = 'demo';

    /**
     * Executes the given data fixtures.
     *
     * @param FixtureInterface[] $fixtures     The list of data fixtures to execute
     * @param string             $fixturesType The type of data fixtures
     */
    public function execute(array $fixtures, $fixturesType);

    /**
     * Sets a logger callback for logging messages when executing data fixtures.
     *
     * @param callable|null $logger
     */
    public function setLogger($logger);
}
