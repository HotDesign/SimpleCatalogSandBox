HotDesign SimpleCatalogSandbox
========================

WARINING: Under beta stage. 

Multilevel categorizable catalog. Multiple image upload. Thumbnails. Extensible.


1) Installation
---------------

soon...

* **git clone https://Marian0@github.com/HotDesign/SimpleCatalogSandBox.git**
* **copy app/config/parameters.ini.default into app/config/parameters.ini edit with your values**
* **run ./bin/install.sh**
* **php bin/vendors install**
* **run ./bin/dbrebuild.sh **
* **Soon .... MyConfig**

2) Customize frontend Theme
-----------------------
Create a bundle for your own theme and add it to the AppKernel.
* **php app/console generate:bundle**

In your bundle add the following:

public function getParent() {
    return 'HotDesignScThemeBundle';
}

Copy what ever you want to extend/customize from vendor/bundles/HotDesign/ScThemeBundle/Resources/
and edit as you want (Here on your own bundle).

Add the Menu/Builder.php 

Add routing.yml.

3) Extend / Customization
-----------------------

WARINING: Under development stage. WARINING: Under development stage. 

La customización de las BaseEntities está en desarrollo. Pero básicamente funciona así:

Cada categoría de SimpleCatalog se le asigna un Tipo... Este Tipo, se refiere al tipo de entidades que va a contener, por ejemplo un Inmueble.
Los tipos se manejan desde una clase estática en src/HotDesign/Entity/ItemTypes.php y aquí se define qué clases son las que extienden este tipo de objetos, por ejemplo para Inmueble extenderán a Geografico (Maps) y Housing (Cant de baños, cant de dormitorios, etc, etc).

Cuando agreguemos un nuevo Item dentro de ésta categoría, se crearán objetos de los tipos que extiende, por ejemplo en inmueble se creará la BaseEntity con los datos que ingresó el Usuario, un Geografico y un Housing con valores por defecto y en enabled=false (ambos relacionados a la base entity).

El usuario ahora sí puede editar estos valores por defecto por medio de un popup/lightbox al formulario de edición y poner enable=true para que sea visto en un futuro frontend.

**TIPS**

* Crear la entidad hija. Crear atributos. Crear valores por defecto (para todo lo NO NULL). Crear un atributo enabled = false. El nombre en CamelCase debe ser ScNombreEntidadExt. Debe tener una relación ManyToOne a BaseEntity.
* Crear el formulario correspondiente ScNombreEntidadExtType.
* Crear en Resources/view/ScNombreEntidadExt/show_backend.html.twig una vista la cual se inscrustará en el backend (BaseEntity edit).
* Crear el controlador ScNombreEntidadController el cuál solo usaremos los métodos para edit y update.
* Las vistas necesarias son las de edit.html.twig y show_backend.html.twig solamente. 

WARINING: Under development stage. 

Developers/Collaborators
---------------

* **marian0** - Mariano Peyregne - Project Manager.
* **germanaz0** - German Bortoli - Project Manager.
* **fern17** - Fernando Nellmeldin - Collaborator.
* **cordoval** - Luis Cordova - Collaborator.
