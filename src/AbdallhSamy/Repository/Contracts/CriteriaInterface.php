<?php
namespace AbdallhSamy\Repository\Contracts;

/**
 * Interface CriteriaInterface
 * @package AbdallhSamy\Repository\Contracts
 * @author Abdallah Samy <abdallhsamy2011@gmail.com>
 */
interface CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository);
}
