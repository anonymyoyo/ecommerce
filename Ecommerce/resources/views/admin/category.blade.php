<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">
        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }

        .h2_font
        {
            font-size: 30px;
            padding-bottom: 30px;
        }

        .input_color
        {
            color: black;
        }

        .center
        {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 2px solid aliceblue;
        }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.header')
        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">

                @if(session()->has('ajout'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('ajout') }}
                    </div>
                @endif

                @if(session()->has('suppression'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('suppression') }}
                    </div>
                @endif

                <div class="div_center">

                    <h2 class="h2_font">Nouvelle Categorie</h2>

                    <form action="{{ url('/add_category') }}" method="POST">

                        @csrf

                        <input type="text" class="input_color" name="category" placeholder="Nom de la categorie">

                        <input type="submit" name="submit" class="btn btn-primary" value="Ajouter">
                    </form>
                </div>

                <table class="center">
                    <tr>
                        <td>Nom de la categorie</td>
                        <td>Action</td>
                    </tr>

                    @foreach ($data as $data)
                        <tr>
                            <td>
                                {{ $data->category_name}}
                            </td>
                            <td>
                                <a onclick="return confirm('Voulez-vous supprimer la categorie? ')" href="{{ url('delete_category', $data->id) }}" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>

        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')

  </body>
</html>
