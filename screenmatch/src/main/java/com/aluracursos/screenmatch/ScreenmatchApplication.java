package com.aluracursos.screenmatch;

import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

import com.aluracursos.screenmatch.Principal.Principal;

@SpringBootApplication
public class ScreenmatchApplication implements CommandLineRunner {

	public static void main(String[] args) {
		SpringApplication.run(ScreenmatchApplication.class, args);
	}

	@Override
	public void run(String... args) throws Exception {

		Principal principal = new Principal();
		principal.muestraElMenu();
		
		// var consumoApi = new ConsumoApi();		

		// var json = consumoApi.obtenerDatos("http://www.omdbapi.com/?t=game+of+thrones&apikey=c5a59910");
		// ConvierteDatos conversor = new ConvierteDatos();		
		// var datos  = conversor.obtenerDatos(json, DatosSerie.class);
		// System.out.println(datos);

		// var jsone = consumoApi.obtenerDatos("http://www.omdbapi.com/?t=game+of+thrones&Season=1&Episode=1&apikey=c5a59910");
		// DatosEpisodio episodios  = conversor.obtenerDatos(jsone, DatosEpisodio.class);
		// System.out.println(episodios);

		// List<DatosTemporada> temporadas = new ArrayList<>();
		// for (int i = 1; i < datos.totalTemporadas(); i++) {
		// 	json = consumoApi.obtenerDatos("http://www.omdbapi.com/?t=game+of+thrones&Season="+i+"&apikey=c5a59910");
		// 	var datosTemporadas = conversor.obtenerDatos(json, DatosTemporada.class);
		// 	temporadas.add(datosTemporadas);
		// }

		// temporadas.forEach(System.out::println);

		
	}

}
