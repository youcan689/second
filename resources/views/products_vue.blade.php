@extends('layouts.appvue')
@section('content')


<div id="app1">
  <ol>
      <div  v-for="production in productions">
        <li v-text="production.title">
           </li>
        <li v-text="production.description">
        
        </li>
        <li v-text="production.price">
        
        </li>
        <li v-text="production.published ? '已經上架' : '尚未上架'">
        </li>
        <hr>
     </div>
  </ol>
</div>
@endsection
@section('vuejs-components')
<script>
    var app=new Vue({
        el:'#app1',
        data:{
            productions:@json($productions)
        },
        methods: {
            f: function(pd) {
                return JSON.stringify(pd);
            },
        }
    });
</script>
@endsection
