<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RecordingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $threeMonthsAgo = Carbon::now()->subMonths(3)->toDateTimeString();
        return [
            'title' => 'Getting it right the first time',
            'description' => 'The Video description is shown here if the user has added it.',
            'views' => 324,
            'size' => '923 KB',
            'last_modified' => '3 months ago',
            'video_url' => 'www.google.com/google.mov',
            'created_at' => $threeMonthsAgo,
            'updated_at' => $threeMonthsAgo,

        ];
    }
}
