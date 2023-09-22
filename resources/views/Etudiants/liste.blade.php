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
            <h5 class="card-title">Datatables</h5>
            <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prénom</th>
                  <th scope="col">Date de Naissance</th>
                  <th scope="col">Sexe </th>
                  <th scope="col">Téléphone </th>
                  <th scope="col">Filière </th>
                  <th scope="col">Niveau d'étude </th>
                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $etudiants as $etud )
                <tr>
                  <td>{{ $etud->id }}</td>
                  <td>{{ $etud->nom }}</td>
                  <td>{{ $etud->prenom }}</td>
                  <td>{{ $etud->date_naissance }}</td>
                  <td>{{ $etud->sexe }}</td>
                  <td>{{ $etud->phone_etudiant }}</td>
                  <td>{{ $etud->filiere }}</td>
                  <td>{{ $etud->niveau }}</td>
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
