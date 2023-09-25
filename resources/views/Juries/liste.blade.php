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
                  <th scope="col">Libelle</th>
                  <th scope="col">Enseignant</th>
                  <th scope="col">L'utilisateur</th>
                  <th scope="col">Maitre de stage</th>
                  <th scope="col">President du jury</th>
                  <th scope="col">Directeur de memoire</th>
                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $juries as $jur )
                <tr>
                    <td>{{ $jur->id }}</td>
                    <td>{{ $jur->libelle }}</td>
                    <td>{{ $jur->enseignants_id }}</td>
                    <td>{{ $jur->users_id }}</td>
                    <td>{{ $jur->maitre_stage_id }}</td>
                    <td>{{ $jur->presidents_id }}</td>
                    <td>{{ $jur->directeur_memoires_id }}</td>
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
