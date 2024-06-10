package com.aluracursos.screenmatch.Principal;

import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

import com.aluracursos.screenmatch.models.DatosSerie;
import com.aluracursos.screenmatch.models.DatosTemporada;
import com.aluracursos.screenmatch.models.Episodio;
import com.aluracursos.screenmatch.service.ConsumoApi;
import com.aluracursos.screenmatch.service.ConvierteDatos;

public class Principal {

    private Scanner teclado = new Scanner(System.in);
    
    private ConsumoApi consumoApi = new ConsumoApi();

    private final String URL_BASE = "http://www.omdbapi.com/";

    private final String API_KEY = "c5a59910";
    
    private ConvierteDatos conversor = new ConvierteDatos();

    public void muestraElMenu() {

        System.out.println("Por favor escribe el nombre de la serie que deseas buscar");
        
        var nombreSerie = teclado.nextLine();        
        
        var json = consumoApi.obtenerDatos(URL_BASE + "?t="+ nombreSerie.replace(" ", "+") + "&apikey=" + API_KEY);
        var datos  = conversor.obtenerDatos(json, DatosSerie.class);     

        List<DatosTemporada> temporadas = new ArrayList<>();
		for (int i = 1; i < datos.totalTemporadas(); i++) {
			json = consumoApi.obtenerDatos(URL_BASE + "?t="+ nombreSerie.replace(" ", "+") + "&Season="+i+"&apikey=" + API_KEY);
			var datosTemporadas = conversor.obtenerDatos(json, DatosTemporada.class);
			temporadas.add(datosTemporadas);
		}

		// temporadas.forEach(System.out::println);

        // for (int i = 1; i < datos.totalTemporadas(); i++) {
        //     List<DatosEpisodio> episodiosxT = temporadas.get(i).episodios();
        //     for (int j = 1; j < episodiosxT.size(); j++) {
        //         System.out.println("Episodio: " + episodiosxT.get(j).titulo() + "\n");
        //     }
        // }

        // temporadas.forEach(t -> t.episodios().forEach(e -> System.out.println("Episodio: " + e.titulo() + "\n")));

        // List<DatosEpisodio> datosEpisodios = temporadas.stream()
        //     .flatMap(t -> t.episodios().stream())
        //     .collect(Collectors.toList());

        // System.out.println("Top 5 episodios \n");

        // datosEpisodios.stream().sorted(Comparator.comparing(DatosEpisodio::evaluacion).reversed())
        //     .filter(e -> !e.evaluacion().equalsIgnoreCase("N/A"))
        //     .limit(5)
        //     .forEach(System.out::println);

        //Convirtiendo los datos a una lista de tipo Episodio

        List<Episodio> episodios = temporadas.stream()
            .flatMap(t -> t.episodios().stream()
                .map(d -> new Episodio(t.numero(), d)))
            .collect(Collectors.toList());

        episodios.forEach(System.out::println);

        /**
         * Busqueda de episodios a partir de año
         * 
         */

        System.out.println("Por favor indica el año a partir del cual deseas ver los episodios: ");
        var fecha = teclado.nextInt();

        LocalDate fechaBusqueda = LocalDate.of(fecha, 1, 1);

        DateTimeFormatter dtf = DateTimeFormatter.ofPattern("dd/MM/yyyy");

        episodios.stream()
            .filter(e -> e.getFechaDeLanzamiento() != null && e.getFechaDeLanzamiento().isAfter(fechaBusqueda))
                .forEach(e -> System.out.println(
                "Temporada: " + e.getTemporada() +
                "Episodio: " + e.getEpisodio() +
                "Fecha de lanzamiento: " + e.getFechaDeLanzamiento().format(dtf)
                ));
    }

}
