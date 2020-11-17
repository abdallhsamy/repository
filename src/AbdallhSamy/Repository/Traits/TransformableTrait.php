<?php

namespace AbdallhSamy\Repository\Traits;

/**
 * Class TransformableTrait
 * @package AbdallhSamy\Repository\Traits
 * @author Abdallah Samy <abdallhsamy2011@gmail.com>
 */
trait TransformableTrait
{
    /**
     * @return array
     */
    public function transform()
    {
        return $this->toArray();
    }
}
