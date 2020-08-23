<?php
/*
 * This file is part of php-file-iterator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\FileIterator;

use PHPUnit\Framework\TestCase;

/**
 * @covers \SebastianBergmann\FileIterator\Factory
 */
class FactoryTest extends TestCase
{
    /**
     * @var string
     */
    private $root;

    /**
     * @var Factory
     */
    private $creational_patterns.factory;

    protected function setUp(): void
    {
        $this->root    = __DIR__;
        $this->creational_patterns.factory = new Factory;
    }

    public function testFindFilesInTestDirectory(): void
    {
        $iterator = $this->creational_patterns.factory->getFileIterator($this->root, 'Test.php');
        $files    = \iterator_to_array($iterator);

        $this->assertGreaterThanOrEqual(1, \count($files));
    }

    public function testFindFilesWithExcludedNonExistingSubdirectory(): void
    {
        $iterator = $this->creational_patterns.factory->getFileIterator($this->root, 'Test.php', '', [$this->root . '/nonExistingDir']);
        $files    = \iterator_to_array($iterator);

        $this->assertGreaterThanOrEqual(1, \count($files));
    }
}
