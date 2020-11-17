<?php namespace AbdallhSamy\Repository\Transformer;

use League\Fractal\TransformerAbstract;
use AbdallhSamy\Repository\Contracts\Transformable;

/**
 * Class ModelTransformer
 * @package AbdallhSamy\Repository\Transformer
 * @author Abdallah Samy <abdallhsamy2011@gmail.com>
 */
class ModelTransformer extends TransformerAbstract
{
    public function transform(Transformable $model)
    {
        return $model->transform();
    }
}
