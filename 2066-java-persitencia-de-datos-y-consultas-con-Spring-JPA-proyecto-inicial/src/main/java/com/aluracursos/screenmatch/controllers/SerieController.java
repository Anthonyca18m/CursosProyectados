package com.aluracursos.screenmatch.controllers;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.aluracursos.screenmatch.dto.EpisodioDTO;
import com.aluracursos.screenmatch.dto.SerieDTO;
import com.aluracursos.screenmatch.service.SerieService;


@RestController
@RequestMapping("/series")
public class SerieController {

    @Autowired
    private SerieService serieService;

    @GetMapping(path = "")
    public List<SerieDTO> obtenerSeries() {
        return serieService.obtenerSeries();
    }
    
    @GetMapping("/top5")
    public List<SerieDTO> obtenerTop5() {
        return serieService.obtenerTop5();
    }

    @GetMapping("/lanzamientos")
    public List<SerieDTO> obtenerLanzamientosRecientes() {
        return serieService.obtenerLanzamientosmasRecientes();
    }

    @GetMapping("/{id}")
    public SerieDTO obtenerSerie(@PathVariable Long id) {
        return serieService.obtenerSerie(id);
    }

    @GetMapping("/{id}/temporadas/todas")
    public List<EpisodioDTO> obtenerTodasLasTemporadas(@PathVariable Long id)
    {
        return serieService.obtenerTodasLasTemporadas(id);
    }

    @GetMapping("/{id}/temporadas/{numeroTemporada}")
    public List<EpisodioDTO> obtenerTemporadaPorNumero(@PathVariable Long id, @PathVariable Long numeroTemporada)
    {
        return serieService.obtenerTemporadaPorNumero(id, numeroTemporada);
    }

    @GetMapping("/categoria/{nombre}")
    public List<SerieDTO> obtenerSeriePorCategoria(@PathVariable String nombre) {
        return serieService.obtenerSeriePorCategoria(nombre);
    }
    
}
