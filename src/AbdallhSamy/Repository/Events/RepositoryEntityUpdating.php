<?php
namespace AbdallhSamy\Repository\Events;

/**
 * Class RepositoryEntityUpdated
 * @package AbdallhSamy\Repository\Events
 * @author Abdallah Samy <abdallhsamy2011@gmail.com>
 */
class RepositoryEntityUpdating extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "updating";
}
