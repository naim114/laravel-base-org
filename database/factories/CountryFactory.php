<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Country::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'country_code' => $this->faker->countryCode,
            'iso_3166_2' => strtoupper($this->faker->randomLetter . $this->faker->randomLetter),
            'iso_3166_3' => $this->faker->countryISOAlpha3,
            'name' => $this->faker->country,
            'region_code' => 123,
            'sub_region_code' => 123,
        ];
    }
}
