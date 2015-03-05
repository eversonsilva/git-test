<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table border="1px">
            <tr>
                <td> Turma </td>
                <td> Disciplina </td>
                <td> Semana </td>
                <td> Professor </td>
            </tr>
                 <?php
                        $nomes[0][0] = '02K01</td></tr>';
                        $nomes[0][1] = 'Tecnologia Web II';
                        $nomes[0][2] = 'Seguda';
                        $nomes[0][3] = 'Charles';
                        $nomes[1][0] = '02J01';
                        $nomes[1][1] = 'Linguagem de Programação I';
                        $nomes[1][2] = 'Terça';
                        $nomes[1][3] = 'João';
                        $nomes[2][0] = '02K01';
                        $nomes[2][1] = 'Linguagem de Programação I';
                        $nomes[2][2] = 'Quarta';
                        $nomes[2][3] = 'Charles';
                       
                      echo '<tr><td>'.$nomes[0][0].'  '.$nomes[0][1].'  '.$nomes[0][2].'  '.$nomes[0][3].'<br></td></tr>';
                      echo  $nomes[1][0].'  '.$nomes[1][1].'  '.$nomes[1][2].'  '.$nomes[1][3].'<br>';
                      echo  $nomes[2][0].'  '.$nomes[2][1].'  '.$nomes[2][2].'  '.$nomes[2][3].'<br>';      
 
                   ?>
        </table>
    </body>
</html>