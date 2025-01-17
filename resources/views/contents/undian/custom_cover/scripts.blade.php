@push('customScripts')
    <script>
        let slideIndex = 0;
        let slideIndex2 = 0;
        
        showSlides();
        showSlides2();
        
        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 3000); // Ganti gambar setiap 3 detik
        }
        
        function showSlides2() {
            let i;
            let slides = document.getElementsByClassName("mySlides2");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex2++;
            if (slideIndex2 > slides.length) {slideIndex2 = 1}
            slides[slideIndex2-1].style.display = "block";
            setTimeout(showSlides2, 3000); // Ganti gambar setiap 3 detik
        }
    </script>
@endpush
