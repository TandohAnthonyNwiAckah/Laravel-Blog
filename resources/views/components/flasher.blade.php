

<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->

      @if (session()->has('message'))

                <div class="alert alert-success">
                    
                    {{session('message')}}
                
                </div>

              @elseif (session()->has('error'))

                <div class="alert alert-danger">
                    
                    {{session('error')}}
                
                </div>

                @endif



</div>