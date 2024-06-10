package com.aluracursos.screenmatch.Principal;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

import com.aluracursos.screenmatch.models.DatosSerie;
import com.aluracursos.screenmatch.models.DatosTemporada;
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

        temporadas.forEach(t -> t.episodios().forEach(e -> System.out.println("Episodio: " + e.titulo() + "\n")));
        
    }

}
