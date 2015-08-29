<?php

namespace AppBundle\Model\Recipe;

use AppBundle\Repository\Recipe\IngredientCollection;
use AppBundle\Model\User;

class Recipe
{
    private $name;

    /**
     * @var User
     */
    private $owner;

    /**
     * @var User
     */
    private $parent;

    /**
     * @var IngredientCollection
     */
    private $ingredients;

    private $instructions;
    private $cookingTime;
    private $preparationTime;
    private $servings;
    private $nutritionalInformation;

    /**
     * Recipe constructor.
     *
     * @param                       $name
     * @param \AppBundle\Model\User $owner
     * @param \AppBundle\Model\User $parent
     * @param IngredientCollection  $ingredients
     * @param                       $instructions
     * @param                       $cookingTime
     * @param                       $preparationTime
     * @param                       $servings
     * @param                       $nutritionalInformation
     */
    public function __construct(
        $name, \AppBundle\Model\User $owner,
        IngredientCollection $ingredients = null,
        $instructions = null,
        $cookingTime = null,
        $preparationTime = null,
        $servings = null,
        \AppBundle\Model\User $parent = null,
        $nutritionalInformation = null
    )
    {
        $this->name = $name;
        $this->owner = $owner;
        $this->parent = $parent;
        $this->ingredients = $ingredients;
        $this->instructions = $instructions;
        $this->cookingTime = $cookingTime;
        $this->preparationTime = $preparationTime;
        $this->servings = $servings;
        $this->nutritionalInformation = $nutritionalInformation;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return \AppBundle\Model\User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @return \AppBundle\Model\User
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @return IngredientCollection
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * @return null
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * @return null
     */
    public function getCookingTime()
    {
        return $this->cookingTime;
    }

    /**
     * @return null
     */
    public function getPreparationTime()
    {
        return $this->preparationTime;
    }

    /**
     * @return null
     */
    public function getServings()
    {
        return $this->servings;
    }

    /**
     * @return null
     */
    public function getNutritionalInformation()
    {
        return $this->nutritionalInformation;
    }


}
