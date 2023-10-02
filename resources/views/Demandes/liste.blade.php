@extends('layouts.mainlayouts')

@section('contenu')
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Liste des demandes</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Statut</th>
                  <th scope="col">Date </th>
                  <th scope="col">Période </th>
                  <th scope="col">Etudiant </th>
                  
                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $demandes as $demande )
                <tr>
                  <td>{{ $demande->id }}</td>
                  <td>{{ $demande->statut }}</td>
                  <td>{{ $demande->date }}</td>
                  <td>{{ $demande->periode }}</td>
                  <td>{{ $demande->etudiant->nom }} {{ $demande->etudiant->prenom }}</td>
                 

                  <td>
                    @if (Auth::user()->roles_id == '1')
                    @elseif (Auth::user()->roles_id == '3')
                    <a href="{{ route('demandes.edit', $demande->id) }}" > <i class="btn btn-info">Approuver</i></a>
                   

                    @else

                    @endif 

                    @if (Auth::user()->roles_id == '3')
                    <a href="{{ url('supprimer-demande/' .$demande->id)}}"> <i class="btn btn-danger">Rejetter</i></a>

                    @else

                    @endif
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
