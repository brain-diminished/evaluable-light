<?php
namespace BrainDiminished\Evaluable;

/**
 * This interface is supposed to work as a provider, allowing a Evaluable to retrieve various values
 * (int, string, array, callable, etc.), identified by a unique identifier.
 */
interface RuntimeContext
{
    public function getIdentifier(string $identifier);
}
