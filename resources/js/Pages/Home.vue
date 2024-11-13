<template>
    <AppLayouts>
    <main>
        <section class="section-1">
            <div class="section-1-teks">
                <p class="section-1-headline">SELAMAT DATANG!</p>
                <p class="section-1-content">
                    DENGAN KOLEKSI YANG TERUS BERKEMBANG DAN DESAIN YANG TRENDI, KAMI BERKOMITMEN UNTUK MEMBERIKAN ANDA PENGALAMAN BELANJA YANG TAK TERLUPAKAN.
                </p>
                <p class="section-1-content">JELAJAHI KOLEKSI KAMI SEKARANG DAN TEMUKAN GAYA YANG SESUAI DENGAN DIRI ANDA.</p>
            </div>
        </section>
        <section class="section-2">
                <p class="section-2-headline" >Night in Paris</p>
            <p class="section-2-teks">
                DI TENGAH KEMILAU PARIS FASHION WEEK, DI MANA CAHAYA DAN KREATIVITAS BERPADU DALAM TARIAN MEGAH, TERLAHIR SEBUAH VISI YANG MEMBANGKITKAN SEMANGAT. DALAM KERUMUNAN GEMERLAP BUSANA YANG MENAWAN, IDE UNTUK SEBUAH MEREK FASHION MUNCUL—SEBUAH KONSEP YANG MEMADUKAN KEINDAHAN COUTURE DENGAN FUNGSI SEHARI-HARI. TERINSPIRASI OLEH KEANGGUNAN DAN KEBERANIAN YANG MEMUKAU MATA, LAHIR ABOUT THE FIT, BUKAN HANYA SEBAGAI PELENGKAP TREN, TETAPI SEBAGAI PELUKIS JEJAK BARU DI KANVAS MODE. BRAND INI MERAYAKAN KEUNIKAN SETIAP INDIVIDU MELALUI DESAIN YANG MEMIKAT DAN PENUH MAKNA, MENGHADIRKAN PENGALAMAN FASHION YANG MELAMPAUI BATAS-BATAS KONVENSIONAL DAN MENGHIDUPKAN KEAJAIBAN DALAM SETIAP HELAI KAINNYA.
            </p>
        </section>
        <section class="section-3">
        </section>
        <section class="section-4">
            <p class="section-4-teks">
                DI ABOUT THE FIT, KAMI PERCAYA PADA PENTINGNYA KUALITAS, KENYAMANAN, DAN KEBERLANJUTAN. SETIAP PRODUK YANG KAMI BUAT DIRANCANG DENGAN HATI-HATI MENGGUNAKAN BAHAN-BAHAN BERKUALITAS TINGGI. KAMI JUGA BERKOMITMEN UNTUK MEMPRODUKSI SECARA BERTANGGUNG JAWAB, DENGAN MEMINIMALKAN DAMPAK LINGKUNGAN.KAMI PERCAYA BAHWA FASHION HARUS MENJADI SARANA UNTUK MENGEKSPRESIKAN DIRI, DAN KAMI INGIN MENJADI BAGIAN DARI PERJALANAN GAYA HIDUP ANDA.
            </p>
        </section>
        <section class="section-5">
        </section>
        <section class="section-6">
            <div class="section-6-visi-misi">
                <v-row>
                    <v-col>
                        <p class="section-6-text">MENJADI MEREK FASHION TERDEPAN YANG MENGINSPIRASI SETIAP INDIVIDU UNTUK MENGEKSPRESIKAN DIRI DENGAN PERCAYA DIRI MELALUI PAKAIAN YANG NYAMAN DAN BERGAYA.</p> 
                    </v-col>
                    <v-divider vertical style="border: 2px solid"></v-divider>
                    <v-col>
                        <p class="section-6-text">MENYEDIAKAN PILIHAN FASHION YANG BERAGAM DAN BERKUALITAS, YANG DIRANCANG KHUSUS UNTUK MEMENUHI KEBUTUHAN DAN GAYA HIDUP MODERN, SERTA MENDORONG INKLUSIVITAS DALAM DUNIA FASHION.</p>
                    </v-col>
                </v-row>
            </div>
        </section>
    </main>
    </AppLayouts>
</template>

<script setup>
import AppLayouts from '../Layouts/Public/AppLayouts.vue';
import { ref, onMounted, onBeforeUnmount } from 'vue';

const textElements = ref([]);

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            textElements.value.forEach(el => el.classList.add('section-6-text-animated'));
        } else {
            textElements.value.forEach(el => el.classList.remove('section-6-text-animated'));
        }
    });
}, {
    threshold: 0.1 // Trigger the observer when 10% of the section is visible
});

onMounted(() => {
    textElements.value = Array.from(document.querySelectorAll('.section-6-text'));
    textElements.value.forEach(el => observer.observe(el));
});

onBeforeUnmount(() => {
    textElements.value.forEach(el => observer.unobserve(el));
});
</script>

<style scoped>
main {
    display: flex;
    flex-direction: column;
    color: #192436;
    min-height: calc(100vh - 80px);
    background-color: black
}

.section-1{
    background-image: url('../../assets/model/head-1.jpg');
    background-size: cover;
    background-position: 50% 30%;
    background-repeat: no-repeat;
    height: 80vh; 
    width: 100%;
}

.section-1-teks{
    text-align: center;
    color:white;
    margin-right: 400px;
    margin-left: 400px;
    font-size: x-large;
    margin-top: 28%;
    font-weight: 800;
    font-family: "Montserrat", sans-serif;
    font-optical-sizing: auto;
    font-weight: 600;
    font-style: normal;
}

.section-1-headline{
    font-size: xx-large;
    margin-bottom:10px;
    
}

.section-1-content{
    font-size: x-large;
}

.section-2{
    display: flex;
    flex-direction: column;
    background-color: black;
    height: 90vh;
    position: sticky; 
    top: 0;
    z-index: 1;
}

.section-2-headline{
    text-align: center;
    margin-top: 15%;
    color:white;
    font-size: xx-large;
    font-family: "Spectral SC", serif;
    font-weight: 600;
    font-style: italic;
}

.section-2-teks{
    text-align: center;
    margin-top: 20px;
    color:white;
    margin-right: 60px;
    margin-left: 60px;
    font-size: x-large;
    font-family: "Montserrat", sans-serif;
  font-optical-sizing: auto;
  font-weight: 600;
  font-style: normal;
}


.section-2-paris{
    font-family: "Parisienne", cursive;
    font-weight: 400;
    font-style: normal;
    color: white;
    margin: 0; 
    padding: 0;
}

.section-3 {
    background-image: url('../../assets/model/7.jpg'), url('../../assets/model/9.jpg'), url('../../assets/model/8.jpg');
    background-size: contain, contain, contain;
    background-position: left center, center center, right center;
    height: 80vh;
    width: 100%;
    z-index: 2;
    background-color: black;
}

.section-4{
    display: flex;
    flex-direction: column;
    background-color: white;
    height: 80vh;
    position: sticky;
    top: 0;
    z-index: 1;
    text-align: center;
    font-size: x-large;
}

.section-4-teks{
    margin-top: 18%;
    margin-right: 60px;
    margin-left: 60px;
    margin-bottom: 10%;
    font-family: "Montserrat", sans-serif;
  font-optical-sizing: auto;
  font-weight: 600;
  font-style: normal;
}

.section-5{
    background-image: url('../../assets/model/1.jpg'), url('../../assets/model/3.jpg'), url('../../assets/model/2.jpg');
    background-size: 33.33% 100%, 33.33% 100%, 34.33% 100%;
    background-position: left center, center center, right center;
    height: 80vh;
    width: 100%;
    z-index: 2;
}

@keyframes slideUp {
    from {
        transform: translateY(20%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.section-6 {
    display: flex;
    flex-direction: column;
    background-color: white;
    height: 50vh;
    z-index: 2;
    text-align: center;
    font-size: x-large;
    overflow: hidden; /* Ensure child elements don’t overflow during animation */
}

.section-6-text {
    /* Initially hide the text */
    opacity: 0;
    transform: translateY(20%);
}

.section-6-text-animated {
    animation: slideUp 1s ease-out forwards;
}

.section-6-teks{
    margin-top: 10%;
    margin-right: 60px;
    margin-left: 60px;
    margin-bottom: 10%;
    font-family: "Montserrat", sans-serif;
  font-optical-sizing: auto;
  font-weight: 600;
  font-style: normal;
}

.section-6-visi-misi{
    margin-top: 10%;
    margin-left: 10%;
    margin-right: 10%;
    font-family: "Montserrat", sans-serif;
    font-optical-sizing: auto;
    font-weight: 600;
    font-style: normal;
}

</style>
