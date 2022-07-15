NAME = inception
include ./srcs/.env

all : $(NAME)

$(NAME):
	sudo mkdir -p /home/yubae/data/wordpress
	sudo mkdir -p /home/yubae/data/mariadb
	sudo docker-compose -f srcs/docker-compose.yml up --build

clean:
	sudo docker-compose -f srcs/docker-compose.yml down -v

fclean: clean
	sudo docker stop $(docker ps -qa)
	sudo docker rm $(docker ps -qa)
	sudo docker volume rm $(docker volume ls -q)
	sudo docker network rm $(docker network ls -q) 2>dev/null
	sudo rm -rf /home/yubae/data/wordpress/*
	sudo rm -rf /home/yubae/data/mariadb/*

re: fclean all

.PHONY : all clean fclean re
