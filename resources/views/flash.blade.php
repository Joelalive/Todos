@if(session('success'))
                 <div class="container alert alert-success"  role="alert">
                 <p>{{ session('success') }}</p>
                </div>
                 @endif

                 @if(session('danger'))
                 <div class="container alert alert-danger"  role="alert">
                    
                    <p>{{ session('danger') }}</p>
                    
                </div>
                 @endif