<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>New Post</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
    
        </style>

    </head>
    <body>
        <div class="">
            <p> <h3> Add post </h3> </p>
            <div class="">
                <form>
                    <div class="" style="margin-bottom:10px;">
                      <label for="">Title</label>
                      <input type="text" class="form-control" id="title" aria-describedby="">
                    </div>
                    <div class="form-group">
                      <label for="content">Password</label>
                      <textarea class="form-control" id="content" rows="3"></textarea>
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            
        </div>
    </body>
</html>
