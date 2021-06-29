@extends('layouts.default')

@section('main')
<!-- personal data -->
<section class="bg-white" style="border-radius: 30px;">
    <div class="text-start">
        <label class="mb-2" for="picture">Picture</label>
        <div class="text-center">
            <video autoplay="false" id="video-webcam">
            </video>
        </div>
        <label class="mb-2" for="activity">Activity</label>
        <div class="mb-2">
            <div class="input-group">
                <input type="text" class="form-control w-25" placeholder="">
            </div>
        </div>
        <label class="mb-2" for="work">Work</label>
        <select class="form-select mb-4" aria-label="Default select example">
            <option selected>--Select--</option>
            <option value="WFO">WFO</option>
            <option value="WFH">WFH</option>
        </select>
        <button class="btn btn-bluega w-100">Upload</button>
    </div>
</section>
@endsection

@section('addonscripts')
<script type="text/javascript">
    // seleksi elemen video
    var video = document.querySelector("#video-webcam");

    // minta izin user
    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

    // jika user memberikan izin
    if (navigator.getUserMedia) {
        // jalankan fungsi handleVideo, dan videoError jika izin ditolak
        navigator.getUserMedia({ video: true }, handleVideo, videoError);
    }

    // fungsi ini akan dieksekusi jika  izin telah diberikan
    function handleVideo(stream) {
        video.srcObject = stream;
    }

    // fungsi ini akan dieksekusi kalau user menolak izin
    function videoError(e) {
        // do something
        alert("Izinkan menggunakan webcam untuk demo!")
    }
</script>
@endsection