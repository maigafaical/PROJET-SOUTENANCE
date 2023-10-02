@extends('layouts.mainlayouts')

@section('contenu')
<div class="pagetitle">
    <h1>Tableau Bord</h1>
    <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
        <li class="breadcrumb-item active">Nouvelle soutenance</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Formulaire ajouter une soutenance -->

          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title">Ajout d'une soutenance </h5>

              <form method="POST" action="{{route('soutenances.store')}}" class="row g-3">
                @csrf
                <input type="text" name="users_id" class="form-control" value="{{ Auth::user()->id }}" hidden>
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Date de la soutenance</label>
                <input type="date" class="form-control" name="date">
              </div>

              <div class="col-md-6">
                <label for="inputEmail5" class="form-label">Heure</label>
                <input type="time" class="form-control" name="heure">
              </div>

              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Theme</label>
                <input type="text" class="form-control" name="theme">
              </div>

              <div class="col-md-6">
                <label for="" class="form-label">Choisir un jury</label>
                <select class="form-control"   name="juries_id">
                    <option>Selectionner un  jury</option>
                    @foreach ($juries as $jur)
                    <option value="{{$jur->id}}">{{$jur->libelle}} </option>
                @endforeach
                </select>
              </div>



              <div class="col-md-6">
                <label for="" class="form-label">Choisir une salle</label>
                <select class="form-control"   name="salles_id">
                    <option>Selectionner une salle</option>
                    @foreach ($salles as $salle)
                    <option value="{{$salle->id}}">{{$salle->nom_salle}} </option>
                @endforeach
                </select>
              </div>

              <div class="col-md-6">
                <label for="" class="form-label">Choisir une demande</label>
                <select class="form-control"   name="demandes_id">
                    <option>Selectionner une demande</option>
                    @foreach ($demandes as $demande)
                    <option value="{{$demande->id}}">{{$demande->code}}</option>
                @endforeach
                </select>
              </div>

          

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
              </div>
            </form>

              </div>

            </div>
          </div>
          <!-- End Formulaire inscription etudiant -->

        </div>
      </div>
      <!-- End Left side columns -->

    </div>
  </section>
  @include('require.footer')

@endsection
