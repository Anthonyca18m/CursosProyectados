2 - Barra de depuración en Laravel | Rimorsoft Online

    Instalando el https://github.com/barryvdh/laravel-debugbar para tener la barra de debug de laravel


4 - Relación uno a uno | Eloquent ORM | Rimorsoft Online

    hasOne

5 - Relación uno a muchos | Eloquent ORM | Rimorsoft Online

    hasMany | belongsTo

6 - Relación muchos a muchos | Eloquent ORM | Rimorsoft Online

    belongsToMany | y configuración para que las fechas seasn sincronizadas con withTimestamps() en el modelo

7 - Edición de vista Welcome | Rimorsoft Online
    
    enviando una lista de variables a la vista welcome

8 - Relación uno a uno a través de... | Eloquent ORM | Rimorsoft Online

    hasOneThrough

9 - Todas las tablas: Category, Tag, Taggables, Post y mas | Rimorsoft Online

    viendo el polimorfismo en la db con
    /**
    * CADA RELACIÓN POLIFORMICA DEBE TERMINAR EN able
    * ESTE CAMPO VA CREAR 2 CAMPOS UNA QUE HACE REFERENCIA AL ID, Y OTRO A LA ENTIDAD
    * CON ESTO INTENTAS SALVAS EL COMENTARIO DE UN POST, O UN VIDEO YA QUE EN LOS DOS CASOS
    * PODRÍA HABER UN COMENTARIO
    */
    $table->morphs('campo');
