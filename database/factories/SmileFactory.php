<?php

namespace Database\Factories;

use App\Models\Smile;
use Illuminate\Database\Eloquent\Factories\Factory;

class SmileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Smile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lexify('????????'),
            'emotion' =>$this->faker->boolean ? 'happy' : 'ok'
        ];
    }
}
