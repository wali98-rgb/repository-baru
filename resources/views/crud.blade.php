<form action="/simpan" method="POST">
    @csrf @method('put')
<button type="submit">Submit</button>
</form>

<form action="/gas" method="POST">
    @csrf @method('put')
<button type="pencet">Pencet</button>
</form>

<form action="/gaya" method="POST">
    @csrf @method('put')
<button type="press">Press</button>
</form>

<a href="{{ route('master-data.data-karyawan') }}">ke halaman data karyawan</a></br>
<a href="{{ route('master-data.data-kerja') }}">ke halaman data kerja</a></br>
<a href="{{ route('master-data.data-guru') }}">ke halaman data guru</a></br>
<a href="{{ route('master-data.data-pribadi') }}">ke halaman data pribadi</a></br>

<a href="/dashboard">ke halaman dashboard</a>