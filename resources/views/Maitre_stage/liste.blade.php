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
