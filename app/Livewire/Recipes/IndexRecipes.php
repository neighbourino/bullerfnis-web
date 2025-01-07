<?php

namespace App\Livewire\Recipes;

use App\Models\Recipe;
use Livewire\Component;

class IndexRecipes extends Component
{

    public $recipes;

    public function mount()
    {
        $this->recipes = Recipe::all();
    }

    public function render()
    {
        return view('livewire.recipes.index-recipes');
    }
}
