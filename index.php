<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>

    <!-- bs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php

    // definizione della classe
    class Movie{

        // attributi della classe
        public $title;
        public $director;
        public $year;
        public $genre;
        public $duration;

    }

    // richiamata la classe, si crea l'istanza
    $ilLabirintoDelFauno = new Movie();

    // accedo agli attributi della classe
    $ilLabirintoDelFauno -> title = 'Il labirinto del Fauno';
    $ilLabirintoDelFauno -> director = 'Guillermo del Toro';
    $ilLabirintoDelFauno -> year = 2006;
    $ilLabirintoDelFauno -> genre = 'Dark Fantasy';
    $ilLabirintoDelFauno -> duration = '119 min';
    
    var_dump($ilLabirintoDelFauno)

    ?>

    <main class="container py-5">
        <h1>
            PHP OOP 1
        </h1>

        <div>

        </div>
    </main>

    <!-- bs -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>