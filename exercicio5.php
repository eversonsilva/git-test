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
                       
                      echo '<tr><td>'.$nomes[0][0].'</td><td>'.$nomes[0][1].'</td><td>'.$nomes[0][2].'</td><td>'.$nomes[0][3].'<br></td></tr>';
                      echo '<tr><td>' $nomes[1][0].'</td><td>'.$nomes[1][1].'</td><td>'.$nomes[1][2].'</td><td>'.$nomes[1][3].'<br></td></tr>';
                      echo '<tr><td>' $nomes[2][0].'</td><td>'.$nomes[2][1].'</td><td>'.$nomes[2][2].'</td><td>'.$nomes[2][3].'<br></td></tr>';      
 
                   ?>
        </table>
    </body>
</html>