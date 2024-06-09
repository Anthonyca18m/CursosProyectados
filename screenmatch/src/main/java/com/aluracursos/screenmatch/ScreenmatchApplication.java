package com.aluracursos.screenmatch;

import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

import com.aluracursos.screenmatch.models.DatosSerie;
import com.aluracursos.screenmatch.service.ConsumoApi;
import com.aluracursos.screenmatch.service.ConvierteDatos;

@SpringBootApplication
public class ScreenmatchApplication implements CommandLineRunner {

	public static void main(String[] args) {
		SpringApplication.run(ScreenmatchApplication.class, args);
	}

	@Override
	public void run(String... args) throws Exception {
		
		var consumoApi = new ConsumoApi();

		var json = consumoApi.obtenerDatos("http://www.omdbapi.com/?i=tt3896198&apikey=c5a59910");

		// System.out.println(json);

		ConvierteDatos conversor = new ConvierteDatos();

		var datos  = conversor.obtenerDatos(json, DatosSerie.class);

		System.out.println(datos);
	}

}
