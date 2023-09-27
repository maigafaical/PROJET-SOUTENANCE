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
            <h5 class="card-title">Liste des presidents de jury</h5>
            <h5 class="card-title">DListee des présidents</h5>


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
                @foreach ( $presidents as $pres )
                <tr>
                  <td>{{ $pres->id }}</td>
                  <td>{{ $pres->nom }}</td>
                  <td>{{ $pres->prenom }}</td>
                  <td>{{ $pres->adresse }}</td>
                  <td>{{ $pres->telephone }}</td>
                  <td>{{ $pres->fonction }}</td>


                  <td>
                    <a href="{{ route('presidents.edit', $pres->id) }}" > <i class="bi bi-pencil-square"></i></a>
                    <a href="{{ url('supprimer-president/' .$pres->id) }}"> <i class="bi bi-trash"></i></a>
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
