<?php

namespace App\Entity;

trait TimestampableTrait
{
    /**
     * @var \DateTime
     */
    protected $created;

    /**
     * @var \DateTime
     */
    protected $changed;

    /**
     * @see TimestampableInterface::getCreated()
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set created.
     *
     * @param \DateTime $created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @see TimestampableInterface::getChanged()
     */
    public function getChanged()
    {
        return $this->changed;
    }

    /**
     * Set changed.
     *
     * @param \DateTime $changed
     *
     * @return $this
     */
    public function setChanged($changed)
    {
        $this->changed = $changed;

        return $this;
    }
}
