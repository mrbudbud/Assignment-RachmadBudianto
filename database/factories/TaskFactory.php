<?php

namespace Database\Factories;

use App\Models\Task;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{

    protected $model = Task::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Factory::create();
        return [
            'id_user' => mt_rand(1, 2),
            'task_name' => $this->faker->word(),
            'description' => $this->faker->text(),
        ];
    }
}
