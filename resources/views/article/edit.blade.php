<x-layout>
    <div class="container d-flex justify-content-center">
        <div class="row divArt ">
            <h2>Edit</h2>
        </div>
    </div>
  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <livewire:article-edit-form :article="$article"/>
            </div>
        </div>
    </div>
</x-layout>