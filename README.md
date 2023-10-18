# Desafio_Buscaminas 🚩💣

Proyecto realizado por [Jaime Ortega Núñez](https://github.com/jornu99)
****
## Manual del administrador 🦍

****
## Manual del jugador 🐒

#### Para lanzar el servidor:
```bash
php -S 127.0.0.1:9090  
```
****
## Enunciado 📖
### Buscaminas

Vamos a realizar una aplicación WEB que permita gestionar partidas de buscamina. La aplicación guardará las partidas activas y el histórico de las partidas jugadas (hayan sido ganadas o perdidas); también se contabilizará la cantidad de partidas ganadas.
Asimismo la aplicación permitirá un sistema de gestión de usuarios accesible solo por los administradores.

Nuestra aplicación tendrá los siguientes roles: administrador y jugador.

## Administrador

El administrador gestionará: altas, bajas, modificaciones, activaciones y accesos de los usuarios. El administrador será otro jugador que podrá seleccionar como quiere acceder a la aplicación. Si accede como administrador podrá: listar los usuarios, buscar un usuario concreto, registrar, modificar y eliminar usuarios. También estará habilitado para cambiar la contraseña de un usuario concreto.

Si entra como jugador será un jugador más.

## Jugador 

El jugador podrá crear partidas personalizadas o estándar. Si en la url se especifica tamaño de tablero y minas se creará un buscaminas con esas características. En caso contrario se creará un buscaminas con un tamaño y número de minas predefinidos (esta cantidad deberá estar parametrizada en la clase de constantes de la aplicación).

El jugador jugará indicando (POST + json) qué casilla quiere destapar, el cliente le informará de lo que pueda ocurrir: no tienes partida creada, no tienes partida abierta, partida abierta y has destapado una casilla no mina, partida abierta y has destapado una mina… En caso de que no haya partida abierta se informa de ello. En caso de partida abierta se informa al cliente de ello y se le enviarán los tableros en json para que el cliente haga lo que estime oportuno con ellos.

El jugador podrá solicitar rendirse, (verbo y forma de proporcionar información al servidor depende del programador). Se cerrará esa partida y se informará al cliente de cómo estaban los tableros y de que se ha cerrado esa partida que se considera perdida.

El jugador también podrá solicitar un cambio de contraseña, para ello debe proporcionar su email al servidor (piensa el verbo y el modo más correcto de hacer esto).
Finalmente el jugador podrá solicitar el ranking de jugadores. Se le devolverá una lista de usuarios ordenada de mayor a menor de más ganadas a menos. De igual manera el verbo y la forma de solicitar el ranking depende del programador.
