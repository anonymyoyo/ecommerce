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

                <div class="div_center">

                    <h2 class="h2_font">Nouvelle Categorie</h2>

                    <form action="{{ url('/add_category') }}" method="POST">

                        @csrf

                        <input type="text" class="input_color" name="category" placeholder="Nom de la categorie">

                        <input type="submit" name="submit" class="btn btn-primary" value="Ajouter">
                    </form>
                </div>
            </div>

        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')

  </body>
</html>
