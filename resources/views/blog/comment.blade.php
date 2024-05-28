
<x-app-layout>
    <div class="container mt-3">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-success text-gray-800 leading-tight">
                {{ __('Comment') }}
            </h2>
        </x-slot>
           
            @if (session()->has('message'))
            <h1 class="alert alert-info">{{ session()->get('message') }}</h1>
            @endif
            
            <div class="card">
                <div class="card-body"  style="padding: 10px">
                            
                            <h1><b>{{$blog->user->name}}'s </b>blog.</h2>

                                <h5><b>at</b> <span id="datetime">{{$blog->created_at}}</span></h5>
                            <h1 class="card-title"><b>{{$blog->title}}</b></h5>
                              <div class="col-md-6">
                                  <a href="#" style=""><img src="{{ asset('storage/'. $blog->image) }}" class="card-img-top" alt="..."> </a>
                             
                             
                       </div>
                                      <p class="card-text" style="10">{{$blog->description}}</p>
                                        <h3 style="color: "><b>Comments</b></h3>

                                        @foreach($blog->comments as $comment)
                                        <div class="card mb-2 mr-20" style="padding: 5px ">
                                            <strong>{{ $comment->user->name }}</strong>
                                            <p>→{{ $comment->comment}}</p>
                                        </div>
                                        @endforeach


                                      <form action="{{route('comment.save', ['blog'=>$blog->id])}}" method="post" enctype="multipart/form-data" >
                                        @csrf   
                                        <textarea class="comment"  name="comment" id="comment" rows="1"   placeholder="Hey... comment here!" ></textarea>
                                        <input type="hidden"  name="blog_id" value="{{ $blog->id }}"/>
                                            <button type="submit" class="btn btn-primary mt-3"  ><i class="fa fa-send" ></i></button>
                                            @error('comment');
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                    </form>

       






                          </div>
                        
            </div>
        </div>
    </x-app-layout>