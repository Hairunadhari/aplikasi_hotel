<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/home.css">
  </head>
  <body>
     <div class="containers">
      <div class="card">
        <div class="nav">
          <nav class="navbar navbar-expand-lg navbar-light " >
            <div class="container-fluid">
              
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                  <a class="nav-link" href="#">Kamar</a>
                  <a class="nav-link" href="#">Fasilitas</a>
                </div>
              </div>
              <ul class="navbar-nav ms-auto" >
                <!-- Authentication Links -->
                @guest
                    
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            </div>
          </nav>
        </div>
      </div>   
    </div>

    <div class="namahotel">
      <h1>Hotel Traveluka</h1>
    </div>

      <div class="gambar">
        <img src="https://anekatempatwisata.com/wp-content/uploads/2022/01/Grand-Hotel-Preanger-Bandung-republika.jpg" alt="">
      </div>

      <div class="about-us">
        <h2>
          About-Us
        </h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quisquam amet quos consectetur velit beatae, laudantium possimus illum voluptas. Ullam quae, beatae soluta ducimus corporis temporibus impedit delectus doloribus accusamus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem perferendis molestias delectus repudiandae saepe illum recusandae, in tempora ducimus nisi eum officia aspernatur magni. Suscipit aliquam eligendi aspernatur dolorum sit?
        </p>
      </div>
 


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

   