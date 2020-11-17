<?php
namespace AbdallhSamy\Repository\Contracts;

/**
 * Interface Presentable
 * @package AbdallhSamy\Repository\Contracts
 * @author Abdallah Samy <abdallhsamy2011@gmail.com>
 */
interface Presentable
{
    /**
     * @param PresenterInterface $presenter
     *
     * @return mixed
     */
    public function setPresenter(PresenterInterface $presenter);

    /**
     * @return mixed
     */
    public function presenter();
}
