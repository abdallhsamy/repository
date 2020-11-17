<?php
namespace AbdallhSamy\Repository\Events;

/**
 * Class RepositoryEntityDeleted
 * @package AbdallhSamy\Repository\Events
 * @author Abdallah Samy <abdallhsamy2011@gmail.com>
 */
class RepositoryEntityDeleting extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "deleting";
}
