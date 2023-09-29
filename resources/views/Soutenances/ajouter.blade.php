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
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Date de la soutenance</label>
                <input type="date" class="form-control" name="date">
              </div>

              <div class="col-md-6">
                <label for="inputEmail5" class="form-label">Heure</label>
                <input type="time" class="form-control" name="heure">
              </div>

              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Statut de la demande</label>
                <input type="text" class="form-control" name="statut">
              </div>

              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Jury</label>
                <input type="text" class="form-control" name="juries_id">
              </div>


              <div class="col-6">
                <label for="inputAddress5" class="form-label">Salle</label>
                <input type="text" class="form-control" name="salles_id">
              </div>

              <div class="col-6">
                <label for="inputAddress5" class="form-label">Demande</label>
                <input type="text" class="form-control" name="demandes_id">
              </div>

              <div class="col-6">
                <label for="inputAddress5" class="form-label">User</label>
                <input type="text" class="form-control" name="user_id">
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
