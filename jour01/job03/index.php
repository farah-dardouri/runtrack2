<!DOCTYPE html >
<html  lang =" fr ">
    <header>
        <meta  charset =" UTF-8 ">
        <meta  name =" viewport " content =" width=device-width, initial-scale=1.0 ">
        <title > PHP-JOB03 </title> 
    </header >
    <body>
        <?php 
        $str = "Bonjour LaPlateforme" ;
        $myBool = true;
        $entier = 10 ;
        $float = 5.6;
        ?>
        <table >
            <tr >
                <th> Type <th>
                <th> Nom <th>
                <th> Valeur <th>
            </tr>
            <tr >
                <td > Chaîne de caractère <td >
                <td > $str <td >
                <td > <?php echo $str?>  <td >
            </tr >
            <tr >
            <td > Booléen <td >
            <td > $myBool <td >
            <td > <?php echo $myBool ?>  <td >
            </tr >
            <tr >
            <td > Entier <td >
            <td > $entier <td >
            <td > <?php echo $entier ?> <td >
            </tr >
            <tr >
            <td > Nombre à virgule <td >
            <td > $float <td >
            <td > <?php echo $float ?> <td >
            </tr >
      <table>
    </body >
</html >