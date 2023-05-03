<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="d-flex container-fluid flex-row justify-content-center mt-1 ">
        <div class="leftbar ">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link active">Home</a>
                </li>
            
                <li class="nav-item">
                    <a href="#" class="nav-link">Explore</a>
                </li>

                @foreach($users as $user)

                  @if($user->id == Auth::id())
                  <li class="nav-item">
                    <div class="container d-flex flex-row align-items-center">
                      <img src="{{ asset('uploads/images/default_photo/' . $user->default_photo) }}" alt="Image" width="100px" srcset="">
                      <span>{{$user->name}}</span>
                    </div>
                    
                  </li>

                  @endif

                @endforeach

            </ul>
        </div>

        <div class="content w-50 border-start border-end flex-grow-2">
            <ul class="nav d-flex justify-content-around">
                <li class="nav-item">
                    <a href="#" class="nav-link active text-primary">Your Posts</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-primary">All Posts</a>
                </li>
            </ul>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action={{ route('add_post') }} enctype="multipart/form-data">
                @csrf
                <div class="form-floating">
                    <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px; "></textarea>
                    <label for="floatingTextarea2">Write a new post...</label>
                    <div class="bottom-bar d-flex mt-2 mx-2 align-items-center">
                    <input type="file" name="image" class="block w-full text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-violet-50 file:text-violet-700
                        hover:file:bg-violet-100
                            "/>
                        <button type="submit" class="btn btn-primary rounded-pill ms-auto ">Submit</button>
                    </div>
                </div>
            </form>

            <div class="posts">
                @foreach($posts as $post)

                    <span> {{ $post->description }} </span>
                    <span> {{ $post->image }} </span>
                    @if($post->image != null)
                    <img src="{{ asset('uploads/images/content/' . $post->image) }}" alt="Image"  srcset="">
                    @endif
                    <span> {{ $post->user_id }} </span>
                    <span> {{ $post->name }} </span>
                @endforeach
            </div>
        </div>
        
        <div class="rightbar">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link active">Home</a>
                </li>
            </ul>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link">Explore</a>
                </li>
            </ul>
        </div>
    </div>
    
</x-app-layout>
