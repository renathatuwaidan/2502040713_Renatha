<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
</head>
@vite(['resources/js/app.js'])
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
    <div class="container-fluid">
        <div class="container">
            <div class="row">
            @foreach($books as $b)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card" style="width: 100%;">
                        <img src="{{$b->bookImage}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$b->bookAuthor}} </h5>
                            <p class="card-text">{{$b->bookSynopsis}}</p>
                            <a href="{{ route('bookDetail', ['id'=>$b->id_book])}}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </div>
</body>
</html>