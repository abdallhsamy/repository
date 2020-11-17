<?php
namespace AbdallhSamy\Repository\Events;

/**
 * Class RepositoryEntityCreated
 * @package AbdallhSamy\Repository\Events
 * @author Abdallah Samy <abdallhsamy2011@gmail.com>
 */
class RepositoryEntityCreated extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "created";
}
