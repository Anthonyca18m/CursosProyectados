package com.aluracursos.screenmatch.controllers;

import java.util.List;
import java.util.stream.Collectors;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

import com.aluracursos.screenmatch.dto.SerieDTO;
import com.aluracursos.screenmatch.repository.SerieRepository;

@RestController
public class SerieController {

    @Autowired
    private SerieRepository serieRepository;

    @GetMapping(path = "/series")
    public List<SerieDTO> obtenerSeries() {
        return serieRepository.findAll().stream()
            .map(e -> new SerieDTO(
                e.getTitulo(), 
                e.getTotalTemporadas(), 
                e.getEvaluacion(), 
                e.getPoster(), 
                e.getGenero(), 
                e.getActores(), 
                e.getSinopsis()))
            .collect(Collectors.toList());
    }

}
