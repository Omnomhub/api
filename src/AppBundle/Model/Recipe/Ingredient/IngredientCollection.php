<?php


namespace AppBundle\Repository\Recipe\Ingredient;

use JMS\Serializer\Annotation as Serializer;
use Doctrine\Common\Collections\ArrayCollection;

class IngredientCollection extends ArrayCollection
{
    /**
     * @var array
     * @Serializer\Type("array<AppBundle\Model\Recipe\Ingredient\Ingredient>")
     */
    private $_elements;
}
