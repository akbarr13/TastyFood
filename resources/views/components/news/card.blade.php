<div id="news-card" class="overflow-hidden flex flex-col bg-slate-50 gap-8 rounded shadow-lg mb-2">
    <img src="{{ asset('assets/images/' . $image) }}" class="news-card-img" alt="">
    <h1 class=" font-bold text-4xl mx-4 h-24">Lorem ipsum</h1>
    <p class="mx-4 h-56 font-medium text-xl overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur explicabo est
        tempore! Quidem</p>
    <div id="news-card-footer" class="flex justify-between items-end mt-auto p-4">
        <a href="" class="text-orange-500 text-lg">Baca selengkapnya</a>
        <img src="{{ asset('assets/images/more.png') }}" class="mt-3" width="30px" alt="">
    </div>
</div>

<style>
    #news-card {
        width: 400px;
        height: 550px;
        box-shadow: 10px;
        border-radius: 1rem
    }

    .news-card-img {
        object-fit: cover;
        height: 250px;
    }

    .news-card a {
        color: #ffb200 !important;
    }
</style>
