<?php

namespace ConfigClasses;

/**
 * Clase estática que se encarga de hacer un manejo de los tipos de avisos y sus extensiones
 * 
 */
class MyConfig {
    //Site configuration
    public static $sitename = 'SimpleCatalog';    
    
    // Geographic configurations
    public static $default_lat = -31.632301;
    public static $default_lng = -60.716157;    
  
    //Pagination configurations
    public static $items_per_pages = 10;
    public static $items_per_page_backend = 20;

    //Image validations
    public static $image_max_size_bytes  = 10485760;  //bytes
    public static $max_image_per_item = 5;
    public static $shared_hosting = true; // * If this is true: the SC wont use de mimetype validation for files because of restrictions of exec in shared hostings

    //Image upload assets
    public static $image_upload_path = 'catalog/images/';  
    
    //Load default fixtures
    public static $default_fixtures = false;  

}