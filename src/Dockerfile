FROM mysql:5.7.17

ENV MYSQL_ROOT_PASSWORD=nacho10
ENV MYSQL_PASSWORD=nacho10
ENV MYSQL_DATABASE=reticula

COPY BD/ /docker-entrypoint-initdb.d
COPY Config/ /etc/mysql/conf.d

EXPOSE 3306
