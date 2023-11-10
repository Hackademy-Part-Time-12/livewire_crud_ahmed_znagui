LiveWire è un Fullstack framwork
Crud -> Blog 
Creare il databse con il nome del progetto -> creare le tabelle su tableplus.
creare il fillable in app/Models/es Article (protected $fillable).
Gestire gli articoli con il metodo classico Route, Controller e View(blade).
In livewire il form dev'essere un componente con il comando <!--* php artisan make:livewire ArticleCreateForm -->
Una volta creato bisogna dichiarare gli attributi corrisponderano al modello del fillable
Come nel metodo classico anche in livewire il CSRF token va inserito
La gestione dei dati nel database non avviene come in precedenza, grazie a livewire è possibile gestirli all'interno del suo componenete

   const message = document.getElementById("message");
    message.style.transition = "transform 3s";
    message.style.transform = "translateY(-48px)";