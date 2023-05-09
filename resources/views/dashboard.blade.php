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
                    <a href="{{ route('profile.edit') }}" class="nav-link active" style="color:#FFC107;">Account</a>
                </li>
            
                <li class="nav-item">
                    <a href="javascript:alert('Sorry, that is not within the scope of the website')" class="nav-link" style="color:#FFC107;">Settings</a>
                </li>

                

            </ul>
        </div>

        <div class="content w-50 border-start border-end flex-grow-4 px-2">
            <ul class="nav d-flex justify-content-around">
                <li class="nav-item">
                    <a href="{{ route('yourpost') }}" class="nav-link active" style="color:#FFC107; font-family: Pixel;">Your Posts</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link" style="color:#FFC107; font-family: Pixel;">All Posts</a>
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
                    
                    <select class="form-select-sm mt-2" aria-label="Default select example" style="width:150px" name="tag" >
                      <option selected>Choose a Topic</option>
                      <option value="PC Gaming" >PC Gaming</option>
                      <option value="Mobile Gaming">Mobile Gaming</option>
                      <option value="Console Gaming">Console Gaming</option>
                    </select>
                    
                    <div class="bottom-bar d-flex mt-2 my-2 align-items-center">
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


                    <div class="row d-flex align-items-start">
                      <div class="col-1"><img class="dp" src="{{ asset('uploads/images/default_photo/' . $post->default_photo )}}"
                        style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; margin-bottom:5px;" >
                      </div>
                      <div class="col-7" style="font-size: 16px;">
                        <span style="font-weight: bolder;font-size: 1.5rem">{{$post->name}}</span>
                      </div>
                      <div class="col-3 ms-auto">
                        <span style="font-weight:light; font-size: 12px;">{{date('d-M-Y H:i', strtotime($post->created_at))}}</div>
                    </div>

                    <div class="row">
                      <div class="col-1"></div>
                      <div class="col-11">{{$post->description}}</div>
                    </div>
                    
                    <div class="row">
                      <div class="col-1"></div>
                      @if($post->image != null)
                      
                      <div class="col-11"><img src="{{ asset('/uploads/images/content/' . $post->image)}}" alt="wala"  srcset=""></div>
                      @endif
                    </div>
                    
                    {{-- <form method="POST" action="{{ route('add_like')}}" enctype="multipart/form-data">
                      <div class="col d-flex align-items-center"><i class="fa-regular fa-heart fs-4 me-1" type="submit" ></i> {{$post->like}}</div>
                    </form> --}}
                    <form method="POST" action="{{ route('add_like')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="row mb-6">
                        <input type="hidden" name="post_id" value={{ $post->id }}>
                        <div class="col-1"></div>
                        <div class="col d-flex align-items-center">
                          {{-- <input type="submit" value="&#xf004; heart"> --}}
                          <button type="submit" value="test">
                          <i class="fa-regular fa-heart fs-4 me-1" type="submit"></i> {{$post->like}}</div>
                        <div class="col-4">Comments {{$post->comment}} </div>
                        <div class="col-3">{{$post->tag}} </div>
                      </div>
                  </form>
                    @foreach($comments as $comment)
                      @if($comment->post_id == $post->id)
                        <div class="row mt-2">
                          <div class="col-1">
                            <img class="dp" src="{{ asset('uploads/images/default_photo/' . $comment->default_photo )}}" alt="" srcset="" 
                            style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; margin-bottom:5px;">
                          
                          </div>
                          <div class="col-8">
                            <div class="row">
                              <span style="font-weight: bold; font-size:1.2rem">{{$comment->name}}</span>
                              <span>{{$comment->comment}}</span>
                            </div>
                            
                          </div>
                          <div class="col">
                            {{date('d-M-Y H:i', strtotime($comment->created_at))}}
                          </div>
                        </div>
                      @endif
                    @endforeach
                  
                    
                    <form method="POST" action={{ route('add_comment') }} enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="post_id" value="{{$post->id}}">
                      @foreach($users as $user)
                        @if($user->id == Auth::id())
                          <input type="hidden" name="name" value="{{$user->name}}">
                          <input type="hidden" name="default_photo" value="{{$user->default_photo}}">
                          <div class="row mt-2">
                            <div class="col-1"></div>
                            <div class="col-11">
                              <textarea class="form-control" name="comment" placeholder="Leave a comment here" id="floatingTextarea3" style="height: 100px; "></textarea>
                            </div>
                            
                          </div>
                          
                          <div class="row mt-2">
                            <div class="col-10"></div>
                            <div class="col-1">
                              <button type="submit" class="btn btn-primary rounded-pill ms-auto " style="color:#FFC107; font-family: Pixel; background-color: blue">Submit</button>
                            </div>
                            <div class="col-1"></div>
                          </div>
                        @endif
                      @endforeach
                    </form>
                    <span class="mb-1"></span>

                    </div>
                @endforeach
            </div>
        
        </div>
        <div class="rightbar">
            <ul class="nav flex-column align-items-center">
                <li class="nav-item">
                    <a href="#" class="nav-link active" style="color:#FFC107; font-family: Pixel">Sort by Topics</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pc') }}" class="nav-link" style="color:white; font-family: Pixel">PC GAMING</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('mobile') }}" class="nav-link" style="color:white; font-family: Pixel">Mobile Gaming</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('console') }}" class="nav-link" style="color:white; font-family: Pixel">Console Gaming</a>
                </li>

            </ul>
        </div>
    </div>
    
</x-app-layout>
