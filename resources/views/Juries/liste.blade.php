@extends('layouts.mainlayouts')

@section('contenu')


<section class="section">
    <div>

    @if (session('status'))
    <div class="alert alert-success">
    {{session('status')}}
    </div>
    @endif

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Liste des juries</h5>


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Libelle</th>
                  <th scope="col">Nom_Enseignant</th>
                  <th scope="col">Nom_Maitre_stage</th>
                  <th scope="col">Nom_President_jury</th>
                  <th scope="col">Nom_Directeur_memoire</th>
                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $juries as $jur )
                <tr>
                    <td>{{ $jur->id }}</td>
                    <td>{{ $jur->libelle }}</td>
                    <td>{{ $jur->enseignants->nom }} {{ $jur->enseignant->prenom }}</td>
                    <td>{{ $jur->users_id }}</td>
                    <td>{{ $jur->maitre_stage->nom }}  {{ $jur->maitre_stage->prenom }}</td>
                    <td>{{ $jur->presidents->nom }} {{ $jur->president->prenom }}</td>
                    <td>{{ $jur->directeur_memoires->nom}} {{ $jur->directeur_memoires->prenom}}  </td>
                    <td>
                    <a href="#" class="btn btn-info">Modifier</a>
                    <a href="#" class="btn btn-danger">supprimer</a>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
