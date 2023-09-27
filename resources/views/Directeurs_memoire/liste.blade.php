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
            <h5 class="card-title">Liste des directeurs de memoire</h5>


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prénom</th>
                  <th scope="col">Adresse</th>
                  <th scope="col">Telephone </th>
                  <th scope="col">Fonction </th>
                  <th scope="col">Action </th>

                </tr>
              </thead>
              <tbody>
                @foreach ( $directeurs as $direc )
                <tr>
                  <td>{{ $direc->id }}</td>
                  <td>{{ $direc->nom }}</td>
                  <td>{{ $direc->prenom }}</td>
                  <td>{{ $direc->adresse }}</td>
                  <td>{{ $direc->telephone }}</td>
                  <td>{{ $direc->fonction }}</td>


                  <td>

                    <a href="{{ route('directeurs.edit', $direc->id) }}" > <i class="bi bi-pencil-square"></i></a>
                    <a href="{{ url('supprimer-directeur/' .$direc->id) }}"> <i class="bi bi-trash"></i></a>
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
