<?php

namespace Database\Factories;

use App\Models\Cardapio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto_Cardapio>
 */
class Produto_CardapioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cardapio_id'=>1,
            'produto_id'=>1,

        ];
    }
}
