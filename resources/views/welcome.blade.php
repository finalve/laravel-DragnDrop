<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Drag and Drop Example</title>

    <!-- Include jQuery and jQuery UI -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        #subCanvas {
            min-height: 200px;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .draggable {
            cursor: move;
            padding: 5px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            margin-bottom: 5px;
        }

        .droppable {
            min-height: 50px;
            border: 1px dashed #ccc;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Survey</h1>
            <div class="col-4">
                <div id="toolbox">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">toolbox</div>
                            <div class="draggable mb-2" draggable="true" id="textarea">
                                textarea
                            </div>
                            <div class="draggable mb-2" draggable="true" id="select">
                              Selecter
                            </div>
                            <div class="draggable mb-2" draggable="true" id="checkbox">
                              CheckBox
                              </div>
                              <div class="draggable mb-2" draggable="true" id="button">
                                Button
                                </div>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <form action="">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" id="title">survey 1</h5>
                            <div class="droppable" id="Canvas"></div>
                        </div>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
        @vite('resources/js/dragdrop.js')
</body>

</html>