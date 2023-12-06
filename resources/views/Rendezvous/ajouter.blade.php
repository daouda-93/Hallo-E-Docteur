<!DOCTYPE html>
<html lang="en">

<!-- doccure/  30 Nov 2019 04:11:34 GMT -->
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Doccure</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<!-- Favicons -->
		<link type="image/x-icon" href="{{asset('assets/img/favicon.png')}}" rel="icon">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">

			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="{{route('welcome')}}" class="navbar-brand logo">
							<img src="{{ asset('asset/img/clinique.jpg') }}">
						</a>
					</div>

                    <button class="btn btn-dark"><a href="{{route('welcome')}}">ACCUEIL</a></button>


				</nav>
			</header>
			<!-- /Header -->

			<!-- Home Banner -->
			<div>

				@if (session('status'))
			  <div class="alert alert-success">
			  {{session('status')}}
			  </div>

			  @endif
			<ul>
			@foreach ($errors->all() as $error)
			  <li class="alert alert-danger"> {{ $error }}</li>
			@endforeach
			</ul>
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                  <div class="card-body">
                    <h5 class="card-title">Remplissez ce formulaire pour prendre un rendez-vous! </h5>

                  <form method="POST" action="{{route('rendezvous.store')}}" class="row g-3">
                    @csrf

                  <div class="col-md-6">
                    <label for="inputName5" class="form-label">Nom </label>
                    <input type="text" class="form-control" name="nom">
                  </div>

                  <div class="col-md-6">
                    <label for="inputEmail5" class="form-label">Prénom</label>
                    <input type="text" class="form-control" name="prenom">
                  </div>



                  <div class="col-md-6">
                    <label for="inputPassword5" class="form-label">Age</label>
                    <input type="number" class="form-control" name="age">
                  </div>

                  <div class="col-6">
                    <label for="inputAddress5" class="form-label">Sexe</label>
                    <input type="text" class="form-control" name="sexe">
                  </div>

                  <div class="col-6">
                    <label for="inputAddress5" class="form-label">Téléphone</label>
                    <input type="number" class="form-control" name="telephone">
                  </div>




                  <div class="col-6">
                    <label for="inputAddress5" class="form-label">Date du rendez-vous</label>
                    <input type="date" class="form-control" name="date_rdv">
                  </div>


                    <div class="col-6">
                        <label for="inputAddress5" class="form-label">Heure du rendez-vous</label>
                        <input type="time" class="form-control" name="heure_rdv">
                      </div>

					  <div class="col-6">
                        <label for="inputAddress5" class="form-label">Votre adresse</label>
                        <input type="text" class="form-control" name="adresse">
                      </div>

					  <div class="col-md-6">
						<label for="" class="form-label">Choisir un docteur</label>
						<select class="form-control"   name="docteurs_id">
							<option>Selectionner un  Docteur</option>
							@foreach ($docteurs as $docteur)
							<option value="{{$docteur->id}}">{{$docteur->nom}} {{$docteur->prenom}} </option>
						@endforeach
						</select>
					  </div>

                      <div class="col-6">

                        <select name="statut" class="form-select" hidden>
                          <option value="En attente"> <option>
                        </select>
                      </div>

                  <div class="text-center m-2">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                  </div>
                </form>

                  </div>

                </div>
              </div>

			<!-- Availabe Features -->

			<!-- Footer -->

			<!-- /Footer -->

	   </div>
	   <!-- /Main Wrapper -->

		<!-- sscript -->
		<script src="{{asset('assets/js/jquery.min.js"></script')}}">

		<!-- Bootstrap Core JS -->
		<script src="{{asset('assets/js/popper.min.js"></script')}}">
		<script src="{{asset('assets/js/bootstrap.min.js"></script')}}">

		<!-- Slick JS -->
		<script src="{{asset('assets/js/slick.js"></script')}}">

		<!-- script JS -->
		<script src="{{asset('assets/js/script.js"></script')}}">

	</body>

<!-- doccure/  30 Nov 2019 04:11:53 GMT -->
</html>
