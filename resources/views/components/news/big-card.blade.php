<div id="big-card" class="overflow-hidden  flex flex-col bg-slate-50 gap-8 rounded-2xl shadow-lg">
    <img src="{{ asset('assets/images/' . $image) }}" class="big-card-img" alt="">
    <h1 class=" font-bold text-4xl mx-8 h-24">{{$news->title}}</h1>
    <p class="mx-8 h-48 text-xl font-medium">{{$news->content}}</p>
    <div id="big-card-footer" class="flex justify-between items-end mt-auto p-4">
        <a href="/berita/{{$news->slug}}" class="text-orange-500 text-lg">Baca selengkapnya</a>
        <img src="{{ asset('assets/images/more.png') }}" width="30px" alt="">
    </div>
</div>


<style>
    #big-card {
        width: 800px;
        height: 1125px  ;
        box-shadow: 10px;
        border-radius: 1rem
    }

    .big-card-img {
        object-fit: cover;
        height: 450px;
        width: 800px;
    }

    .big-card a {
        color: #ffb200 !important;
    }
</style>
