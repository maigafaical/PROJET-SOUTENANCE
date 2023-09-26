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
        <li class="breadcrumb-item active">Nouveau directeur</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">

    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Formulaire ajout du directeur -->

          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title">ajout d'un nouveau directeur </h5>

              <form method="POST" action="{{route('directeurs.update', $directeurs->id)}}" class="row g-3">
                @method('PATCH')
                @csrf
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Nom </label>
                <input type="text" class="form-control" name="nom" value="{{ $directeurs->nom}}">
              </div>
              @csrf
              <div class="col-md-6">
                <label for="inputEmail5" class="form-label">Prénom</label>
                <input type="text" class="form-control" name="prenom" value="{{ $directeurs->prenom}}">
              </div>



              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Adresse </label>
                <input type="texte" class="form-control" name="adresse" value="{{ $directeurs->adresse}}">
              </div>

              <div class="col-6">
                <label for="inputAddress5" class="form-label">Telephone</label>
                <input type="number" class="form-control" name="telephone" value="{{ $directeurs->telephone}}">
              </div>

              <div class="col-6">
                <label for="inputAddress5" class="form-label">Fonction</label>
                <input type="text" class="form-control" name="fonction" value="{{ $directeurs->fonction}}">
              </div>






              <div class="text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
              </div>
            </form>

              </div>

            </div>
          </div>
          <!-- End Formulaire d'un nouveau directeur -->

        </div>
      </div>
      <!-- End Left side columns -->

    </div>
  </section>
  @include('require.footer')

@endsection
