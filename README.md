# mecubro_back_end
Examen mecubro backend
Es una funcion que recibe dos parametros: 1- $array con n cantidad de nros. 2- $x que es un numero a encontrar desde la suma de dos numeros del array.

La logica es la siguiente, sumo los nros de dos posiciones fijas del array (0 y 1), comparandolos con $x. Si el resultado de la suma es diferente al numero recibido en $x, se mezclan los numeros del array con shuffle($array) y se suma una unidad en el acumulador el cual nos dira la cantidad de intentos.

Si el array contiene una combinacion de nros que coincida con el nro a buscar ($x), la funcion funciona sin problemas.

Si el array no contiene una combinacion posible, para que la funcion no busque infinitamente, le puse un limite que dentro de la estadistica asegura que se encuentre la combinacion antes (si es que existe) de que termine la secuencia.
