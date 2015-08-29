<?php

namespace AppBundle\Model\Ingredient;

use AppBundle\Model\Recipe\Ingredient\Amount;
use AppBundle\Model\Recipe\Ingredient\Unit;

class Ingredient
{
    private $name;

    /**
     * @var \AppBundle\Model\Ingredient\Amount
     */
    private $amount;

    /**
     * @var \AppBundle\Model\Ingredient\Unit
     */
    private $unit;

    /**
     * Ingredient constructor.
     *
     * @param String $name
     * @param Amount $amount
     * @param Unit $unit
     */
    public function __construct($name, Amount $amount, Unit $unit)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->unit = $unit;
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return String
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return String
     */
    public function getUnit()
    {
        return $this->unit;
    }


}
