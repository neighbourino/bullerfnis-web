<?php

namespace App\Livewire\Recipes;

use App\Models\Recipe;
use Livewire\Component;

class ShowRecipe extends Component
{
    public $recipe;

    public function mount(Recipe $recipe)
    {
        $this->recipe = $recipe;
    }

    public function render()
    {
        return view('livewire.recipes.show-recipe');
    }
}
