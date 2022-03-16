<?php

namespace Tests\Feature;

use App\Models\Category;
use Tests\TestCase;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    public function test_list_of_ideas_shows_on_main_page()
    {
        $user = User::factory()->create();
        
        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Category 2']);

        $status = Status::factory()->create(['name' => 'Open']);

        $ideaOne = Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'My fist Idea',
            'category_id' => $categoryOne->id,
            'status_id' => $status->id,
            'description' =>'Description of my first Idea'  
        ]);

        $ideaTwo = Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'My second Idea',
            'category_id' => $categoryTwo->id,
            'status_id' => $status->id,
            'description' =>'Description of my second Idea'
        ]);

        // visiting the home page
        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee($ideaOne->title);
        $response->assertSee($ideaOne->description);
        $response->assertSee($categoryOne->name);
        $response->assertSee($ideaTwo->title);
        $response->assertSee($ideaTwo->description);
        $response->assertSee($categoryTwo->name);
    }

    public function test_single_idea_shows_correctly_on_the_show_page()
    { 
        $user = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);

        $status = Status::factory()->create(['name' => 'Open']);

        $idea = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'title' => 'My fist Idea',
            'status_id' => $status->id,
            'description' =>'Description of my first Idea'  
        ]);

       
        // visiting the home page
        $response = $this->get(route('idea.show', $idea));

        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
        $response->assertSee($categoryOne->name);
    }

    public function test_ideas_pagination_works()
    {

        $user = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);

        $status = Status::factory()->create(['name' => 'Open']);

        Idea::factory(Idea::PAGINATION_COUNT + 1)->create([
            'category_id' => $categoryOne->id,
            'status_id' => $status->id            
        ]);

        $ideaOne = Idea::find(1);
        $ideaOne->title = 'My first Idea';
        $ideaOne->save();
        
        $ideaEleven = Idea::find(11);
        $ideaEleven->title = 'My eleventh Idea';
        $ideaEleven->save();

        $response = $this->get('/');
        

        $response->assertDontSee($ideaOne->title);
        $response->assertSee($ideaEleven->title);

        $response = $this->get('/?page=2');

        $response->assertDontSee($ideaEleven->title);
        $response->assertSee($ideaOne->title);
    }
}
