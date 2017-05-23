@extends('master')
@section('content')
	<div id="box">
	<form action="{{url('add')}}" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input name="name[]" type="text" id="name" class="name" placeholder="Input 1">
	<a href="#" id="add">Add More Input Field</a>
	<input type="submit" value="submit">
	</div>
	<script>

$(document).ready(function(){
    
    $('#add').click(function(){
        
        var inp = $('#box');
        
        var i = $('input').size() + 1;
        
        $('<div id="box' + i +'"><input type="text" id="name" class="name" name="name' + i +'" placeholder="Input '+i+'"/><img src="remove.png" width="32" height="32" border="0" align="top" class="add" id="remove" /> </div>').appendTo(inp);
        
        i++;
        
    });
    
    
    
    $('body').on('click','#remove',function(){
        
        $(this).parent('div').remove();

        
    });

        
});

</script>
