<html>
<body bgcolor="cornFlowerBlue">
<center>
<br>
<H1>Listado de inventario</H1>
<br><br>

<?php
error_reporting(E_ALL ^ E_NOTICE);
$xml = file_get_contents("inventario.xml");
$DOM = new DOMDocument('1.0', 'utf-8');
$DOM->loadXML($xml);
$inventario = $DOM->getElementsByTagName('table');
?>
<TABLE BORDER="1" style="color:#45678E3;front-size:150%; text-align: center">
<TR>
<TD>ID</TD>
<TD>MARCA</TD>
<TD>DESCRIPCION</TD>
<TD>COLOR</TD>
<TD>PRECIO</TD>
</TR>
<?php
$id=$_POST ['id'];
$i=0;


foreach ($inventario as $table) {
if($id==$table->getElementsByTagName("column")->item(0)->nodeValue)
{
echo "<TR>";
echo "<TD>";
echo "  ".$table->getElementsByTagName("column")->item(0)->nodeValue;
echo "</TD>";

echo "<TD>";
echo "  ".$table->getElementsByTagName("column")->item(1)->nodeValue;
echo "</TD>";

echo "<TD>";
echo "  ".$table->getElementsByTagName("column")->item(2)->nodeValue;
echo "</TD>";

echo "<TD>";
echo "  ".$table->getElementsByTagName("column")->item(3)->nodeValue;
echo "</TD>";

echo "<TD>";
echo "  ".$table->getElementsByTagName("column")->item(4)->nodeValue;
echo "</TD>";

echo"</TR>";
$i=1;
}
}
if($i==0)
{
echo("El articulo no se encuentro");
}
?>
</TABLE>
<br><br><br>
<A HREF="buscarMarca.html">Regresar a Busqueda</A><br><br><br>
<A HREF="indexRopa.html">Menu</A>
</center>
</body>
</html>  