package com.aluracursos.screenmatch.repository;

import java.util.List;
import java.util.Optional;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

import com.aluracursos.screenmatch.model.Categoria;
import com.aluracursos.screenmatch.model.Episodio;
import com.aluracursos.screenmatch.model.Serie;

public interface SerieRepository extends JpaRepository<Serie, Long> {

    Optional<Serie> findByTituloContainsIgnoreCase(String nombreSerie);

    List<Serie> findTop5ByOrderByEvaluacionDesc();

    List<Serie> findByGenero(Categoria genero);

    @Query(value = "SELECT * FROM series WHERE series.total_temporadas < :temps AND series.evaluacion > :evaluacion", nativeQuery = true)
    List<Serie> seriesPorTemporadayEvaluacion(Integer temps, Double evaluacion);

    @Query(value = "SELECT ep FROM Serie s JOIN s.episodios ep WHERE ep.titulo ILIKE %:nombreEpisodio%")
    List<Episodio> episodiosPorNombre(String nombreEpisodio);

    @Query(value = "SELECT e FROM Serie s JOIN s.episodios e WHERE s = :serie ORDER BY e.evaluacion DESC LIMIT 5")
    List<Episodio> top5Episodios(Serie serie);
}
