<?php

namespace AppBundle\Repository\Recipe;

interface RecipeRepositoryInterface
{
    public function addOne(Recipe $recipe);

    public function removeOne($recipeId);

    public function getParent();

    public function fork(User $user);

    public function addIngredient();

    public function removeIngredient();


}
