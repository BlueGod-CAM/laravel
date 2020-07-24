<form action="/post" method="POST">
    @csrf
    <div class="container px-2  mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="card">
                <div class="row px-3"> <img class="profile-pic mr-3" src="https://i.imgur.com/6tPhTUn.jpg">
                    <div class="flex-column">
                        <h3 class="mb-0 font-weight-normal">{{auth()->user()->name}}</h3> <select name="status" class="privacy">
                            <option value="public">Public</option>
                            <option value="private">Private</option>
                        </select>
                    </div>
                </div>
                <div class="row px-3 form-group"> <textarea name="content" class="text-muted bg-light mt-4 mb-3" placeholder="Hi Camilla, what's on your mind today?"></textarea> </div>
                <div class="row px-3">
                    <p class="fa fa-user options mb-0 mr-4"></p>
                    <p class="fa fa-map-marker options mb-0 mr-4"></p>
                    <p class="fa fa-image options mb-0 mr-4"></p> <img class="options" src="https://img.icons8.com/material/24/000000/more--v2.png" width="30px" height="28px">
                    <input type="submit" class="btn btn-success ml-auto" value="Post">
                </div>
            </div>
        </div>
    </div>
</form>
