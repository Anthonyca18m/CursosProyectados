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

* Devolver los datos de nuestra base a la navegadora. Trabajamos devolviendo los datos de nuestra base en el Controller, debidamente serializados.

* Tratar la serialización circular. Vimos los problemas que ocurren al intentar serializar entidades mapeadas de forma bidireccional y cómo resolverlos.

* Utilizar el patrón DTO. Para evitar la serialización circular y principalmente para seguir buenas prácticas, creamos nuestros DTOs. Así, nuestros datos se volvieron más seguros y fueron devueltos de forma personalizada.

* Lidiar con el error de CORS. Conocimos el error entre la comunicación entre rutas de orígenes diferentes y pudimos tratarlo, creando la clase CorsConfiguration.

* Configurar el Live Reload. Para que la aplicación no necesite ser detenida y reiniciada siempre que haya cambios, usamos el Devtools y cambiamos las configuraciones necesarias en Intellij.