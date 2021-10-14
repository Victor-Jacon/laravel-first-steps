<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

// Os testes de DB enviam dados fake para o DB. Este trait que incluimos na classe apaga automaticamente os dados enviados ao final de cada testes. Isso mantém o banco limpo.
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileFactory extends Factory
{
    use RefreshDatabase;
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}
