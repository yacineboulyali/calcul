<!DOCTYPE html>
<html>
<head>
    <title></title>

    <style>
      .conatiner{
          margin: 0px auto;
          width: 250px;
          padding: 20px;
          background-color:lightgray;
      }

    </style>
</head>
<body>


<div class="conatiner">

    <form action="page.php" METHOD="post">
        <table>
            <tr>
                <th colspan="2">Calculatrice</th>
            </tr>
            <tr>
                <td>Nombre1 :</td>
                <td><input name="nb1" type="number"></td>
            </tr>
            <tr>
                <td>nombre2 :</td>
                <td><input  name="nb2" type="number"></td>
            </tr>
            <tr>
                <td>
                    <select name="cal">
                        <option value="0">+</option>
                        <option value="1">-</option>
                        <option value="2">x</option>
                        <option value="3">/</option>
                    </select>
                </td>
                <td>
                    <input type="submit" value="Calcluler">
                    <input type="reset" value="Effacer">
                </td>
                <td></td>
            </tr>
        </table>


      




        </form>
</div>



</body>
</html>