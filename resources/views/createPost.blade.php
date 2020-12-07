<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <link rel="stylesheet" href="{{asset('css/createPost.css')}}">
</head>
<body>
     
    
    <div class="d-flex justify-content-center mt-3">
       <form  class="form-horizontal w-75" method="POST" action="/post/createPost">
           @csrf
         <h1 class="my-3" >Create new post</h1>
          <div class="form-group">
           <label for="title">Title: </label>
           <input type="text" class="form-control" id="title" placeholder="title" name="title" required>
          </div>
          <div class="form-group">
           <label for="description">Description: </label>
           <textarea type="text" class="form-control" id="description" rows="7"  name="description"   required> </textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" value="Send">Send</button>
          </div>
        </form>
    <div>

     <script type="text/javascript" src="{{asset('js/createPost.js')}}"></script>
</body>
</html>