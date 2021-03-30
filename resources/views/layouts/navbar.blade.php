
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('admin.dashboard')}}">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="app-nav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="members.php">Company</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('admin.members')}}">Members</a></li>
        </ul>
        <ul class="navbar-nav navbar-right">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Username
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Edit Profil</a>
              <a class="dropdown-item" href="#">Setting</a>
              <a class="dropdown-item" href="{{ route('admin.logout')}}">Logout</a>
            </div>
          </li>
        </ul>
        </div>
      </div>
    </nav>
