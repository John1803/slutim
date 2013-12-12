<?php

namespace Creed\GuestbookBundle;

use Doctrine\ORM\EntityManager;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;

class PagePagination
{
    /**
     * @var EntityManager
     */
    private $em;

    private $perPage = 13;

    public function __construct($em)
    {
        $this->em = $em;
    }

    public function setPerPage($value)
    {
        $this->perPage = $value;
    }

    public function pagination($message)
    {
        $repository = $this->em->getRepository('CreedGuestbookBundle:Message');
        $messages = new Pagerfanta(new DoctrineORMAdapter($repository->findAllOrderByCreatedAt()));
        $messages
            ->setMaxPerPage($this->perPage)
            ->setCurrentPage($message)
        ;

        return $messages;
    }
} 