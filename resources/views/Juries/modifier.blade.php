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

              <form method="POST" action="{{route('juries.update', [$juries->id])}}" class="row g-3">
                @method('PATCH')
              @csrf
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Libelle </label>
                <input type="text" class="form-control" name="libelle" value="{{ $juries->libelle}}">
              </div>

              <div class="col-md-6">
                <label for="" class="form-label">Choisir un Enseignant</label>
                <select class="form-control"   name="enseignants_id" value="{{ $juries->enseignants_id}}">
                    <option>Selectionner un enseignant</option>
                    @foreach ($enseignants as $ensei)
                    <option value="{{$ensei->id}}">{{$ensei->nom}} {{$ensei->prenom}}</option>
                    @endforeach
                </select>
              </div>



              <div class="col-md-6">
                <label for="" class="form-label">Choisir un Maitre de stage</label>
                <select class="form-control"   name="maitre_stages_id" value="{{ $juries->maitre_stages_id}}">
                    <option>Selectionner un maitre_stage </option>
                    @foreach ($maitres as $maitre)
                    <option value="{{$maitre->id}}">{{$maitre->nom}} {{$maitre->prenom}}</option>
                @endforeach
                </select>
              </div>
              <div class="col-md-6">
                <label for="" class="form-label">Choisir un President de jury</label>
                <select class="form-control"   name="presidents_id" value="{{ $juries->presidents_id}}">
                    <option>Selectionner un president de jury</option>
                    @foreach ($presidents as $pres)
                    <option value="{{$pres->id}}">{{$pres->nom}} {{$pres->prenom}}</option>
                @endforeach
                </select>
              </div>

              <div class="col-md-6">
                <label for="" class="form-label">Choisir un Directeur de mémoire</label>
                <select class="form-control"   name="directeur_memoires_id" value="{{ $juries->directeur_memoires_id}}">
                    <option>Selectionner un directeur de memoire</option>
                    @foreach ($directeurs as $directeur)
                    <option value="{{$directeur->id}}">{{$directeur->nom}} {{$directeur->prenom}}</option>
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
          <!-- End Formulaire ajouter jury-->

        </div>
      </div>
      <!-- End Left side columns -->

    </div>
  </section>
  @include('require.footer')

@endsection

