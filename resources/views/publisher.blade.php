<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
@vite(['resources/js/app.js'])
</head>
<body>
    <div class="container-fluid py-3" style = "background-color:gold">
        <div class="container d-flex justify-content-center">
            <h1>Giant Book Store</h1>
        </div>
    </div>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav d-flex justify-content-center">
                  <a class="nav-link active" href=" {{route('home')}} ">Home</a>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="{{ route('home')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($category as $category)
                            <li><a class="dropdown-item" href="{{route('category', ['id'=>$category->id_category])}}">{{ $category-> categoryName}}</a></li>
                        @endforeach
                    </ul>
                  </li>
                  <a class="nav-link active" href="{{ route('publisher')}}">Publisher</a>
                  <a class="nav-link active" href="{{ route('contact')}}">Contact</a>
                </div>
              </div>
            </div>
          </nav>
    </div>
    <div class="container" style='background-color:antiquewhite'>
        <h1>Authors</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">                
                @foreach($publisher as $p)
                    <div class="mb-3">
                        <a href="{{ route('publisherSpecific', ['id'=>$p->id_publisher])}}"> {{$p->publisherName}} </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
</body>
</html>