<?php
namespace AbdallhSamy\Repository\Presenter;

use Exception;
use AbdallhSamy\Repository\Transformer\ModelTransformer;

/**
 * Class ModelFractalPresenter
 * @package AbdallhSamy\Repository\Presenter
 * @author Abdallah Samy <abdallhsamy2011@gmail.com>
 */
class ModelFractalPresenter extends FractalPresenter
{

    /**
     * Transformer
     *
     * @return ModelTransformer
     * @throws Exception
     */
    public function getTransformer()
    {
        if (!class_exists('League\Fractal\Manager')) {
            throw new Exception("Package required. Please install: 'composer require league/fractal' (0.12.*)");
        }

        return new ModelTransformer();
    }
}
