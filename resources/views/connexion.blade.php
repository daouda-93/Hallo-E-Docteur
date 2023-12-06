<
<!DOCTYPE html>
<html lang="en">

@include('resources.head')

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <h1>Université TECH</h1>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Connectez-vous</h5>
                  </div>
                  <div class="text-center">
                    <img src="assets/img/logo.jpg" class="rounded-circle ml-6" style="width: 90px">
                  </div>

                  @foreach ($errors->all() as $error)
                      {{ $error}}
                  @endforeach
                  <form method="POST" action="{{route('authenticate')}}">
                    @csrf
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Nom d'Utilisateur</label>
                      <div class="input-group has-validation">
                        <input type="text" name="name" class="form-control"  required>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de Passe</label>
                      <input type="password" name="password" class="form-control" required>
                    </div>


                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Connexion</button>
                    </div>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('resources.js')

</body>

</html>
