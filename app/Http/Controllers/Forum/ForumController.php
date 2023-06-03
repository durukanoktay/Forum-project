<?php

namespace App\Http\Controllers\Forum;

use App\Models\Forum;
use App\Models\Post;
use App\Models\User;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class ForumController extends Controller
{
    public function home()
    {
        $forums = Forum::all();
        return view('forum.home', compact('forums'));
    }

    public function profile()
    {
        return view('forum.profile');
    }
    public function editprofile()
    {
        return view('forum.editprofile');
    }
    public function announcament()
    {
        return view('forum.announcament');
    }
    public function changepas()
    {
        return view('forum.changepas');
    }

    public function message()
    {
        return view('forum.message');
    }
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->intended('/');
            } else {
                return redirect(route('login'))->with('error', 'Login details are not valid');
            }
        }

        return view('forum.login');
    }


    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|confirmed'
            ]);

            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['password'] = Hash::make($request->password);
            $user = User::create($data);

            if (!$user) {
                return redirect(route('register'))->with("error", "Registration failed, try again");
            } else {
                return redirect(route('login'))->with("success", "Registration success, Login to access the app");
            }
        }

        return view('forum.register');
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/login');
    }

    public function newTopic($forumName)
    {
        $forum = Forum::where('name', $forumName)->firstOrFail();

        return view('forum.newtopic', ['forum' => $forum]);
    }

    public function createTopic(Request $request, $forumName)
    {
        $forum = Forum::where('name', $forumName)->first();

        // Giriş yapmış kullanıcının ID'sini al
        $userId = auth()->user()->id;

        // Yeni topic oluştur
        $topic = new Topic();
        $topic->forum_id = $forum->id;
        $topic->title = $request->input('title');
        $topic->user_id = $userId; // user_id eklendi
        $topic->save();

        // Yorumu oluştur
        $post = new Post();
        $post->topic_id = $topic->id;
        $post->user_id = $userId; // user_id eklendi
        $post->title = $request->input('title');
        $post->content = $request->input('comment');
        $post->save();

        // İlgili işlemleri buraya ekleyebilirsiniz, örneğin kullanıcıyı bildirim gönderme listesine ekleyebilirsiniz.

        return redirect()->back()->with('success', 'Topic and comment created successfully.');
    }
    public function showTopic($name)
    {
        $forum = Forum::where('name', $name)->first();

        if ($forum) {
            $topics = $forum->topics;

            return view('forum.topic', compact('forum', 'topics'));
        } else {
            abort(404);
        }
    }

    public function showPost($forum, $topic)
    {
        $post = Post::where('title', $topic)->first();

        if (!$post) {
            abort(404, 'Post not found');
        }

        return view('forum.post', compact('post'));
    }

}