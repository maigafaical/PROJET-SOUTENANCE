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
                  <th scope="col">Theme</th>
                  <th scope="col">Juries</th>
                  <th scope="col">Salles</th>
                  <th scope="col">Demandes</th>
                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $soutenances as $sout )

                <tr>
                  <td>{{ $sout->id }}</td>
                  <td>{{ $sout->date }}</td>
                  <td>{{ $sout->heure }}</td>
                  <td>{{ $sout->theme }}</td>
                  <td>{{ $sout->juries_id }}</td>
                  <td>{{ $sout->salles_id }}</td>
                  <td>{{ $sout->demandes_id }}</td>
                  <td>
                    <a href="{{ route('soutenances.edit', $sout->id) }}" > <i class="bi bi-pencil-square"></i></a>
                    <a href="{{ url('supprimer-soutenance/' .$sout->id) }}"> <i class="bi bi-trash"></i></a>
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
