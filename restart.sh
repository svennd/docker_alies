# get the latest version of the code
rm -rf src && mkdir src 
git clone --depth 1 https://github.com/svennd/alies ./src

# copy config
cp config/alies/config.php ./src/application/config/
cp config/alies/database.php ./src/application/config/

# update
git pull

# stop and remove all containers
docker compose down --volumes
docker volume prune -f

# build and start all containers (and demonize)
docker compose up --build -d