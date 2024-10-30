# update
git pull

# cleanup local
rm -rf app/

# stop and remove all containers
docker-compose down --volumes
docker volume prune -f

# build and start all containers (and demonize)
docker-compose up --build -d