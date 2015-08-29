<?php

namespace AppBundle\Repository\Recipe;

use AppBundle\Model\User\User;
use AppBundle\Model\Recipe\Recipe;

interface RecipeRepositoryInterface
{
    /**
     * Add a recipe
     *
     * @param Recipe $recipe The recipe to add
     *
     * @return boolean true if successful
     */
    public function addOne(Recipe $recipe);

    /**
     * @param Recipe $recipe
     *
     * @return boolean true if successful
     */
    public function removeOne(Recipe $recipe);

    /**
     * Get parent recipe, can be null if not a fork
     *
     * @param Recipe $recipe The recipe who's parent we want to find out
     *
     * @return null|Recipe The parent recipe, or null if not existing
     */
    public function getParent(Recipe $recipe);

    /**
     * Fork a recipe and create a new recipe under the given users account
     *
     * @param User   $user The user who is forking
     * @param Recipe $recipe The recipe that is forked
     *
     * @return Recipe The new recipe
     */
    public function fork(User $user, Recipe $recipe);

    /**
     * Get a recipe
     * @param User $user
     * @param      $name
     *
     * @return null|Recipe
     */
    public function getOneByName(User $user, $name);

    /**
     * Saves a recipe, creates a new one if it doesn't exist, and overwrites it if it does
     *
     * @param Recipe $recipe The recipe to save
     *
     * @return boolean true if successful
     */
    public function save(Recipe $recipe);
}
