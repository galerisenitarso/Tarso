@extends('layout')

@section('title', 'Galeri Karya')

@section('content')
    <h2>Galeri Karya Seni</h2>
    <div style="display: flex; gap: 20px; flex-wrap: wrap;">
        <div>
            <!-- Gunakan URL dengan parameter kompresi -->
            <img src="https://media.istockphoto.com/id/1094564176/id/foto/colosseum-di-roma-dan-matahari-pagi-italia.jpg?s=1024x1024&w=is&k=20&c=22eZQo9nXRdHlec9H4Bz-yLcPXnyRbAtiavi-wGneH8=" 
                 alt="Karya 1" 
                 width="200" 
                 loading="lazy" 
                 onerror="this.src='https://via.placeholder.com/200x200.png?text=Error+Loading+Image';">
            <p>Colloseum</p>
        </div>
        <div>
            <img src="https://media.istockphoto.com/id/1094564176/id/foto/colosseum-di-roma-dan-matahari-pagi-italia.jpg?s=1024x1024&w=is&k=20&c=22eZQo9nXRdHlec9H4Bz-yLcPXnyRbAtiavi-wGneH8=" 
                 alt="Karya 2" 
                 width="200" 
                 loading="lazy" 
                 onerror="this.src='https://via.placeholder.com/200x200.png?text=Error+Loading+Image';">
            <p>Colloseum</p>
        </div>
        <div>
            <img src="https://media.istockphoto.com/id/1094564176/id/foto/colosseum-di-roma-dan-matahari-pagi-italia.jpg?s=1024x1024&w=is&k=20&c=22eZQo9nXRdHlec9H4Bz-yLcPXnyRbAtiavi-wGneH8=" 
                 alt="Karya 3" 
                 width="200" 
                 loading="lazy" 
                 onerror="this.src='https://via.placeholder.com/200x200.png?text=Error+Loading+Image';">
            <p>Colloseum</p>
        </div>
    </div>
@endsection