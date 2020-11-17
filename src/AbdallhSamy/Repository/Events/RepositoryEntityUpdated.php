<?php
namespace AbdallhSamy\Repository\Events;

/**
 * Class RepositoryEntityUpdated
 * @package AbdallhSamy\Repository\Events
 * @author Abdallah Samy <abdallhsamy2011@gmail.com>
 */
class RepositoryEntityUpdated extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "updated";
}
