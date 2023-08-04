<?php

namespace App\Tests\Repository;

use App\Entity\Account;
use App\Entity\Other;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class AccountRepositoryTest extends KernelTestCase
{
    public function testAccount(): void
    {
        $entityManager = self::getContainer()->get(EntityManagerInterface::class);

        $other1 = new Other();
        $entityManager->persist($other1);
        $other2 = new Other();
        $entityManager->persist($other2);

        $account = new Account();
        $entityManager->persist($account);
        $entityManager->flush();

        $accountId = $account->getId();

        $this->assertNotNull($accountId);
        $this->assertStringContainsString($accountId, $account->getNumber());

        $this->assertNotNull($account->getCreated());
        $this->assertNotNull($account->getChanged());

        // another account
        $account = new Account();
        $entityManager->persist($account);
        $entityManager->flush();

        $accountId = $account->getId();

        $this->assertNotNull($accountId);
        $this->assertStringContainsString($accountId, $account->getNumber());

        $this->assertNotNull($account->getCreated());
        $this->assertNotNull($account->getChanged());
    }
}
