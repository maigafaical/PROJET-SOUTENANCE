@extends('layouts.mainlayouts')

@section('contenu')
<div class="pagetitle">
    <h1>Tableau Bord</h1>
    <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
        <li class="breadcrumb-item active">Nouvelle inscription</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Formulaire inscription etudiant -->

          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title">Ajout d'une nouvelle demande </h5>

              <form class="row g-3">
              <div class="col-md-12">
                <label for="inputName5" class="form-label">Libelle</label>
                <input type="text" class="form-control" name="libelle">
              </div>

              <div class="col-md-6">
                <label for="inputEmail5" class="form-label">Titre</label>
                <input type="text" class="form-control" name="titre">
              </div>

              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Resumé</label>
                <input type="text" class="form-control" name="resume">
              </div>

              <div class="col-6">
                  <label for="inputAddress5" class="form-label"> Statut de la demande</label>
                  <select name="statut" class="form-select">
                      <option>Choisir le statut ...</option>
                      <option value="Homme">Acceptée</option>
                      <option value="Femme">Rejéttée</option>
                    </select>
              </div>

              <div class="col-6">
                <label for="inputAddress5" class="form-label">Date</label>
                <input type="date" class="form-control" name="date">
              </div>


              <div class="col-md-4">
                <label for="inputCity" class="form-label">Etablissement</label>
                <input type="text" class="form-control" name="etablissement">
              </div>

              <div class="col-md-4">
                <label for="inputState" class="form-label">Filière étudiant</label>
                <select name="filiere" class="form-select">
                  <option>Choisir la filière ...</option>
                  <option>Informatique de Gestion</option>
                  <option>Reseaux Informatique</option>
                  <option>Comptabilité Générale</option>
                  <option>Communication Digitale</option>
                </select>
              </div>

              <div class="col-md-4">
              <label for="inputState" class="form-label">Niveau étude</label>
                  <select name="niveau" class="form-select">
                      <option>Choisir le niveau ...</option>
                      <option>1ere année</option>
                      <option>2eme année</option>
                      <option>3eme année</option>
                      <option>4eme année</option>
                      <option>5eme année</option>
                      <option>6eme année</option>
                      <option>7eme année</option>
                  </select>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-danger">Effacer</button>
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
