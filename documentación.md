## modo de uso
Hay que crear cuantos archivos se quieran tener como páginas. El nombre de estos archivos se utilizará para la generación del menú de la página, es imprescindible que tengan la terminación *.md* y que los espacios en el título (si hubieran) sean reemplazados con *_* (guión bajo).

## formato de texto

Funciones disponibles [ver en parsedown](http://parsedown.org/tests/).


## archivos
**index.php**
```
No necesita ser editado
```


**parsedown.php**
```
No necesita ser editado. Obtenido de http://parsedown.org/
```


**config.php**
```
<?php
$tagshtml = '';   // para agregar directamente tags html (utf, font awesome, etc).
$titulo = '';     // título de la página
$subtitulo = '';  // subtítulo de la página
$pie= '';         // texto en pie de la página
$noexiste= '';    // texto que aparece si la página no existe
?>
```

**style.css** (sugerido)
```
body {
 background-color: #255965;
}
div{
 background-color:#032a33;
 display: block;
 color: #f1d18a;
 border: 3px solid #255965;
 padding-left: 10px;
 padding-right: 10px;
}
a{
 font-weight: bold;
 color: #f1d18a;
}
```