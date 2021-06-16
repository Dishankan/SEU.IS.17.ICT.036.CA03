<!DOCTPE html>
<html>
<head>
<title>formview</title>
</head>
<body>
<table border = "1">
<tr>
<td>Name</td>
<td>Date of Birth</td>
<td>Telephone No</td>
<td>NIC No</td>
<td>Gender</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->name }}</td>
<td>{{ $user->dob }}</td>
<td>{{ $user->tel }}</td>
<td>{{ $user->nic }}</td>
<td>{{ $user->gender }}</td>
</tr>
@endforeach
</table>
</body>
</html>