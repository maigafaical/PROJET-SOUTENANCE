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

                        <a href="" > <i class="bi bi-pencil-square"></i></a>
                        <a href=""> <i class="bi bi-trash"></i></a>
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
