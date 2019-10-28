function mostrarAtivo(tag){
    var tag_li = document.getElementById('sidebar');
    var tag_a = tag_li.getElementsByTagName('a');
    for (i=0; i<tag_a.length; i++ )
    {
       tag_a[i].style.color = "";
    }
       tag.style.color = "#ff0000";
    }