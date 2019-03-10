@extends('layouts.app')
@section('content')
    

   
   
   <div >
    
    @foreach ($red_result as $red_result)
                       <tr>
                           <td class="table-text">
                               <div style=font-size:30px>{{ $red_result->team_name }}  </div>
                           </td>  
                       </tr>
    @endforeach    
   
   
   </div>
    <div id="b">
    @foreach ($white_result as $white_result)
                       <tr>
                           <td class="table-text">
                               <div  style=font-size:30px>{{ $white_result->team_name }} </div>
                           </td>
                       </tr>

    @endforeach
    <div>
  
   
  <!--<script>-->
      
  <!--    var can = $('drowarea')[0];-->
  <!--    var cotext = can.getContext('2D');-->
      
  <!--</script>-->
    
    
@endsection