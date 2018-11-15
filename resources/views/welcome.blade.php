<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
        <script src="js/preload.js"></script>
        <script src="js/scripts.js"></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">

                <div class="container">
                    <div class="row">
                        <h1>Test project</h1>
                        <table class="table">
                            <thead>
                            <th>название</th>
                            <th>цена</th>
                            <th>количество</th>
                            <th> <input type="button" class="btn btn-danger" value="update" onclick="update()"></th>
                            </thead>
                            <tbody id="table">
                                @include('preloader')
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </body>
<script>

</script>
</html>
