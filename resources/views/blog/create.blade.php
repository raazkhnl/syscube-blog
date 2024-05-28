
<x-app-layout>
{{-- <-- Create Event --> --}}
<div class="container mt-3">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-success text-gray-800 leading-tight">
            {{ __('Creat A New Blog') }}
        </h2>
    </x-slot>
        <div class="card">
            <div class="card-body">
                <form action="{{route('blog.save')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row mt-3">
                        <div class="form-group col-md-12">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Title of the Blog">
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    
                    <div class="form-group mt-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="10" placeholder="Description on the Blog"></textarea>
                        @error('description')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group mt-3">
                        <label for="photo">Photo</label>
                        <input type="file" name="photo" class="form-control" id="photo" accept="image/png, image/png, image/jpeg">
                        @error('photo')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Create Blog</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>