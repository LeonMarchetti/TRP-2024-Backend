# TRP - Backend

Backend para el juego de TRP, que por ahora sirve las unidades de un archivo con una lista de preguntas para cada una.

## Iniciar base de datos

Las unidades de ejemplo se sacaron del proyecto React Duolingo original y se almacenaron en [`database/data/sample.json`](database/data/sample.json).

```shell
./artisan migrate --seed
```

## Ejecutar

Por defecto se expone la API en `http://localhost:8000`.

```shell
./artisan serve
```

## API

Sirve las unidades en el endpoint `/api/v1/units`.

Curl de prueba:

```shell
curl -s -H "Accept: application/json" "$HOST/api/v1/units"
```