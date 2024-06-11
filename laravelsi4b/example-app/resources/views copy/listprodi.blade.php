<h1>Prodi Studi</h1>

<ul>
    @foreach ($viewlistprodi as $item)
           <li> {{ $item }} </li>
    @endforeach
</ul>

<br>

<h1>Mahasiswa</h1>

<ul>
    @foreach ($viewmhs as $item)
           <li> {{ $item["npm"] }} - {{ $item["nama"] }}</li>
    @endforeach
</ul>

<h1>Lebih Lengkap</h1>

<ul>
    @foreach ($viewnpm as $item)
           <li> {{ $item["npm"] }} - {{ $item["nama"] }} - {{ $item["semester"]}}</li>
    @endforeach
</ul>

