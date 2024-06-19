<div class="card mb-4">
    <div class="card-header">Categories</div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <ul class="list-unstyled mb-0">
                    @foreach($categories as $category)
                        <li><a href="#!">{{ $category }}</a></li> 
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>