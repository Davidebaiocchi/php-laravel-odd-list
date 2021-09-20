<?php

use Illuminate\Database\Seeder;
use App\Tag;
use function GuzzleHttp\Psr7\str;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Front End', 'Back End', 'Laravel', 'Vue'];
        
        foreach ($tags as $tag) {
            $newTag= new Tag();
            $newTag->name = $tag;
            $newTag->slug = Str::slug($tag, '-');
            $newTag->save();
        }
    }
}
