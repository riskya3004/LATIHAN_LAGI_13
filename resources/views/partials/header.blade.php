<div class="w-100 d-flex align-items-center justify-content-center" style="background-color: cyan ; height: 70px">
    <h3>Giant Book Supplier</h3>
</div>


<div class="container w-100 d-flex align-items-center justify-content-center">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu">
                @php
                    $category = App\Models\Category::All();
                @endphp
                @foreach ($category as $category)
                    <li><a class="dropdown-item" href="/category/{{ $category->id }}">{{ $category->name }}</a></li>
                @endforeach
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/publisher">Publisher</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
</div>
