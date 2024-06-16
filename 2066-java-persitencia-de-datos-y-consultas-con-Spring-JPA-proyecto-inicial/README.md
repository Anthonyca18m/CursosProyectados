![Programação-Java_ Persistencia de datos y consultas con Spring Data JPA](https://github.com/genesysR-dev/2066-java-persitencia-de-datos-y-consultas-con-Spring-JPA/assets/91544872/e0e3a9f8-afc7-4e7b-be83-469351ef2d70)

# ScreenMatch

Proyecto desarrollado durante el segundo curso de la formación Avanzando con Java de Alura

## 🔨 Objetivos del proyecto

* Avanzar en el proyecto Screenmatch, iniciado en el primer curso de la formación, creando un menú con varias opciones;
* Modelar las abstracciones de la aplicación a través de clases, enums, atributos y métodos;
* Consumir la API del ChatGPT(Opcional;
* Utilizar Spring Data JPA para persistir datos en la base de datos;
* Conocer varios tipos de bases de datos y utilizar PostgreSQL;
* Trabajar con varios tipos de consultas a la base de datos;
* Profundizar en la interfaz JPA Repository.



## Lo que aprendimos en esta aula:

* Mapear relaciones entre entidades de JPA. Aprendimos el uso de las anotaciones @OneToMany y @ManyToOne para identificar la relación "uno a muchos" entre series y episodios.

* Conocer diversos tipos de relación: Identificamos cuál era la relación presente en nuestra aplicación, además de tener conocimiento de los varios tipos de relaciones en bases de datos.

* Asociar claves foráneas: Entendimos el concepto de clave foránea, que es cómo la base de datos identifica y configura relaciones entre diferentes tablas.

* Trabajar con los tipos de Cascade: Dado que nuestro flujo de guardado de datos implicaba guardar series y luego episodios, fue necesario configurar esto utilizando el atributo Cascade.

* Identificar cómo se cargan los datos: También trabajamos con el atributo fetch, que trata sobre cargar los datos de manera "perezosa" (lazy) o "ansiosa" (eager).

* Configurar relaciones bidireccionales: Vimos la importancia de las relaciones bidireccionales y permitimos que las modificaciones aparezcan en ambos lados de la relación, haciendo tanto setEpisodios() en Serie como setSerie() en Episodios.