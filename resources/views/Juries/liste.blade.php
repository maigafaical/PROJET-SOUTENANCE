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
                  <th scope="col">Nom_Enseignant</th>
                  <th scope="col">Nom_Maitre_stage</th>
                  <th scope="col">Nom_President_jury</th>
                  <th scope="col">Nom_Directeur_memoire</th>
                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $juries as $jur )
                <tr>
                    <td>{{ $jur->id }}</td>
                    <td>{{ $jur->libelle }}</td>
                    <td>{{ $jur->enseignant->nom }} {{ $jur->enseignant->prenom }}</td>
                    <td>{{ $jur->maitre_stage->nom   }}  {{ $jur->maitre_stage->prenom }}</td>
                    <td>{{ $jur->president->nom  }} {{ $jur->president->prenom }}</td>
                    <td>{{ $jur->directeur_memoire->nom  }} {{ $jur->directeur_memoire->prenom  }}  </td>
                    <td>
                      <a href="{{ route('juries.edit', $jur->id) }}" > <i class="bi bi-pencil-square"></i></a>
                      <a href="{{ route('juries.destroy', $jur->id) }}"> <i class="bi bi-trash"></i></a>
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
