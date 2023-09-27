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
            <h5 class="card-title">Liste des salles</h5>


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nom_salle</th>
                  <th scope="col">Capacite</th>
                  <th scope="col">Action</th>


                </tr>
              </thead>
              <tbody>
                @foreach ( $salles as $sal )
                <tr>
                  <td>{{ $sal->id }}</td>
                  <td>{{ $sal->nom_salle }}</td>
                  <td>{{ $sal->capacite }}</td>



                  <td>
                    <a href="{{ route('salles.edit', $sal->id) }}" > <i class="bi bi-pencil-square"></i></a>
                    <a href="{{ route('salles.destroy', $sal->id) }}"> <i class="bi bi-trash"></i></a>
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
