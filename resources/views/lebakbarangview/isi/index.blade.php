@extends('lebakbarangview.master')

@section('content')
    <!-- Slider Start -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <span class="text-uppercase text-sm letter-spacing ">Selamat Datang Di</span>
                        <h1 class="mb-3 mt-3">DESA LEBAKBARANG</h1>
                        <p class="mb-4 pr-5">Kecamatan Lebakbarang, Kabupaten Pekalongan, Provinsi Jawa Tengah</p>
                        <div class="btn-container ">
                            <a class='btn btn-main-2 btn-icon btn-round-full' href='sejarah-desa.php'>Lihat Profil<i class="icofont-simple-right ml-2  "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section my-5">
        <div class="container">
            <div class="cta position-relative">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-doctor"></i>
                            <span class="h3">6</span>
                            <p>Dusun</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-flag"></i>
                            <span class="h3">703</span>
                            <p>KK</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-badge"></i>
                            <span class="h3">1155</span>
                            <p>Laki-Laki</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-globe"></i>
                            <span class="h3">1082</span>
                            <p>Perempuan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img">
                        <img src="/lebakbarangPublic/images/1.jpeg" alt="" class="img-fluid">
                        <img src="/lebakbarangPublic/images/2.jpeg" alt="" class="img-fluid mt-4">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img mt-4 mt-lg-0">
                        <img src="/lebakbarangPublic/images/3.jpeg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <h2 class="title-color">Acara Karnaval 2024</h2>
                        <p class="mt-4 mb-5">Kegiatan karnaval Desa Lebakbarang dalam rangka memeriahkan HUT Republik Indonesian ke-79 tahun 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
<section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Apa kata orang?</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ut perspiciatis unde libero, maxime autem dolor odit animi, eveniet neque aspernatur. Distinctio est voluptatibus ut nobis porro exercitationem totam aspernatur?</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 testimonial-wrap-2">
				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>
					<div class="testimonial-thumb">
						<img src="/lebakbarangPublic/images/testimonial/1.jpg" alt="" class="img-fluid">
					</div>
					<div class="client-info ">
						<h4>Wow Luarbiasa!</h4>
						<span>Junaris Alfianto</span>
						<p>
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi facere delectus voluptate cum tenetur cupiditate unde deleniti necessitatibus eaque esse,
						</p>
					</div>
				</div>
				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>
					<div class="testimonial-thumb">
						<img src="/lebakbarangPublic/images/testimonial/1.jpg" alt="" class="img-fluid">
					</div>
					<div class="client-info ">
						<h4>Wow Luarbiasa!</h4>
						<span>Junaris Alfianto</span>
						<p>
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi facere delectus voluptate cum tenetur cupiditate unde deleniti necessitatibus eaque esse,
						</p>
					</div>
				</div>
				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>
					<div class="testimonial-thumb">
						<img src="/lebakbarangPublic/images/testimonial/1.jpg" alt="" class="img-fluid">
					</div>
					<div class="client-info ">
						<h4>Wow Luarbiasa!</h4>
						<span>Junaris Alfianto</span>
						<p>
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi facere delectus voluptate cum tenetur cupiditate unde deleniti necessitatibus eaque esse,
						</p>
					</div>
				</div>
				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>
					<div class="testimonial-thumb">
						<img src="/lebakbarangPublic/images/testimonial/1.jpg" alt="" class="img-fluid">
					</div>
					<div class="client-info ">
						<h4>Wow Luarbiasa!</h4>
						<span>Junaris Alfianto</span>
						<p>
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi facere delectus voluptate cum tenetur cupiditate unde deleniti necessitatibus eaque esse,
						</p>
					</div>
				</div>
				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>
					<div class="testimonial-thumb">
						<img src="/lebakbarangPublic/images/testimonial/1.jpg" alt="" class="img-fluid">
					</div>
					<div class="client-info ">
						<h4>Wow Luarbiasa!</h4>
						<span>Junaris Alfianto</span>
						<p>
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi facere delectus voluptate cum tenetur cupiditate unde deleniti necessitatibus eaque esse,
						</p>
					</div>
				</div>
				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>
					<div class="testimonial-thumb">
						<img src="/lebakbarangPublic/images/testimonial/1.jpg" alt="" class="img-fluid">
					</div>
					<div class="client-info ">
						<h4>Wow Luarbiasa!</h4>
						<span>Junaris Alfianto</span>
						<p>
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi facere delectus voluptate cum tenetur cupiditate unde deleniti necessitatibus eaque esse,
						</p>
					</div>
				</div>
				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>
					<div class="testimonial-thumb">
						<img src="/lebakbarangPublic/images/testimonial/1.jpg" alt="" class="img-fluid">
					</div>
					<div class="client-info ">
						<h4>Wow Luarbiasa!</h4>
						<span>Junaris Alfianto</span>
						<p>
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi facere delectus voluptate cum tenetur cupiditate unde deleniti necessitatibus eaque esse,
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
@endsection
