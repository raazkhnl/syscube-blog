<style>
img:hover {
    opacity: 0.6;
}

button:hover {
    opacity: 0.6;
}

.service-list {
    background-color: rgb(82, 59, 59);
    cursor: pointer;
    color: white;
}

.service-list:hover {
    opacity: 0.6;
}
</style>
<x-app-layout>
    {{-- <-- Edit Blog --> --}}
    <div class="container">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-success text-gray-800 leading-tight">
                <b>Our Services</b>
            </h2>
        </x-slot>
        <!-- column starts -->
        <div class="container-fluid mb-5">
            <div class="our-services mt-5">

                <div class="row text-center mt-5">
                    <div class="col-md-4">
                        <div class="service-list mt-3 py-5">
                            <center><img src="{{ asset('storage\Images\web1.png') }}" style="height: 80px; width: 80px;"
                                    class="img-fluid"></center>
                            <br>
                            <h3>WEB DEVELOPMENT</h3><br>
                            <p class="text-center px-2">We develop native and smooth web page for your need with best
                                customization possible</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-list mt-3 py-5">
                            <center><img src="{{ asset('storage\Images\android.png') }}"
                                    style="height: 80px; width: 80px;" class="img-fluid"></center>
                            <br>
                            <h3>ANDROID DEVELOPMENT</h3><br>
                            <p class="text-center px-2">We develop native and smooth application for your need with best
                                customization possible</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-list mt-3 py-5">
                            <center><img src="{{ asset('storage\Images\game.png') }}" style="height: 80px; width: 80px;"
                                    class="img-fluid"></center>
                            <br>
                            <h3>GAME DEVELOPMENT</h3><br>
                            <p class="text-center px-2">We develop native and smooth game for your need with best
                                customization possible</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-list mt-3 py-5">
                            <center><img src="{{ asset('storage\Images\graphic.png') }}"
                                    style="height: 80px; width: 80px;" class="img-fluid"></center>
                            <br>
                            <h3>GRAPHIC DESIGN</h3><br>
                            <p class="text-center px-2">We develop native and smooth graphics for your need with best
                                customization possible</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-list mt-3 py-5">
                            <center><img src="{{ asset('storage\Images\hosting.png') }}"
                                    style="height: 80px; width: 80px;" class="img-fluid"></center>
                            <br>
                            <h3>HOSTING SERVICES</h3><br>
                            <p class="text-center px-2">We can host native and smoothly for your need with best
                                customization possible</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-list mt-3 py-5">
                            <center><img src="{{ asset('storage\Images\windows.png') }}"
                                    style="height: 80px; width: 80px;" class="img-fluid"></center>
                            <br>
                            <h3>WINDOWS DEVELOPMENT</h3><br>
                            <p class="text-center px-2">We develop native and smooth windows for your need with best
                                customization possible</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- column ends-->
    </div>
</x-app-layout>