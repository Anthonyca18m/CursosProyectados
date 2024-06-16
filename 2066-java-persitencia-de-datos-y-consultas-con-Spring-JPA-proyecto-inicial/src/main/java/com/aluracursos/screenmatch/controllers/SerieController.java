package com.aluracursos.screenmatch.controllers;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

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
    
}
