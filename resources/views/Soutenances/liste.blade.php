@extends('layouts.mainlayouts')

@section('contenu')
<section class="section">
    <div>

    @if (session('status'))
    <div class="alert alert-success">
    {{session('status')}}
    </div>
    @endif

    <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Liste des soutenances</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Date</th>
                  <th scope="col">Heure</th>
                  <th scope="col">Statut</th>
                  <th scope="col">Juries</th>
                  <th scope="col">Salles</th>
                  <th scope="col">Demandes</th>
                  <th scope="col">Users</th>
                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $soutenances as $sout )

                <tr>
                  <td>{{ $sout->id }}</td>
                  <td>{{ $sout->date }}</td>
                  <td>{{ $sout->heure }}</td>
                  <td>{{ $sout->statut }}</td>
                  <td>{{ $sout->juries }}</td>
                  <td>{{ $sout->salle }}</td>
                  <td>{{ $sout->demandes }}</td>
                  <td>{{ $sout->users }}</td>
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
