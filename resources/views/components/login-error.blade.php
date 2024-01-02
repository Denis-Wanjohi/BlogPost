@if (session()->has('error'))
    <div class="alert alert-danger  text-center" 
        role="alert"
        x-data="{show:true}"
        x-init="setTimeout(()=> show=false,2000)"
        x-show="show"
        >
       <strong>
            {{session('error')}}
        </strong> 
    </div>
@endif