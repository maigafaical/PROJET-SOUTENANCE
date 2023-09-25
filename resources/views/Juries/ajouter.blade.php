@extends('layouts.mainlayouts')

@section('contenu')

<div class="pagetitle">

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
    <h1>Tableau Bord</h1>
    <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
        <li class="breadcrumb-item active">Nouveau Jury</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">

    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Formulaire ajouter jury -->

          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title">Ajouter un nouveau jury </h5>

              <form method="POST" action="{{route('juries.store')}}" class="row g-3">

              <div class="col-md-6">
                <label for="inputName5" class="form-label">Libelle </label>
                <input type="text" class="form-control" name="libelle">
              </div>

              <div class="col-md-6">
                <label for="inputEmail5" class="form-label">Enseignants</label>
                <input type="text" class="form-control" name="enseignants_id">
              </div>



              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Users</label>
                <input type="text" class="form-control" name="users_id">
              </div>

              <div class="col-6">
                <label for="inputAddress5" class="form-label">Maitre_stages</label>
                <input type="text" class="form-control" name="maitre_stages_id">
              </div>

              <div class="col-6">
                <label for="inputAddress5" class="form-label">Presidents</label>
                <input type="text" class="form-control" name="presidents_id">
              </div>

              <div class="col-6">
                <label for="inputAddress5" class="form-label">Directeur_memoires</label>
                <input type="text" class="form-control" name="directeur_memoires_id">
              </div>


              <div class="text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
              </div>
            </form>

              </div>

            </div>
          </div>
          <!-- End Formulaire ajouter jury-->

        </div>
      </div>
      <!-- End Left side columns -->

    </div>
  </section>
  @include('require.footer')

@endsection

