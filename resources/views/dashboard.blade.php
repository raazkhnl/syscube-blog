<style>
  /* Header/Blog Title */.header {padding: 30px;  font-size: 40px;  text-align: center;  background: white;}/* Create two unequal columns that floats next to each other *//* Left column */.leftcolumn {  float: left;  width: 70%;  padding: 10px;}/* Right column */.rightcolumn {  float: left;  width: 30%;  padding: 10px;}/* Fake image */.fakeimg {  background-color: #aaa;  width: 100%;  padding: 20px;}/* Add a card effect for articles */.card {  background-color: white;  padding: 20px;  margin-top: 20px;  margin-left: 10px;}/* Clear floats after the columns */.row1:after {  content: "";  display: table;  clear: both;}/* Footer */.footer {  padding: 20px;  text-align: center;  background: #ddd;  margin-top: 20px;}/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */@media screen and (max-width: 800px) {  .leftcolumn, .rightcolumn {    width: 100%; padding: 0;  }}
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-success text-gray-800 leading-tight">
            {{ __('Blogs') }}
        </h2>
    </x-slot>

    <div class="row1">
        <div class="leftcolumn">
            @if (session()->has('message'))
                <h1 class="alert alert-info">{{ session()->get('message') }}</h1>
            @endif
            @foreach ($blogs as $blog)
                {{-- Blog List --}}
                <div class="card shadow">
                    <h1><b>{{ $blog->user->name }}</b> created a blog.</h2>
                        <h5><b>at</b> <span id="datetime">{{ $blog->created_at }}</span></h5>
                        <h1 class="card-title"><b>{{ $blog->title }}</b></h5>
                            <div class="col-md-6">
                                <a href="#" style=""><img src="{{ asset('storage/' . $blog->image) }}"
                                        class="img-fluid" style="width:350px height:300px; " alt="..."> </a>

                            </div>

                            <p class="card-text">{{ $blog->description }}</p>


                            @auth
                                <span>
                                    <form action="{{ route('blog.respond', $blog->id) }}" class="d-inline" method="post">
                                        @csrf
                                        <input type="hidden" value="1" name="response">
                                        <button class="btn btn-sm btn-success" type="submit">Like👍:
                                            {{ $blog->likes_count }} </button>
                                    </form>

                                    <form action="{{ route('blog.respond', $blog->id) }}" class="d-inline" method="post">
                                        @csrf
                                        <input type="hidden" value="0" name="response">
                                        <button class="btn btn-sm btn-danger" type="submit">Dislike👎:
                                            {{ $blog->dislikes_count }}</button>
                                    </form>
                                    <span><a href="{{ route('blog.comment', $blog->id) }}"
                                            class="btn btn-primary btn-sm">Comment</a></span>

                                    @if ($blog->user_id == auth()->id())
                                        <span><a href="{{ route('blog.edit', ['blog' => $blog->id]) }}"
                                                class="btn btn-warning btn-sm">Edit</a></span>
                                        <form action="{{ route('blog.delete', ['blog' => $blog->id]) }}" class="d-inline"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            {{-- //Method Scoofing --}}
                                            <button type="submit" class="btn btn-light">Delete</button>
                                        </form>

                                    @endif
                                </span>
                            @endauth
                </div>
            @endforeach
        </div>


        <div class="rightcolumn">
            <div class="card">
                <h2><b>About</b></h2>
                <div><img src="storage\Images\RaaZ.jpg" class="img-fluid" style="width:150px height:200px; " alt="">
                    <img src="../storage/Images/BlogLogo.png" width="280"  alt="logo">

                </div>
                <p class="primary-color" style="text-align: justify">&nbsp;&nbsp;&nbsp; This is a simple <b>MVC</b>
                    blogging website developed by RaaZ Khanal. It can be a
                    platform to the people to share their ideas, projects, thoughts and manymore things. They can also
                    keep themself updated schrolling through the blogs of other and know what is going around the world.
                </p>
            </div>
            <div class="card">
                <h3><b>Popular Posts</b></h3>
                <div class="fakeimg">Image</div><br>
                <div class="fakeimg">Image</div><br>
                <div class="fakeimg">Image</div>
            </div>
            <div class="card">
                <h3><b>Announcements</b></h3>
                <p>
                    I am so glad to report that our website is live now.. <br>so, Let's share our ideas and happiness...
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
