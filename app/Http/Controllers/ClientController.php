<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ClientController extends Controller {

	public function cities() {
		$res = Http::get('http://172.16.1.6:9014/api/v1/city');
		return $res->json();
	}


	public function index() {
        $res = Http::get('http://172.16.1.6:9014/api/v1/city');
        return view('perfil')->with('user', $res->json());
    }

	public function getAllPosts() {
		$res = Http::get('https://jsonplaceholder.typicode.com/posts');
		return view('demo')->with('posts', $res->json());
	}
	
	public function getPostById($id) {
		$res = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
		return $res->json();
	}

	public function addPost() {
		$req = Http::post('https://jsonplaceholder.typicode.com/posts', [ 'userId' => 1, 'title' => 'New Post title', 'body' => 'New post description' ]);
		return $req->json();
	}

	public function updatePost($id) {
		$req = Http::put('https://jsonplaceholder.typicode.com/posts/'.$id, [ 'title' => 'Update Post title', 'body' => 'Update post description' ]);
		return $req->json();
	}

	public function deletePost($id) {
		$req = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
		return $req->json();
	}
}
