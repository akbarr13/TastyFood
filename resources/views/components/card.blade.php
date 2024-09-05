<div id="card" class="w-96 bg-white rounded-xl gap-8  mt-32 flex justify-center flex-col items-center ">
    <img id="card-img" src="{{ asset('assets/images/' . $image) }}" class="" width="90%" alt="">
    <h1 class="mt-20 font-bold text-4xl uppercase">Lorem Ipsum</h1>
    <p class="text-center text-lg mx-12 font-medium">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam mollitia
        aperiam molestiae quam expedita
        sit!</p>
</div>

<style>

    #card {
        height: 430px;
    }
    #card-img {
        width: 15%;
        top: 150%;
        position: absolute;
    }
</style>
