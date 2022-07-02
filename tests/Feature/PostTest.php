<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Post;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_untuk_buat_post(){
        $user = User::factory()->create();
        $this->actingAs($user, 'api');

        $formData = [
            'title' => 'Testing 1',
            'content' => 'Isi bebas apa aja',
            'category_id' => 1
        ];

        $this->json('POST', route('posts.store'), $formData)
        ->assertStatus(200)
        ->assertJson(['data'=>$formData]);
    }

    public function test_untuk_tampil_semua_data(){
        $user = User::factory()->create();
        $this->actingAs($user, 'api');

        $posts = Post::factory()->count(5)->create();

        $this->json('GET', route('posts.index'))
        ->assertJson(['data' => $posts->toArray()])
        ->assertStatus(200);
    }

    public function test_untuk_tampil_data(){
        $user = User::factory()->create();
        $this->actingAs($user, 'api');

        $post = Post::factory()->create([
            'title' => 'Testing 1',
            'content' => 'Isi bebas apa aja',
            'category_id' => 1
        ]);

        $this->json('GET', route('posts.show', $post->id))
        ->assertStatus(200);

    }

    public function test_untuk_update_data(){
        $user = User::factory()->create();
        $this->actingAs($user, 'api');

        $post = Post::factory()->create([
            'title' => 'Testing 1',
            'content' => 'Isi bebas apa aja',
            'category_id' => 1
        ]);

        $updatedData = [
            'title' => 'Testing 2',
            'content' => 'Isinya tetep bebas yaa...',
            'category_id' => 1
        ];

        $this->json('PUT', route('posts.update', $post->id), $updatedData)
        ->assertStatus(200)
        ->assertJson(['data'=>$updatedData]);
    }

    public function test_untuk_delete_post(){
        $user = User::factory()->create();
        $this->actingAs($user, 'api');

        $post = Post::factory()->create([
            'title' => 'Testing 1',
            'content' => 'Isi bebas apa aja',
            'category_id' => 1
        ]);

        $this->json('DELETE', route('posts.destroy', $post->id))
        ->assertStatus(200);
    }
}
