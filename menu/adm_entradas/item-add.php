<!DOCTYPE html>
<html>
  
    <head>
        <title>Añadir usuario</title>
    </head>
    <body>
        <form method="post" action="insert.php">
        
            <table>
                <tr><td><b><label>nombre</label></b></td></tr></div>
                <tr><td><input type="text"  name="name"/></td></tr>
                <tr><td><b><label class="form-label">ingredientes</label></b></td></tr>        
                <tr><td>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ingredientes"></textarea>
                </td></tr>
                <tr><td><b><label for="">instrucciones</label></b></td></tr>
                <tr><td>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="instrucciones"></textarea>
                </td></tr>
                <tr><td><b><label for="">categoria</label></b></td></tr>
                <tr><td><input type="text" name="categoria"/></td></tr>
                <tr><td><b><label>Clave</label></b></td></tr>
                <tr><td><input type="text" name="codigo" /> </td></tr>
                <tr><td><b><label for="">precio</label></b></td></tr>
                <tr><td><input type="number" value="0" name="precio"/></td></tr>
                <tr><td><input type="submit" value="Continuar"/> </td></tr>  
                </table>
                </form>                    
    </body>
 </html>
