$(function() {
    var tipo_contenido_id = $('.contenido_tipo_contenido  option:selected').val();
    if (tipo_contenido_id != undefined) {
        MostrarArchivosRespaldo(tipo_contenido_id);
        $('.contenido_tipo_contenido').change(function() {
            tipo_contenido_id = $('.contenido_tipo_contenido  option:selected').val();
            MostrarArchivosRespaldo(tipo_contenido_id);
        });

    }
});



function MostrarArchivosRespaldo(tipo_contenido_id) {

    jQuery.ajax({
        type: 'GET',
        url: "/api/tipocontenido",
        data: "id=" + tipo_contenido_id,
        async: false,
        dataType: "json",
        success: function(object) {
            var tipo_contenido = null;
            if (object.length == 1) {
                tipo_contenido = object[0];
                if (tipo_contenido.es_imagen == true) {
                    $('.contenido_archivo_respaldo').parent('div').parent('div').hide();
                    $('.contenido_poster').parent('div').parent('div').hide();
                    $('.contenido_url_video_youtube').parent('div').parent('div').hide();
                } else if (tipo_contenido.es_video == true) {
                    $('.contenido_archivo_respaldo').parent('div').parent('div').show();
                    $('.contenido_poster').parent('div').parent('div').show();
                    $('.contenido_url_video_youtube').parent('div').parent('div').hide();
                } else if (tipo_contenido.es_audio == true) {
                    $('.contenido_archivo_respaldo').parent('div').parent('div').show();
                    $('.contenido_poster').parent('div').parent('div').show();
                    $('.contenido_url_video_youtube').parent('div').parent('div').hide();
                } else if (tipo_contenido.es_youtube == true) {
                    $('.contenido_archivo_respaldo').parent('div').parent('div').hide();
                    $('.contenido_poster').parent('div').parent('div').hide();
                    $('.contenido_url_video_youtube').parent('div').parent('div').show();
                }
            } else {
                console.log("Error al consultar un tipo de contenido" + object);
            }
        },
        error: function(i, e) {
            console.log('error' + e);
        }
    });
}
