


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Get Post</title>
</head>


<body>

<div class='container'>
<ul class="nav nav-tabs mt-5">
  <li class="nav-item">
    <a class="nav-link text-dark" aria-current="page" href="{{route('posts.show')}}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="{{route('posts.details')}}">Show All details</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{route('posts.show')}}">edit post by {{$post['creator_name']}}</a>
  </li>
</ul>
</div> 




<div class='container'>
<img class="mt-3 mb-3" src="{{ asset('uploads/' . $post->image) }}" alt="Card image cap" width = '250' height = '250'>

<form action="{{ route('posts.update')}}" method="POST" enctype="multipart/form-data">   
    @csrf  
        
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" value = "{{$post['title']}}" placeholder="title ..">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" id="content" rows="3" > {{$post['content']}}</textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput2" class="form-label">creator name</label>
  <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name .." value = "{{$post['creator_name']}}">
</div>
        <div class="form-group">
    <label for="formControlFile1">Add post image (Optional)</label>
    <input type="file" class="form-control-file" name='image' id="formControlFile1">
  </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>