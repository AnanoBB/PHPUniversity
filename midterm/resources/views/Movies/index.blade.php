<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<table class="table">
			<tr>
				<td>#</td>
                <td>imdb</td>
                <td>სახელი</td>
				<td>აღწერა</td>    
                <td>ჟანრი</td>
			</tr>
@foreach ($movies as $element)
        <form action='{{route('MovieDestroy')}}' method="POST" >
            @csrf
            <tr>
            <td>{{++$loop->index}}</td>
            <td>{{$element->IMDB}}</td>
            <td>{{$element->picture}}</td>
            <td>{{$element->title}}</td>
            <td>{{$element->description}}</td>
            <td>{{$element->genre_id}}</td>

            <td>
            <input type='hidden' name='id' value='{{$element->id}}'> 
                <button class='btn btn-danger'>წაშლა</button>
               <button class='btn btn-warning'>განახლება</button>
               <a href={{route('MovieShow',['id' => $element->id])}}> <button class='btn btn-success'>დათვალიერება</button></a>
            </td>
            </tr>
        </form>

@endforeach
		</table>
	</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>