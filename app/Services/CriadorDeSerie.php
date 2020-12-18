<?php

namespace App\Services;

use App\Serie;
use App\Temporada;
use Illuminate\Support\Facades\DB;

class CriadorDeSerie{

    public function criarSerie(string $nomeSerie, int $qtdTemporadas, int $epPorTemporada) : Serie {
        
        DB::beginTransaction();

        $serie = Serie::create(['nome' => $nomeSerie]);
        $this->criarTemporadas($serie, $qtdTemporadas, $epPorTemporada);

        DB::commit();

        return $serie;
    }

    function criarTemporadas(Serie $serie, int $qtdTemporadas, int $epPorTemporada): void {
        for ($i = 1; $i <= $qtdTemporadas; $i++){
            $temporada = $serie->temporadas()->create(['numero' => $i]);
            $this->criarEpisodios($temporada, $epPorTemporada);
        }
    }

    function criarEpisodios(Temporada $temporada, int $epPorTemporada): void{
        for ($j = 1; $j <= $epPorTemporada; $j++){
            $temporada->episodios()->create(['numero' => $j]);
        }
    }

}