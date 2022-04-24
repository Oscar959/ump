<?php include("header.php") ?>
  <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex align-items-center">
    <div class="container" style="margin-left:3rem;">
     
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3 style="text-align:center;font-family: 'Nunito', sans-serif;"> Qui sommes-nous ? </h3>
              <p>
							   
				Nous sommes une Organisation Médicale à but non lucratif créée depuis le 27 Avril 2018 dans la Ville Province de Kinshasa,
				 Capitale de la RDC par un groupe des Cadres Universitaires dont la majorité est du domaine médical sur initiative du Dr. Pierre NZALA BOOLU. 
				 Notre mission (objet) principale est celle de promouvoir l'Action Socio Médicale Humanitaire Intégrée Multidisciplinaire pour le
				  Développement Durable des Zones reculées et des Personnes vulnérables à travers le monde.
              </p>
              <div class="text-center">
                <a href="appropos.php" class="more-btn">En savoir plus <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx"></i>
                    <h4  style="text-align:center">Consultation</h4>
                    <p>Nous nous soucions sincerement des autres et de leur bien etre, voià pourquoi nous sommes disponibles  pour des consultations, écrivez-nous sur ce <a href="consult.php">lien</a> pour une consultation.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-eye"></i>
                    <h4  style="text-align:center; font-family: 'Nunito', sans-serif;">Ophtamologie</h4>
                    <p>Avez-vous des problèmes des yeux? avez-vous du mal a vous procurer des lunettes ou en changer? Nous sommes disponibles  pour des consultations, écrivez-nous sur ce <a href="consult.php">lien</a> pour une consultation.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx"></i>
                    <h4  style="text-align:center">Laboratoire</h4>
                    <p>Nous avons des bons matériaux qui vous permettront d'etre bien soigné, besoin d'une consultation écrivez-nous sur ce <a href="consult.php">lien</a> pour un rendez-vous avec nous. </p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
    
    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments" style="box-shadow: 0 5px 25px 0 rgba(214, 215, 216, 0.6); margin:1rem; border-radius:0.5rem;">
      <div class="container">

        <div class="section-title">
          <h2 style="text-align:center;font-family: 'Nunito', sans-serif;">Nos dernieres nouvelles des formations ou activités</h2>
          <p>L'UMP organise des formations et activités dans le but de remplir ses objectifs, Nous vous encourageons vivement a etre constamment à jour avec ses activités dans le but d'y participer.
		  Nous organisons des formations et activités dans les domaines ci-apres:</p>
        </div>
        <?php include("conn.php"); 
		 $query=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM training  ORDER BY id DESC LIMIT 1"));
		 $query["purpose"];
		 $query["def"];
		?>
        <div class="row gy-4" style="font-family: 'Nunito', sans-serif;">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cardiologie</a>
              </li>
              <li class="nav-item">
                <span class="nav-link" data-bs-toggle="tab" href="#">Neurologie</span>
              </li>
              <li class="nav-item">
                <span class="nav-link" data-bs-toggle="tab" href="#">Hepatologie</span>
              </li>
              <li class="nav-item">
                <span class="nav-link" data-bs-toggle="tab" href="#">Pediatrie</span>
              </li>
              <li class="nav-item">
                <span class="nav-link" data-bs-toggle="tab" href="">Ophtamologie</span>
              </li>
			  <li class="nav-item">
                <span class="nav-link" data-bs-toggle="tab" href="">Etude et élaboration du projet</span>
              </li>
            </ul>
          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3 style="font-family: 'Nunito', sans-serif;"><?php echo  $query["purpose"];?></h3>
                    <p class="fst-italic" style="font-family: 'Nunito', sans-serif;"><?php echo  $query["def"];?></p>
                    <p style="font-family: 'Nunito', sans-serif;"><?php echo  $query["text_train"];?></p>
					<p>Pour participer à la formation, veuillez cliquez ce <a href="formation.php">lien</a> pour remplir une demande.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <?php echo '<img src="uploads/'.
						           $query['photo'].'" class="img-fluid"; alt="image">'?> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2  style="text-align:center; font-family: 'Nunito', sans-serif;">Questions frequement posées</h2>
          <p>Ici sont réprises quelques questions fréquement posées et leur réponses. Et si vous avez d'autres questions nous concernant, n'hesitez pas à nous écrire.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1" style="font-family: 'Nunito', sans-serif;">C'est quoi l'objet de notre ONG? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                 Promouvoir l'Action socio médicale humanitaire intégrée multidisciplinaire pour le Développement Durable des Zones reculées et des personnes vulnérables à travers le monde. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed" style="font-family: 'Nunito', sans-serif;">Quels sont nos domaines d'intervention? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Santé et Nutrition, Recherche et Etude, Environnement et Développement Durable, Éducation, Genre Action sociale et protection.
				</p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed" style="font-family: 'Nunito', sans-serif;"> Avec quels moyens réalisons-nous toutes nos activités? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                   C'est grâce aux contributions de quelques membres actifs et de personnes de bonne volonté.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed" style="font-family: 'Nunito', sans-serif;">C'est depuis combien de temps l'UMP existe ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  C'est depuis le 27/04/2018.
                </p>
              </div>
            </li>
			
          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
          
       <div class="section-title">
        <h2  style="text-align:center; font-family: 'Nunito', sans-serif;">Quelques témoignages sur nous</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/img1.jpeg" class="testimonial-img" alt="">
                  <h3>Abel PALUKU</h3>
                  <h4>Ingenieur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    l'UMP a rendu énormément services dans notre société, surtout à l'endroit des plus vulnérables. J'ai été bénéficiaire des soins gratuits lorsque cette organisation a réalisé une campagne de consultation médicale gratuite avec distribution des médicaments chez nous à Mont Ngafula. Et dès lors j'ai pris option d'adhérer à cette ONGD.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/img2.jpeg" class="testimonial-img" alt="">
                  <h3>Dr. Dachris DAKUN</h3>
                  <h4>Médecin au CNPP/UNIKIN</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                     Je me suis personnellement rendu compte des nombreuses actions salvatrices que l'UMP ne cesse de faire au sein de notre Pays , plus spécialement dans la Ville de Kinshasa dans   les communes urbano rurales dans plusieurs domaines , plus particulièrement en matière de Santé, j'ai pris l'option d'y adhérer afin d'apporter ma modeste contribution dans la promotion de cette action socio médicale et humanitaire au développement de notre humanité.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/img3.jpeg" class="testimonial-img" alt="">
                  <h3>Mme Pélagie NZAOKAKO </h3>
                  <h4>Patiente</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    l'UMP m'a aidé à travers la campagne ophtalmologique qu'elle a organisée au Centre Médical Don Guanella à De bonhomme de me procurer une paire de lunette médicale presque  gratuitement. Une ONG des jeunes Médecins, Infirmiers et autres domaines au service de l'humanité.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/img4.jpeg" class="testimonial-img" alt="">
                  <h3>Mr. Alphonse BOOLU</h3>
                  <h4>Patient</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                     J'ai été bénéficiaire d'une consultation médicale gratuite et d'une paire de lunette médicale par l'équipe médicale UMP lors de la campagne Ophtalmologique initiée récemment par cette organisation. Nous encourageons ces jeunes qui ne cessent de se sacrifier dans des conditions purement limitées à la promotion de la Santé  humaine
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2 style="text-align:center" style="font-family: 'Nunito', sans-serif;">Gallery</h2>
          <p>Ici est réprise quelques photos des nos activités pour la population. Notre souci est d'aider la population vulnérables comme vous pouvez les remarquer sur ces photos.</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/img7.jpeg" class="galelry-lightbox">
                <img src="assets/img/gallery/img7.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->
	<?php include("footer.php");?>