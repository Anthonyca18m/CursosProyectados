package com.aluracursos.screenmatch.controllers;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class SerieController {

    @GetMapping(path = "/series")
    public String mostrarMensaje() {
        return "oli";
    }

}
