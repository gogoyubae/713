NAME = inception
include ./srcs/.env

all : $(NAME)

$(NAME):
	sudo mkdir -p /home/yubae/data/wordpress
	sudo mkdir -p /home/yubae/data/mariadb
	sudo docker-compose -f srcs/docker-compose.yml up --build

clean:
	sudo docker-compose -f srcs/docker-compose.yml down -v --rmi all

fclean: clean
	sudo rm -rf /home/yubae/data/wordpress/*
	sudo rm -rf /home/yubae/data/mariadb/*

re: fclean all

.PHONY : all clean fclean re
