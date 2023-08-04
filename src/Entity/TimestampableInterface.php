<?php

namespace App\Entity;

interface TimestampableInterface
{
    /**
     * Return the date the object implementing this inteface
     * was created.
     *
     * @return \DateTime
     */
    public function getCreated();

    /**
     * Return the date the object implementing this inteface
     * was changed.
     *
     * @return \DateTime
     */
    public function getChanged();
}
