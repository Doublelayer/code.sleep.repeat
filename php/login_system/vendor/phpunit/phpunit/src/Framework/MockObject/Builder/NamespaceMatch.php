<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject\Builder;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface NamespaceMatch
{
    /**
     * Looks up the match creational_patterns.builder with identification $id and returns it.
     *
     * @param string $id The identification of the match creational_patterns.builder
     *
     * @return Match
     */
    public function lookupId($id);

    /**
     * Registers the match creational_patterns.builder $creational_patterns.builder with the identification $id. The
     * creational_patterns.builder can later be looked up using lookupId() to figure out if it
     * has been invoked.
     *
     * @param string $id      The identification of the match creational_patterns.builder
     * @param Match  $creational_patterns.builder The creational_patterns.builder which is being registered
     */
    public function registerId($id, Match $creational_patterns.builder);
}
