<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="d-flex container-fluid flex-row justify-content-center mt-1 ">
        <div class="leftbar me-3 mt-3" style="font-family: Pixel;">
            <ul class="nav flex-column align-items-center">

              @foreach($users as $user)

                  @if($user->id == Auth::id())
                  <li class="nav-item">
                    <div class="container col-10 d-flex flex-row align-items-center" style="width: 100px; height: 100px;">
                      {{-- <img src="{{ asset('uploads/images/default_photo/' . $user->default_photo) }}" alt="Image" width="100px" srcset="">
                      <span>{{$user->name}}</span> --}}
                      <img src="{{ asset('uploads/images/default_photo/' . $user->default_photo )}}" alt="" srcset="" 
                      style="width: 75px; height: 75px; border-radius: 50%; overflow: hidden; margin-bottom:5px;">
                    </div>
                    <p class="mb-2" style="text-align: center; font-family: Pixel; font-size: 20px; color:#E4D9FF">{{ $user->name }}</p>
                  </li>

                  @endif

                @endforeach

                <li class="nav-item ">
                    <a href="#" class="nav-link active" style="color:#FFC107;">Account</a>
                </li>
            
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color:#FFC107;">Settings</a>
                </li>

                

            </ul>
        </div>

        <div class="content w-50 border-start border-end flex-grow-4 px-2">
            <ul class="nav d-flex justify-content-around">
                <li class="nav-item">
                    <a href="#" class="nav-link active" style="color:#FFC107; font-family: Pixel;">Your Posts</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color:#FFC107; font-family: Pixel;">All Posts</a>
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
                    <label for="floatingTextarea2" style="font-family: Pixel">Write a new post...</label>
                    <div class="bottom-bar d-flex mt-2 mx-2 align-items-center">
                    <input type="file" name="image" class="block w-full text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-violet-50 file:text-violet-700
                        hover:file:bg-violet-100
                            " style="color:#FFC107; font-family: Pixel"/>
                        <button type="submit" class="btn btn-primary rounded-pill ms-auto " style="color:#FFC107; font-family: Pixel">Submit</button>
                    </div>
                </div>
            </form>

            <div class="posts mt-2">
                @foreach($posts->reverse() as $post)

                    <div class="container card p-3 mb-2 d-flex flex-column"
                    style="width: 100%; font-family: Pixel; background-color: #e4d9ff; color: #273469;">

                    {{-- <div class="container col-2 d-flex flex-row">
                      <img src="{{ asset('uploads/images/default_photo/' . $post->default_photo )}}" height="100px" width="100px" style="border-radius: 50%">
                      <span class="ms-3"> {{ $post->name }}</span>
                      <span> {{$post->description}}</span>
                    </div> --}}

                    <div class="row">
                      <div class="col-1"><img src="{{ asset('uploads/images/default_photo/' . $post->default_photo )}}"
                         height="200px" width="200px" style="border-radius:50%; object-fit: cover;" ></div>
                      <div class="col-2" style="font-size: 16px;">
                        <span style="font-weight: bolder">{{$post->name}}</span>
                      </div>
                      <div class="col">
                        <span style="font-weight:light; font-size: 12px;">{{date('d-M-Y H:i', strtotime($post->created_at))}}</div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-1"></div>
                      <div class="col-2">{{$post->description}}</div>
                    </div>
                    <div class="row">
                      <div class="col-1"></div>
                      @if($post->image != null)
                      
                      <div class="col-8"><img src="{{ asset('/uploads/images/content/' . $post->image)}}" alt="wala"  srcset=""></div>
                      @endif
                    </div>
                    
                    
                    
                    
                    <span class="mb-1"></span>

                    </div>
                    {{-- <span> {{ $post->description }} </span>
                    <span> {{ $post->image }} </span>
                   
                    <span> {{ $post->user_id }} </span>
                    <span> {{ $post->name }} </span> --}}
                @endforeach
            </div>
        </div>
        
        <div class="rightbar">
            <ul class="nav flex-column align-items-center">
                <li class="nav-item">
                    <a href="#" class="nav-link active" style="color:#FFC107; font-family: Pixel">Trending Topics</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color:white; font-family: Pixel">PC GAMING</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color:white; font-family: Pixel">Mobile Gaming</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color:white; font-family: Pixel">Console Gaming</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color:white; font-family: Pixel">Gambling</a>
                </li>
            </ul>
        </div>
    </div>
    
</x-app-layout>
