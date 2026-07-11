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

RUN groupadd --system --gid 10001 app \
	&& useradd --system --uid 10001 --gid 10001 --home-dir /app --shell /usr/sbin/nologin app

COPY --from=builder --chown=app:app /workspace/build/libs/*.jar app.jar
RUN chmod 500 /app/app.jar

USER app

EXPOSE 8080
ENTRYPOINT ["java", "-jar", "/app/app.jar"]
