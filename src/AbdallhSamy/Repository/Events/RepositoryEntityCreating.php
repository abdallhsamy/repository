<?php

namespace AbdallhSamy\Repository\Events;

use Illuminate\Database\Eloquent\Model;
use AbdallhSamy\Repository\Contracts\RepositoryInterface;

/**
 * Class RepositoryEntityCreated
 *
 * @package AbdallhSamy\Repository\Events
 * @author Abdallah Samy <abdallhsamy2011@gmail.com>
 */
class RepositoryEntityCreating extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "creating";

    public function __construct(RepositoryInterface $repository, array $model)
    {
        parent::__construct($repository);
        $this->model = $model;
    }
}
