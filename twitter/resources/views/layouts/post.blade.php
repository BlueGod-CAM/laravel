 <div class="flex p-2 border-b-gray-400">
        <div class="mr-4">
{{--            <img src="https://i.pravatar.cc/250?u={{$tweets->user->email}}" class="rounded-full" alt="profile" style="width: 50px; height: 50">--}}
        </div>
        <div class="">
            <h5 class="font-bold mb-2"><a href="/profile/{{$post->user->id}}">{{$post->user->name}}</a></h5>
            <p class="text-sm">{{$post->content}}</p>
        </div>
    </div>
