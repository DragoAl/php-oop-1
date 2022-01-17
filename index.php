<!-- *
* DEFINIRE CLASSE Film:
*      Attributi:
*      - titolo
*      - sottotitolo
*      - regista
* 
*      Metodi:
*      - costruttore che accetta titolo
*      - getFullTitle: 
*          Se sottotitolo presente:
*            restituisce "titolo: sottotitolo" 
*          Se sottotiolo assente:
*            restituisce "titolo" 
*      - __toString: 
*          Se regista presente:
*            restituisce "fullTitle | regista"
*          Se regista assente:
*            restituisce "fullTitle | ???"
* 
* UTILIZZO OGGETTI Film:
* 
*      Generare 3 istanze della classe Film:
*      - uno con solo il titolo
*      - uno con titolo e sottotitolo
*      - uno con titolo, sottotiolo e regista
* 
*      Stampare tutti gli oggetti tramite toString (implicito)
* 
*  RISULTATO ATTESO:
* 
*      Matrix | ???
*      Fantozzi 2: il ritorno di fantozzi | ???
*      Peter Pan: il ritorno all'isola che non c'e' | Robin Budd
*/ -->

<?php
    class Film {
        public $title;
        public $subtitle;
        public $movie_director;

        public function __construct($title) {
            return $this->title = $title;
        }
        public function getFullTitle() {
            if ($this-> subtitle === NULL) {
                return $this -> title;
            } else {
                return $this -> title . "  ". $this -> subtitle;
            }
        }
        public function __toString() {
            if ($this -> movie_director === NULL ) {
                return $this -> getFullTitle() ." | ". "???";

            } else {
                return $this -> getFullTitle() ." | ". $this -> movie_director;
            }
        }
    }
    $f1 = new Film("Matrix");
    $f2 = new Film("Fantozzi 2");
    $f3 = new Film("Peter Pan" );
    
    $f2 -> subtitle = ":il ritorno di fantozzi";
    $f3 -> subtitle = ":il ritorno all'isola che non c'e' ";
    $f3 -> movie_director = "Robin Budd";

    echo "FILM:". $f1."<br>";
    echo "FILM:". $f2."<br>";
    echo "FILM:". $f3."<br>";

?>