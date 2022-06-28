
<html>
	<head>
		
 <style type="text/css">
	table td, table th{
		border:1px solid black;
	}
</style>
	</head>
	<body>
		<div class="container">
        
	<table>
        <tr>
            <th>#</th>
            <th>price_model</th>
            <th>price_design</th>
            <th>qty_model</th>
            <th>qty_design</th>
            <th>validtill </th>
            <th>date</th>
            <th>tax</th>
        </tr>
		@foreach ($items as $key => $item)
		<tr>
			<td>{{ ++$key }}</td>
			<td>{{ $item->price_model}}</td>
			<td>{{ $item->price_design }}</td>
			<td>{{ $item->qty_model }}</td>
			<td>{{ $item->qty_design }}</td>
			<td>{{ $item->validtill }}</td>
			<td>{{ $item->date }}</td>
			<td>{{ $item->tax }}</td>
		</tr>
		@endforeach
	</table>
</div>
	</body>
</html>