<?php
namespace AbdallhSamy\Repository\Contracts;

/**
 * Interface PresenterInterface
 * @package AbdallhSamy\Repository\Contracts
 * @author Abdallah Samy <abdallhsamy2011@gmail.com>
 */
interface PresenterInterface
{
    /**
     * Prepare data to present
     *
     * @param $data
     *
     * @return mixed
     */
    public function present($data);
}
