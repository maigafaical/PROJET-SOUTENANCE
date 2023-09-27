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
            <h5 class="card-title">Liste des maitres de stage</h5>


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
                @foreach ( $maitres as $maitre )
                <tr>
                  <td>{{ $maitre->id }}</td>
                  <td>{{ $maitre->nom }}</td>
                  <td>{{ $maitre->prenom }}</td>
                  <td>{{ $maitre->adresse }}</td>
                  <td>{{ $maitre->telephone }}</td>
                  <td>{{ $maitre->fonction }}</td>


                  <td>

                    <a href="{{ route('maitres.edit', $maitre->id) }}" > <i class="bi bi-pencil-square"></i></a>
                    <a href="{{ url('supprimer-maitre/' .$maitre->id) }}"> <i class="bi bi-trash"></i></a>
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
