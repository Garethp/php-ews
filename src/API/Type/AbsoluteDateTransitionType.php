<?php

namespace garethp\ews\API\Type;

/**
 * Class representing AbsoluteDateTransitionType
 *
 *
 * XSD Type: AbsoluteDateTransitionType
 */
class AbsoluteDateTransitionType extends TransitionType
{

    /**
     * @var \DateTime
     */
    protected $dateTime = null;

    /**
     * @autogenerated This method is safe to replace
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @autogenerated This method is safe to replace
     * @param $value \DateTime|string
     * @return AbsoluteDateTransitionType
     */
    public function setDateTime(\DateTime|string $value)
    {
        if (is_string($value)) {
            $value = new \DateTime($value);
        }
        $this->dateTime = $value;
        return $this;
    }
}
