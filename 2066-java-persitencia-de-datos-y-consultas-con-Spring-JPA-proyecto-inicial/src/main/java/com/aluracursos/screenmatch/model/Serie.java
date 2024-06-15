package com.aluracursos.screenmatch.model;

import java.util.OptionalDouble;

import com.aluracursos.screenmatch.service.ConsultaChatGPT;

public class Serie {
    
    private String titulo;

    private Integer totalTemporadas;

    private double evaluacion;

    private String poster;

    private Categoria genero;

    private String actores;

    private String sinopsis;

    public Serie(DatosSerie serie) {
        this.titulo = serie.titulo();
        this.totalTemporadas = serie.totalTemporadas();
        this.evaluacion = OptionalDouble.of(Double.parseDouble(serie.evaluacion())).orElse(0);
        this.poster = serie.poster();
        this.genero = Categoria.fromString(serie.genero().split(",")[0].trim());
        this.actores = serie.actores();
        this.sinopsis = ConsultaChatGPT.obtenerTraduccion(serie.sinopsis());
    }

    public String getTitulo() {
        return titulo;
    }

    public void setTitulo(String titulo) {
        this.titulo = titulo;
    }

    public Integer getTotalTemporadas() {
        return totalTemporadas;
    }

    public void setTotalTemporadas(Integer totalTemporadas) {
        this.totalTemporadas = totalTemporadas;
    }

    public double getEvaluacion() {
        return evaluacion;
    }

    public void setEvaluacion(double evaluacion) {
        this.evaluacion = evaluacion;
    }

    public String getPoster() {
        return poster;
    }

    public void setPoster(String poster) {
        this.poster = poster;
    }

    public Categoria getGenero() {
        return genero;
    }

    public void setGenero(Categoria genero) {
        this.genero = genero;
    }

    public String getActores() {
        return actores;
    }

    public void setActores(String actores) {
        this.actores = actores;
    }

    public String getSinopsis() {
        return sinopsis;
    }

    public void setSinopsis(String sinopsis) {
        this.sinopsis = sinopsis;
    }

    @Override
    public String toString() {
        return "Serie [titulo=" + titulo + ", totalTemporadas=" + totalTemporadas + ", evaluacion=" + evaluacion
                + ", poster=" + poster + ", genero=" + genero + ", actores=" + actores + ", sinopsis=" + sinopsis + "]";
    }   

    

}
