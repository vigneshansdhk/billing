@if (flash()->message)
<div class="alert {{ flash()->class }} alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button> <strong>{{ flash()->message }}</strong> 
    </div>
    @endif