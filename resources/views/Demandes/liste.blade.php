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
                  <th scope="col">Nom et Prénom</th>
                  <th scope="col">Email</th>
                  <th scope="col">Date de Naissance</th>
                  <th scope="col">Sexe </th>
                  <th scope="col">Téléphone de l'étudiant </th>
                  <th scope="col">Téléphone des parents </th>
                  <th scope="col">Filière </th>
                  <th scope="col">Niveau d'étude </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
