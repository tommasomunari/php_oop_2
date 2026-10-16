<?php

class Continente{
    public $nomecontinente;

    public function __construct($continente){
        $this->nomecontinente = $continente;
    }

}

class Country extends Continente{
    public $nomecountry;

    public function __construct($continente, $country){
        parent::__construct($continente);
        $this->nomecountry = $country;
    }
}

class Regione extends Country{
    public $nomeregione;

    public function __construct($continente, $country, $regione){
        parent::__construct($continente, $country);
        $this->nomeregione = $regione;
    }
}

class Provincia extends Regione{
    public $nomeprovincia;

    public function __construct($continente, $country, $regione, $provincia){
        parent::__construct($continente, $country, $regione);
        $this->nomeprovincia = $provincia;
    }
}


class City extends Provincia{
    public $nomecity;

    public function __construct($continente, $country, $regione, $provincia, $city){
        parent::__construct($continente, $country, $regione, $provincia);
        $this->nomecity = $city;
    }
}


class Street extends City{
    public $nomestreet;

    public function __construct($continente, $country, $regione, $provincia, $city, $street){
        parent::__construct($continente, $country, $regione, $provincia, $city);
        $this->nomestreet = $street;
    }

    public function position(){
    echo "Mi trovo in $this->nomecontinente, $this->nomecountry, $this->nomeregione, $this->nomeprovincia, $this->nomecity, $this->nomestreet";
}
}


$mylocation = new Street ("Europa", "Italia", "Liguria", "GE", "Sestri Levante", "Via Della Chiusa");

print_r($mylocation);

$mylocation->position();
