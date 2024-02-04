@extends('app-guest')
@section('title', 'Home')

@section('content')
    <link rel="stylesheet" href="css/home.css">

    <div class="hackthon" id="home">
        <img id="window" src="asset-home/window.png" alt="window">
        <img id="wifi" src="asset-home/wifi.png" alt="wifi">
        <span id="welcome">
            <span id="title">Hackathon</span>
            <br>
            <button id="letsGo">Let's Go</button>
        </span>
        <img id="laptop" src="asset-home/laptop.png" alt="laptop">
    </div>

    <div class="abt" id="aboutUs">
        <span id="abtTitle">ABOUT HACKATHON</span><br>
        <p id="abtPrgph">
            Hackathon merupakan puncak dari TechnoScape berupa kompetisi coding secara offline selama 48 jam,
            di mana setiap tim bersaing untuk membuat aplikasi atau situs web inovatif yang
            dapat memecahkan permasalahan di kehidupan nyata. Peserta berkesempatan
            untuk berinteraksi dengan para mentor dalam sesi mentoring bisnis, teknologi, dan desain.
        </p> <br>
        <button id="abtGuidebook">Guidebook</button><br>
        <img id="abtPhoto" src="asset-home/photo.png" alt="photo">
        <img id="abtWindows" src="asset-home/windows2.png" alt="windows">
    </div>

    <div id="cp">
        <div id="championPrizes">
            CHAMPION PRIZES
        </div><br><br><br><br><br><br>
        <div id="champion">
            <span class="duatiga" id="dua">
                <img id="two" src="asset-home/two.png" alt="two"><br><br><br><br>
                <p id="table">
                    <span>
                        <img id="money" src="asset-home/money.png" alt="money"><br><br><br><br>
                        <img id="gift" src="asset-home/gift.png" alt="merchandise"><br><br><br><br>
                        <img id="certificate" src="asset-home/certificate.png" alt="certificate">
                    </span>
                    <span>
                        <br><br><br><br><span class="prize">Mechandise</span>
                        <br><br><br><br><span class="prize">Certificate</span>
                    </span>

                </p>
            </span>
            <span id="dua">
                <img id="one" src="asset-home/one.png" alt="one"><br><br><br><br>
                <p id="table">
                    <span>
                        <img id="money" src="asset-home/money.png" alt="money"><br><br><br><br>
                        <img id="gift" src="asset-home/gift.png" alt="merchandise"><br><br><br><br>
                        <img id="certificate" src="asset-home/certificate.png" alt="certificate">
                    </span>
                    <span>
                        <br><br><br><br><span class="prize">Mechandise</span>
                        <br><br><br><br><span class="prize">Certificate</span>
                    </span>

                </p>
            </span>
            <span class="duatiga" id="dua">
                <img id="two" src="asset-home/three.png" alt="two"><br><br><br><br>
                <p id="table">
                    <span>
                        <img id="money" src="asset-home/money.png" alt="money"><br><br><br><br>
                        <img id="gift" src="asset-home/gift.png" alt="merchandise"><br><br><br><br>
                        <img id="certificate" src="asset-home/certificate.png" alt="certificate">
                    </span>
                    <span>
                        <br><br><br><br><span class="prize">Mechandise</span>
                        <br><br><br><br><span class="prize">Certificate</span>
                    </span>

                </p>
            </span>
        </div>
    </div>

    <div id="faq">
        <span id="FAQQ">
            <img id="question" src="asset-home/question.png" alt="question">
            <span id="FAQ">FAQ</span>
            <span id="freasque">Frequently <br>Asked <br>Questions</span>
        </span>

        <span class="accordion">
            <span class="contentBx">
                <span class="label">
                    <label>
                        Apa saja persyaratan untuk berpartisipasi di Hackathon?
                    </label>
                    <img src="asset-home/arrow.png" alt="arrow">
                </span>
                <span class="content">
                    <p>Peserta hanya dapat bergabung dalam 1 tim, baik
                        secara individu maupun tim (setiap tim dapat
                        beranggotakan maksimal 4 orang). <br><br>

                        Peserta adalah warga negara Indonesia berusia 18
                        hingga 25 tahun untuk memenuhi syarat. <br><br>

                        Peserta harus menyerahkan dokumen yang dibutuhkan
                        pada halaman pendaftaran Hackathon, seperti: <br>
                        CV (Curriculum Vitae) <br>
                        Portfolio (required, tetapi tidak wajib) <br>
                        Non-Binusian: KTP (KTP/SIM/dll) <br>
                        Binusian: Kartu Binusian (Kartu Flazz) <br>
                    </p>
                </span>
            </span>

            <span class="contentBx">
                <span class="label">
                    <label>
                        Apakah Hackathon gratis?
                    </label>
                    <img src="asset-home/arrow.png" alt="arrow">
                </span>
                <span class="content">
                    <p>Biaya pendaftaran: <br>
                        Binusian Rp. 175.000 <br>
                        Non-Binusian: Rp. 200.000 <br>
                    </p>
                </span>
            </span>

            <span class="contentBx">
                <span class="label">
                    <label>
                        Kapan batas waktu pendaftaran?
                    </label>
                    <img src="asset-home/arrow.png" alt="arrow">
                </span>
                <span class="content">
                    <p>Batas akhir pendaftaran adalah Jumat, 16 Juli 2023.
                    </p>
                </span>
            </span>

            <span class="contentBx">
                <span class="label">
                    <label>
                        Bisakah saya bergabung
                        dengan lebih dari satu tim?
                    </label>
                    <img src="asset-home/arrow.png" alt="arrow">
                </span>
                <span class="content">
                    <p>Peserta hanya diperbolehkan bergabung dalam satu tim.
                        Jika lebih dari satu tim, peserta tidak akan
                        terdaftar sebagai peserta Hackathon
                    </p>
                </span>
            </span>

            <span class="contentBx">
                <span class="label">
                    <label>
                        Jika saya tidak memiliki dasar pemrograman
                        atau desain, bolehkah saya berpartisipasi?
                    </label>
                    <img src="asset-home/arrow.png" alt="arrow">
                </span>
                <span class="content">
                    <p>Peserta tanpa latar belakang pemrograman atau
                        dasar-dasar coding dan desain masih diperbolehkan
                        untuk berpartisipasi pada acara Hackathon. Namun,
                        akan ada seleksi untuk menentukan tim yang akan lolos.
                    </p>
                </span>
            </span>

            <span class="contentBx">
                <span class="label">
                    <label>
                        Bagaimana jika para peserta sudah menyiapkan
                        dan menggunakan source code sebelum acara dimulai?
                    </label>
                    <img src="asset-home/arrow.png" alt="arrow">
                </span>
                <span class="content">
                    <p>Bagi peserta yang menyiapkan dan menggunakan
                        source code sebelum acara dimulai dan ikut berkompetisi,
                        hal tersebut termasuk ke dalam pelanggaran. Jika peserta
                        terbukti melakukan pelanggaran, maka peserta tersebut
                        akan didiskualifikasi.
                    </p>
                </span>
            </span>

            <span class="contentBx">
                <span class="label">
                    <label>
                        Jika saya tidak memenuhi syarat atau
                        tidak lolos seleksi untuk acara Hackathon, bagaimana dengan biaya pendaftaran saya?
                    </label>
                    <img src="asset-home/arrow.png" alt="arrow">
                </span>
                <span class="content">
                    <p>Kami akan mengembalikan 100% biaya pendaftaran,
                        jika peserta tidak memenuhi syarat atau tidak lolos
                        seleksi untuk acara ini.
                    </p>
                </span>
            </span>

            <span class="contentBx">
                <span class="label">
                    <label>
                        Jika saya memenuhi syarat untuk acara Hackathon,
                        tetapi saya tidak ingin terus melanjutkan acara ini,
                        bagaimana dengan biaya pendaftaran saya?
                    </label>
                    <img src="asset-home/arrow.png" alt="arrow">
                </span>
                <span class="content">
                    <p>Kami tidak akan mengembalikan biaya pendaftaran
                        bagi peserta yang tidak ingin melanjutkan acara ini,
                        meskipun sudah memenuhi syarat untuk mengikuti acara ini.
                    </p>
                </span>
            </span>

            <span class="contentBx">
                <span class="label">
                    <label>
                        Jika saya memiliki pertanyaan,
                        siapa yang dapat saya hubungi?
                    </label>
                    <img src="asset-home/arrow.png" alt="arrow">
                </span>
                <span class="content">
                    <p>Jika Anda memiliki pertanyaan, jangan ragu untuk
                        menghubungi contact person kami: <br>
                        Hanson <br>
                        WA : 081398533025ID <br>
                        LINE : ivanderhanson0105 <br><br>

                        Audrey <br>
                        WA : 085173171809ID <br>
                        LINE : dreyelvia <br>
                    </p>
                </span>
            </span>
        </span>
    </div>

    <div id="timeline">
        <h1 id="tl">TIMELINE</h1>
        <div id="image">
            <span class="jalur" id="atu">
                <span class="dates" id="clsRegi">Close Registration</span>
                <span class="dates" id="compDay">Competition Day</span>
            </span>
            <img id="line" src="asset-home/line.png" alt="line">
            <span class="jalur">
                <span class="dates" id="openRegi">Open Registration</span>
                <span class="dates" id="techMeet">Technical Meeting</span>
            </span>
        </div>
    </div>

    <div id="mentorAndJury">
        <div class="ourMentor">Our Mentors</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="container">
            <div class="wrapper">
                <img src="asset-home/m1.png">
                <img src="asset-home/m2.png">
                <img src="asset-home/m3.png">
            </div>
        </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="ourMentor">Our Juries</div><br><br><br><br><br><br><br><br><br>
        <div class="container" id="jury">
            <div class="wrapper" id="juries">
                <img src="asset-home/j1.png">
                <img src="asset-home/j2.png">
                <img src="asset-home/j3.png">
            </div>
        </div>
    </div>

    <div id="sponsors">
        <h1 class="heading">SPONSORS</h1><br><br><br><br><br><br>
        <div id="sponsorsImg">
            <div class="level">
                <span>Platinum Sponsors</span><br><br><br>
                <img src="asset-home/plat.png" alt="platinum">
            </div><br><br><br><br><br><br>
            <div class="level">
                <span>Gold Sponsors</span><br><br><br>
                <img src="asset-home/gold.png" alt="gold">
            </div><br><br><br><br><br><br>
            <div class="level">
                <span>Silver Sponsors</span><br><br><br>
                <img src="asset-home/silv.png" alt="silver">
            </div>
        </div>
    </div>

    <div id="mp">
        <h1 class="heading">Media Partners</h1><br><br><br><br>
        <img src="asset-home/media.png" alt="media">
    </div>

    <footer>
        <span id="left">
            <span id="logoBncc">
                <span class="footerLabel">Organized By</span><br><br>
                <img id="bncc" src="asset-home/bncc.svg" alt="bncc">
            </span>
            <span id="Affiliate">
                <span class="footerLabel">Official Learning Partner of</span><br>
                <img id="gojek" src="asset-home/gojek.svg" alt="gojek"><br><br>
                <span class="footerLabel">Official Empowering Affiliate of</span><br>
                <img src="asset-home/tiket.svg" alt="tiket.com">
            </span>
        </span>

        <span id="techno">
            <span>
                <span class="footerLabel">Subscribe to TechnoScape</span><br><br>
                <span>
                    <span>
                        <input type="text" id="email" placeholder="Masukkan Email Anda">
                    </span>
                    <button id="send-btn" type="submit"></button>
                </span>
            </span>

            <span id="sosmed">
                <a href="https://medium.com/technoscape-bncc">
                    <img class="social" src="asset-home/idk.svg" alt="social">
                </a>
                <a href="https://www.instagram.com/bnccbinus/">
                    <img class="social" src="asset-home/ig.svg" alt="instagram">
                </a>
                <a href="https://www.facebook.com/bina.nusantara.computer.club/">
                    <img class="social" src="asset-home/fb.svg" alt="facebook">
                </a>
                <a href="https://twitter.com/bncc_binus">
                    <img class="social" src="asset-home/twt.svg" alt="twitter">
                </a>
                <a href="https://www.linkedin.com/company/bina-nusantara-computer-club/">
                    <img class="social" src="asset-home/lin.svg" alt="linkedIn">
                </a>
            </span>

        </span>

    </footer>

    <div class="loader">
        <img id="loaderImg" src="asset-home/loading.svg" alt="loading">
    </div>

    <script src="js/home.js"></script>

@endsection
