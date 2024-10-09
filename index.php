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

        // definizione del costruttore per non utilizzare quello implicito
        function __construct($title, $director, $year, $genre, $duration){
            $this -> title = $title;
            $this -> director = $director;
            $this -> year = $year;
            $this -> genre = $genre;
            $this -> duration = $duration;
        }

        public function getFullData(){
            return 'Title: '.$this->title.', Director: '.$this->director.', Year: '.$this->year.', Genre: '.$this->genre.', Duration: '.$this->duration;
        }

    }

    // richiamata la classe, si crea l'istanza
    // accedo agli attributi della classe valorizzando l'istanza
    $ilLabirintoDelFauno = new Movie('Il labirinto del Fauno', 'Guillermo del Toro', 2006, 'Dark Fantasy', '119 min');
    
    var_dump($ilLabirintoDelFauno);
    var_dump($ilLabirintoDelFauno->getFullData());

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