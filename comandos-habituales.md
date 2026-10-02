docker compose stop          # apagar sin borrar nada
docker compose start         # volver a prenderlo
docker compose logs -f wordpress   # ver errores de PHP
docker compose down -v       # borrar todo, incluida la BD (cuidado)