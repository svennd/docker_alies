# update
git pull

# stop and remove all containers
docker-compose down --volumes
docker volume prune -f

# build and start all containers
docker-compose up --build