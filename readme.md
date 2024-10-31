# install 

# build & start in background
docker-compose up --build -d

# kill
docker-compose down --volumes
docker volume prune -f

# get bash (hash w/ "docker ps")
docker exec -it 64f769b76b33  bash
