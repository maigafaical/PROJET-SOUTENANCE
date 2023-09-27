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
            <h5 class="card-title">Liste des enseignants</h5>


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prénom</th>
                  <th scope="col">Telephone</th>
                  <th scope="col">Email </th>
                  <th scope="col">Actions </th>

                </tr>
              </thead>
              <tbody>
                @foreach ( $enseignants as $ens )
                <tr>
                  <td>{{ $ens->id }}</td>
                  <td>{{ $ens->nom }}</td>
                  <td>{{ $ens->prenom }}</td>
                  <td>{{ $ens->telephone }}</td>
                  <td>{{ $ens->email }}</td>


                  <td>
                    <a href="{{ route('enseignants.edit', $ens->id) }}" > <i class="bi bi-pencil-square"></i></a>
                    <a href="{{ url('supprimer-enseignant/' .$ens->id)}}"> <i class="bi bi-trash"></i></a>
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
