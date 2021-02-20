<?php

namespace Database\Factories;

use App\Models\Meeting;
use Illuminate\Database\Eloquent\Factories\Factory;

class MeetingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Meeting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->sentence(rand(3,6)),
            'introduction' =>$this->faker->paragraph(true),
            'minutes' =>$this->faker->paragraph(true),
            'decision' =>$this->faker->paragraph(true),
            'participants' =>$this->faker->words(5,true),
            'timestamp' =>$this->faker->dateTime('now',null)
        ];
    }
}
