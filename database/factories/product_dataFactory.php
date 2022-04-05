<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product_data>
 */
class product_dataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "pid"=>$this->faker->isbn10(),
            "Name"=>$this->faker->name(),
            "price"=>$this->faker->numberBetween($min=10,$max=5000),
            "lot_size"=>$this->faker->numberBetween($min=2,$max=5000),
            "lot_no"=>$this->faker->numberBetween($min=1,$max=1000),
            "location"=>$this->faker->bothify("hello ##??"),
        ];
    }

}
