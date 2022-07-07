  <!-- Image Header and Breadcrumb -->
  <div id="content" class="site-content">
      <div class="page-header dtable text-center header-transparent" style="background-image: url('assets/images/varana/RUKO\ VARANA_220104_007.png');">
          <div class="dcell">
              <div class="container">
                  <h1 class="page-title">Kontak</h1>
                  <ul id="breadcrumbs" class="breadcrumbs none-style">
                      <li><a href="<?= base_url() ?>">Beranda</a></li>
                      <li class="active">Kontak</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <!-- End Image Header and Breadcrumb -->

  <section class="contact-page">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
                  <div class="contact-left">
                      <h2 style="color: #fff;">Berhubungan</h2>
                      <p class="font14" style="color: #e3e3e3 ;">Alamat email Anda tidak akan dipublikasikan. Bidang yang harus diisi ditandai *</p>
                      <form id="ajax-form" name="ajax-form" action="<?= base_url('contact/process') ?>" method="post" class="wpcf7">
                          <div class="main-form">
                              <p>
                                  <label for="name"> <span class="error" id="err-name">please enter name</span></label>
                                  <input type="text" name="name" value="" size="40" class="" aria-invalid="false" placeholder="Nama *" required>
                              </p>
                              <p>
                                  <label for="email">
                                      <span class="error" id="err-email">please enter e-mail</span>
                                      <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                                  </label>
                                  <input type="email" name="email" id="email" value="" size="40" class="" aria-invalid="false" placeholder="Email *" required>
                              </p>
                              <p>
                                  <label for="message"></label>
                                  <textarea name="message" id="message" cols="40" rows="10" class="" aria-invalid="false" placeholder="Pesan..." required></textarea>
                              </p>
                              <p><button type="submit" id="send" class="octf-btn octf-btn-light border-hover-light">Kirim Pesan</button></p>
                              <div class="clear"></div>
                              <div class="error" id="err-form">There was a problem validating the form please check!</div>
                              <div class="error" id="err-timedout">The connection to the server timed out!</div>
                              <div class="error" id="err-state"></div>
                          </div>
                      </form>

                      <div class="clear"></div>
                      <div id="ajaxsuccess">Successfully sent!!</div>
                      <div class="clear"></div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="contact-right">
                      <div class="ot-heading">
                          <span>[ detail kontak kami ]</span>
                          <h2 class="main-heading">Datang Sekarang!</h2>
                      </div>
                      <p>Hubungi kami atau mampir kapan saja, kami berusaha menjawab semua pertanyaan dalam waktu 24 jam pada hari kerja. Kami akan dengan senang hati menjawab pertanyaan Anda.</p>
                      <div class="contact-info">
                          <i class="ot-flaticon-place"></i>
                          <div class="info-text">
                              <h6>ALAMAT KAMI:</h6>
                              <p>Jl Raya Karanggan, Gunung Putri Kab. Bogor</p>
                          </div>
                      </div>
                      <div class="contact-info">
                          <i class="ot-flaticon-mail"></i>
                          <div class="info-text">
                              <h6>EMAIL KAMI:</h6>
                              <p><a href="mailto:theratio_interior@mail.com">info@jagorawigolfestates.com</a></p>
                          </div>
                      </div>
                      <div class="list-social">
                          <ul>
                              <li><a href="https://www.facebook.com/varanaofficial/" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="https://instagram.com/varanaofficial?utm_medium=copy_link" target="_self"><i class="fab fa-instagram"></i></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <div class="contact-map">
      <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31715.78064697719!2d106.86499403891436!3d-6.461654457608186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c0268e45b087%3A0x675fe36a0a11efb6!2sVarana%20Cluster!5e0!3m2!1sid!2sid!4v1654530141820!5m2!1sid!2sid" height="522" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
  </div>