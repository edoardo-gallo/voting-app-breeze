<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Status;
use Livewire\Livewire;
use App\Models\Category;
use App\Http\Livewire\CreateIdea;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateIdeaTest extends TestCase
{

    use RefreshDatabase;

    public function test_create_idea_form_does_not_show_when_logged_out()
    {
        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();

        $response->assertSee('Please login to create an Idea');
        $response->assertDontSee('Let us know what you would like and we ll take a look over'); 
    }

    public function test_create_idea_form_does_show_when_logged_in()
    {
        $response = $this->actingAs(User::factory()->create())->get(route('idea.index'));

        $response->assertSuccessful();

        $response->assertDontSee('Please login to create an Idea');
        $response->assertSee('Let us know what you would like and we ll take a look over'); 
    }

    public function test_main_page_contains_create_idea_livewire_component()
    {
        $this->actingAs(User::factory()->create())
            ->get(route('idea.index'))
            ->assertSeeLivewire('create-idea');
    }

    public function test_create_idea_form_validation_works()
    {
        Livewire::actingAs(User::factory()->create())
            ->test(CreateIdea::class)
            ->set('title', '')
            ->set('category', '')
            ->set('description', '')
            ->call('createIdea')
            ->assertHasErrors(['title', 'category', 'description'])
            ->assertSee('The title field is required');
    }

    public function test_creating_an_idea_works_correctly()
    {
        $user = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Category 2']);

        $status = Status::factory()->create(['name' => 'Open']);

        Livewire::actingAs($user)
            ->test(CreateIdea::class)
            ->set('title', 'My first Idea')
            ->set('category', $categoryOne->id)
            ->set('description', 'this is my first idea')
            ->call('createIdea')
            ->assertRedirect('/');

        $response = $this->actingAs($user)->get(route('idea.index'));
        $response->assertSuccessful();
        $response->assertSee('My first idea');
        $response->assertSee('This is my first idea');
        
        $this->assertDatabaseHas('ideas', [
            'title' => 'My first idea'
        ]);
    }
}
