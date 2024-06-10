package com.aluracursos.screenmatch.models;

import java.time.LocalDate;

public class Episodio {

    private Integer temporada;
    private String titulo;
    private Integer episodio;
    private Double evaluacion;
    private LocalDate fechaDeLanzamiento;

    public Episodio(Integer numero, DatosEpisodio d) {
        this.temporada = numero;
        this.titulo = d.titulo();
        this.episodio = d.numeroEpisodio();
        try {
            this.evaluacion = Double.valueOf(d.evaluacion());
            this.fechaDeLanzamiento = LocalDate.parse(d.fechaLanzamiento());
        } catch (Exception e) {
            this.evaluacion = 0.0;
            this.fechaDeLanzamiento = null;
        }
        
    }

    public Integer getTemporada() {
        return temporada;
    }
    public void setTemporada(Integer temporada) {
        this.temporada = temporada;
    }
    public String getTitulo() {
        return titulo;
    }
    public void setTitulo(String titulo) {
        this.titulo = titulo;
    }
    public Integer getEpisodio() {
        return episodio;
    }
    public void setEpisodio(Integer episodio) {
        this.episodio = episodio;
    }
    public Double getEvaluacion() {
        return evaluacion;
    }
    public void setEvaluacion(Double evaluacion) {
        this.evaluacion = evaluacion;
    }
    public LocalDate getFechaDeLanzamiento() {
        return fechaDeLanzamiento;
    }
    public void setFechaDeLanzamiento(LocalDate fechaDeLanzamiento) {
        this.fechaDeLanzamiento = fechaDeLanzamiento;
    }

    @Override
    public String toString() {
        return "Episodio [temporada=" + temporada + ", titulo=" + titulo + ", episodio=" + episodio + ", evaluacion="
                + evaluacion + ", fechaDeLanzamiento=" + fechaDeLanzamiento + "]";
    }

    
    
}
