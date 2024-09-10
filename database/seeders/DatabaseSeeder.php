<?php

namespace Database\Seeders;

use App\Models\Unit;
use App\Models\Tile;
use File;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $json = File::get('database/data/sample.json');
        $units = json_decode($json);

        Unit::truncate();

        foreach ($units as $unit) {
            Unit::create([
                'id' => $unit->unitNumber,
                'number' => $unit->unitNumber,
                'description' => $unit->description,
                'backgroundColor' => $unit->backgroundColor,
                'textColor' => $unit->textColor,
                'borderColor' => $unit->borderColor,
            ]);

            foreach ($unit->tiles as $tile) {
                Tile::create([
                    'type' => $tile->type,
                    'description' => @$tile->description,
                    'unit_id' => $unit->unitNumber,
                ]);
            }
        }
    }
}
