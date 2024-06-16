package com.aluracursos.screenmatch.service;

import java.util.List;
import java.util.Optional;
import java.util.stream.Collectors;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.aluracursos.screenmatch.dto.SerieDTO;
import com.aluracursos.screenmatch.model.Serie;
import com.aluracursos.screenmatch.repository.SerieRepository;

@Service
public class SerieService {

    @Autowired
    private SerieRepository serieRepository;

    public List<SerieDTO> obtenerSeries() {
        return convierteDatos(serieRepository.findAll());
    }

    public List<SerieDTO> obtenerTop5() {
        return convierteDatos(serieRepository.findTop5ByOrderByEvaluacionDesc());
    }

    public List<SerieDTO> obtenerLanzamientosmasRecientes() {
        return convierteDatos(serieRepository.lanzamientosMasRecientes());
    }

    public List<SerieDTO> convierteDatos(List<Serie> serie) {
        return serie.stream().map(s -> new SerieDTO(
            s.getId(),
            s.getTitulo(), 
            s.getTotalTemporadas(), 
            s.getEvaluacion(), 
            s.getPoster(), 
            s.getGenero(), 
            s.getActores(), 
            s.getSinopsis()))
            .collect(Collectors.toList());
    }

    public SerieDTO obtenerSerie(Long id) {
        Optional<Serie> serie = serieRepository.findById(id);
        if (serie.isPresent()) {
            return new SerieDTO(
                serie.get().getId(),
                serie.get().getTitulo(), 
                serie.get().getTotalTemporadas(),
                serie.get().getEvaluacion(),
                serie.get().getPoster(),
                serie.get().getGenero(),
                serie.get().getActores(),
                serie.get().getSinopsis()
                );
        } else {
            return null;
        }
    }

}
