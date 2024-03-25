@extends('components.admin1')
@section('menu')
   <div class="  h-[80vh] mx-5 flex flex-col gap-3 justify-center">
		<div class="px-5  py-5 flex  divide-x-2 rounded-lg shadow-md">
			<span class="w-[40%] flex items-center justify-center">
			<img src="./assets/img/foods.jpeg" alt="" class="h-100 w-100 img " />
			</span>
			<span class="w-[60%] flex items-center flex-col justify-center">


       <div class="center">
        <form  action="{{url('addmenu')}}"method="post">
            @csrf
            <h1>MENU</h1>
            <div class="txt_field">
                <input type="text" id="menuname" name="menuname" required>
                <label for="menuname">Menu Name :</label>
                <span></span>
                @if ('message')

                <div id="menu" class="message">

                   {{Session('message')}}
                   <script>
                       setTimeout(function() {
                           document.getElementById('menu').style.display = 'none';
                       }, 5000);
                   </script>

           </div>
                @endif
               <button type="submit">Submit</button>
               <a href="category">Next</a>
           </form>
       </div>
       @endsection

  </body>
</html>
