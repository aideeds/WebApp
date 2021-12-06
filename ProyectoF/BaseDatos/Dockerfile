FROM mysql:5.7

ENV MYSQL_ROOT_PASSWORD=app

COPY ./DB/maquillaje.sql /docker-entrypoint-initdb.d/maquillaje.sql
RUN /entrypoint.sh mysqld & sleep 30
EXPOSE 3060