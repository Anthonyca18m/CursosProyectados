# syntax=docker/dockerfile:1.7

# Etapa 1: instalar dependencias en un entorno aislado
FROM python:3.12-slim AS builder
WORKDIR /workspace

COPY requirements.txt ./
RUN pip install --no-cache-dir --target=/workspace/deps -r requirements.txt

COPY app.py ./

# Etapa 2: imagen final ligera para ejecutar el cronjob
FROM python:3.12-slim AS runtime

ENV TZ=America/Lima
ENV PYTHONPATH=/app/deps

RUN apt-get update && apt-get install -y --no-install-recommends cron tzdata && \
    ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone && \
    rm -rf /var/lib/apt/lists/*

RUN groupadd --system --gid 10001 appcron \
    && useradd --system --uid 10001 --gid 10001 --home-dir /app --shell /usr/sbin/nologin appcron

WORKDIR /app
COPY --from=builder --chown=appcron:appcron /workspace/deps /app/deps
COPY --from=builder --chown=appcron:appcron /workspace/app.py /app/app.py
COPY --chown=root:root crontab /etc/cron.d/mycron

RUN chmod 0644 /etc/cron.d/mycron && \
    sed -i -e '$a\' /etc/cron.d/mycron && \
    chmod 500 /app/app.py

CMD ["cron", "-f"]