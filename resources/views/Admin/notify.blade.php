
@if ($errors->any())

@foreach ($errors->all() as $error)
    $.notify({
        
        message:"{!! $error !!}<br/>"             
    },{
        type: 'danger',
        timer: 4000
    });

@endforeach
    
@elseif (session()->get('flash_success'))
    
        @if(is_array(json_decode(session()->get('flash_success'), true)))
            $.notify({
                
                message:"{!! implode('', session()->get('flash_success')->all(':message<br/>')) !!}"           
            },{
                type: 'success',
                timer: 4000
            });
            
        @else
            $.notify({
                
                message:"{!! session()->get('flash_success') !!}"      
            },{
                type: 'success',
                timer: 4000
            });
            
        @endif
    
@elseif (session()->get('flash_warning'))
    
        @if(is_array(json_decode(session()->get('flash_warning'), true)))
            $.notify({
                
                message:message:"{!! implode('', session()->get('flash_warning')->all(':message<br/>')) !!}"          
            },{
                type: 'warning',
                timer: 4000
            });
            
        @else
            $.notify({
                
                message:"{!! session()->get('flash_warning') !!}"        
            },{
                type: 'warning',
                timer: 4000
            });
            
        @endif
    
@elseif (session()->get('flash_info'))
    
        @if(is_array(json_decode(session()->get('flash_info'), true)))
            $.notify({
                
                message:"{!! implode('', session()->get('flash_info')->all(':message<br/>')) !!}"
            },{
                type: 'info',
                timer: 4000
            });

            
        @else
            $.notify({
                
               message:"{!! session()->get('flash_info') !!}"
            },{
                type: 'info',
                timer: 4000
            });
            
        @endif
    
@elseif (session()->get('flash_danger'))
    
        @if(is_array(json_decode(session()->get('flash_danger'), true)))
            $.notify({
                
                message:"{!! implode('', session()->get('flash_danger')->all(':message<br/>')) !!}"
            },{
                type: 'danger',
                timer: 4000
            });
            
        @else
            $.notify({
                
                message:"{!! session()->get('flash_danger') !!}"
            },{
                type: 'danger',
                timer: 4000
            });
            
        @endif
    
@elseif (session()->get('flash_message'))
    
        @if(is_array(json_decode(session()->get('flash_message'), true)))
            $.notify({
                
                message:"{!! implode('', session()->get('flash_message')->all(':message<br/>')) !!}"
            },{
                type: 'info',
                timer: 4000
            });
            
        @else
            $.notify({
                
                message:"{!! session()->get('flash_message') !!}"
            },{
                type: 'info',
                timer: 4000
            });
            
        @endif

@else

    
@endif


