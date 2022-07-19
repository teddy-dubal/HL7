<?php

namespace Aranyasen\HL7\Segments;

use Aranyasen\HL7\Segment;

/**
 * ZBE segment class
 * Ref: https://hl7-definition.caristix.com/v2/IHEFRANCEPAMV2.5/Segments/ZBE
 */
class ZBE extends Segment
{
    public function __construct(array $fields = null)
    {
        parent::__construct('ZBE', $fields);
    }

    public function setMovementID($value, int $position = 1): bool
    {
        return $this->setField($position, $value);
    }

    public function setStartMovementDateTime($value, int $position = 2): bool
    {
        return $this->setField($position, $value);
    }

    public function setEndMovementDateTime($value, int $position = 3): bool
    {
        return $this->setField($position, $value);
    }

    public function setMovementAction($value, int $position = 4): bool
    {
        return $this->setField($position, $value);
    }

    public function setHistoricalMovementIndicator($value, int $position = 5): bool
    {
        return $this->setField($position, $value);
    }

    public function setOriginalTriggerEventCode($value, int $position = 6): bool
    {
        return $this->setField($position, $value);
    }

    public function setResponsibleWard($value, int $position = 7): bool
    {
        return $this->setField($position, $value);
    }
    
    public function setResponsibleNursingWard($value, int $position = 8): bool
    {
        return $this->setField($position, $value);
    }

    public function setMovementScope($value, int $position = 9): bool
    {
        return $this->setField($position, $value);
    }

    public function getMovementID(int $position = 1)
    {
        return $this->getField($position);
    }

    public function getStartMovementDateTime(int $position = 2)
    {
        return $this->getField($position);
    }

    public function getEndMovementDateTime(int $position = 3)
    {
        return $this->getField($position);
    }

    public function getMovementAction(int $position = 4)
    {
        return $this->getField($position);
    }

    public function getHistoricalMovementIndicator(int $position = 5)
    {
        return $this->getField($position);
    }

    public function getOriginalTriggerEventCode(int $position = 6)
    {
        return $this->getField($position);
    }

    public function getResponsibleWard(int $position = 7)
    {
        return $this->getField($position);
    }
    
    public function getResponsibleNursingWard(int $position = 8)
    {
        return $this->getField($position);
    }

    public function getMovementScope(int $position = 9)
    {
        return $this->getField($position);
    }
    
}
