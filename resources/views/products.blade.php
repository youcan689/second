@extends('layouts.appvue')
@section('content')

<div id="app1">
  <div v-text="`${productions} / ${productions.length}`"></div>
  <button onclick="app.click()">12222</button>
  <ol>
      <div  v-for="production in productions" :key="production.id">

        <li v-text="production.title">
           </li>
        <li v-text="production.description">
        </li>
        <li v-text="production.price">
        </li>
        <hr>
     </div>
  </ol>
</div> 

<!-- <div id="app1">
  <button @click="click">1111111</button>
</div> -->
@endsection
@section('vuejs-components')
<script>
    var app=new Vue({
        el:'#app1',
        data: {
            productions: []
          },
        mounted:function(){            
         var _this = this;
         axios.get('production/ajaxmark').then(function(response){
        _this.productions=response.data;
         console.log(response.data);
         console.log(_this.productions);
        //  _this.productions.pop();
         });
         },
         methods: {
           click: function() {
             alert('123');
              var s = this.productions.pop();
              console.log(s);
              console.log(this.productions.length);
           }
         }
          }
        );
</script>
@endsection 