# Practico fechas avanzado
5 ejercicios con algunos ejemplos màs complejos.
1. Hacer una función que reciba dos fechas y retorne la cantidad de días que hay entre ellas aclarando y “faltan” esos días o ya “pasaron”.
2. Hacer una función que reciba una fecha y un número n (pude ser negativo). La función deberá calcular la nueva fecha. Corresponderá a una fecha posterior si n es positivo, y a una fecha anterior si es negativo.
3. Hacer en php una función para calcular los datos de un plazo fijo. La función recibirá:
    * El monto inicial
    * El interés diario
    * El plazo (7, 30, 60 o 90 días)
* La función deberá calcular la fecha de vencimiento teniendo en cuenta el plazo y que el día de vencimiento no puede ser ni sábado, ni domingo (en cuyo caso se remitirá al primer dia hábil siguiente). Lugo calculará los días y en base a eso calculará el porcentaje total de interés, se lo aplicará al monto inicial.
* La función retornará un arreglo asociativo con los siguientes datos: monto inicial, interés, fecha de vencimiento.
4. Hacer una función que calcule cuanta plata me queda por día para fin de mes. Para ello la función recibirá como parámetro el monto total que dispongo. La función deberá averiguar el día actual, averiguar cual es el último día del mes, calcular cuantos días son y dividir el monto por esos días retornando el resultado. 
* (Los meses 1,3,5,7,8,10,12 siempre tienen 31 días, los meses 4,6,9,11 siempre tienen 30 días, el único problema es el mes de febrero dependiendo del año puede tener 28 o 29 días (si el año es bisiesto). Un año es bisiesto si cumple.
  ```
  if ((($anio % 4==0) and (($anio %,100  !=0) or ($anio % 400==0))) {
  
       $dias_febrero = 29;
   } else {
       $dias_febrero = 28;
      
   }
   ```
5. Modificar el ej. 4 pero utilizando la función
```
cal_days_in_month(CAL_GREGORIAN, $mes, $anio)
```
  Devuelve la cantidad de días del mes especificado
