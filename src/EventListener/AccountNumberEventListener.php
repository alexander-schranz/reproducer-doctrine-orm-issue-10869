<?php

namespace App\EventListener;

use App\Entity\Account;
use Doctrine\ORM\Event\PostPersistEventArgs;
use Doctrine\ORM\Events;

class AccountNumberEventListener
{
    public function getSubscribedEvents(): array
    {
        $events = [
            Events::postPersist,
        ];

        return $events;
    }
    public function postPersist(PostPersistEventArgs $args)
    {
        $object = $args->getObject();

        if (!$object instanceof Account) {
            return;
        }

        $objectManager = $args->getObjectManager();

        // after saving account check if number is set, else set a new one
        if (null === $object->getNumber()) {
            $object->setNumber(\sprintf('%05d', $object->getId()));
            $objectManager->flush();
        }
    }
}
