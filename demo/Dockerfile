# syntax=docker/dockerfile:1.7

# Etapa 1: compilar y generar el JAR con Gradle Wrapper
FROM eclipse-temurin:21-jdk AS builder
WORKDIR /workspace

# Copiamos primero metadatos para aprovechar cache de capas
COPY gradlew ./
COPY gradle ./gradle
COPY settings.gradle.kts build.gradle.kts ./
RUN chmod +x ./gradlew

# Descarga dependencias (cacheable)
RUN ./gradlew --no-daemon dependencies

# Copiamos código fuente y construimos el bootJar
COPY src ./src
RUN ./gradlew --no-daemon clean bootJar

# Etapa 2: imagen final ligera para ejecutar el jar
FROM eclipse-temurin:21-jre AS runtime
WORKDIR /app

COPY --from=builder /workspace/build/libs/*.jar app.jar

EXPOSE 8080
ENTRYPOINT ["java", "-jar", "/app/app.jar"]
