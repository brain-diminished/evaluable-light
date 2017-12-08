<?php
namespace BrainDiminished\Evaluable;

/**
 * An interface declaring the common behaviour of a logical expression as object.
 */
interface Evaluable
{
    /**
     * @param RuntimeContext $context
     * @return mixed
     * @throws \RuntimeException
     */
    public function evaluate(RuntimeContext $context = null);
}
