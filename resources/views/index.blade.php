<!DOCTYPE html>
<html lang="en, id">
<head>
  <meta charset="UTF-8">
  <meta name="theme-color" content="#211212">
  <meta property="og:title" content="OSIS SMKN 1 BONDOWOSO">
  <meta property="og:image" content="https://osis.smkn1bws.sch.id/assets/img/logo.png">
  <meta property="og:description" content="Selamat datang di web osis smkn 1 bondowoso">
  <meta property="og:url" content="https://osis.smkn1bws.sch.id/">
  <meta property="og:type" content="article" />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@foreach($setting as $item){{$item->nama_web}}@endforeach</title>
  <!-- link shortcut icon -->
  <link rel="shortcut icon" type="ico/png" href="@foreach($setting as $item){{asset('img/'.$item->logo_osis)}}@endforeach">
  <!-- link css -->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/lib/css/all.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/lib/css/aos.css')}} ">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/public/css/ijendev.min.css')}} ">
  <!-- link flexstart -->
  <!-- font css route link -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700;800;900&family=Quicksand:wght@300;500;600;700&display=swap" rel="stylesheet" crossorigin="anonymous">
  <!-- javascript lib -->
  <script type="text/javascript" src="{{asset('frontend/lib/js/aos.js')}}"></script>
</head>
<body>
  <!-- header -->

  <header id="header">
    <div class="container-head">
      <a href=""><img src="@foreach($setting as $item){{asset('img/'.$item->logo_osis)}}@endforeach" alt="logos"></a>
      <ul>
        <li><a href="#hero">Beranda</a></li>
        <li><a href="#">Lomba </a></li>
        <li><a href="#visi-misi">Visi-misi</a></li>
        <li><a>Pilketos <b class="badge">@foreach($header as $item){{$item->periode}}@endforeach</b></a></li>
        <li><a href="http://surat.smkn1bws.sch.id">Surat</a></li>
        <li><a href=" {{asset('frontend/download/Ketosin.apk')}}" download="download/Ketosin.apk">Unduh APK <i class="fab fa-android r-icon"></i></a></li>
      </ul>
      <a href="#" class="far fa-bars bars" onclick="bars();"></a>
    </div>
  </header>

  <!-- mobile sidebar -->
  <div class="mobile">
    <a href="javascript:void(0);" class="closeN" onclick="closeN();">&times;</a>
    <a class="active">Beranda</a>
    <a>Lomba </a>
    <a>Visi-misi</a>
    <a>Pilketos <b class="badge">@foreach($header as $item){{$item->periode}}@endforeach</b></a>
    <a href="http://surat.smkn1bws.sch.id">Surat</a>
    <a href=" {{asset('frontend/download/Ketosin.apk')}} " download="download/Ketosin.apk"">Unduh APK<i class="fab fa-android r-icon"></i></a>
    <br>
    <div class="lines"></div>
    <br>
<!--    <a href="#">DAFTAR</a>
  <a href="#" class="btn">MASUK</a> -->
  <p>osissmkn1bws.sch.id</p>
</div>

<!-- body -->
@foreach($header as $item)
<section class="body-wrap" id="hero">
  <div class="box">
    <div class="box-wrap">
      <div class="column">
        <small>periode {{$item->periode}}</small>
        <br>
        <h1>OSIS <b>SMAKENSA</b> Bondowoso</h1>
        <br>
        <p>{{$item->deskripsi}}</p>
        <br>
        <a href="{{$item->link_pendaftaran}}"><button class="btn">Pendaftaran <i class="far fa-users r-icon"></i></button></a>
      </div>
      <div class="column">
        <img src="{{asset('img/'.$item->ilustrasi)}}" alt="">
      </div>
      <section style="padding: 40px"></section>
    </div>
  </div>
</section>
@endforeach
<div class="box-post">
  <div class="title-box" data-aos="fade-up">
    @foreach($setting as $item)
    <a href="{{$item->link_web}}" style="text-decoration: none; color:#100909"><small >smkn1bws.sch.id</small></a>
    <h1>{{$item->title_ketos}}</h1>
    @endforeach
    <br>
    <div class="line"></div>
    <br>
    <p></p>
  </div>
  <br><br>  
  
  <div class="wrapper-card" data-aos="fade-up">
    @foreach($ketos as $item)
    <div class="card"  data-aos="fade-up" data-aos-duration="2000">
      <img src=" {{asset('img/'.$item->foto)}}"><br><br>
      <h3>{{$item->title}}</h3>
    </div>
    @endforeach
  </div>
</div>  


<div class="box-v2">
  <section class="background-2">
    <div class="title-box" data-aos="fade-up">
      <a href="@foreach($setting as $item){{$item->link_web}}@endforeach" style="text-decoration: none; color:#100909"><small >smkn1bws.sch.id</small></a>
      <h1>Pendapat</h1>
      <br>
      <div class="line"></div>
      <br>
      <p></p>
    </div>





    <!-- quotes -->
    <section class="quotes-carousel-container" data-aos="fade-up">
      <section class="quotes-carousel fade-up" id="quotes-carousel">
        <div class="quote previous">
          <div alt="Liz Myers"><img src="{{asset('frontend/assets/img/rz.jpg')}} " class="quote-person"></div>
          <div class="quote-text-container">
            <span class="quote-text">Pendapat paslon saya terkait pilketos tahun ini, sudah sangat perfect, sudah seperti pemilu pada dasarnya, walau di era pandemi seperti ini, pilketos di smkn 1 tetap eksis berkat kerja KPO yang ambisius yang positif dengan hasil yang memuaskan,atas paslon 1 kami ucapkan terimakasih sudah membantu jalan nya pilketos ini  </span>
            <span class="quotee"><a href="http://www.snaptin.com">Rizky Adi Putra</a></span>
          </div>
        </div>
        <div class="quote current">
          <div  alt="Maile Valentine"><img src=" {{asset('frontend/assets/img/dilot.png')}} " class="quote-person"></div>
          <div class="quote-text-container">
            <span class="quote-text">Menurut saya pelaksanaan pilketos tahun ini sangat berbeda dari tahun sebelumnya karena masing masing paslon diberikan bekal terlebih dahulu jadi mereka semua menjadi lebih siap untuk menjadi pasangan ketua osis dan wakil ketua osis</span>
            <span class="quotee"><a href="https://www.instagram.com/dila.adeliaaa/">Dila adelia juliarti</a></span>
          </div>
        </div>
        <div class="quote next">
          <div  alt="Marie Mosley"><img src="{{asset('frontend/assets/img/balqis.jpg')}}" class="quote-person"></div>
          <div class="quote-text-container">
            <span class="quote-text">Terkait pilketos tahun ini sudah baik, acara yang diadakan juga lebih menarik walaupun melalui media online tidak menghalangi  para guru dan siswa untuk mengapresiasi pendapat nya dan mereka juga bisa memberikan suara nya untuk memilih calon ketua dan wakil osis yang terbaik.atas nama paslon 3 kami mengucapkan terima kasih sudah membantu jalan nya pilketos tahun ini.</span>
            <span class="quotee"><a href="https://twitter.com/mmosley">Namiratus Balqis Elok Barlian</a></span>
          </div>
        </div>
      <!-- <div class="quote">
        <div alt="Ian Yates"><img src="{{asset('frontend/assets/img/rz.jpg')}} " class="quote-person"></div>
        <div class="quote-text-container">
          <span class="quote-text">Pendapat paslon 01 terkait pilketos tahun ini, sudah sangat perfect, sudah seperti pemilu pada dasarnya, walau di era pandemi seperti ini, pilketos di smkn 1 tetap eksis berkat kerja KPO yang ambisius yang positif dengan hasil yang memuaskan,atas paslon 1 kami ucapkan terimakasih sudah membantu jalan nya pilketos ini ✨</span>
          <span class="quotee"><a href="http://www.snaptin.com">Rizky Adi Putra</a></span>
        </div>
      </div> -->
      @foreach($pendapat as $item)
      <div class="quote">
        <div alt="Liz Myers"><img src="{{asset('img/'.$item->foto)}} " class="quote-person"></div>
        <div class="quote-text-container">
          <span class="quote-text">{{$item->deskripsi}}</span>
          <span class="quotee"><a href="{{$item->sosmed}}">{{$item->name}}</a></span>
        </div>
      </div>
      @endforeach
      <!-- <div class="quote">
        <div alt="Brian Rinaldi"><img src="{{asset('frontend/assets/img/des.jpg')}} " class="quote-person"></div>
        <div class="quote-text-container">
          <span class="quote-text">Pemilihan Ketua dan Wakil Ketua OSIS periode 2020-2021 berbeda dengan tahun sebelumnya ,karena tahun ini semua kegiatan melalui online. Dari pendaftaran secara online , kampanye online ,sampai Debatpun kita melalui online. Tetapi itu tidak menjadi halangan kita sebagai panitia untuk memfasilitasi para pasangan calon untuk mengenal kan dirinya dan memperkenalkan bakat dan niatnya menjadi Ketua dan Wakil Ketua OSIS untuk periode 2020-2021. Siapapun yang menjadi Ketua dan Wakil Ketua OSIS nantinya semoga menjadi pemimpin yang amanah dan bertanggung jawab.</span>
          <span class="quotee"><a href="https://www.instagram.com/desyputria__/">Desy Putri Ayuningtiyas</a></span>
        </div>
      </div>
 <div class="quote">
        <div alt="Ronan Costello"><img src="{{asset('frontend/assets/img/vells.jpg')}} " class="quote-person"></div>
        <div class="quote-text-container">
          <span class="quote-text">Terkait Pesta Demokrasi pada tahun ini banyak beberapa sistem dan tekhnis yang sangat berbeda dari tahun sebelum nya.
 Karena adanya Pandemi Covid-19.
Namun ,hal tersebut tidak menjadi masalah kami sebagai panitia KPO, Tim IT BP2 dan khusus nya saya sebagai Ketua OSIS periode 2019/2020 yang bertugas sebagai penanggung jawab pada Pesta Demokrasi Tahun 2020 ini.
Dimulai dari pendaftaran calon Ketua dan wakil Ketua OSIS sampai Pemilihan di laksanakan Secara Daring.
Sebenar nya dengan sistem secara daring ini sedikit rumit, dan kendala nya pun juga beraneka ragam.
Walaupun begitu semua Persiapan dan pelaksanaan bisa di Handle dengan baik oleh Panitia KPO, Tim IT maupun BP2.
Selain itu kami dari Panitia KPO , Tim IT dan BP2 dibina langsung oleh Banwaslu Bondowoso, Pembina OSiS dan pembina Tim IT.
Sehingga dalam pelaksanaan berjalan dengan sangat baik dan lancar</span>
          <span class="quotee"><a href="http://ronancostello.com/">Novelia Indah Dhea Ayu Putri Affandi</a></span>
        </div>
      </div> -->
    <!--   <div class="quote">
        <div class="quote-person" style="background-image: url(https://cssanimation.rocks/images/quotes/gemma_cagney.jpg);" alt="Ronan Costello"></div>
        <div class="quote-text-container">
          <span class="quote-text">I wanted to learn how to use CSS animation in my own work but I had no
    idea where to start. Donovan's course is like a filter for all the
    important and useful information, as well as best practice tips. Totally
    recommend it!</span>
          <span class="quotee"><a href="http://www.gemmacagney.com">Gemma Cagney</a></span>
        </div>
      </div> -->
      <!-- <div class="quote">
        <div class="quote-person" style="background-image: url(https://cssanimation.rocks/images/quotes/dave_larkan.jpg);" alt="Dave Larkan"></div>
        <div class="quote-text-container">
          <span class="quote-text">A fantastic resource, I was able to put what I learned into practice straight away. The course did exactly what I hoped it would and taught me about transitions and animations.</span>
          <span class="quotee"><a href="https://twitter.com/davelarkan">Dave Larkan</a></span>
        </div>
      </div> -->
   <!--    <div class="quote">
        <div class="quote-person" style="background-image: url(https://cssanimation.rocks/images/quotes/melanie_kinney.jpg);" alt="Melanie Kinney"></div>
        <div class="quote-text-container">
          <span class="quote-text">I loved it! It was great that I could do things at my own pace, it's really nice to have all the emails to go back and review.</span>
          <span class="quotee"><a href="https://twitter.com/melso0">Melanie Kinney</a></span>
        </div>
      </div> -->
     <!--  <div class="quote">
        <div class="quote-person" style="background-image: url(https://cssanimation.rocks/images/quotes/zoran_jambor.jpg);" alt="Zoran Jambor"></div>
        <div class="quote-text-container">
          <span class="quote-text">If you want to get better at CSS Animations, you should sign up for this course. It will take you from basic to advanced concepts explaining the inner workings of CSS Animations. It is both useful and fun.</span>
          <span class="quotee"><a href="http://css-weekly.com/">Zoran Jambor</a></span>
        </div>
      </div>
      <div class="quote">
        <div class="quote-person" style="background-image: url(https://cssanimation.rocks/images/quotes/brian_kenny.png);" alt="Brian Kenny"></div>
        <div class="quote-text-container">
          <span class="quote-text">CSS Animation 101 was superb. I learn by doing and this course hit the nail on the head. Exceptional.</span>
          <span class="quotee"><a href="http://www.minicorp.co">Brian Kenny</a></span>
        </div>
      </div>
    
      <div class="quote">
        <div class="quote-person" style="background-image: url(https://cssanimation.rocks/images/quotes/jake_bresnehan.jpg);" alt="Jake Bresnehan"></div>
        <div class="quote-text-container">
          <span class="quote-text">20 amazing emails over 4 weeks all on CSS animations will turn you into a pro in no time. Couldn't recommend it enough.</span>
          <span class="quotee"><a href="https://web-design-weekly.com">Jake Bresnehan</a></span>
        </div>
      </div>
      <div class="quote">
        <div class="quote-person" style="background-image: url(https://cssanimation.rocks/images/quotes/michael_flanaghan.png);" alt="Michael Flanaghan"></div>
        <div class="quote-text-container">
          <span class="quote-text">This is a well written, well presented, introduction to some of the newer and cooler features of modern CSS. Loved it.</span>
          <span class="quotee"><a href="http://michael.flanagan.ie/">Michael Flanaghan</a></span>
        </div>
      </div>
      <div class="quote">
        <div class="quote-person" style="background-image: url(https://cssanimation.rocks/images/quotes/ioana_manoliu.jpg);" alt="Ioana Manoliu"></div>
        <div class="quote-text-container">
          <span class="quote-text">@donovanh's CSS animation course kicks ass!!!!</span>
          <span class="quotee"><a href="https://twitter.com/Alice_monique1/status/585090068022489088">Ioana Manoliu</a></span>
        </div>
      </div> -->
      <!-- <div class="quote">
        <div class="quote-person" style="background-image: url(https://cssanimation.rocks/images/quotes/ben.jpg);" alt="Ben Gandhi-Shepard"></div>
        <div class="quote-text-container">
          <span class="quote-text">This course rocks. Transitions and animations totally make sense now. If you are looking to level up your CSS animation skills, I would highly recommend taking this course.</span>
          <span class="quotee"><a href="https://twitter.com/gandhishepard">Ben Gandhi-Shepard</a></span>
        </div>
      </div> -->
    </section>
  </section>
</section>
<br><br>
<br><br>
<br><br>

</div>
@foreach($video as $item)
<div class="box-video">
 <div class="container-video">
  <div class="item" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
    <iframe  src="{{$item->iframe}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <div class="item" data-aos="fade-up"
  data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
  <h1>{{$item->title}}</h1>
  <br>
  <p>{{$item->deskripsi}}</p>
  <section id="visi-misi"></section>
  <br><br>
  <a href="{{$item->link}}"><button class="btn">Watch on <i class="fab fa-youtube right"></i></button></a>
  <br><br><br>

</div>
</div>

</div>
@endforeach
<!-- visi misi page-->

<div class="box-v3">
  <div class="title-box" data-aos="fade-up">
    <a href="@foreach($setting as $item){{$item->link_web}}@endforeach" style="text-decoration: none; color:#100909"><small >smkn1bws.sch.id</small></a>
    <h1>Visi-misi</h1>
    <br>
    <div class="line"></div>
    <br><br>
    <div class="container" data-aos="fade-up">
      <div class="accordion">
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="true"><span class="accordion-title">Visi</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p>@foreach($visimisi as $item){!!$item->visi!!}@endforeach</p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Misi</span><span class="icon" aria-hidden="true"></span></button>
          <div class="accordion-content">
            <p><b>@foreach($visimisi as $item){!!$item->misi!!}@endforeach</b></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--<div class="box-v3">-->
  <!--  <div class="title-box" data-aos="fade-up">-->
    <!--    <small>smkn1bws.sch.id</small>-->
    <!--    <h1>Visi-misi</h1>-->
    <!--    <br>-->
    <!--    <div class="line"></div>-->
    <!--    <br><br>-->
    <!--    <div class="container" data-aos="fade-up">-->
      <!--  <div class="accordion">-->
        <!--    <div class="accordion-item">-->
          <!--      <button id="accordion-button-1" aria-expanded="true"><span class="accordion-title">Visi</span><span class="icon" aria-hidden="true"></span></button>-->
          <!--      <div class="accordion-content">-->
            <!--        <p>Menciptakan sekolah yang, be relgius, be smart and have fun. Dan mampu bersaing serta bersinergi di masyarakat</p>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class="accordion-item">-->
              <!--      <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Misi</span><span class="icon" aria-hidden="true"></span></button>-->
              <!--      <div class="accordion-content">-->
                <!--        <p>~ meningkatkan kegiatan ke agamaan di smkn1 bondowoso -->
                  <!--          <br>~ meningkatkan mutu kerja osis smkn1 bondowoso-->
                  <!--          <br>~ mengembangkan  kreatifitas, bakat minat dan potensi siswa melalui kegiatan kurikuler,ekstra kurikuler maupun organisasi.-->
                  <!--          <br>~ melanjutkan dan meningkatkan program osis yang sebelum nya</p>-->
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--  </div>-->
                  <!--</div>-->
                  <!--  </div>-->
                  <!--</div>-->



                </section>
                <!-- footer -->
                <div class="sub-footer">
                  @foreach($setting as $item)
                  <div class="subf">
                    <img src="{{asset('img/'.$item->logo_osis)}}">
                    <p style="color: #e8e4e3;">Terima kasih telah mengunjugi situs osis smakensa, jika ingin melihat postingan follow kami di instagram!</p>
                    <br>
                    <button class="btn">Follow us 
                      <a href="https://www.instagram.com/{{$item->instagram}}/" style="color: white;"><i class="fab fa-instagram right fa-lg"></i></a>
                    </button>
                  </div>
                  @endforeach
                  <div class="subf">
                    <h3>Menu</h3>
                    <br>
                    <div class="ul">
                      <section ><a href="#hero" style="color: #e8e4e3;" >Beranda</a></section>
                      <section ><a href="#" style="color: #e8e4e3;" >Lomba</a></section>
                      <section ><a href="#visi-misi" style="color: #e8e4e3;" >Visi-misi</a></section>
                      <section ><a href="#" style="color: #e8e4e3;" >Pilketos</a></section>
                      <section ><a href="@foreach($header as $item){{$item->link_pendaftaran}} @endforeach" style="color: #e8e4e3;" >Pendaftaran</a></section>
                    </div>

                  </div>
                  <div class="subf">
                    <h3>Contact Us</h3>
                    <br>
                    <div class="ul2">
                      @foreach($setting as $item)
                      <section><i class="fas fa-envelope"></i><a href="#" style="color: #e8e4e3;">{{$item->email}}</a></section>
                      <section><i class="fab fa-whatsapp"></i><a href="https://api.whatsapp.com/send?phone=62{{$item->whatsapp}}" style="color: #e8e4e3;">+62{{$item->whatsapp}}</a></section>
                      <section><i class="fas fa-map-marked"></i><a href="{{$item->maps}}" style="color: #e8e4e3;">SMKN1 Bondowoso</a></section>
                      <section><i class="fab fa-instagram"></i><a href="https://www.instagram.com/{{$item->instagram}}/" style="color: #e8e4e3;"><span>@</span>{{$item->instagram}}</a></section>
                      <section><a href="#"></a></section>
                      @endforeach
                    </div>
                  </div>
                  <div class="subf">
                    <div class="powered">
                      <img src="@foreach($setting as $item){{asset('img/'.$item->logo_smk)}}@endforeach " alt="">
                      <br><br><br>
                    </div>
                  </div>
                  <div style="padding: 30px; height: 50px;"></div>
                </div>
                <footer>
                  <p>Powered by Smkn 1 Bondowoso and Smakensa IT<i class="far fa-heart r-icon"></i></p>
                  <br>
                </footer>
              </body>
              </html>
              <style type="text/css">
                .box-video{
                  padding: 20px;
                  background: linear-gradient(to right bottom,#100909,#211212,#391E1E);
                  color: #fff;

                }
                .box-post{
                  padding: 30px;
                  text-align: center;
                }
                .box-post h1{
                  font-size: 40px;
                  font-family: 'Poppins', sans-serif;
                }
                .card{
                  padding-bottom: 10px;
                  display: inline-block;
                }
                .card img{
                  max-width: 300px;
                  height: 350px;
                  object-fit: cover;
                }
                .box-video .container-video{
                  text-align: center;
                  padding: 10px;
                  box-sizing: border-box;
                }
                .container-video .item{
                  text-align: left;
                  font-family: 'Quicksand', sans-serif;
                  padding: 10px;
                  box-sizing: border-box;
                  width: 500px;
                  margin-left: 30px;
                  display: inline-block;
                }
                .container-video h1{
                  font-family: 'Poppins',sans-serif;
                  font-size: 40px;
                }
                .container-video p{
                  font-size: 14px;
                }
                .container-video iframe{
                  border-radius: 10px;
                  max-width: 480px;
                  width: 100%;
                  box-sizing: border-box;
                  height: 300px;
                }
                @media only screen and (max-width: 780px){
                  .container-video .item{
                    width: 100%;
                    margin-left: 0;
                  }
                }


              </style>

              <style>
                .shadow-effect {
                  background: #fff;
                  padding: 20px;
                  border-radius: 4px;
                  text-align: center;
                  border:1px solid #ECECEC;
                  box-shadow: 0 19px 38px rgba(0,0,0,0.10), 0 15px 12px rgba(0,0,0,0.02);
                }
                #customers-testimonials .shadow-effect p {
                  font-family: inherit;
                  font-size: 17px;
                  line-height: 1.5;
                  margin: 0 0 17px 0;
                  font-weight: 300;
                }
                .testimonial-name {
                  margin: -17px auto 0;
                  display: table;
                  width: auto;
                  background: #3190E7;
                  padding: 9px 35px;
                  border-radius: 12px;
                  text-align: center;
                  color: #fff;
                  box-shadow: 0 9px 18px rgba(0,0,0,0.12), 0 5px 7px rgba(0,0,0,0.05);
                }
                #customers-testimonials .slide {
                  text-align: center;
                  padding: 50px;
                  margin-bottom:80px;
                  opacity: .2;
                  -webkit-transform: scale3d(0.8, 0.8, 1);
                  transform: scale3d(0.8, 0.8, 1);
                  -webkit-transition: all 0.3s ease-in-out;
                  -moz-transition: all 0.3s ease-in-out;
                  transition: all 0.3s ease-in-out;
                }
                #customers-testimonials .owl-slide.active.center .slide {
                  opacity: 1;
                  -webkit-transform: scale3d(1.0, 1.0, 1);
                  transform: scale3d(1.0, 1.0, 1);
                }
                .owl-carousel .owl-slide img {
                  transform-style: preserve-3d;
                  max-width: 90px;
                  margin: 0 auto 17px;
                }
                #customers-testimonials.owl-carousel .owl-dots .owl-dot.active span,
                #customers-testimonials.owl-carousel .owl-dots .owl-dot:hover span {
                  background: #3190E7;
                  transform: translate3d(0px, -50%, 0px) scale(0.7);
                }
                #customers-testimonials.owl-carousel .owl-dots{
                  display: inline-block;
                  width: 100%;
                  text-align: center;
                }
                #customers-testimonials.owl-carousel .owl-dots .owl-dot{
                  display: inline-block;
                }
                #customers-testimonials.owl-carousel .owl-dots .owl-dot span {
                  background: #3190E7;
                  display: inline-block;
                  height: 20px;
                  margin: 0 2px 5px;
                  transform: translate3d(0px, -50%, 0px) scale(0.3);
                  transform-origin: 50% 50% 0;
                  transition: all 250ms ease-out 0s;
                  width: 20px;
                }
              </style>
              <script type="text/javascript">
                AOS.init();
              </script>
              <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
              <script type="text/javascript" src="{{asset('frontend/public/js/main.js')}} "></script>
              <script type="text/javascript"></script>

              <script>
                jQuery(document).ready(function($) {
                  "use strict";
            //  TESTIMONIALS CAROUSEL HOOK
            $('#customers-testimonials').owlCarousel({
              loop: true,
              center: true,
              items: 3,
              margin: 0,
              autoplay: true,
              dots:true,
              autoplayTimeout: 8500,
              smartSpeed: 450,
              responsive: {
                0: {
                  items: 1
                },
                768: {
                  items: 2
                },
                1170: {
                  items: 3
                }
              }
            });
          });
        </script>

        <script>
          window.onscroll = function() {
            scrollFunction()
          };

          function scrollFunction() {
            if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
              document.getElementById("header").style.transition = "0.4s ease-out";
              document.getElementById("header").style.boxShadow = "0px 8px 16px 0px rgba(0,0,0,0.2)";
              document.getElementById("header").style.backgroundColor = "#211212";

            } else {
              document.getElementById("header").style.transition = "0.4s ease-out";
              document.getElementById("header").style.boxShadow = "none";
              document.getElementById("header").style.backgroundColor = "transparent";

            }
          }
        </script>