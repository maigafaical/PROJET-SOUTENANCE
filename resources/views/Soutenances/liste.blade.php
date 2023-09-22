@extends('layouts.mainlayouts')

@section('contenu')

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
<section class="section">
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
                  <th scope="col">Nom et Prénom</th>
                  <th scope="col">Email</th>
                  <th scope="col">Date de Naissance</th>
                  <th scope="col">Sexe </th>
                  <th scope="col">Téléphone de l'étudiant </th>
                  <th scope="col">Téléphone des parents </th>
                  <th scope="col">Filière </th>
                  <th scope="col">Niveau d'étude </th>
                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $etudiants as $etud )

                @endforeach
                <tr>
                  <td>{{ $etud->id }}</td>
                  <td>{{ $etud->nom_prenom }}</td>
                  <td>{{ $etud->email }}</td>
                  <td>{{ $etud->date_naissance }}</td>
                  <td>{{ $etud->sexe }}</td>
                  <td>{{ $etud->phone_etudiant }}</td>
                  <td>{{ $etud->phone_parents }}</td>
                  <td>{{ $etud->filiere }}</td>
                  <td>{{ $etud->niveau }}</td>
                  <td>
                    <a href="#"{{ $cli->id }} class="btn btn-info">Modifier</a>
                    <a href="#"{{ $cli->id }} class="btn btn-danger">supprimer</a>
                  </td>
                </tr>

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
